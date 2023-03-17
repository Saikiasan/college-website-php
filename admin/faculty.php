<?php include 'service/saikia/auth.php';?>
<!DOCTYPE html><html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<?php include 'modules/add_headers.php';?>
<title>Admin/ Faculty</title>

<style>
.profile-img {
width: 100px; 
height: 100px;
}
</style>
</head>

<body id="page-top">
<div id="wrapper">

<!-- SIDEBAR -->
<?php include 'modules/nav/nav_sidebar.php'; ?>
<div class="d-flex flex-column" id="content-wrapper">
<div id="content">
                
<!-- topbar -->
<?php include 'modules/nav/nav_topbar.php'; ?>
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Faculty</h3>
        <a href="service/add/add_faculty.php" class="btn btn-primary btn-sm d-sm-inline-block" role="button">
            <i class="fas fa-plus fa-1x text-light"></i>
            <i class="fas fa-user fa-1x text-light"></i>
            &nbsp;Add
        </a>
    </div>

    <div class="container">
        <div class="row justify-content-start">
            <?php 
                require "service/saikia/db_config.php"; 
                $sql = "SELECT * FROM faculty LEFT JOIN department ON faculty.faculty_department = department.d_id"; 
                $result = $conn->query ($sql); 
                if($result -> num_rows > 0){ 
                while($row = $result -> fetch_assoc()){
            ?>
            <div class="col-md-4 p-2" data-animate>

                <!-- CARD -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <!-- IMAGE -->
                            <div class="col">
                                <img src="<?php echo '../assets/faculty_img/'.$row['faculty_image']?>" class="border-dark border-2 border img-fluid p-1" width="100"/>
                            </div>

                            <!-- INFO -->
                            <div class="col-md">
                                <h5 class="card-title"><?php echo $row['faculty_name'] ?></h5>
                                <p class="card-text"><?php echo $row['faculty_phone']?></p>
                                <p class="card-text"><?php echo $row['faculty_email']?></p>
                                <p class="card-text"><?php echo $row['name']?></p>
                                <p class="card-text"><?php echo $row['faculty_qualification']?></p>
                            </div>
                        </div>

                        <div class="col">
                            <input type="hidden" class="edit_id_value" value="<?php echo $row['f_id'];?>">
                                <a class="btn btn-circle shadow-sm edit_btn" href="service/edit/edit_faculty_form.php?id=<?php echo $row['f_id']?>">
                                    <span class="fa fa-pen text-warning"></span>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            }
            else {
                echo "<style>.tableiod {display: none;}.tabliod-e{display:block !important;}</style>";
            }
            ?>
        </div>
    </div>

    <!-- TABLE FOR FACULTY -->
    <div class="tableiod row visually-hidden">
        <div class="col">
            <div class="pt-2">
                <!-- FACULTY TABLE START -> FACULTY DETAILS WILL BE AVAILABLE INSIDE THIS TABLE -->
                <div class="table table-responsive pt-2">
                    <table class="table table-hover text-dark">
                        <!-- Table heading -->
                        <thead class="text-black fw-bold text-uppercase fs-5">
                            <tr>
                                <th class="text-center">Image</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Department</th>
                                <th class="text-center">Qualification</th>
                                <th class="text-center table-warning">Edit</th>
                                <th class="text-center table-danger">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- PHP CODE MADE INTO A SINGLE LINE FOR EASY CODE WRITING | MAKE INTO MULTI LINE IF NEEDED -->
                            <?php require "service/saikia/db_config.php"; 
                            $sql = "SELECT * FROM faculty LEFT JOIN department ON faculty.faculty_department = department.d_id"; 
                            $result = $conn->query ($sql); 
                            if($result -> num_rows > 0){ 
                            while($row = $result -> fetch_assoc()){
                            ?>
                            <!-- Table row start -->
                            <tr>
                            <td class="text-center text-dark">
                                <img src="<?php echo '../assets/faculty_img/'.$row['faculty_image']?>" 
                                class="border-dark border-2 border img-fluid p-1" width="100"/>
                            </td>
                            <td class="text-center text-dark"><?php echo $row['faculty_name'] ?></td>
                            <td class="text-center text-dark"><?php echo $row['faculty_phone']?></td>
                            <td class="text-center text-dark"><?php echo $row['faculty_email']?></td>
                            <td class="text-center text-dark"><?php echo $row['name']?></td>
                            <td class="text-center text-dark"><?php echo $row['faculty_qualification']?></td>
                            
                            <!-- Faculty Edit Button -->
                            <td class="text-center table-warning">
                                <input type="hidden" class="edit_id_value" value="<?php echo $row['f_id'];?>">
                                <a class="btn btn-circle shadow-sm edit_btn" href="service/edit/edit_faculty_form.php?id=<?php echo $row['f_id']?>">
                                    <span class="fa fa-pen text-warning"></span>
                                </a>
                            </td>
                                
                            <!-- Faculty Delete button -->
                            <td class="text-center table-danger">
                                <input type="hidden" class="delete_id_value" value="<?php echo $row['f_id'];?>">
                                <button class="delete_btn btn btn-circle shadow-sm">
                                    <span class="fa fa-trash text-danger"></span>
                                </button>
                            </td>
                            </tr>
                            <!-- Table row end -->
                        <?php
                            }
                        }
                        else {
                            echo "<style>.tableiod {display: none;}.tabliod-e{display:block !important;}</style>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Faculty table end -->
        </div>
    </div>
</div>
                    

                <div class="tabliod-e" style="display:none">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-5">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h3 class="text-center text-dark text-capitalize fw-bolder">no records found</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

            <?php include 'modules/footer.php';?>


        </div>
        
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

    </div>
    
    <?php include 'modules/add_scripts.php'; ?>

    <script>
        document.querySelector('.nav-faculty').classList.add('active')
    </script>

    <?php include_once '../main_data/security/disable_clicks.php'; ?>

<!-- delete script -->
<script>
    $(document).ready(function () {
        $('.delete_btn').click(function (e) {
            // prevent default click
            e.preventDefault();
            var deleteid = $(this).closest("tr").find('.delete_id_value').val();

            // sweetalert2
            Swal.fire({
                title: "Do you want to delete this data?",
                showClass: {
                    popup: "animated zoomIn",
                    backdrop: 'swal2-backdrop-show',
                },
                hideClass: {
                    popup: "animated zoomOut",
                    backdrop: 'swal2-backdrop-hide',
                },
                showCancelButton: true,
                reverseButtons: true,
                timer: 5000,
                buttonsStyling: false,
                customClass: {
                    confirmButton: "btn btn-danger rounded-pill mx-2 ",
                    cancelButton: "btn btn-success rounded-pill mx-2",
                },
            }).then((isConfirmed) => {
                // if user clicks yes
                if (isConfirmed.value === true) {
                    console.log(deleteid)
                    Swal.fire({
                            title: "Deleting...",
                            position: 'top',
                            toast: true,
                            showConfirmButton: false,
                            showClass: {
                                popup: 'animated fadeInDown'
                            },
                            hideClass: {
                                popup: 'animated fadeOutUp'
                            },
                            timer: 1000
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    type: "POST",
                                    url: "service/delete/delete_faculty_data.php",
                                    data: {
                                        "delete_btn_set": true,
                                        "delete_id": deleteid,
                                    },
                                    success: function (response) {
                                        Swal.fire({
                                            icon: "success",
                                            title: "Deleted successfully!",
                                            showConfirmButton: false,
                                            timer: 1300,
                                            showClass: {
                                                popup: 'animated zoomIn'
                                            },
                                            hideClass: {
                                                popup: 'animated fadeOut'
                                            }
                                        }).then((result) => {
                                            //set setInterval same as timer
                                            location.reload();
                                        })
                                    }
                                });
                            }
                        });
                } else {
                    // if user clicks no
                    Swal.fire({
                        title: "Delete cancelled",
                        icon: "info",
                        showConfirmButton: false,
                        timer: 1200,
                        position: "top",
                        toast: true,
                        showClass: {
                            popup: 'animated fadeInDown'
                        },
                        hideClass: {
                            popup: 'animated fadeOutUp'
                        }
                    })
                }
            })
        })
    });
</script>
</body>

</html>