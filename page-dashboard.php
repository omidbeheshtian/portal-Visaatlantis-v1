<?php

$user = wp_get_current_user();
$userID = $user->ID;
$num = $user->user_login;
$nameportal = $user->display_name;

if ($user_ID) {  ?>
<head dir="rtl">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Omid Beheshtian">

    <!-- Title Page-->
    <title>داشبورد کاربری</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/images/icon/valogo" alt="Visa Atlantis" />
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
                                <i class="fas fa-tachometer-alt"></i>داشبورد</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-map-marker-alt"></i>تست</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/images/icon/valogo" alt="Visa Atlantis" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="dashboardd">
                                <i class="fas fa-tachometer-alt"></i>داشبورد</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-map-marker-alt"></i>تست</a>
                        </li>
                    </ul>
                </nav>
           </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button" style="padding-left: 220px;">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/images/icon/valogo.png" alt="Va" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $nameportal; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/images/icon/valogo.png" alt="Va" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $nameportal; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $num; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>اطلاعات حساب</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo wp_logout_url(home_url()); ?>">
                                                    <i class="zmdi zmdi-power"></i>خروج</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">پورتال مشتریان</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>تست</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>تست</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>تست</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>تست</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">تست</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">تست</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>تست</h3>
                                        </div>
                                  </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2021 Visaatlantis. All rights reserved. Template by <a href="https://omidbeheshtian.ir">Omid Beheshtian</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/wow/wow.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php } 
else{
    echo "We Have Error in Login/Signup in Visaatlantis Portal";
}
?>