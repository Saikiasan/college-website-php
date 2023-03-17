<?php include 'service/saikia/auth.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - C.T. College</title>
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
                        <h3 class="text-dark mb-0">Events</h3>
                        <a class="btn btn-primary btn-sm d-none d-sm-inline-block visually-hidden" role="button" href="#">
                            <i class="fas fa-download fa-sm text-white-50"></i>
                            &nbsp;Generate Report
                        </a>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1">
                                                <span>Add new event</span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-bell fa-2x text-gray-300"></i></div>
                                    </div>
                                    <div class="row">
                                        <form method="post" action="" class="d-flex flex-column form">
                                            <div class="col-md mb-2">
                                            <label for="">Date</label>
                                            <input type="date" name="date" class="form-control">
                                            </div>

                                            <div class="col-md mb-2">
                                                <label for="notification">Event</label>
                                                <textarea type="text" name="notification" class="form-control"></textarea>
                                            </div>

                                            <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                                        </form>
                                    </div>
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
        document.querySelector('.nav-event').classList.add('active')
    </script>

    <?php include_once '../main_data/security/disable_clicks.php'; ?>

</body>

</html>