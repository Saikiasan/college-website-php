<?php include 'service/saikia/auth.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin/Department</title>
    <?php include 'modules/add_headers.php';?>

</head>

<body id="page-top">
    <div id="wrapper">
        <!-- sidebar -->
        <?php include 'modules/nav/nav_sidebar.php';?>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!-- topbar -->
                <?php include 'modules/nav/nav_topbar.php';?>

                <div class="container-fluid">

                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Departments</h3>
                        <div class="col-md-auto">
                            <button class="btn btn-success btn-sm d-sm-inline-block" role="button" data-bs-toggle="modal" data-bs-target="#add_department_modal">
                                <i class="fas fa-box text-white"></i>
                                &nbsp;Add Department
                            </button>
                        </div>
                    </div>

                    <!-- add department modal -->
                    <?php include_once 'modal/department/addDepartmentModal.php'; ?>

                    <div class="row justify-content-evenly">
                        <?php
                        include "service/saikia/db_config.php";
                        $sql = "SELECT * FROM department";
                        $result = $conn->query ($sql);
                        if($result -> num_rows > 0){
                            while($row = $result -> fetch_assoc()){
                        ?>
                        <div class="col-md-4 mb-4 hover-grow-shadow">
                            <div class="card shadow-sm border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-auto">
                                            <div class="text-dark fw-bold h5 mb-0">
                                                <span class="text-capitalize">
                                                    <?php echo $row['name'];?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <input type="hidden" class="delete_id_value" value="<?php echo $row['d_id']; ?>">
                                            <button class="btn btn-circle shadow-sm text-danger delete_btn" role="button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }}else {echo "No result found";} ?>
                    </div>
                </div>
                <!-- footer modal -->
                <?php include 'modules/footer.php';?>
        </div>
        
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>

    </div>
    <!-- scripts -->
    <?php include 'modules/add_scripts.php'; ?>

    <script>
        document.querySelector('.nav-department').classList.add('active')
    </script>

<script>
	$(document).ready(function(){
        $('.delete_btn').click(function(e){
            // prevent default click
            e.preventDefault();
		    var deleteid = $(this).closest(".card").find('.delete_id_value').val();

            // sweetalert2
            Swal.fire({
                title: "Do you want to delete this department?",
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
                    // console.log(deleteid)
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
		                    	url: "service/delete/delete_department.php",
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