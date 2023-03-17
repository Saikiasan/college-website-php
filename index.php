<!DOCTYPE html>
<!----------------------------------------------------------------------------- 
Code and design by Ankit Saikia
------------------------------------------------------------------------------->
<html lang="en">

<head>
    <?php require 'main_data/head_comm/head.php'; ?>

    <meta name="description"
    content="CT College (A unit of DISHA) was established in 2001 and in year 2018 it got the approval from state government of Assam (For TDC and PGDCA) and got affiliated to the Dibrugarh University for regular courses (BA, B.Com-Honors & PGDCA ). It also has been an authorized study centre of DODL, Dibrugarh University for UG and PG courses from year 2012. In the year 2020, we got affiliated with Assam Science and Technology University for BA and BBA program under regular mode ...">
    
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    
    <title>C.T. College - 2023 | website</title>
</head>

<body id="pageTop" class="">

    <!-- main container start -->
    <div class="main mb-5" id="main">

        <!-- navbar -->
        <?php include 'main_data/navbar.php'?>

        <!-- fullpage container start -->
        <div id="fullscreenpage" class="pb-5">

            <!-- carousel start -->
            <?php include 'main_data/owl_carousel.php';?>
            <!-- carousel end -->

            <!-- container-fluid start -->
            <div class="mt-5 container-fluid">

                <!-- row-1 start -->
                <div class="row">
                    <!-- principals desk-->
                    <?php include_once 'main_data/index/principal.php'; ?>
                </div>
                <!-- row-1 end -->

                <!-- row-2 start -->
                <div class="row mb-2">
                    <!-- compact section for about, notification and programmes -->
                    <?php include_once 'main_data/index/compact_con.php';?>
                </div>
                <!-- row-2 end -->

                <!-- row-3 start -->
                <div class="row mb-5">
                    <!-- resources -->
                    <?php include_once 'main_data/index/res.php'; ?>
                </div>
                <!-- row-3 end -->

            </div>
            <!-- container-fluid end -->
        </div>
        <!-- fullscreen end -->
    </div>
    <!-- main end -->

    <!-- foter start -->
    <?php include_once 'main_data/footer.php'?>
    <!-- footer end -->

    <!-- preloader start temporarily disabled for fast loading experience -->
    <!-- <div id="preloader"></div> -->
    <!-- preloader end -->

    <!-- scripts start -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    
    <!-- custom scripts -->
    <script src="lib/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="js/modules/copyright.module.js"></script>
    <!-- <script src="js/modules/preLoader.js"></script> -->
    <!-- <script src="js/modules/main.js"></script> -->

    <!-- adding active class to the link in navbar -->
    <!-- <script>
        $('.nav-home').addClass('nav-act');
    </script> -->

    <!-- Owl-carousel scripts -->
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                items: 1,
                loop:true,
                nav:false,
                dots: false,
                autoplay:true,
                autoplayHoverPause:false,
                autoplayTimeout:5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                },
                Out: 'fadeOut',
                In: 'fadeIn',
                margin:0,
                stagePadding:0,
                smartSpeed:800,
                autoHeight:true,
            })
        });
    </script>
    
    <?php include_once 'main_data/security/disable_clicks.php';?>

    <!-- scripts end -->
    
    <!-- TEST SCRIPT -->
    <!-- <script>
        $(document).ready(function(){
            $(window).on('load', function(){
                $('#devinfo').modal('show');
            });
        });
    </script> -->

    <!-- <style>
        .owl-item {
            visibility: hidden;
            transition: all 0.5s ease-in-out;
            3912
        }
    </style> -->
</body>
</html>

<!-----------------------------------------------------------------------------
-------------------------------------------------------------------------------
                    COPYRIGHT 2023 | ANKIT SAIKIA
                    https://ctctsk.in/
                    https://ctctsk.in/a23/
 -------------------------------------------------------------------------------
 PRICING AND COST IN THIS PROJECT WILL BE AVAILABLE IN THE DETAIL.PHP FILE [root]
 ------------------------------------------------------------------------------>