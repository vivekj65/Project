<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['c_id'])) {
    header("Location: signin.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$c_id = $_SESSION['c_id'];
$CompanyName = "Company";

// Fetch company name from DB
$conn = new mysqli("localhost", "root", "", "fdms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("SELECT c_name FROM company WHERE c_id = ?");
$stmt->bind_param("i", $c_id);
$stmt->execute();
$stmt->bind_result($CompanyName);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" id="iconSidenav"></i>
    <a class="navbar-brand px-4 py-3 m-0" href="#">
      <span class="ms-1 text-sm text-dark"><?= htmlspecialchars($CompanyName) ?></span>
    </a>
  </div>
  <hr class="horizontal dark mt-0 mb-2">
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active bg-gradient-info text-white' : 'text-dark'; ?>" href="./dashboard.php">
          <i class="material-symbols-rounded opacity-5">dashboard</i>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'documents.php' ? 'active bg-gradient-info text-white' : 'text-dark'; ?>" href="./documents.php">
          <i class="material-symbols-rounded opacity-5">table_view</i>
          <span class="nav-link-text ms-1">Documents</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'folders.php' ? 'active bg-gradient-info text-white' : 'text-dark'; ?>" href="./folders.php">
          <i class="material-symbols-rounded opacity-5">receipt_long</i>
          <span class="nav-link-text ms-1">Folders</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'shared.php' ? 'active bg-gradient-info text-white' : 'text-dark'; ?>" href="./shared.php">
          <i class="material-symbols-rounded opacity-5">receipt_long</i>
          <span class="nav-link-text ms-1">Shared With Me</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'chat.php' ? 'active bg-gradient-info text-white' : 'text-dark'; ?>" href="./chat.php">
          <i class="material-symbols-rounded opacity-5">receipt_long</i>
          <span class="nav-link-text ms-1">My chats</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'users.php' ? 'active bg-gradient-info text-white' : 'text-dark'; ?>" href="./users.php">
          <i class="material-symbols-rounded opacity-5">view_in_ar</i>
          <span class="nav-link-text ms-1">Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'roles.php' ? 'active bg-gradient-info text-white' : 'text-dark'; ?>" href="./roles.php">
          <i class="material-symbols-rounded opacity-5">format_textdirection_r_to_l</i>
          <span class="nav-link-text ms-1">Roles</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'logs.php' ? 'active bg-gradient-info text-white' : 'text-dark'; ?>" href="./logs.php">
          <i class="material-symbols-rounded opacity-5">notifications</i>
          <span class="nav-link-text ms-1">Audit Logs</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'system.php' ? 'active bg-gradient-info text-white' : 'text-dark'; ?>" href="./system.php">
          <i class="material-symbols-rounded opacity-5">settings</i>
          <span class="nav-link-text ms-1">System Settings</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
