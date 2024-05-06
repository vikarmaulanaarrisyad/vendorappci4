<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $title ?></title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?= base_url('/templates/assets/images/favicon.ico') ?>">

    <link href="<?= base_url('/templates/assets/css/bootstrap.min.css') ?> " rel="stylesheet" type="text/css">
    <link href="<?= base_url('/templates/assets/css/icons.css') ?> " rel="stylesheet" type="text/css">
    <link href="<?= base_url('/templates/assets/css/style.css') ?> " rel="stylesheet" type="text/css">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script script src="<?= base_url('/templates/assets/js/jquery.min.js') ?> "></script>

</head>


<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">
                    <!-- Text Logo -->
                    <!--<a href="index.html" class="logo">-->
                    <!--Annex-->
                    <!--</a>-->
                    <!-- Image Logo -->
                    <a href="index.html" class="logo">
                        <img src="<?= base_url('/templates/assets/images/logo-sm.png') ?> " alt="" height="22" class="logo-small">
                        <img src="<?= base_url('/templates/assets/images/logo.png') ?> " alt="" height="16" class="logo-large">
                    </a>

                </div>
                <!-- End Logo container-->


                <div class="menu-extras topbar-custom">

                    <ul class="list-inline float-right mb-0">

                        <!-- User-->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?= base_url() ?> /templates/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Welcome</h5>
                                </div>


                                <a class="dropdown-item" href="<?= site_url('logout') ?>"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                            </div>
                        </li>
                        <li class="menu-item list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                    </ul>
                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <?= $this->renderSection('menu') ?>

                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end #navigation -->
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->


    <div class="wrapper">
        <div class="container-fluid">

            <?= $this->renderSection('isi') ?>

        </div>
    </div>
    <!-- end wrapper -->


    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    © 2024
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- jQuery  -->

    <script src="<?= base_url('/templates/assets/js/popper.min.js') ?> "></script>
    <script src="<?= base_url('/templates/assets/js/bootstrap.min.js') ?> "></script>
    <script src="<?= base_url('/templates/assets/js/modernizr.min.js') ?> "></script>
    <script src="<?= base_url('/templates/assets/js/waves.js') ?> "></script>
    <script src="<?= base_url('/templates/assets/js/jquery.slimscroll.js') ?> "></script>
    <script src="<?= base_url('/templates/assets/js/jquery.nicescroll.js') ?>"></script>
    <script src="<?= base_url('/templates/assets/js/jquery.scrollTo.min.js') ?> "></script>

    <!-- App js -->
    <script src="<?= base_url('/templates/assets/js/app.js') ?> "></script>

</body>

</html>