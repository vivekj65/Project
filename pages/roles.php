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
    <title>Roles Management</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <style>
    table#logTable {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
    }

    table#logTable th,
    table#logTable td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    table#logTable th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    #addRoleModal .form-control {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 8px;
        box-shadow: none;
    }

    #addRoleModal .form-control:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">

    <?php
    include "components/sidebar.php";
  ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <?php
      include "components/navbar.php";
    ?>
        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Roles</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRoleModal">Add
                                Role</button>
                        </div>
                        <div class="card-body">
                            <table id="logTable" class="table align-items-center mb-0 display nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                            Role Name</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-15 ps-2">
                                            Description</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                            Users</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                            Created </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                            Updated</th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                            Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div
                                                class="d-flex justify-content-center px-2 py-1 text-xs font-weight-bold mb-0">
                                                Superadmin
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Super Administrator with full
                                                system access</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary font-weight-bold">1</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"> Mar 30, 2025 </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"> Mar 30, 2025</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#addRoleModal">
                                                Edit
                                                <!-- <i class="fas fa-edit"></i> -->
                                            </button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Role Modal -->
        <div class="modal fade" id="addRoleModal" tabindex="-1" aria-labelledby="addRoleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addRoleModalLabel">Add New Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addRoleForm">
                            <!-- Role Name -->
                            <div class="mb-3">
                                <label for="roleName" class="form-label">Role Name</label>
                                <input type="text" id="roleName" class="form-control" placeholder="Enter role name"
                                    required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="roleDescription" class="form-label">Description</label>
                                <textarea id="roleDescription" class="form-control" rows="3"
                                    placeholder="Enter role description" required></textarea>
                            </div>

                            <!-- Permissions -->
                            <label class="form-label">Permissions</label>

                            <div class="mb-3" style="display: flex; flex-wrap: wrap;">
                                <div class="form-check" style="  flex: 0 0 48%;">
                                    <input class="form-check-input" type="checkbox" id="uploadDocuments"
                                        value="uploadDocuments">
                                    <label class="form-check-label" for="uploadDocuments">Upload Documents</label>
                                </div>
                                <div class="form-check" style="  flex: 0 0 48%;">
                                    <input class="form-check-input" type="checkbox" id="downloadDocuments"
                                        value="downloadDocuments">
                                    <label class="form-check-label" for="downloadDocuments">Download Documents</label>
                                </div>
                                <div class="form-check" style="  flex: 0 0 48%;">
                                    <input class="form-check-input" type="checkbox" id="commentDocuments"
                                        value="commentDocuments">
                                    <label class="form-check-label" for="commentDocuments">Comment on Documents</label>
                                </div>
                                <div class="form-check" style="  flex: 0 0 48%;">
                                    <input class="form-check-input" type="checkbox" id="shareDocuments"
                                        value="shareDocuments">
                                    <label class="form-check-label" for="shareDocuments">Share Documents</label>
                                </div>
                                <div class="form-check" style="  flex: 0 0 48%;">
                                    <input class="form-check-input" type="checkbox" id="manageDocuments"
                                        value="manageDocuments">
                                    <label class="form-check-label" for="manageDocuments">Manage Documents</label>
                                </div>
                                <div class="form-check" style="  flex: 0 0 48%;">
                                    <input class="form-check-input" type="checkbox" id="manageFolders"
                                        value="manageFolders">
                                    <label class="form-check-label" for="manageFolders">Manage Folders</label>
                                </div>
                                <div class="form-check" style="  flex: 0 0 48%;">
                                    <input class="form-check-input" type="checkbox" id="manageTags" value="manageTags">
                                    <label class="form-check-label" for="manageTags">Manage Tags</label>
                                </div>
                                <div class="form-check" style="  flex: 0 0 48%;">
                                    <input class="form-check-input" type="checkbox" id="deleteDocuments"
                                        value="deleteDocuments">
                                    <label class="form-check-label" for="deleteDocuments">Delete Documents</label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Add Role</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
      include "components/footer.php";
    ?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
<script>
// Make sure c_id is passed from PHP session to JavaScript
const c_id = <?php echo json_encode($_SESSION['c_id'] ?? null); ?>;

document.getElementById("addRoleForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const roleName = document.getElementById("roleName").value.trim();
    const roleDescription = document.getElementById("roleDescription").value.trim();
    const checkboxes = document.querySelectorAll("#addRoleForm input[type='checkbox']:checked");
    const permissions = Array.from(checkboxes).map(cb => cb.value);

    fetch("../backend/api/add_role.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            c_id: c_id,
            name: roleName,
            description: roleDescription,
            permissions: permissions
        })
    })
    .then(async res => {
        const text = await res.text();
        console.log("Response Text:", text);

        let data;
        try {
            data = JSON.parse(text);
        } catch (err) {
            throw new Error("Invalid JSON: " + text);
        }

        if (data.success) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Role added successfully',
                showConfirmButton: false,
                timer: 2000
            });
            document.getElementById("addRoleForm").reset();
        } else {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: data.message || 'Failed to add role',
                showConfirmButton: false,
                timer: 2000
            });
        }
    })
    .catch(error => {
        console.error("Error caught:", error);
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'An error occurred',
            showConfirmButton: false,
            timer: 2000
        });
    });
});


</script>



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

    document.getElementById('addRoleForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const roleName = document.getElementById('roleName').value;
        const roleDescription = document.getElementById('roleDescription').value;
        const permissions = Array.from(document.querySelectorAll('#addRoleForm .form-check-input:checked')).map(
            input => input.id);

        alert(`Role "${roleName}" added with permissions: ${permissions.join(', ')}`);

        document.getElementById('addRoleForm').reset();
        const addRoleModal = bootstrap.Modal.getInstance(document.getElementById('addRoleModal'));
        addRoleModal.hide();
    });
    </script>
</body>

</html>