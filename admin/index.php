<?php include 'service/saikia/auth.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin/Dashboard</title>
    <?php include 'modules/add_headers.php';?>
</head>

<body id="page-top">
    <?php
    require 'service/saikia/db_config.php';
    $sql_faculty = "SELECT * FROM faculty";
    $result_faculty = $conn->query ($sql_faculty);
    $faculty_total = $result_faculty->num_rows;

    $sql_courses = "SELECT * FROM courses";
    $result_courses = $conn->query ($sql_courses);
    $courses_total = $result_courses->num_rows;

    $sql_notification = "SELECT * FROM notification";
    $result_notification = $conn->query ($sql_notification);
    $notification_total = $result_notification->num_rows;
    
    $sql_department = "SELECT * FROM department";
    $result_department = $conn->query ($sql_department);
    $department_total = $result_department->num_rows;

    $sql_gallery = "SELECT * FROM gallery";
    $result_gallery = $conn->query ($sql_gallery);
    $gallery_total = $result_gallery->num_rows;
    ?>

    <div id="wrapper">
        <!-- sidebar -->
        <?php include 'modules/nav/nav_sidebar.php';?>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!-- topbar -->
                <?php include 'modules/nav/nav_topbar.php';?>

                <div class="container-fluid">

                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3>
                        <a class="btn btn-info btn-sm d-none d-sm-inline-block visually-hidden" role="button" href="../index.php">
                            <i class="fas fa-binoculars fa-sm text-white-50"></i>
                            &nbsp;Preview site
                        </a>
                    </div>

                    <div class="row">

                        <div class="col-md-6 col-xl-3 mb-4 hover-float-shadow">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1">
                                                <span>Faculty</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $faculty_total ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 mb-4 hover-float-shadow">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1">
                                                <span>Department</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $department_total ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-box fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 mb-4 hover-float-shadow">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1">
                                                <span>Courses</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $courses_total ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-book-reader fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 mb-4 hover-float-shadow">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1">
                                                <span>Notifications</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $notification_total?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-bell fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 mb-4 hover-float-shadow">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1">
                                                <span>Events</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>0</span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 mb-4 hover-float-shadow">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1">
                                                <span>Gallery items</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $gallery_total;?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-images fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 mb-4 hover-float-shadow">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1">
                                                <span>System info</span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-copy fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 mb-4 hover-float-shadow">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-danger fw-bold text-xs mb-1">
                                                <span>Server status</span>
                                            </div>
                                            <div class="text-success fw-bold h5 mb-0"><span>Good</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-thumbs-up fa-2x text-gray-300"></i></div>
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
        document.querySelector('.nav-dashboard').classList.add('active')
    </script>
    <?php include_once '../main_data/security/disable_clicks.php'; ?>
</body>

</html>