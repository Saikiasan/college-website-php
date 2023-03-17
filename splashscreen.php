<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>Welcome to C.T. COLLEGE</title>
  <link rel="shortcut icon" href="assets/logo/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="lib/animate/animate.min.css">
  <style>
    .logo {
      --size_logo: 200px;
      width: var(--size_logo);
      background: url(assets/logo/ctlong.png);
      background-size: var(--size_logo);
      background-repeat: no-repeat;
      background-position: bottom;
      transition: all .3s ease-in-out;
    }
  </style>
  <?php
  if(isset($_SESSION['splashscreen'])){
    echo '<meta http-equiv="refresh" content="0;url=index.php"/>';
  }
  else {
    $_SESSION['splashscreen'] = true;
    echo '<meta http-equiv="refresh" content="3;url=index.php"/>';
  }
  ?>
</head>
<body>
  <div class="logo mx-auto animated slideInDown slow"></div>

  <h3 class="text-center fw-bold animated zoomIn delay-1s mt-4">Loading</h3>

  <script async>
    function setTheHeight(){
      let winHeight = window.innerHeight
      const logoHeight = document.querySelector('.logo')
      logoHeight.style.height = winHeight / 2 + 100  + 'px'
    }
    setTheHeight()
  </script>
</body>
</html>