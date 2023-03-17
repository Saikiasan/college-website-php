<?php include 'service/saikia/auth.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin/Setting</title>
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
                        <h3 class="text-dark mb-0">Settings</h3>
                        <a class="btn btn-info btn-sm d-none d-sm-inline-block visually-hidden" role="button" href="../index.php">
                            <i class="fas fa-binoculars fa-sm text-white-50"></i>
                            &nbsp;Preview site
                        </a>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col">
                            <div class="row justify-content-evenly">
                                <div class="col-md-5">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h3 class="text-center">Themes</h3>
                                            <div class="row align-items-center justify-content-evenly">
                                                <div class="col-md-4 btn btn-dark border-light dark-theme-btn">
                                                    <i class="fas fa-moon text-primary"></i>
                                                    <div class="text-light"><span>Dark</span></div>
                                                </div>
                                                <div class="col-md-4 btn btn-light border-dark light-theme-btn">
                                                    <i class="fas fa-sun text-warning"></i>
                                                    <div class="text-dark"><span>Light</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h3 class="text-center">Server timings</h3>
                                            <ul class="list-group text-capitalize log-list">
                                                <li class="list-group-item">Sample notice</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-body bg-dark">
                                    <h3 class="text-dark fw-bold text-center bg-warning p-2 mb-2">Update Log</h3>
                                    <hr class="text-light">
                                    <style>
                                        .log-list {
                                            height: 300px;
                                            overflow-y: scroll;
                                        }
                                        .log-list li:before {
                                            content: ".";
                                            font-size: 8em;
                                            color: red;
                                            position: absolute;
                                            top: -120px;
                                            left: -5px;
                                        }
                                        
                                        .log-list li {
                                            position: relative;
                                            padding-left: 40px;
                                            margin-bottom: 10px;
                                            border: 1px solid #ccc !important;
                                            border-radius: 5px;
                                        }
                                    </style>
                                    <ul class="list-group text-capitalize log-list">
                                        <li class="list-group-item">secure devcon added</li>
                                        <li class="list-group-item">admin icon size</li>
                                        <li class="list-group-item">admin login shortcut</li>
                                        <li class="list-group-item">course - edit, add, delete</li>
                                        <li class="list-group-item">faculty editing</li>
                                        <li class="list-group-item">department - edit, add, delete</li>
                                        <li class="list-group-item">gallery - add, edit, delete -&gt; user | view</li>
                                        <li class="list-group-item">notifications - add, delete, edit</li>
                                        <li class="list-group-item">events - add, edit, delete</li>
                                        <li class="list-group-item">script errors fixed</li>
                                        <li class="list-group-item">database connection established</li>
                                        <li class="list-group-item">frontend design -&gt; published</li>
                                    </ul>
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

    <?php include_once '../main_data/security/disable_clicks.php'; ?>

    <script>
        // if dark theme btn is clicked, store theme = dark in the session using only js
        $('.dark-theme-btn').on('click',function(){
            console.log('btn-dark')
            // local store
            localStorage.setItem('theme','dark')
        })

        // if light theme btn is clicked, store theme = light in the session using only js
        $('.light-theme-btn').on('click',function(){
            console.log('btn-light')
            // local store
            localStorage.setItem('theme','light')
        })

        // check the theme
        if(localStorage.getItem('theme') == 'dark'){
            // if dark theme is stored in the local storage, then add the dark theme class to the body
            $('body').addClass('bg-dark')
        }
        else{
            // if light theme is stored in the local storage, then remove the dark theme class from the body
            $('body').removeClass('bg-dark')
        }
    </script>

</body>

</html>