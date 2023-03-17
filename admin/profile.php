<?php include 'service/saikia/auth.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin/Profile</title>
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
                    <h3 class="text-dark mb-4">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow">
                                    <img class="mb-3 mt-4 p-1"
                                        src="../assets/logo/CT-logo.png" width="160" height="160">
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change
                                            Photo</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="username"><strong>Username</strong></label>
                                                            <input class="form-control" type="text" id="username"
                                                                value="Admin" name="username">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="email"><strong>Email
                                                                    Address</strong></label>
                                                            <input class="form-control" type="email" id="email"
                                                                value="testserver0.ctc.com" name="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <div class="mb-3 ">
                                                            <label class="form-label" for="user_password">
                                                                <strong>Password</strong>
                                                            </label>
                                                            <div class="d-flex no-gutters gap-2">
                                                                <input type="password" class="form-control col"
                                                                    id="user_password" name="user_password"
                                                                    value="thisIsPass">
                                                                <div class="col fa fa-eye-slash align-items-center d-flex"
                                                                    id="password_eye"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm"
                                                        type="submit">Save Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Contact Settings</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3"><label class="form-label"
                                                for="address"><strong>Address</strong></label>
                                            <input class="form-control" type="text" id="address"
                                                value="Kali mandir road, Chiwrapatty" name="address">
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label"
                                                        for="city"><strong>City</strong></label>
                                                    <input class="form-control" type="text" id="city"
                                                        value="Tinsukia" name="city">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label"
                                                        for="country"><strong>Country</strong></label>
                                                    <input class="form-control" type="text" id="country"
                                                        value="India" name="country">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><button class="btn btn-primary btn-sm"
                                                type="submit">Save&nbsp;Settings</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'modules/footer.php';?>
            
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <?php include 'modules/add_scripts.php'; ?>

    <script>
        document.querySelector('.nav-profile').classList.add('active')
    </script>

    <?php include_once '../main_data/security/disable_clicks.php'; ?>

</body>

</html>