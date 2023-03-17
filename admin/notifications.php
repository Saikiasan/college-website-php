<?php include 'service/saikia//auth.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin/notifications</title>
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
                        <h3 class="text-dark mb-0">Notifications</h3>
                        <button class="btn btn-primary btn-sm d-sm-inline-block" type="button" data-bs-toggle="modal" data-bs-target="#add_notification_modal">
                            <i class="fas fa-plus fa-sm text-light"></i>
                            <i class="fas fa-bell fa-sm text-light"></i>
                            &nbsp;Add Notification
                        </button>
                    </div>

                    <!-- add notification modal -->
                    <?php require 'modal/notification/addNotificationModal.php'; ?>

                    <!-- edit notification modal -->
                    <?php require 'modal/notification/editNotificationModal.php'; ?>
                    
                    <div class="">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="table table-responsive">
                                <table class="table table-hover p-1 text-dark">
                                    <thead class="text-black fw-bold text-uppercase">
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Type</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center table-warning">Edit</th>
                                            <th class="text-center table-danger">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
    
                                    include "service/saikia/db_config.php";
    
                                    $sql = "SELECT * FROM notification";
                                    $result = $conn->query ($sql);
    
                                    if($result -> num_rows > 0){
                                        while($row = $result -> fetch_assoc()){
                                        ?>
                                            <tr>
                                            <td class="text-center text-dark"><?php echo $row['id'] ?></td>
                                            <td class="text-center text-dark"><?php echo $row['title'] ?></td>
                                            <td class="text-center text-dark"><?php echo $row['description'] ?></td>
                                            <td class="text-center text-dark"><?php echo $row['type']?></td>
                                            <td class="text-center text-dark"><?php echo $row['timestamp']?></td>
                                      
                                            <td class="text-center table-warning">
                                                <input type="hidden" class="edit_id_value" value="<?php echo $row['id'];?>">
                                                <button class="btn btn-circle shadow-sm edit_btn">
                                                    <span class="fa fa-pen text-warning"></span>
                                                </button>
                                            </td>
                                            
                                            <td class="text-center table-danger">
                                                <input type="hidden" class="delete_id_value" value="<?php echo $row['id']; ?>">
                                                <button class="delete_btn btn btn-circle shadow-sm">
                                                    <span class="fa fa-trash text-danger"></span>
                                                </button>
                                            </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    else {
                                        echo "0 results!";
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
        document.querySelector('.nav-notification').classList.add('active')
    </script>

<?php require 'modal/notification/script.php';?>

    <?php include_once '../main_data/security/disable_clicks.php'; ?>

</body>

</html>