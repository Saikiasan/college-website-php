<!DOCTYPE html>
<html>
<head>
    <?php include_once 'main_data/head_comm/head.php'; ?>
    <title>Error 404 occured, either this page is seen because you entered a wrong or invalid url or because you tried opening the link <a href="https://ctctsk.in/404">404 page</a> from your web browser.</title>
    <meta name="description" content="This is a 404 error page, do not share this page as there are no contents on this page for viewing, this page helps you redirect to the correct page in case you get lost, for example- entering wrong urls and trying to reach out forbidden contents.">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="googlebot-news" content="noindex, nofollow">
    <meta name="googlebot-image" content="noindex, nofollow">
    <meta name="googlebot-video" content="noindex, nofollow">
    <meta name="googlebot-mobile" content="noindex, nofollow">
    <meta name="googlebot-ads" content="noindex, nofollow">
    <style>
        body {
            background-color: #f5f5f5;
            user-select: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            -webkit-user-drag: none;
        }
        .container {
            margin-top: 10%;
        }
        .btn {
            margin-top: 10px;
        }
        ::-webkit-scrollbar {
            display: none;
        }
        .hovering {
            animation-name: hovering;
            animation-duration: 4s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
        }

        @keyframes hovering {
            0% {
                transform: translateY(-8px);
            }
            50% {
                transform: translateY(12px);
                scale: 1.1;
            }
            100% {
                transform: translateY(-8px);
            }
        }
        .span-404-main-title {
            font-size: 4rem;
            font-weight: 900;
            color: #ff0000;
            letter-spacing: 1px;
        }
        .span-404-sub-title {
            font-size: 14px;
            font-weight: 300;
            color: green;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md text-center animated fadeInDown fast">
                <img src="assets/logo/apple-touch-icon.png" alt="logo" width="120" class="hovering" loading="eager">
            </div>
            <div class="col-md-12 p-5">
                <div class="card p-2 shadow-lg animated zoomIn slow">
                    <div class="card-body text-center">
                        <span class="span-404-main-title">Oops</span><br>
                        <span class="span-404-sub-title">Looks like you lost the way, Lets redirect you back</span>
                        <p class="fs-4">Looks like you are lost, <br>NEED SOME HELP ?</p>
                        <div class="row justify-content-center">
                            <div class="col-sm-5">
                                <a href="index.php" class="btn btn-primary rounded-pill">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'main_data/security/disable_clicks.php'; ?>
</body>
</html>
