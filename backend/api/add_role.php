<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

$input = json_decode(file_get_contents("php://input"), true);

if (
    !isset($input['c_id']) ||
    !isset($input['name']) ||
    !isset($input['permissions'])
) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

$c_id = $input['c_id'];
$name = strtolower($input['name']); // Convert the role name to lowercase
$description = $input['description'] ?? ''; // Optional description
$permissions = json_encode($input['permissions']);

include '../../config/conn.php';

// Step 1: Check if the role already exists for the given company (c_id)
$stmt = $conn->prepare("SELECT COUNT(*) FROM roles WHERE c_id = ? AND LOWER(name) = ?");
$stmt->bind_param("is", $c_id, $name);
$stmt->execute();
$stmt->bind_result($role_exists);
$stmt->fetch();
$stmt->close();

if ($role_exists > 0) {
    echo json_encode(['success' => false, 'message' => 'Role already exists for this company']);
    exit;
}

// Step 2: Get the next `id` for the company (c_id)
$stmt = $conn->prepare("SELECT COALESCE(MAX(id), 0) + 1 AS next_id FROM roles WHERE c_id = ?");
$stmt->bind_param("i", $c_id);
$stmt->execute();
$stmt->bind_result($next_id);
$stmt->fetch();
$stmt->close();

// Step 3: Insert the new role with the calculated `next_id`
$stmt = $conn->prepare("INSERT INTO roles (id, c_id, name, description, permissions, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
$stmt->bind_param("iisss", $next_id, $c_id, $name, $description, $permissions);

if ($stmt->execute()) {
    $role_id = $next_id;

    // Step 4: Prepare data for activity logs
    $user_id = $_SESSION['user_id'] ?? null;
    $action = "create";
    $entity_type = "role";
    $entity_id = $role_id;
    $log_description = "Created role: $name";
    $ip_addr = $_SERVER['REMOTE_ADDR'];

    // Step 5: Log the activity
    $log_stmt = $conn->prepare("INSERT INTO activity_logs (user_id, c_id, action, entity_type, entity_id, description, ip_addr, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
    $log_stmt->bind_param("iississ", $user_id, $c_id, $action, $entity_type, $entity_id, $log_description, $ip_addr);
    $log_stmt->execute();
    $log_stmt->close();

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'DB Error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
