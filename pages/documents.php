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

table#logTable th, table#logTable td {
    border: 1px solid #ddd;
    padding: 8px; 
    text-align: center;
}

table#logTable th {
    background-color: #f4f4f4; 
    font-weight: bold; 
} 

#searchForm .form-control, 
#searchForm .form-select {
    border: 1px solid #ddd; 
    border-radius: 4px; 
    padding: 8px;
    box-shadow: none;
}

#searchForm .form-control:focus, 
#searchForm .form-select:focus {
    border-color: #007bff; 
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
}
    #addDocumentForm .form-control,
    #addDocumentForm .form-select {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 8px;
        box-shadow: none;
    }

    #addDocumentForm .form-control:focus,
    #addDocumentForm .form-select:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
    </style>
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
            <div class="row mb-4">
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h4>Documents</h4>
                    <p class="text-muted mb-0">Manage your document</p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end align-items-center mt-3 mt-md-0">
                    <button class="btn btn-primary fw-bold m-1" data-bs-toggle="modal"
                        data-bs-target="#addDocumentModal">
                        <i class="fas fa-plus me-2"></i> Add Document
                    </button>
                </div>
            </div>

            <!-- Search Documents Section -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Search Documents</h5>
                    <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#searchFormCollapse" aria-expanded="false" aria-controls="searchFormCollapse">
                        Toggle Search
                    </button>
                </div>
                <div id="searchFormCollapse" class="collapse">
                    <div class="card-body">
                        <form id="searchForm" class="row g-3">
                            <!-- Search Text -->
                            <div class="col-md-4">
                                <label for="searchText" class="form-label">Search Text</label>
                                <input type="text" id="searchText" class="form-control" placeholder="Enter keywords...">
                            </div>

                            <!-- File Type -->
                            <div class="col-md-4">
                                <label for="fileType" class="form-label">File Type</label>
                                <select id="fileType" class="form-select">
                                    <option value="" selected>All Types</option>
                                    <option value="pdf">PDF</option>
                                    <option value="docx">Word</option>
                                    <option value="xlsx">Excel</option>
                                    <option value="txt">Text</option>
                                </select>
                            </div>

                            <!-- Folder -->
                            <div class="col-md-4">
                                <label for="folder" class="form-label">Folder</label>
                                <select id="folder" class="form-select">
                                    <option value="" selected>All Folders</option>
                                    <option value="folderA">Folder A</option>
                                    <option value="folderB">Folder B</option>
                                </select>
                            </div>

                            <!-- Date Range -->
                            <div class="col-md-4">
                                <label for="dateRange" class="form-label">Date Range</label>
                                <input type="date" id="startDate" class="form-control mb-2" placeholder="Start Date">
                                <input type="date" id="endDate" class="form-control" placeholder="End Date">
                            </div>

                            <!-- Uploaded By -->
                            <div class="col-md-4">
                                <label for="uploadedBy" class="form-label">Uploaded By</label>
                                <input type="text" id="uploadedBy" class="form-control" placeholder="Enter uploader name...">
                            </div>

                            <!-- Tags -->
                            <div class="col-md-4">
                                <label for="tags" class="form-label">Tags</label>
                                <select id="tags" class="form-select" multiple>
                                    <option value="tag1">Tag 1</option>
                                    <option value="tag2">Tag 2</option>
                                    <option value="tag3">Tag 3</option>
                                </select>
                            </div>

                            <!-- Search Button -->
                            <div class="col-12">
                                <button type="button" class="btn btn-primary" onclick="searchDocuments()">Search</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table id="logTable" class="table align-items-center mb-0 display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                    Title</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-15 ps-2">
                                    Tags</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                    Folder</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                    Type</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                    Size</th>

                                    <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                    version</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">
                                    Uploaded By</th>
                                <!-- <th class="text-secondary opacity-7">Size</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-center px-2 py-1">
                                        Demo
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">#document</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary">Resumnes</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">Excel</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">1.5 Mb</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">1</span>
                                </td>
                                <td class="d-flex justify-content-center align-items-center px-2">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/img/team-2.jpg"
                                            class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm text-center">Vivek Jadhav</h6>
                                            <p class="text-xs text-secondary mb-0 text-center">vivekjadhav@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Add Document Modal -->
            <div class="modal fade" id="addDocumentModal" tabindex="-1" aria-labelledby="addDocumentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addDocumentModalLabel">Add Document</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="addDocumentForm">
                                <!-- Title -->
                                <div class="mb-3">
                                    <label for="documentTitle" class="form-label">Title</label>
                                    <input type="text" id="documentTitle" class="form-control" placeholder="Enter document title" required>
                                </div>

                              

                                <!-- Folder -->
                                <div class="mb-3">
                                    <label for="documentFolder" class="form-label">Folder</label>
                                    <select id="documentFolder" class="form-select" required>
                                        <option value="" selected>Select Folder</option>
                                        <option value="folderA">Folder A</option>
                                        <option value="folderB">Folder B</option>
                                    </select>
                                </div>

                                <!-- Tags -->
                                <div class="mb-3">
                                    <label for="tagInput" class="form-label">Tags</label>
                                    <div class="d-flex">
                                        <input type="text" id="tagInput" style="height: 38px;" class="form-control w-85 me-2" placeholder="Enter a tag">
                                        <button type="button" class="btn btn-primary" onclick="addTag()">Add Tag</button>
                                    </div>
                                    <div id="tagBadges" class="m-1"></div>
                                </div>

                                <!-- File Upload -->
                                <div class="mb-3">
                                    <label for="documentFile" class="form-label">Document File</label>
                                    <input type="file" id="documentFile" class="form-control" required>
                                </div>

                                <!-- Submit Button -->
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Add new tag functionality
                function addNewTag() {
                    const newTag = prompt("Enter new tag:");
                    if (newTag) {
                        const tagSelect = document.getElementById("documentTags");
                        const newOption = document.createElement("option");
                        newOption.value = newTag.toLowerCase().replace(/\s+/g, '-');
                        newOption.textContent = newTag;
                        newOption.selected = true;
                        tagSelect.appendChild(newOption);
                    }
                }

                // Handle form submission
                document.getElementById("addDocumentForm").addEventListener("submit", function (e) {
                    e.preventDefault();
                    alert("Document uploaded successfully!");
                    // Add your form submission logic here
                });
            </script>

            <script>
                $(document).ready(function () {
                    // Initialize Select2 for searchable dropdown
                    $('#documentTags').select2({
                        placeholder: "Search or select tags",
                        allowClear: true,
                    });

                    // Handle tag selection and display as badges
                    $('#documentTags').on('change', function () {
                        const selectedTags = $(this).val();
                        const badgeContainer = $('#selectedTags');
                        badgeContainer.empty(); // Clear existing badges

                        if (selectedTags) {
                            selectedTags.forEach(tag => {
                                const badge = `<span class="badge bg-primary me-2">${tag} 
                                    <i class="fas fa-times text-white ms-1" style="cursor: pointer;" onclick="removeTag('${tag}')"></i>
                                </span>`;
                                badgeContainer.append(badge);
                            });
                        }
                    });
                });

                // Remove tag from Select2 and badge
                function removeTag(tag) {
                    const tagsSelect = $('#documentTags');
                    const selectedTags = tagsSelect.val();
                    const updatedTags = selectedTags.filter(t => t !== tag);
                    tagsSelect.val(updatedTags).trigger('change');
                }
            </script>

            <script>
                // Function to add a tag
                function addTag() {
                    const tagInput = document.getElementById("tagInput");
                    const tagValue = tagInput.value.trim();
                    const tagBadges = document.getElementById("tagBadges");

                    if (tagValue) {
                        // Check if the tag already exists
                        const existingTags = Array.from(tagBadges.children).map(badge => badge.dataset.tag);
                        if (!existingTags.includes(tagValue)) {
                            // Create a badge for the new tag
                            const badge = document.createElement("span");
                            badge.className = "badge bg-primary me-2";
                            badge.dataset.tag = tagValue;
                            badge.innerHTML = `${tagValue} <i class="fas fa-times ms-1" style="cursor: pointer;" onclick="removeTag(this)"></i>`;
                            tagBadges.appendChild(badge);

                            // Clear the input field
                            tagInput.value = "";
                        } else {
                            alert("Tag already exists!");
                        }
                    }
                }

                // Function to remove a tag
                function removeTag(element) {
                    element.parentElement.remove();
                }

                // Add event listener for "Enter" key
                document.getElementById("tagInput").addEventListener("keypress", function (e) {
                    if (e.key === "Enter") {
                        e.preventDefault(); // Prevent form submission
                        addTag(); // Call the addTag function
                    }
                });
            </script>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- Initialize DataTable -->
    <script>
$(document).ready(function() {
    $('#logTable').DataTable({
        dom: 'Bfrtip',
        buttons: [], 
        responsive: true
        info: false, 
        paging: false 
    });
});
</script>
</body>

</html>