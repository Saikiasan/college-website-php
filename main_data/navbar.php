<?php
require 'admin/service/saikia/db_config.php';

$sql_department = "SELECT * FROM department";
$result_department = $conn->query($sql_department);

$sql_course = "SELECT * FROM courses";
$result_course = $conn->query($sql_course);
?>

<div class="sticky-top topbanner">
    
    <div class="position-relative bg-black" style="width: 100%; height: 30px;z-index: 100;">
        <a class="navbar-brand p-0 m-0 ms-4 position-absolute" href="index.php" id="logo_top">
            <img src="assets/logo/logo_sm_1-min.png" alt="logo" class="img-fluid p-0 m-0 animated fadeInDown slow nav-logo">
        </a>
        <div class="position-relative">
            <div class="position-absolute d-flex flex-column brand-sus">
                <span class="text-light animated fadeIn fast delay-1s logo-brand">C.T.
                    COLLEGE</span>
                <span class="text-light animated fadeIn faster delay-2s text-uppercase logo-sub">affilated to dibrugarh university & astu</span>
            </div>
        </div>
        
        <!-- NAV TOP BUTTONS AND LINKS AVAILABLE IN BIGGER SCREENS -->
        <!-- <div class="container-fluid position-relative" id="nav_T1">
            <div class="row position-absolute top-0 end-0 me-2 mt-2 text-info text-capitalize">
                <div class="col">
                    <button class="btn btn-info p-0 px-2 m-0">Addmissions</button>
                </div>
                <div class="col">
                    <button class="btn btn-danger p-0 px-2 m-0">Examinations</button>
                </div>
            </div>
        </div> -->
    </div>

    <link rel="stylesheet" href="css/view/sizes.css">

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-black bg-black">
        <div class="container">

            <!-- menu hamburger button -->
            <button class="btn navbar-toggler collapsed ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarcol" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle Nav">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- navbar div -->
            <div class="navbar-collapse collapse" id="navbarcol">
                <ul class="navbar-nav ms-auto text-capitalize">
                    <li class="nav-item dropdown dm-a">
                        <a class="nav-link dropdown-toggle nav-about" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">About</a>
                        <div class="dropdown-menu d-a shadow" role="menu">
                            <div id="arrow" data-popper-arrow></div>
                            <a class="dropdown-item" href="about.php">about us</a>
                            <a class="dropdown-item" href="vision_and_mission.php">vision & mission</a>
                            <a class="dropdown-item" href="about_eco.php">eco club</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown dm-d">
                        <a class="nav-link dropdown-toggle nav-academic" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Academic</a>
                        <div class="dropdown-menu d-d shadow" role="menu">
                            <div id="arrow" data-popper-arrow></div>
                            <a class="dropdown-item" href="courses.php">courses offered</a>
                            <a class="dropdown-item" href="about.php">admission procedure</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown dm-e">
                        <a class="nav-link dropdown-toggle nav-adm" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">administration</a>
                        <div class="dropdown-menu d-e shadow" role="menu">
                            <div id="arrow" data-popper-arrow></div>
                            <a class="dropdown-item" href="faculty.php">management</a>
                            <a class="dropdown-item" href="about.php">principal's desk</a>
                            <a class="dropdown-item" href="about.php">teaching staff</a>
                            <a class="dropdown-item" href="about.php">office staff</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown dm-b">
                        <a class="nav-link dropdown-toggle nav-department" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Department</a>
                        <div class="dropdown-menu d-b shadow" role="menu">
                            <div id="arrow" data-popper-arrow></div>
                            <?php
                            if($result_department->num_rows){
                                while($row_department = $result_department->fetch_assoc()){
                                    ?>
                            <a class="dropdown-item" href="#"><?php echo $row_department['name']?></a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </li>

                    <li class="nav-item dropdown dm-c">
                        <a class="nav-link dropdown-toggle nav-course" href="#courses" data-bs-toggle="dropdown"
                            aria-expanded="false">Courses</a>
                        <div class="dropdown-menu d-c shadow" role="menu">
                            <div id="arrow" data-popper-arrow></div>
                            <?php
                            if($result_course->num_rows){
                                while($row_course = $result_course->fetch_assoc()){
                                    ?>
                            <a class="dropdown-item" href="#"><?php echo $row_course['name'] ?></a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </li>

                    <li class="nav-item dropdown dm-g">
                        <a class="nav-link dropdown-toggle nav-ach" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">achievement</a>
                        <div class="dropdown-menu d-g shadow" role="menu">
                            <div id="arrow" data-popper-arrow></div>
                            <a class="dropdown-item" href="gallery.php">principal's achievement</a>
                            <a class="dropdown-item" href="gallery.php">student's achievement</a>
                            <a class="dropdown-item" href="gallery.php">teacher's achievement</a>
                            <a class="dropdown-item" href="gallery.php">employee achievement</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-gallery" href="././gallery.php">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-contact" href="././contact.php">Contact</a>
                    </li>

                    <div class="d-none d-sm-block topbar-divider text-light"></div>

                    <form class="d-flex visually-hidden" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
</div>
<!-- clearfix -->
<style>
    .fix-afnav {
        margin-bottom: 80px !important;
        content: '';
        width: 100%;
        /* height: 105px; */
        background-color: #000;
    }

    #impType {
        color: #37f713
    }

    @media screen and (min-width: 699px) {
        .imp-script {
            background: #000;
            transition: all 0.5s ease-in-out;
            margin-left: 10%;
            width: 80%;
            height: 26px;
            margin-top: -15px;
            margin-bottom: 0px;
            padding-bottom: 30px;
            border-radius: 0px 0px 100px 100px;
            justify-content: center;
        }

        #impType {
            margin-left: 40px;
            margin-right: 40px;
        }
    }

    @media screen and (max-width: 699px) {
        .imp-script {
            background: #000000;
            transition: all 0.5s ease-in-out;
            width: 100%;
            height: 30px
        }

        #impType {
            margin-left: 10px;
            margin-right: 10px;
        }
    }
</style>
<div class="clearfix fix-afnav"></div>

<script src="https://unpkg.com/@popperjs/core@2"></script>

<script>
    const nav = document.querySelector('.topbanner')
    
    const about = document.querySelector('.dm-a'),
    aboutChild = document.querySelector('.d-a'),
    department = document.querySelector('.dm-b'),
    departmentChild = document.querySelector('.d-b'),
    course = document.querySelector('.dm-c'),
    courseChild = document.querySelector('.d-c'),
    academic = document.querySelector('.dm-d'),
    academicChild = document.querySelector('.d-d'),
    adm = document.querySelector('.dm-e'),
    admChild = document.querySelector('.d-e'),
    ach = document.querySelector('.dm-g'),
    achChild = document.querySelector('.d-g')
    
    // VARIABLE FOR POSITION OF ARROW
    var plPos = ""
    
    nav.classList.replace('sticky-top', 'fixed-top')
    if (window.innerHeight > window.innerWidth) {
        plPos = "right"
        navT1.classList.add('visually-hidden')
        navT2.classList.add('visually-hidden')
    } else {
        plPos = "bottom"
    }
            
    const popperInstance = Popper.createPopper(about, aboutChild, {
        placement: plPos,
    }),
        popperInstanceb = Popper.createPopper(department, departmentChild, {
            placement: plPos,
        }),
        popperInstancec = Popper.createPopper(course, courseChild, {
            placement: plPos,
        }),
        popperInstanceacademic = Popper.createPopper(academic, academicChild, {
            placement: plPos,
        }),
        popperInstanceadm = Popper.createPopper(adm, admChild, {
            placement: plPos,
        }),
        popperInstanceach = Popper.createPopper(ach, achChild, {
            placement: plPos,
        })
        
        const showAbout = () => {
            aboutChild.setAttribute('data-show', '')
            popperInstance.update()
        },
        hideAbout = () => {
            aboutChild.removeAttribute('data-show')
        }

    const showDepartment = () => {
            departmentChild.setAttribute('data-show', '')
            popperInstanceb.update()
        },
        hideDepartment = () => {
            departmentChild.removeAttribute('data-show')
        }
        
        const showCourse = () => {
            courseChild.setAttribute('data-show', '')
            popperInstancec.update()
        },
        hideCourse = () => {
            courseChild.removeAttribute('data-show')
        }
        
        const showAcademic = () => {
            academicChild.setAttribute('data-show', '')
            popperInstanceacademic.update()
        },
        hideAcademic = () => {
            academicChild.removeAttribute('data-show')
        }
        
        const showAdm = () => {
            admChild.setAttribute('data-show', '')
            popperInstanceadm.update()
        },
        hideAdm = () => {
            admChild.removeAttribute('data-show')
        }
        
        const showAch = () => {
            achChild.setAttribute('data-show', '')
            popperInstanceach.update()
        },
        hideAch = () => {
            achChild.removeAttribute('data-show')
        }
            
        // onmouseenter
        const showEvents = ['click', 'focus'],
        hideEvents = ['click', 'blur']
        
        showEvents.forEach(event => {
            about.addEventListener(event, showAbout)
            department.addEventListener(event, showDepartment)
            course.addEventListener(event, showCourse)
            academic.addEventListener(event, showAcademic)
            adm.addEventListener(event, showAdm)
            ach.addEventListener(event, showAch)
        })
        
        hideEvents.forEach(event => {
            about.addEventListener(event, hideAbout)
            department.addEventListener(event, hideDepartment)
            course.addEventListener(event, hideCourse)
            academic.addEventListener(event, hideAcademic)
            adm.addEventListener(event, hideAdm)
            ach.addEventListener(event, hideAch)
        })
        
        // on mouse hover
        // show menu
        about.addEventListener('mouseenter', function () {
            showAbout()
            //hide others
            hideDepartment()
            hideCourse()
            hideAcademic()
            hideAdm()
            hideAch()
        })
        
        department.addEventListener('mouseenter', function () {
            showDepartment()
            //hide others
            hideAbout()
            hideCourse()
            hideAcademic()
            hideAdm()
            hideAch()
        })
        
        course.addEventListener('mouseenter', function () {
            showCourse()
            //hide others
            hideAbout()
            hideDepartment()
            hideAcademic()
            hideAdm()
            hideAch()
        })

        academic.addEventListener('mouseenter', function () {
            showAcademic()
            //hide others
            hideAbout()
            hideDepartment()
            hideCourse()
            hideAdm()
            hideAch()
        })
        
        adm.addEventListener('mouseenter', function () {
            showAdm()
            //hide others
            hideAbout()
            hideDepartment()
            hideCourse()
            hideAcademic()
            hideAch()
        })
        
        ach.addEventListener('mouseenter', function () {
            showAch()
            //hide others
            hideAbout()
            hideDepartment()
            hideCourse()
            hideAcademic()
            hideAdm()
        })
        
        // close menu on mouseleave
        aboutChild.addEventListener('mouseleave', hideAbout)
        departmentChild.addEventListener('mouseleave', hideDepartment)
        courseChild.addEventListener('mouseleave', hideCourse)
        academicChild.addEventListener('mouseleave', hideAcademic)
        admChild.addEventListener('mouseleave', hideAdm)
        achChild.addEventListener('mouseleave', hideAch)
        
        // close menu on click
        about.addEventListener('click', hideAbout)
        department.addEventListener('click', hideDepartment)
        course.addEventListener('click', hideCourse)
        academic.addEventListener('click', hideAcademic)
        adm.addEventListener('click', hideAdm)
        ach.addEventListener('click', hideAch)
        
        // close menu on click outside
        document.addEventListener('click', function (e) {
            if (e.target.closest('.dm-a') || e.target.closest('.dm-b') || e.target.closest('.dm-c') || e.target
            .closest('.dm-d'))
            return
            hideAbout()
            hideDepartment()
            hideCourse()
            hideAcademic()
            hideAdm()
            hideAch()
        })
        
        // close menu on escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                hideAbout()
                hideDepartment()
                hideCourse()
                hideAcademic()
                hideAdm()
                hideAch()
            }
    })
    </script>

