   <style>
    @import url('https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Dancing+Script:wght@700&display=swap');
   </style>
   <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 toggled">
        <div class="container-fluid d-flex flex-column p-0">

            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon">
                    <img src="../assets/icon/ico-x.png" alt="icon" class="img-fluid bd-placeholder-img p-2">
                </div>
                <div class="sidebar-brand-text mx-1"><span style="font-size:14px !important">Admin Panel</span><br>
                    <span style="font-size: 12px !important;font-weight:500;font-family: 'Cutive Mono', monospace;background:#000;padding: 2px;color:#0ff74d;">by- Ankit Saikia</span>
                </div>
            </a>

            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <style>
                    .nav-item i {
                        font-size: 2em !important;
                    }
                </style>
                <li class="nav-item">
                    <a class="nav-link nav-dashboard" href="./index.php">
                        <i class="fas animated fadeIn fa-tachometer-alt fa-2x"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-notification" href="notifications.php">
                        <i class="fas animated fadeIn fa-bell fa-2x"></i>
                        <span>Notifications</span>
                    </a>
                </li>

                <li class="nav-item visually-hidden">
                    <a class="nav-link nav-event" href="events.php">
                        <i class="fas animated fadeIn fa-calendar-alt"></i>
                        <span>Events</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-faculty" href="faculty.php">
                        <i class="fas animated fadeIn fa-users"></i>
                        <span>Faculty</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-department" href="departments.php">
                        <i class="fas animated fadeIn fa-box"></i>
                        <span>Departments</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-course" href="courses.php">
                        <i class="fas animated fadeIn fa-book"></i>
                        <span>Courses</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-gallery" href="gallery.php">
                        <i class="fas animated fadeIn fa-image"></i>
                        <span>Gallery</span>
                    </a>
                </li>

            </ul>
            <button class="btn rounded-circle" id="sidebarToggle" type="button"></button>
            <script>
                const btn = document.getElementById('sidebarToggle');
                btn.addEventListener('click',function(e){
                    e.preventDefault();
                    console.log("btn 01")
                    if(btn.classList.contains('rounded-circle')){
                        btn.classList.remove('rounded-circle')
                    } else {
                        btn.classList.add('rounded-circle')
                    }
                })
            </script>
        </div>
    </nav>
</body>
</html>