<? include 'auth.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - C.T. College</title>
    <link rel="shortcut icon" href="../../assets/logo/CT-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">

    <link rel="stylesheet" href="../../lib/animate/animate.min.css">
    <link rel="stylesheet" href="../../lib/animate/magic/dist/magic.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            user-select: none;
            border: none;
            -webkit-user-select: none;
            -webkit-user-drag: none;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-center align-content-center mt-4">
            <div class="col-sm-5 mb-4">
    <div class="card shadow-lg border-start-success py-2 animated puffIn">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col me-2">
                    <div class="text-uppercase text-success fw-bold text-xs mb-1">
                        <span>Add new department</span>
                    </div>
                </div>
                <div class="col-auto"><i class="fas fa-box-open fa-2x text-gray-300"></i></div>
            </div>
            <div class="row">

                <?php
                    if(isset($_SESSION['success'])
                        &&$_SESSION['success'] != "") {
                            echo "<h3 class='visually-hidden'>".$_SESSION['success']."</h3>";
                            unset($_SESSION['success']);
                        }

                    if(isset($_SESSION['status'])
                    &&$_SESSION['status'] != "") {
                        echo "<h3 class='visually-hidden'>".$_SESSION['status']."</h3>";
                        unset($_SESSION['status']);
                    }
                ?>

                <form method="post" action="insert_department.php" class="d-flex flex-column form">
                    <div class="col-md mb-2">
                        <label for="name">Department name</label>
                        <input type="text" name="name" class="form-control text-capitalize" autofocus required>
                    </div>

                    <div class="col-md mb-2">
                        <label for="about">About</label>
                        <input type="text" name="about" class="form-control" title="About the department">
                    </div>                                            

                    <div class="row justify-content-evenly my-2">
                        <input type="submit" name="submit" value="Upload" class="btn btn-primary col-sm-4">
                        <a href="../departments.php" class="btn btn-danger col-sm-4">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
    

    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/chart.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../../lib/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="../../js/modules/copyright.module.js"></script>
</body>

</html>