<script>
    // if ctrl + b is pressed, redirect to login.php
    document.addEventListener('keydown', function (e) {
        if (e.ctrlKey && e.key === 'b') {
            let timerInterval
            Swal.fire({
                title: 'Loading Services',
                html: 'This will take a moment, please wait',
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                    const myModal = new bootstrap.Modal('#loginMail', {
                        keyboard: false
                    })
                    const loginMail = document.querySelector('#loginMail')
                    myModal.show(loginMail)
                }
            })
        }
    })
    // if ctrl + a is pressed, toggle the fulllscreen
    document.addEventListener('keydown', function (e) {
        if (e.ctrlKey && e.key === 'a') {
            if (document.fullscreenElement) {
                document.exitFullscreen()
            } else {
                document.documentElement.requestFullscreen()
            }
        }
    })
</script>



<style>
    .nav-link {
        color: var(--z7);
        transition: all 0.3s ease-in-out;
    }

    .dropdown-item:hover,
    .dropdown-item:focus,
    .dropdown-item:active {
        color: #fff;
    }

    .dropdown-item {
        transition: all 0.3s ease-in-out;
    }

    .nav-link:hover,
    .nav-link:focus,
    .nav-link:active {
        color: #fff;
    }

    @media screen and (min-width: 699px) {

        .nav-link:hover,
        .nav-link:focus,
        .nav-link:active {
            color: #ffff00
        }

        .dropdown-item:hover,
        .dropdown-item:focus,
        .dropdown-item:active {
            color: #ffff00;
        }
    }

    @media screen and (max-width: 699px) {
        .navbar .navbar-nav .nav-item .nav-link {
            font-size: 20px !important;
        }
    }

    .navbar {
        /* background: linear-gradient(#025091, skyblue) */
        background: #000;
    }

    .navbar-toggler {
        position: relative;
        box-shadow: none !important;
        border: none !important;
    }

    .navbar-toggler:focus,
    .navbar-toggler:active {
        outline: 0;
    }

    .navbar-toggler span {
        display: block;
        background-color: #fff;
        height: 3px;
        width: 25px;
        margin-top: 4px;
        margin-bottom: 4px;
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        left: 0;
        opacity: 1;
    }

    .navbar-toggler span:nth-child(1),
    .navbar-toggler span:nth-child(3) {
        transition: -webkit-transform .35s ease-in-out;
        transition: transform .35s ease-in-out;
        transition: transform .35s ease-in-out, -webkit-transform .35s ease-in-out;
    }

    .navbar-toggler:not(.collapsed) span:nth-child(1) {
        position: absolute;
        left: 12px;
        top: 10px;
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
        opacity: 0.9;
    }

    .navbar-toggler:not(.collapsed) span:nth-child(2) {
        height: 12px;
        visibility: hidden;
        background-color: transparent;
    }

    .navbar-toggler:not(.collapsed) span:nth-child(3) {
        position: absolute;
        left: 12px;
        top: 10px;
        -webkit-transform: rotate(-135deg);
        transform: rotate(-135deg);
        opacity: 0.9;
    }
