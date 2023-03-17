<? include 'auth.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - C.T. College</title>
    <link rel="shortcut icon" href="../../../assets/logo/CT-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome-all.min.css">

    <link rel="stylesheet" href="../../../lib/animate/animate.min.css">
    <link rel="stylesheet" href="../../../lib/animate/magic/dist/magic.min.css">
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

    <div class="row">
        <div class="col pt-4">
            <h1 class="text-uppercase h1 text-center">Add Staff</h1>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 p-5">
                <form method="post" action="../insert/insert_faculty.php" enctype="multipart/form-data"
                    class="form">
                    <div class="col-md mb-2">
                        <label for="faculty_name">Faculty name</label>
                        <input type="text" name="faculty_name" class="form-control" required maxlength="50" autofocus>
                    </div>
                    <div class="col-md mb-2">
                        <label for="faculty_email">E-mail</label>
                        <input type="email" name="faculty_email" class="form-control" maxlength="50"
                            title="Please provide a valid email" required>
                    </div>
                    <div class="col-md mb-2">
                        <label for="faculty_phone">Phone</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" value="+91" class="form-control" disabled>
                            </div>
                            <div class="col">
                                <input type="tel" name="faculty_phone" class="form-control" maxlength="10"
                                    pattern="[0-9]{10}" title="Provide 10 digit mobile number" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-2">
                        <label for="faculty_image">Photo</label>
                        <input type="file" name="faculty_image" class="form-control"
                            accept="image/png, image/jpg, image/jpeg">
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-sm-5 mb-2">
                            <label for="faculty_department">Department</label>
                            <select class="form-select text-center" name="faculty_department">
                                <option value=""></option>
                                <?php
                                include '../saikia/db_config.php';
                                $sql_department="SELECT * FROM department";
                                $result_department=mysqli_query($conn,$sql_department);
                                if($result_department -> num_rows >0){
                                    while($row_department = $result_department -> fetch_assoc()){?>
                                <option value="<?php echo $row_department['d_id'];?>">
                                    <?php echo $row_department['name'];?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md mb-2">
                            <label for="faculty_qualification">Qualification</label>
                            <input class="form-control text-center" name="faculty_qualification" type="text"
                                title="please provide a valid qualification">
                        </div>
                    </div>
                    <div class="row justify-content-evenly my-2">
                        <input type="submit" name="submit" value="Upload" class="btn btn-primary col-sm-4">
                        <a href="../../faculty.php" class="btn btn-danger col-sm-4">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../../../lib/jquery/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/chart.min.js"></script>
    <script src="../../assets/js/bs-init.js"></script>
    <script src="../../assets/js/theme.js"></script>
    <script src="../../../lib/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="../../../js/modules/copyright.module.js"></script>
</body>

</html>