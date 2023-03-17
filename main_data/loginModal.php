
<?php
include_once ("admin/service/saikia/db_config.php");

if (isset($_POST['email'])){
    $email=$_POST['email'];
    $password=sha1($_POST['password']);

    $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $res=mysqli_query($conn,$query);
    $count=mysqli_num_rows($res);
    $row=$res->fetch_assoc();
    if($count==1){
        $_SESSION['email'] = $email;
        $_SESSION['adminid'] = $row['adminid'];
        header("Location: admin/main_data/loginModal.php");
    }
    else{
        //  echo ("Your Email or Password is invalid");
        $_SESSION['status'] = 'Email or password is invalid.';
    }
}
?>
<div class="modal fade" id="loginMail" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
  tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form class="user form" action="admin/admin_login.php" method="post" onkeydown="return formvalidation();">
          <div class="mb-3 form-group"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div>
          <div class="mb-3 form-group"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password"></div>
          <div class="mb-3 form-group">
          </div>
          <div class="row justify-content-around">
            <div class="col text-center">
              <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <div class="col text-center">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
  tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form class="user form" action="loginModal.php" method="post" onkeydown="return formvalidation();">
          <div class="mb-3 form-group"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div>
          <div class="mb-3 form-group"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password"></div>
          <div class="mb-3 form-group">
          </div>
          <div class="row justify-content-around">
            <div class="col text-center">
              <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <div class="col text-center">
              <button type="button" class="btn btn-danger" data-bs-target="#loginMail">Back</button>
            </div>
            <div class="col text-center">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
          first</button>
      </div>
    </div>
  </div>
</div>

<!-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> -->