<?php
session_start();
include '../config/conn.php';

if (!isset($_SESSION['user_id']) || !isset($_SESSION['c_id'])) {
    header("Location: domain.php");
    exit();
}

echo $_SESSION['user_id'] ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include "components/head.php";
  ?>
</head>
<body class="g-sidenav-show  bg-gray-100">

  <?php
    include "components/sidebar.php";
  ?>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    
   <?php
      include "components/navbar.php";
   ?>
    <div class="container-fluid py-2">
    

      <?php
        include "components/footer.php";
      ?>
    </div>
  </main>
<?php
?>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>