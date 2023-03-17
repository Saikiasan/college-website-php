<!-- footer php start-->
<footer id="footerx" class="text-center text-lg-start text-white pb-2 bg-primary">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6">
          <!-- logo start -->
          <h2 class="text-center text-light hover-grow" style="font-family: 'Archivo Black', sans-serif; text-shadow: 2px 5px 6px #000;">C.T. COLLEGE</h2>
          <div class="hover-bob rounded-circle d-flex align-items-center justify-content-center mb-0 mx-auto" style="width: 150px; height: 150px;">
            <img src="assets/logo/logo_sm_1-min.png" height="90" alt="logo"
                 loading="lazy"/>
          </div>
          <!-- logo end -->

          <p class="text-center">AFFILATED TO DIBRUGARH UNIVERSITY & ASTU</p>

          <ul class="list-unstyled d-flex flex-row justify-content-center gap-2">
            <li class="hover-grow-ico">
              <a class="text-white px-2" href="https://www.facebook.com/ctcollegetinsukia/">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="hover-grow-ico">
              <a class="text-white px-2" href="https://www.instagram.com/ctcollegetsk/?hl=en">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li class="hover-grow-ico">
              <a class="text-white px-2" href="javascript:inProgress()">
                <i class="fa fa-whatsapp"></i>
              </a>
            </li>
          </ul>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Quick links</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="https://astu.ac.in/" class="text-white hover-grow-shadow">ASTU</a>
            </li>
            <li class="mb-2">
              <a href="https://dibru.ac.in/" class="text-white hover-grow-shadow">Dibrugarh University</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="mb-4">FAQs</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white hover-grow-shadow">Apply for addmission</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white hover-grow-shadow">Rules and regulations</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white hover-grow-shadow">Student curriculum</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white hover-grow-shadow">Job</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white hover-grow-shadow">Courses available</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white hover-grow-shadow">Contact</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Contact</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fa fa-map-marker pe-2 text-danger"></i><span style="font-size: 14px; font-weight: 100;">C.T. COLLEGE PATH, <br>&nbsp;&nbsp;&nbsp;&nbsp;CHIRWAPATTY, TINSUKIA - 786125 (ASSAM)</span></p>
            </li>
            <li>
              <p><i class="fa fa-phone pe-2" style="color: green"></i>+ 91 943-5036-478,</p>
              <p><i class="fa fa-phone pe-2" style="color: green"></i>+ 91 700-2514-649</p>
            </li>
            <li>
              <p><i class="fa fa-envelope pe-2 mb-0 text-warning"></i>ctcollege.tsk@gmail.com</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <hr class="text-light">
      <!-- Copyright -->
        <div class="row text-center">
            <!-- <div class="copyright" style="font-size: 14px"></div> -->
            <div class="col">
              <span style="font-size: 12px;font-weight:100;color:#000">&copy; 2023 Ankit Saikia</span>
            </div>
        </div>
  
        <!-- developers section -->
        <div class="row text-center m-0 bg-dark p-4 position-absolute">
          <style>
            @media screen and (max-width: 768px) {
              .des-txt {
                font-size: 10px !important;
                color: #fff;
              }
            }
            @import url('https://fonts.googleapis.com/css2?family=Space+Mono&display=swap');
          </style>
          <div class="col text-center m-0 p-0">
            <span class="text-uppercase des-txt" style="font-size: 12px;font-family: 'Space Mono', monospace;color:var(--neon)">
              developed and designed by <a href="" class="text-decoration-none; color: var(--neon)">the department of bca</a>
            </span>
          </div>
        </div>
    </div>
    <!-- Grid container -->

    <!-- modal-dev -->
    <?php include_once 'main_data/devloper_info.php'; ?>

</footer>

<button onclick="javascript:toTop()" class="position-fixed bottom-0 end-0 btn btn-dark mb-4 me-2 rounded-circle animated" to_top style="box-shadow: none">
    <i class="ion ion-chevron-up"></i>
</button>

<div class="position-fixed bottom-0 start-0 ms-2 mb-2 bg-white rounded-circle visually-hidden" id="ch">
  <i class="ion ion-ios-help fs-1"></i>
</div>

<div id="chChild" class="position-fixed bottom-0 start-0 visually-hidden" style="width:250px;height:auto;margin-bottom:60px;margin-left:40px">
  <div class="card" style="min-height:60px">
    <div class="card-body">
      <p class="card-text" id="chTalk"></p>
    </div>
  </div>
</div>


<script>
  function toTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    })
  }
  const chchild = document.querySelector('#chChild')
  const chparent = document.querySelector('#ch')
  chparent.addEventListener('click',function(){
    chchild.classList.toggle('visually-hidden');
    if(chchild.classList.contains('visually-hidden')){
      return false
    } else {
      typech()
    }
  })

  // if child visible and clicked outside the child close the child
  document.addEventListener('click',function(e){
    if(!chchild.classList.contains('visually-hidden')){
      if(!chchild.contains(e.target) && !chparent.contains(e.target)){
        chchild.classList.add('visually-hidden')
      }
    }
  })

  const typech = ()=>{
    var typed = new Typed('#chTalk', {
      strings: ['Follow the guidelines.','Complete your profile for a complete user experience'],
      stringsElement: null,
      typeSpeed: 20,
      backSpeed: 10,
      smartBackspace: true,
      loop: false,
      showCursor: false,
      backDelay: 1000,
    });
  }
</script>
<script>
  function inProgress() {
    Swal.fire({
      title: 'Link not active',
      text: 'Wait for the link to be activated in the future.',
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      showClass: {
        popup: 'animated fadeInDown faster'
      },
      hideClass: {
        popup: 'animated fadeOutUp faster'
      },
    })
  }
</script>

<?php
if (isset($_SESSION['success'])) {
  echo "<script>
  setTimeout(() => {
    Swal.fire({
      title: 'Success',
      text: 'Your message has been sent successfully.',
      icon: 'success',
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      showClass: {
        popup: 'animated fadeInDown faster'
      },
      hideClass: {
        popup: 'animated fadeOutUp faster'
      },
    })
  }, 1000);
  </script>";
  unset($_SESSION['success']);
}
?>
 <script>
  // if footer is in view, body bg primary
  const footer = document.querySelector('footer')
  const body = document.querySelector('body')
  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting === true) {
      body.classList.add('bg-primary')
    } else {
      body.classList.remove('bg-primary')
    }
  })
 </script>