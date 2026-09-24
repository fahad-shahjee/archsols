<?php
/**
 * Shared <head>, header, main menu and offcanvas menu.
 * Pages set $page, $pageTitle and $pageDesc before including this file.
 */
require_once __DIR__ . '/gate.php'; // password lock while under construction
?>
<!doctype html>
<html lang="en">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?= e($pageDesc) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= e($pageTitle) ?></title>

    <link rel="icon" href="assets/img/favicon.png" type="image/png">

    <!-- css include -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/custom-fonts.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/cursor.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/archsols.css">

</head>

<body class="architecture<?= $page === 'home' ? '' : ' inner-page' ?>">

    <!-- backtotop-start -->
    <div class="xb-backtotop style-two">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop-end -->

    <!-- Preloader - Start -->
    <div id="preloader" class="preloader-two">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="assets/img/logo/logo-icon-white.png" alt="Archsols"></div>
            </div>
        </div>
    </div>
    <!-- Preloader - End -->

    <div class="body_wrap o-clip">

        <!-- header start -->
        <header id="xb-header-area" class="header-area header-area--two header-transparent is-sticky">
            <div class="xb-header stricky">
                <div class="container mxw-1830">
                    <div class="header__wrap ul_li_between">
                        <div class="xb-header-logo">
                            <a href="index.php" class="logo-one"><img src="assets/img/logo/logo-two.svg" alt="Archsols"></a>
                            <a href="index.php" class="logo-two"><img src="assets/img/logo/logo-two.svg" alt="Archsols"></a>
                        </div>
                        <nav class="ar-main-nav" aria-label="Main menu">
                            <ul>
                                <li class="<?= active('home') ?>"><a href="index.php">Home</a></li>
                                <li class="<?= active('about') ?>"><a href="about.php">About</a></li>
                                <li class="has-dropdown<?= active('services') ?>"><a href="service.php">Services</a>
                                    <ul class="ar-submenu">
                                        <?php foreach (SERVICES as $service): ?>
                                        <li><a href="service.php#<?= e($service['id']) ?>"><?= e($service['name']) ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="<?= active('projects') ?>"><a href="project.php">Projects</a></li>
                                <li class="<?= active('contact') ?>"><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div class="header-menu-box">
                            <a class="header-menu-bar offcanvas-sidebar-btn" href="javascript:void(0);" aria-label="Open menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="header-contact-button">
                            <a class="thm-btn construction-btn architecture-btn" data-split-link=""
                                aria-label="<?= e(SITE['phone']) ?>" href="tel:<?= e(SITE['phone_tel']) ?>">
                                <span class="inner">
                                    <span class="xb-icon">
                                        <span class="xb-arrow phoneRinging">
                                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.4263 11.8514C18.9523 11.8514 18.5774 11.4656 18.5774 11.0025C18.5774 10.5946 18.1695 9.74567 17.4859 9.00699C16.8134 8.29037 16.0747 7.87142 15.4573 7.87142C14.9832 7.87142 14.6084 7.48554 14.6084 7.02249C14.6084 6.55944 14.9943 6.17357 15.4573 6.17357C16.5598 6.17357 17.7174 6.76892 18.7317 7.83834C19.6799 8.84162 20.2863 10.0874 20.2863 10.9915C20.2863 11.4656 19.9004 11.8514 19.4263 11.8514Z" fill="#0C1C24" />
                                            <path d="M23.4061 11.8519C22.932 11.8519 22.5571 11.466 22.5571 11.003C22.5571 7.08908 19.3709 3.91388 15.4681 3.91388C14.994 3.91388 14.6191 3.528 14.6191 3.06495C14.6191 2.6019 14.994 2.205 15.457 2.205C20.308 2.205 24.255 6.15195 24.255 11.003C24.255 11.466 23.8691 11.8519 23.4061 11.8519Z" fill="#0C1C24" />
                                            <path d="M12.9986 15.6665L9.39338 19.2717C8.99648 18.9189 8.6106 18.5551 8.23575 18.1802C7.10018 17.0336 6.07485 15.8319 5.15978 14.5751C4.25573 13.3182 3.52808 12.0614 2.99888 10.8155C2.46968 9.55868 2.20508 8.35695 2.20508 7.21035C2.20508 6.46065 2.33738 5.74403 2.60198 5.08253C2.86658 4.41 3.28553 3.7926 3.86985 3.24135C4.57545 2.54678 5.3472 2.205 6.16305 2.205C6.47175 2.205 6.78045 2.27115 7.05608 2.40345C7.34273 2.53575 7.5963 2.7342 7.79475 3.02085L10.3526 6.62603C10.551 6.90165 10.6943 7.15523 10.7936 7.39778C10.8928 7.6293 10.9479 7.86083 10.9479 8.0703C10.9479 8.3349 10.8707 8.5995 10.7164 8.85308C10.5731 9.10665 10.3636 9.37125 10.099 9.63585L9.26108 10.5068C9.1398 10.6281 9.08468 10.7714 9.08468 10.9478C9.08468 11.036 9.0957 11.1132 9.11775 11.2014C9.15083 11.2896 9.1839 11.3558 9.20595 11.4219C9.4044 11.7857 9.74618 12.2598 10.2313 12.8331C10.7274 13.4064 11.2566 13.9907 11.8299 14.5751C12.2268 14.9609 12.6127 15.3358 12.9986 15.6665Z" fill="#0C1C24" />
                                            <path d="M24.2219 20.2088C24.2219 20.5175 24.1668 20.8372 24.0565 21.1459C24.0235 21.2341 23.9904 21.3223 23.9463 21.4105C23.7589 21.8074 23.5163 22.1823 23.1966 22.5351C22.6564 23.1304 22.061 23.5604 21.3885 23.836C21.3775 23.836 21.3664 23.8471 21.3554 23.8471C20.7049 24.1117 19.9993 24.255 19.2386 24.255C18.1141 24.255 16.9123 23.9904 15.6445 23.4502C14.3766 22.9099 13.1087 22.1823 11.8519 21.2672C11.4219 20.9475 10.9919 20.6278 10.584 20.286L14.1892 16.6808C14.4979 16.9123 14.7735 17.0887 15.005 17.21C15.0601 17.2321 15.1263 17.2651 15.2035 17.2982C15.2917 17.3313 15.3799 17.3423 15.4791 17.3423C15.6665 17.3423 15.8098 17.2762 15.9311 17.1549L16.769 16.328C17.0446 16.0524 17.3092 15.8429 17.5628 15.7106C17.8164 15.5563 18.07 15.4791 18.3456 15.4791C18.5551 15.4791 18.7756 15.5232 19.0181 15.6224C19.2607 15.7216 19.5142 15.865 19.7899 16.0524L23.4391 18.6433C23.7258 18.8417 23.9242 19.0732 24.0455 19.3489C24.1558 19.6245 24.2219 19.9001 24.2219 20.2088Z" fill="#0C1C24" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="text" data-link-shadow=""><?= e(SITE['phone']) ?></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- offcanvas start -->
        <div class="offcanvas-sidebar">
            <div class="container mxw-1830">
                <div class="sidebar-menu-close sidebar-item">
                    <a class="xb-close" href="javascript:void(0);" aria-label="Close menu"></a>
                </div>
                <div class="row g-0">
                    <div class="col-lg-7 col-md-7">
                        <div class="sidebar-item-left">
                            <div class="xb-header-wrap">
                                <div class="xb-header-menu active">
                                    <div class="xb-header-menu-scroll">
                                        <nav class="xb-header-nav">
                                            <ul class="xb-menu-primary">
                                                <li class="menu-item<?= active('home') ?>"><a href="index.php"><span>Home</span></a></li>
                                                <li class="menu-item<?= active('about') ?>"><a href="about.php"><span>About</span></a></li>
                                                <li class="menu-item menu-item-has-children<?= active('services') ?>"><a href="service.php"><span>Services</span></a>
                                                    <ul class="sub-menu">
                                                        <?php foreach (SERVICES as $service): ?>
                                                        <li><a href="service.php#<?= e($service['id']) ?>"><span><?= e($service['name']) ?></span></a></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                                <li class="menu-item<?= active('projects') ?>"><a href="project.php"><span>Projects</span></a></li>
                                                <li class="menu-item<?= active('contact') ?>"><a href="contact.php"><span>Contact Us</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="sidebar-item-right">
                            <div class="sidebar-contact-info">
                                <ul class="sidebar-info-list list-unstyled">
                                    <li>
                                        <span>menu</span>
                                    </li>
                                    <li>
                                        <span>Call Us</span>
                                        <a href="tel:<?= e(SITE['phone_tel']) ?>"><?= e(SITE['phone']) ?></a>
                                    </li>
                                    <li>
                                        <span>Email Us</span>
                                        <a href="mailto:<?= e(SITE['email']) ?>"><?= e(SITE['email']) ?></a>
                                    </li>
                                    <li>
                                        <span>Our Office Location</span>
                                        <?= SITE['address'] ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-newsletter">
                                <span class="title">Get Updated</span>
                                <form class="sidebar-newsletter-from" action="#">
                                    <input type="email" placeholder="Enter your email">
                                    <button type="submit" aria-label="Subscribe"><i class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                            <div class="sidebar-architecture-video">
                                <img src="assets/img/about/architecture.gif" alt="Archsols">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-bg-shape">
                <img src="assets/img/hero/side_bar_img.png" alt="">
            </div>
        </div>
        <!-- offcanvas end -->

        <!-- body overlay -->
        <div class="body-overlay"></div>

        <!-- blur effect -->
        <div class="xb-blur-effect-bottom"></div>

