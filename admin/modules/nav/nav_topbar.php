<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
        <div class="container-fluid">
            <button style="box-shadow: none;" class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
                <i class="fas fa-bars"></i>
            </button>

            <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search visually-hidden">
                <div class="input-group">
                    <input class="bg-light form-control border-0 small" style="box-shadow: none;" type="text" placeholder="Search for something">
                    <button class="btn btn-primary py-0" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>

            <a href="#modalopendev" class="btn btn-primary btn-sm" style="box-shadow: none;">
                <i class="fas fa-snowflake fa-2x text-white rollIn animated fast"></i>
                &nbsp;Help
            </a>

            <ul class="navbar-nav flex-nowrap ms-auto">

                <li class="nav-item dropdown d-sm-none no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="me-auto navbar-search w-100">
                            <div class="input-group">
                                <input class="bg-light form-control border-0 small" type="text"
                                    placeholder="Search for ...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary py-0" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <div class="d-none d-sm-block topbar-divider"></div>
                <li class="nav-item dropdown no-arrow">
                    <div class="nav-item dropdown no-arrow">

                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <span class="d-none d-lg-inline me-2 text-gray-600 small">Admin</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="black" style="font-size: 40px;">
                                <path d="M256 112c-48.6 0-88 39.4-88 88C168 248.6 207.4 288 256 288s88-39.4 88-88C344 151.4 304.6 112 256 112zM256 240c-22.06 0-40-17.95-40-40C216 177.9 233.9 160 256 160s40 17.94 40 40C296 222.1 278.1 240 256 240zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-46.73 0-89.76-15.68-124.5-41.79C148.8 389 182.4 368 220.2 368h71.69c37.75 0 71.31 21.01 88.68 54.21C345.8 448.3 302.7 464 256 464zM416.2 388.5C389.2 346.3 343.2 320 291.8 320H220.2c-51.36 0-97.35 26.25-124.4 68.48C65.96 352.5 48 306.3 48 256c0-114.7 93.31-208 208-208s208 93.31 208 208C464 306.3 446 352.5 416.2 388.5z"></path>
                            </svg>
                        </a>
                        
                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                            <a class="dropdown-item" href="profile.php">
                                <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>
                                &nbsp;Profile
                            </a>

                            <a class="dropdown-item" href="././adminSettings.php">
                                <i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>
                                &nbsp;Settings
                            </a>

                            <a class="dropdown-item text-danger" href="">
                                <i class="fas fa-laptop fa-sm fa-fw me-2 text-success"></i>
                                &nbsp;Contact Dev
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="admin_logout.php">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>
                                &nbsp;Logout
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>