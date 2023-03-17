<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Forum | C.T. College | contact us for more queries and information</title>
    <meta name="description" content="Contact C.T. College with this forum page and get in touch with us for your queries and problems and receiving our newsletters right in to your email.">
    <link rel="icon" href="assets/logo/favicon.ico">
    <link rel="shortcut icon" href="assets/logo/CT-logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/logo/favicon.ico">


    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/color.pallete.css">
    <link rel="stylesheet" href="lib/animate/animate.min.css">

    <style>
        html {
            scroll-behavior: smooth;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .form {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .main {
            display: flex;
            flex-direction: coloumn;
        }

        label, textarea {
            font-size: .8rem;
            letter-spacing: 1px;
        }

        textarea {
            padding: 10px;
            min-width: 300px;
            line-height: 1.5;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        .buttons {
            display: flex;
            justify-content: center;
        }

        .go-back-btn {
            color: #fff;
        }
    </style>
</head>
<body class="bg-black">

<div id="particles-js" class="vh-100 w-100"></div>
    <div class="container animated fadeInDown my-auto mx-auto position-fixed top-0 w-100">
        <form action="#" class="form col-md-3 shadow my-4 border border-light text-light bg-transparet rounded justify-content-center" style="background: rgba(0, 0, 0, 0.757);">
            <img src="assets/logo/CT-logo.png" alt="C.T. College logo | C.T. College in Tinsukia" class="img-fluid w-25 mx-auto d-flex" width="100">
            <h1 class="text-center">Contact Us</h1>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control bg-transparent" id="name" placeholder="Enter your name">

                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control bg-transparent" id="phone" placeholder="Your Phone number">

                <div class="message_area">
                    <label for="message">Message:</label>
                    <textarea id="message" rows="5" cols="33">Enter your message in here.
                    </textarea>
                </div>
            </div>
            <div class="buttons">
                <button type="submit" class="btn btn-primary me-2 animated slideInLeft slow">Submit</button>
                <button type="goBack" class="btn btn-info animated slideInRight slow">
                    <a href="./index" class=" text-decoration-none go-back-btn">Go Back</a>
                </button>
            </div>
            </form>
        </div>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="js/modules/copyright.module.js"></script>

    <script src="lib/particles.js-master/particles.min.js"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'js/particlesjs-config.json');
    </script>
    <?php include_once 'main_data/security/disable_clicks.php'; ?>
</body>
</html>