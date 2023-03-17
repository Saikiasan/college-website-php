<?php include 'service/saikia/auth.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin/Gallery</title>
    <?php include 'modules/add_headers.php';?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">

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
                        <h3 class="text-dark mb-0">Gallery</h3>
                        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="service/add_gallery.php">
                            <i class="fas fa-plus fa-sm text-white-50"></i>
                            <i class="fas fa-images fa-sm text-white-50"></i>
                            &nbsp;Add Image Files
                        </a>
                    </div>

                    <!-- Start: Lightbox Gallery -->
            <section class="photo-gallery py-4 py-xl-5">
                <div class="container">
                    <!-- Start: Photos -->
                    <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">
                        <?php
                            include 'service/saikia/db_config.php';
                            $sql = "SELECT * FROM gallery";
                            $result = mysqli_query($conn, $sql);
                            if($result -> num_rows > 0){
                                while($row = $result -> fetch_assoc()){
                        ?>
                        <div class="col item">
                            <a href="../assets/gallery_images/<?php echo $row['picture']; ?>">
                                <img class="img-fluid" src="../assets/gallery_images/<?php echo $row['picture']; ?>">
                            </a>
                            <div class="text-center mt-1">
                                <input type="hidden" class="delete_id_value" value="<?php echo $row['g_id']; ?>">
                                <a href='javascript:void(0)' class="delete_btn text-decoration-none bg-danger btn border-dark rounded-pill shadow-sm">
                                    <span class="fa fa-trash text-black"></span>
                                    <span class="text-black fw-bold">Delete</span>
                                </a>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>    
                    </div>
                    <!-- End: Photos -->
                </div>
            </section><!-- End: Lightbox Gallery -->

                </div>
            </div>


            <?php include 'modules/footer.php';?>


        </div>
        
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>

    </div>
    
    <div id="preloader"></div>
    
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="../lib/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="../js/modules/copyright.module.js"></script>
    <script src="../js/modules/preLoader.js"></script>
    <script>
        document.querySelectorAll("[data-bss-baguettebox]").length>0&&baguetteBox.run("[data-bss-baguettebox]",{animation:"slideIn"});
    </script>
    
    <script>
	$(document).ready(function(){
        $('.delete_btn').click(function(e){
            // prevent default click
            e.preventDefault();
		    var deleteid = $(this).closest("div").find('.delete_id_value').val();

            // sweetalert2
            Swal.fire({
                title: "Do you want to delete this image file?",
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
		                    	url: "service/delete_gallery.php",
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