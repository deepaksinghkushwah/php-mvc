<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="menu-logo">
                    <div class="navbar-brand">
                        <span class="navbar-logo">
                            <a href="<?= SITE_URL?>">
                                <img src="<?= SITE_URL . 'public/' ?>assets/images/logo2.png" alt="Mobirise" style="height: 4.9rem;">
                            </a>
                        </span>
                        <span class="navbar-caption-wrap">
                            <a class="navbar-caption text-white display-4" href="<?= SITE_URL?>">
                                PHP-MVC
                            </a>
                        </span>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                            <a class="nav-link link text-white display-4" href="<?= SITE_URL?>">
                                <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="<?= SITE_URL?>index/about">
                                About Us
                            </a>
                        </li>
                        <?php if (Session::get("loggedIn") == true) { ?>
                            <li class="nav-item">
                                <a class="nav-link link text-white display-4" href="<?= SITE_URL ?>user/dashboard">Dashboard</a>
                            </li>

                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link link text-white display-4" href="<?= SITE_URL ?>user/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link text-white display-4" href="<?= SITE_URL ?>user/signup">Signup</a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="<?= SITE_URL ?>article/index">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="<?= SITE_URL ?>help/index">Help</a>
                        </li>
                        
                        <?php if (Session::get(KEY_LOGGED_IN)) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link link text-white dropdown-toggle display-4" data-toggle="dropdown-submenu" href="#" role="button" aria-haspopup="true" aria-expanded="false">Members Area</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item link text-white" href="<?= SITE_URL . 'user/change-password' ?>">Change Password</a>
                                    <a class="dropdown-item link text-white" href="<?= SITE_URL . 'user/profile' ?>">Manage Profile</a>                                    
                                    
                                </div>
                            </li>
                        <?php } ?>

                        <?php if (Session::get(KEY_ROLE_ID) == 1) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link link text-white dropdown-toggle display-4" data-toggle="dropdown-submenu" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin Area</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item link text-white" href="<?= SITE_URL . 'pagemanager/index' ?>">Manage Pages</a>
                                    <a class="dropdown-item link text-white" href="<?= SITE_URL . 'usermanager/index' ?>">Manage Users</a>
                                    <a class="dropdown-item link text-white" href="<?= SITE_URL . 'settingmanager/index' ?>">Manage Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item link text-white" href="#">Separated link</a>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (Session::get("loggedIn") == true) { ?>
                            <li class="nav-item">
                                <a class="nav-link link text-white display-4" href="<?= SITE_URL ?>user/logout">Logout</a>
                            </li>
                        <?php } ?>
                    </ul>


                </div>
            </nav>