</style>

<style>
    .d-a .dropdown-item:hover,
    .d-b .dropdown-item:hover,
    .d-c .dropdown-item:hover,
    .d-d .dropdown-item:hover,
    .d-e .dropdown-item:hover,
    .d-g .dropdown-item:hover {
        background: transparent;
        color: var(--color-5);
        transition: all 0.1s ease-in-out;
    }

    .d-a,
    .d-b,
    .d-c,
    .d-d,
    .d-e,
    .d-g {
        color: #000;
        background: var(--z7);
        display: none;
    }

    .d-a[data-show],
    .d-b[data-show],
    .d-c[data-show],
    .d-d[data-show],
    .d-e[data-show],
    .d-g[data-show] {
        display: block;
    }

    #arrow,
    #arrow::before {
        position: absolute;
        width: 8px;
        height: 8px;
        background: inherit;
    }

    #arrow {
        visibility: hidden;
    }

    #arrow::before {
        visibility: visible;
        content: '';
        transform: rotate(45deg);
    }

    .d-a[data-popper-placement^='top']>#arrow,
    .d-b[data-popper-placement^='top']>#arrow,
    .d-c[data-popper-placement^='top']>#arrow,
    .d-d[data-popper-placement^='top']>#arrow,
    .d-e[data-popper-placement^='top']>#arrow .d-g[data-popper-placement^='top']>#arrow {
        bottom: -4px;
    }

    .d-a[data-popper-placement^='bottom']>#arrow,
    .d-b[data-popper-placement^='bottom']>#arrow,
    .d-c[data-popper-placement^='bottom']>#arrow,
    .d-d[data-popper-placement^='bottom']>#arrow,
    .d-e[data-popper-placement^='bottom']>#arrow,
    .d-g[data-popper-placement^='bottom']>#arrow {
        top: -4px;
    }

    .d-a[data-popper-placement^='left']>#arrow,
    .d-b[data-popper-placement^='left']>#arrow,
    .d-c[data-popper-placement^='left']>#arrow,
    .d-d[data-popper-placement^='left']>#arrow,
    .d-e[data-popper-placement^='left']>#arrow,
    .d-g[data-popper-placement^='left']>#arrow {
        right: -4px;
    }

    .d-a[data-popper-placement^='right']>#arrow,
    .d-b[data-popper-placement^='right']>#arrow,
    .d-c[data-popper-placement^='right']>#arrow,
    .d-d[data-popper-placement^='right']>#arrow,
    .d-e[data-popper-placement^='right']>#arrow,
    .d-g[data-popper-placement^='right']>#arrow {
        left: -4px;
    }
</style>

<style>
    html,
    body {
        overflow-x: hidden;
        /* Prevent scroll on narrow devices */
    }
</style>

<style>
    @media screen and (max-width: 699px) {
        .navbar .dropdown-menu {
            background: #000000 !important;
            margin-left: 100px !important;
        }

        .navbar .dropdown-menu .dropdown-item {
            color: #fff !important;
        }
    }
</style>

<?php include_once 'loginModal.php' ?>