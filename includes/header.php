<?php
// include_once('admin/include/conn.php');
include_once('admin/include/visit.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bbarez Technology">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php echo $pageTitle; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">
    <link rel="stylesheet" href="css/feather-font-master/src/css/iconfont.css">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>


    <!-- ***** Header Area Start ***** -->
    <section class="welcome-area">
        <header class="header-area">
            <!-- Main Header Start -->
            <div class="main-header-area" style="border-top: none;">
                <div class="classy-nav-container breakpoint-off">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="uzaNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php">

                            <img src="./img/core-img/logo.png" alt="logo" style="width: 200px;">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a id="path" href="./index.php">Home</a></li>

                                    <!--  -->
                                    <li><a id="path" href="./services.php">Services</a>
                                        <ul class="dropdown" style="width: 275px;">
                                            <li><a href="web_app_development.php">- Web App Development</a></li>
                                            <li><a href="website_development.php">- Website Development</a></li>
                                            <li><a href="website_redesign.php">- Website Redesign</a></li>
                                            <li><a href="web_portal.php">- Web Portal</a></li>
                                            <li><a href="database_development.php">- Database Development</a></li>
                                            <li><a href="mobile_app_development.php">- Mobile App Development</a></li>
                                            <li><a href="ict_solution.php">- ICT Solutions</a></li>
                                            <li><a href="camera_services.php">- Security Camera Services</a></li>
                                            <li><a href="digital_marketing.php">- Digital / Online Marketing</a></li>

                                        </ul>
                                    </li>

                                    <!--  -->

                                    <li><a id="path" href="./portfolio.php">Portfolio</a></li>
                                    <li><a id="path" href="./about.php">About</a></li>
                                    <li><a id="path" href="./contact.php">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </section>