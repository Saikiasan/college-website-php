<style>
    @import url('https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Dancing+Script:wght@700&display=swap');

    :root {
        --neon-1: #0ff74d;
        --white: #fff;
        --gray: #545353;

        --card-border: var(--gray) 1px solid;
        --card-radius: 10px;
        --card-shadow: none;
        --card-padding: 20px 0px;
        --card-margin: 20px 0px;
    }

    .cards-x .card {
        background: transparent
    }

    .text-neon-1 {
        color: var(--neon-1) !important;
    }

    .cards-x h3 {
        color: var(--neon-1);
        font-family: 'Dancing Script', cursive;
        font-size: 44px !important;
    }

    .cards-x p {
        font-family: 'Cutive Mono', monospace;
        font-size: 18px;
        margin-top: -10px;
    }

    .cards-x .p:before,
    .cards-x .p:after {
        position: absolute;
    }

    .cards-x p:before {
        /* left: 0; */
        /* top: 0px; */
        content: "--- ";
    }

    .cards-x p:after {
        /* left: 0; */
        /* top: 00px; */
        content: " ---";
    }

    .cards-x .text-center {
        border: var(--card-border);
        border-radius: var(--card-radius);
        background: var(--card-bg);
        box-shadow: var(--card-shadow);
        padding: var(--card-padding);
        margin: var(--card-margin);
    }

    .cards-x .text-center .fa {
        color: #3677d1;
    }

    @media screen and (min-width: 768px) {
        .cards-x .text-center {
            --card-border: none
        }
    }

    .close-dev-btn {
        background: transparent;
        border: none;
        border-radius: 100%;
    }

    .close-dev-btn:hover img {
        filter: hue-rotate(2.1rad)
    }

    .close-dev-btn img {
        --size-a: 100px;
        height: var(--size-a);
        width: var(--size-a);
        border-radius: 100%;
        transition: all .8s ease-in-out;
    }
    .developedby {
        color: #555;
        letter-spacing: 0.5px;
        font-size: 14px;
    }
</style>
<div class="modal fade bg-black" id="devinfo" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-transparent">
      <div class="modal-body text-success">
        <div class="cards-x row justify-content-evenly">
            <div class="col-sm-3 text-center">
                <h3 class="bg-text">Ankit Saikia</h3>
                <p class="text-danger">BCA 5<sup>th</sup> sem</p>
                <div class="d-flex gap-4 fa-2x text-light justify-content-center">
                    <a href="https://github.com/Saikiasan"><i class="fa fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/ankit-saikia-17a48623b/"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/opseeker.saikia"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/eazy_codes/?hl=en"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <h3>Dhiraj Saikia</h3>
                <p class="text-danger">BCA 5<sup>th</sup> sem</p>
                <div class="d-flex gap-4 fa-2x text-light justify-content-center">
                    <!-- <i class="fa fa-github"></i>
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-whatsapp"></i> -->
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer border-0 justify-content-center">
          <button type="button" class="close-dev-btn" data-bs-dismiss="modal">
            <img src="assets/icon/love_circle.png"></img>
          </button>
          <span class="developedby">Developed by Ankit Saikia</span>
      </div>
    </div>
  </div>
</div>