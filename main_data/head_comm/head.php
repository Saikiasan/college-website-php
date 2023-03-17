<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="C.T. College, Tinsukia private college, BCA, PGDCA, BBA, BA, B.Com, ASTU, ASTU affiliated college,Under Dibrugarh University">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#000000">

<!-- SITE ICONS -->
<link rel="shortcut icon" href="assets/logo/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="assets/logo/apple-touch-icon.png">
<link rel="icon" href="assets/logo/favicon.ico" type="image/x-icon">
 
<!-- BOOTSTRAP CSS FILE -->
<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

 <!-- FONTAWESOME icon CSS FILE -->
<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
<!-- ionic icons css file -->
<link rel="stylesheet" href="lib/ionicons/css/ionicons.min.css">

<!-- fonts external from google library -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<!-- CSS ANIMATION FILES -->
<link rel="stylesheet" href="lib/animate/animate.min.css">
<link rel="stylesheet" href="lib/animate/magic/magic.min.css">
<link rel="stylesheet" href="css/animations/hovering.css">

<!-- color lib -->
<link rel="stylesheet" href="css/color.pallete.css">
<link rel="stylesheet" href="css/main-style.css">

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        user-select: none;
        -ms-user-select: none;
        -webkit-user-select: none;
        font-family: 'Roboto', sans-serif;
    }

    ::-webkit-scrollbar {
        display: none;
    }

    /*=====================================================================
    preloader
    =====================================================================*/
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
        overflow: hidden;
        background: #000;
        filter: brightness(2);
    }

    #preloader:before {
        content: "";
        position: fixed;
        top: calc(50% - 30px);
        left: calc(50% - 30px);
        border: 6px solid transparent;
        border-top: 6px solid #00a52f;
        /* border-bottom: 6px solid #00a548; */
        border-radius: 50%;
        width: 60px;
        height: 60px;
        -webkit-animation: animate-preloader 1s linear infinite;
        animation: animate-preloader 1s linear infinite;
    }

    @-webkit-keyframes animate-preloader {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes animate-preloader {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>