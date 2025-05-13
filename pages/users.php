<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "components/head.php";
    ?>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

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

            <!-- Header -->
            <div class="row mb-4">
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h4>Users</h4>
                    <p class="text-muted mb-0">Manage application users</p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end align-items-center mt-3 mt-md-0">
                    <button class="btn btn-warning fw-bold" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <i class="fas fa-plus"></i> Add User
                    </button>
                </div>
            </div>

            <!-- Add User Modal -->
            <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="userForm">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" class="form-control" placeholder="Full Name" required />
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="email" class="form-control" placeholder="Email" required />
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <select class="form-control" required>
                                        <option value="">Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="superadmin">Superadmin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="password" class="form-control" placeholder="Password" required />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-warning">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card my-4 p-1">

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table id="logTable" class="table align-items-center mb-0 display nowrap"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Name</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Role</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Last Login</th>
                                            <th class="text-secondary opacity-7">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/team-2.jpg"
                                                            class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Baburao Apate</h6>
                                                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Superadmin</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;"
                                                    class="text-secondary font-weight-bold text-xs mx-1"
                                                    data-toggle="tooltip" title="Edit User">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="javascript:;"
                                                    class="text-secondary font-weight-bold text-xs mx-1"
                                                    data-toggle="tooltip" title="Deactivate User">
                                                    <i class="fas fa-user-slash"></i>
                                                </a>
                                                <a href="javascript:;"
                                                    class="text-secondary font-weight-bold text-xs mx-1"
                                                    data-toggle="tooltip" title="Delete User">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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

    <!-- jQuery & DataTables Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <!-- Initialize DataTable -->
    <script>
    $(document).ready(function() {
        $('#logTable').DataTable({
            dom: 'Bfrtip',
            buttons: ['csv', 'excel', 'print'],
            pageLength: 10,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            language: {
                lengthMenu: "Show _MENU_ rows per page"
            },
            responsive: true
        });

    });
    </script>
</body>

</html>