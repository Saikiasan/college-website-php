<?php require 'admin/service/saikia/db_config.php';?>
<!DOCTYPE html>
<!-- this page requires cdn for smooth user experience. additional data may be used -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="college, system_software, Ankit Saikia, ankit saikia, arjun sharma, Ankitsaikia, ankitsaikia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SITE ICONS -->
    <link rel="shortcut icon" href="assets/logo/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/logo/favicon.ico">
    <link rel="apple-touch-icon" href="assets/logo/apple-touch-icon.png">
    
    <title>C.T. College Gallery | View gallery images from C.T. College | Always updated | built by Saikiasan 2022</title>
    <meta name="description" content="Gallery images from C.T. College, images and pictures taken from the College to mesmerise those moments as time passes.">
    <meta name="author" content="Ankit Saikia">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="lib/animate/animate.min.css">
    <link rel="stylesheet" href="css/color.pallete.css">
    <link rel="stylesheet" href="css/main-style.css">

    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        /*=====================================================================
        preloader
        =====================================================================*/
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            overflow: hidden;
            background: #000;
            filter: brightness(2);
        }

        #preloader:before {
            content: "";
            position: fixed;
            top: calc(50% - 30px);
            left: calc(50% - 30px);
            border: 6px solid transparent;
            border-top: 6px solid #00a52f;
            /* border-bottom: 6px solid #00a548; */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            -webkit-animation: animate-preloader 1s linear infinite;
            animation: animate-preloader 1s linear infinite;
        }

        @-webkit-keyframes animate-preloader {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes animate-preloader {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        .photo-gallery {
            background-color: #292a2d;
            min-height: 90vh;
            color: #fff;
        }

    </style>
</head>

<body>

    <!-- Navbar -->
    <?php include 'main_data/navbar.php' ?>

    <!-- Start: Lightbox Gallery -->
    <section class="photo-gallery py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1>Gallery</h1>
                    <p class="w-lg-50">A library for pictures</p>
                </div>
            </div><!-- Start: Photos -->
            <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">
                <?php
                $sql = "SELECT * FROM gallery";
                $result = $conn->query($sql);

                if($result->num_rows>0){
                    while($row = $result -> fetch_assoc()){
                ?>
                    <div class="col item">
                        <a href="assets/gallery_images/<?php echo $row['picture'];?>">
                            <img class="img-fluid" src="assets/gallery_images/<?php echo $row['picture'];?>">
                        </a>
                    </div>
                <?php
                    }
                }
                ?>
            </div><!-- End: Photos -->
        </div>
    </section><!-- End: Lightbox Gallery -->

    <?php include_once 'main_data/footer.php';?>

    <!-- 
    ================================================================================
    PRELOADER -> disabled
    ================================================================================
     -->
    <!-- <div id="preloader"></div> -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/modules/preLoader.js"></script>
    <script src="lib/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="js/modules/copyright.module.js"></script>

    <script>
        document.querySelectorAll("[data-bss-baguettebox]").length>0&&baguetteBox.run("[data-bss-baguettebox]",{animation:"slideIn"});
    </script>

    <script>
        $('.nav-gallery').addClass('nav-act')
    </script>

    <!-- security scripts -->
    <?php include_once 'main_data/security/disable_clicks.php';?>
</body>

</html>