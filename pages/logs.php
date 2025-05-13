<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "components/head.php"; ?>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
  </head>
  <body class="g-sidenav-show bg-gray-100">
    <?php include "components/sidebar.php"; ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <?php include "components/navbar.php"; ?>

      <div class="container-fluid py-2">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-3">
                  <table id="logTable" class="table align-items-center mb-0 display nowrap" style="width:100%">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">Date</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">User</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">Action</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-15 ps-2">Description</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">IP</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"></h6>
                              <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">John Michael</h6>
                              <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Login</span>
                        </td>
                        <td>
                          <p class="text-xs text-secondary mb-0">User Login</p>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">::1</span>
                        </td>
                      </tr>
                      <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Vivek Jadhav</h6>
            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-secondary">Logout</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Programator</p> -->
        <p class="text-xs text-secondary mb-0">User Logout</p>
      </td>
     
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Mandar Jadhav</h6>
            <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-success">Login</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Executive</p> -->
        <p class="text-xs text-secondary mb-0">User Login</p>
      </td>
      
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user4">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Baburao Apate</h6>
            <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
          </div>
        </div>
      </td>
      
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-success">Login</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Programator</p> -->
        <p class="text-xs text-secondary mb-0">User Login</p>
      </td>
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Shyam</h6>
            <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-secondary">Logout</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
        <p class="text-xs text-secondary mb-0">User Logout</p>
      </td>
    
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Raju Patil</h6>
            <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-secondary">Logout</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Programator</p> -->
        <p class="text-xs text-secondary mb-0">User Logout</p>
      </td>
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Vivek Jadhav</h6>
            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-secondary">Logout</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Programator</p> -->
        <p class="text-xs text-secondary mb-0">User Logout</p>
      </td>
     
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Mandar Jadhav</h6>
            <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-success">Login</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Executive</p> -->
        <p class="text-xs text-secondary mb-0">User Login</p>
      </td>
      
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user4">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Baburao Apate</h6>
            <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
          </div>
        </div>
      </td>
      
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-success">Login</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Programator</p> -->
        <p class="text-xs text-secondary mb-0">User Login</p>
      </td>
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Shyam</h6>
            <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-secondary">Logout</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
        <p class="text-xs text-secondary mb-0">User Logout</p>
      </td>
    
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Raju Patil</h6>
            <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-secondary">Logout</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Programator</p> -->
        <p class="text-xs text-secondary mb-0">User Logout</p>
      </td>
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Vivek Jadhav</h6>
            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-secondary">Logout</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Programator</p> -->
        <p class="text-xs text-secondary mb-0">User Logout</p>
      </td>
     
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Mandar Jadhav</h6>
            <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-success">Login</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Executive</p> -->
        <p class="text-xs text-secondary mb-0">User Login</p>
      </td>
      
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user4">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Baburao Apate</h6>
            <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
          </div>
        </div>
      </td>
      
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-success">Login</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Programator</p> -->
        <p class="text-xs text-secondary mb-0">User Login</p>
      </td>
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Shyam</h6>
            <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-secondary">Logout</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
        <p class="text-xs text-secondary mb-0">User Logout</p>
      </td>
    
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
    <tr>
    <td>
        <div class="d-flex py-1">
        <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"></h6>
            <p class="text-xs text-secondary mb-0">Apr 19, 2025 00:25:34</p>

          </div>
        </div>
      </td>
      <td>
        <div class="d-flex px-2 py-1">
          <div>
            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm">Raju Patil</h6>
            <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
          </div>
        </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-secondary">Logout</span>
      </td>
      <td>
        <!-- <p class="text-xs font-weight-bold mb-0">Programator</p> -->
        <p class="text-xs text-secondary mb-0">User Logout</p>
      </td>
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">::1</span>
      </td>
       
    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php include "components/footer.php"; ?>
      </div>
    </main>

    <!-- Core JS Files -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>

    <!-- jQuery & DataTables Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <!-- Initialize DataTable -->
    <script>
      $(document).ready(function () {
        $('#logTable').DataTable({
  dom: 'Bfrtip',
  buttons: ['csv', 'excel', 'print'],
  pageLength: 10,
  lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
  language: {
    lengthMenu: "Show _MENU_ rows per page"
  },
  responsive: true
});

      });
    </script>
  </body>
</html>
