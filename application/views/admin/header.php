<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('assets/') ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/') ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>/vendor/datatables/css/dataTables.bootstrap4.min.css">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/') ?>css/theme.css" rel="stylesheet" media="all">

    <!-- Jquery -->
    <script src="<?php echo base_url('assets/') ?>vendor/jquery-3.2.1.min.js"></script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url('assets/') ?>images/icon/jnt-logo.png" alt="J&T Express" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="index.html">Dashboard 1</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">Dashboard 2</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">Dashboard 3</a>
                                    </li>
                                    <li>
                                        <a href="index4.html">Dashboard 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url("Admin/Pengguna") ?>">
                                    <i class="fas fa-chart-bar"></i>Pengguna</a>
                                </li>
                                <li>
                                    <a href="table.html">
                                        <i class="fas fa-table"></i>Tables</a>
                                    </li>
                                    <li>
                                        <a href="form.html">
                                            <i class="far fa-check-square"></i>Forms</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                                            </li>
                                            <li>
                                                <a href="map.html">
                                                    <i class="fas fa-map-marker-alt"></i>Maps</a>
                                                </li>
                                                <li class="has-sub">
                                                    <a class="js-arrow" href="#">
                                                        <i class="fas fa-copy"></i>Pages</a>
                                                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                                            <li>
                                                                <a href="login.html">Login</a>
                                                            </li>
                                                            <li>
                                                                <a href="register.html">Register</a>
                                                            </li>
                                                            <li>
                                                                <a href="forget-pass.html">Forget Password</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub">
                                                        <a class="js-arrow" href="#">
                                                            <i class="fas fa-desktop"></i>UI Elements</a>
                                                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                                                <li>
                                                                    <a href="button.html">Button</a>
                                                                </li>
                                                                <li>
                                                                    <a href="badge.html">Badges</a>
                                                                </li>
                                                                <li>
                                                                    <a href="tab.html">Tabs</a>
                                                                </li>
                                                                <li>
                                                                    <a href="card.html">Cards</a>
                                                                </li>
                                                                <li>
                                                                    <a href="alert.html">Alerts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="progress-bar.html">Progress Bars</a>
                                                                </li>
                                                                <li>
                                                                    <a href="modal.html">Modals</a>
                                                                </li>
                                                                <li>
                                                                    <a href="switch.html">Switchs</a>
                                                                </li>
                                                                <li>
                                                                    <a href="grid.html">Grids</a>
                                                                </li>
                                                                <li>
                                                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                                                </li>
                                                                <li>
                                                                    <a href="typo.html">Typography</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </header>
                                        <aside class="menu-sidebar d-none d-lg-block">
                                            <div class="logo">
                                                <a href="#">
                                                    <img src="<?php echo base_url('assets/') ?>images/icon/logo.png" alt="Cool Admin" style="padding: 20px"/>
                                                </a>
                                            </div>
                                            <div class="menu-sidebar__content js-scrollbar1">
                                                <nav class="navbar-sidebar">
                                                    <ul class="list-unstyled navbar__list">
                                                        <li class="active has-sub">
                                                            <li>
                                                                <a href="<?php echo base_url("Admin/Dashboard") ?>">
                                                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                                                </a>
                                                            </li>
                                                            <?php if ($this->session->userdata('logged_in')['fk_level'] != 3): ?>
                                                                <?php if ($this->session->userdata('logged_in')['fk_level'] == 1): ?>
                                                                    <li>
                                                                <a href="<?php echo base_url("Admin/Mahasiswa") ?>">
                                                                    <i class="fas fa-user"></i>Mahasiswa
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo base_url("Admin/Petugas") ?>">
                                                                    <i class="fas fa-user"></i>Petugas
                                                                </a>
                                                            </li>
                                                                <?php endif ?>
                                                            <li>
                                                                <a href="<?php echo base_url("Admin/LingkupKeluhan") ?>">
                                                                    <i class="fas fa-comment"></i>Lingkup Keluhan
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo base_url("Admin/UnitKerja") ?>">
                                                                    <i class="fas fa-suitcase"></i>Unit Kerja
                                                                </a>
                                                            </li>
                                                            <?php endif ?>
                                                            <li>
                                                                <a href="<?php echo base_url("Admin/Keluhan") ?>">
                                                                    <i class="fas fa-comments"></i>Keluhan
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo base_url("Admin/Respon") ?>">
                                                                    <i class="fas fa-folder"></i>Respon
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </nav>
                                                </div>
                                            </aside>
                                            <div class="page-container">
                                                <header class="header-desktop">
                                                    <div class="section__content section__content--p30">
                                                        <div class="container-fluid">
                                                            <div class="header-wrap">
                                                                <form class="form-header" action="" method="POST">
                                                                    
                                                                </form>
                                                                <div class="header-button">
                                                                    <div class="account-wrap">
                                                                        <div class="account-item clearfix js-item-menu">
                                                                            <div class="image">
                                                                                <img src="<?php echo base_url('assets/') ?>images/icon/avatar-01.jpg" alt="John Doe" />
                                                                            </div>
                                                                            <div class="content">
                                                                                <a class="js-acc-btn" href="#"><?php echo $this->session->userdata("logged_in")['nama'] ?></a>
                                                                            </div>
                                                                            <div class="account-dropdown js-dropdown">
                                                                                <div class="info clearfix">
                                                                                    <div class="image">
                                                                                        <a href="#">
                                                                                            <img src="<?php echo base_url('assets/') ?>images/icon/avatar-01.jpg" alt="John Doe" />
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="content">
                                                                                        <h5 class="name">
                                                                                            <a href="#"><?php echo $this->session->userdata("logged_in")['nama'] ?></a>
                                                                                        </h5>
                                                                                        <span class="email"><?php echo $this->session->userdata("logged_in")['username'] ?></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="account-dropdown__body">
                                                                                </div>
                                                                                <div class="account-dropdown__footer">
                                                                                    <a href="<?php echo base_url("Login/logout") ?>">
                                                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </header>