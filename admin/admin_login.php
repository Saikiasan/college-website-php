<?php
session_start();
include("service/saikia/db_config.php");

if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=sha1($_POST['password']);

    $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $res=mysqli_query($conn,$query);
    $count=mysqli_num_rows($res);
    $row=$res->fetch_assoc();
    if($count==1){
        $_SESSION['email'] = $email;
        $_SESSION['adminid'] = $row['adminid'];
        header("Location: ./");
    }
    else{
        //  echo ("Your Email or Password is invalid");
        $_SESSION['status'] = 'Email or password is invalid.';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="shortcut icon" href="../assets/logo/CT-logo.png">
    <style>
        ::-webkit-scrollbar {display: none}
    </style>

    <script>
        function formvalidation() {
            var email = $('#email').val();
            var password = $('#password').val();
            if (email == '') {
                alert("Please Enter your Email");
                return false;
            }
            if (password == '') {
                alert("Please Enter your Password");
                return false;
            }
        }
    </script>
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <?php 
                                            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                                                echo '<h5 class="bg-danger text-white">' . $_SESSION['status'] . '</h5>';
                                                unset($_SESSION['status']);
                                            }    
                                        ?>
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    <form class="user form" action="admin_login.php" method="post" onkeydown="return formvalidation();">
                                        <div class="mb-3 form-group"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div>
                                        <div class="mb-3 form-group"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password"></div>
                                        <div class="mb-3 form-group">
                                        </div>
                                        <button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                        <a class="btn btn-danger d-block w-100 rounded-pill mt-2" href="../index.php">Cancel</a>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="#">Forgot Password?</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'modules/footer.php';?>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>

    <?php include_once '../main_data/security/disable_clicks.php'; ?>

</body>

</html>