<?php include 'service/saikia/auth.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin/Course</title>
    <?php include 'modules/add_headers.php';?>

</head>

<body id="page-top">
    <div id="wrapper">
        <!-- sidebar -->
        <?php include 'modules/nav/nav_sidebar.php'; ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!-- topbar -->
                <?php include 'modules/nav/nav_topbar.php'; ?>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Courses</h3>
                        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="service/add_course.php">
                            <i class="fas fa-plus fa-sm text-white"></i>
                            <i class="fas fa-book fa-sm text-white"></i>
                            &nbsp;Add new course
                        </a>
                    </div>
                    
                    <div class="">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="table table-responsive">
                                <table class="table table-hover p-1 text-dark">
                                    <thead class="text-black fw-bold text-uppercase">
                                        <tr>
                                            <th class="text-center">Course ID</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Duration</th>
                                            <th class="text-center">Fees</th>
                                            <th class="text-center table-warning">Edit</th>
                                            <th class="text-center table-danger">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include "service/saikia/db_config.php";
    
                                    $sql = "SELECT * FROM courses";
                                    $result = $conn->query ($sql);
    
                                    if($result -> num_rows > 0){
                                        while($row = $result -> fetch_assoc()){
                                        ?>
                                            <tr>
                                            <td class="text-center text-dark"><?php echo $row['c_id'] ?></td>
                                            <td class="text-center text-dark text-capitalize"><?php echo $row['name'] ?></td>
                                            <td class="text-center text-dark"><?php echo $row['description'] ?></td>
                                            <td class="text-center text-dark"><?php echo $row['duration']?></td>
                                            <td class="text-center text-dark"><?php echo $row['fees']?></td>
                                      
                                            <td class="text-center table-warning">
                                                <a href="service/edit_course_data.php?id=<?php echo $row['id']; ?>" class="text-decoration-none btn btn-circle shadow-sm">
                                                    <span class="fa fa-pen text-warning"></span>
                                                </a>
                                            </td>
                                            
                                            <td class="text-center table-danger">
                                                <input type="hidden" class="delete_id_value" value="<?php echo $row['id']; ?>">
                                                <a href='javascript:void(0)' class="delete_btn text-decoration-none btn btn-circle shadow-sm">
                                                    <span class="fa fa-trash text-danger"></span>
                                                </a>
                                            </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    else {
                                        echo "<div class='text-warning text-uppercase text-center fw-bold p-0 m-0 mb-2'>No course data found</div>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <?php include 'modules/footer.php';?>


        </div>
        
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>

    </div>
    
    <?php include 'modules/add_scripts.php'; ?>


    <script>
        document.querySelector('.nav-course').classList.add('active')
    </script>

<script>
	$(document).ready(function(){
        $('.delete_btn').click(function(e){
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
            }).then((isConfirmed)=>{
                // if user clicks yes
                if(isConfirmed.value === true){
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
		                    	url: "service/delete_course_data.php",
		                    	data: {
		                    		"delete_btn_set": 1,
		                    		"delete_id": deleteid,
		                    	},
		                    	success: function(response){
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
				                    }).then((result)=>{
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
                        toast:true,
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

    <?php include_once '../main_data/security/disable_clicks.php'; ?>

</body>

</html>