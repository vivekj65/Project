<?php
session_start();
include '../../config/conn.php';

if (!isset($_SESSION['user_id'])) {
    die("Unauthorized");
}

$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];

if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === UPLOAD_ERR_OK) {
    $imageData = file_get_contents($_FILES['profile_photo']['tmp_name']);
    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, profile = ? WHERE id = ?");
    $stmt->bind_param("sssi", $name, $email, $imageData, $user_id);
} else {
    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $email, $user_id);
}

if ($stmt->execute()) {
    header("Location: profile.php");
} else {
    echo "Failed to update profile.";
}
