<?php
$currentPage = basename($_SERVER['SCRIPT_NAME']);
$pageTitle = isset($pageTitle) ? $pageTitle . ' | Agrawal Hospital Bhopal' : 'Agrawal Hospital Bhopal | NABH Accredited Multispeciality Hospital';

$menu = [
    ['Home', [
        ['Main Home', 'index.php'],
        ['Home Design 1 — Clinical', 'index-1.php'],
        ['Home Design 2 — Editorial', 'index-2.php'],
    ]],
    ['About', [
        ['About us', 'about.php'],
        ['Founder &amp; Director', 'founder.php'],
        ['Managing Director', 'cofounder.php'],
        ['Our Experts', 'our-experts.php'],
    ]],
    ['Departments', [
        ['Respiratory Medicine', 'respiratory-medicine.php'],
        ['Obstetrics &amp; Gynaecology', 'obstetrics-gynaecology.php'],
        ['Emergency &amp; Critical Care', 'emergency-critical-care.php'],
        ['General Surgery', 'general-surgery.php'],
        ['General Medicine', 'general-medicine.php'],
        ['Clinical Haematology', 'clinical-haematology.php'],
        ['ENT', 'ent.php'],
        ['Anaesthesiology', 'anaesthesiology.php'],
    ]],
    ['Treatments', [
        ['Asthma Treatment', 'asthma-treatment.php'],
        ['Chest Specialist', 'chest-specialist.php'],
        ['Emergency Medicine', 'emergency-medicine.php'],
        ['Radiology &amp; Radio Diagnosis', 'radiology-radio-diagnosis.php'],
        ['Surgery', 'surgery.php'],
        ['Chest and Respiratory', 'chest-respiratory.php'],
        ['Dietetics', 'dietetics.php'],
    ]],
    ['Diagnostics', [
        ['All Pathological Tests', '#'],
        ['X-ray', '#'],
        ['Ultrasound', '#'],
        ['ECG', '#'],
        ['Colour Doppler', '#'],
        ['Pulmonary Function Test', '#'],
        ['Allergy Testing', '#'],
        ['Sleep Study', '#'],
        ['Audiometry', '#'],
        ['2D Echo', '#'],
        ['Spirometry', '#'],
        ['Bronchoscopy', '#'],
    ]],
    ['Facilities', 'facilities.php'],
    ['Explore', [
        ['Events &amp; News', 'events-and-news.php'],
        ['Camp', '#'],
        ['Expert Talks', '#'],
        ['Challenging Cases Treated', '#'],
        ['Social Activities &amp; Events', '#'],
        ['Video Gallery', 'video-gallery.php'],
        ['Hospital', '#'],
        ['Reviews', '#'],
    ]],
    ['Contact', 'contact.php'],
];

if (!function_exists('render_main_menu')) {
    function render_main_menu($menu, $currentPage)
    {
        echo '<ul class="menu-primary-menu nav-menu-v2">';
        foreach ($menu as [$label, $target]) {
            if (is_array($target)) {
                $active = in_array($currentPage, array_column($target, 1), true);
                echo '<li class="menu-item menu-item-has-children position-relative nav__item' . ($active ? ' current-menu-item' : '') . '">';
                echo '<a href="javascript:;" class="item-link body-2 nav__link">' . $label . '</a>';
                echo '<ul class="sub-menu nav__dropdown">';
                foreach ($target as [$subLabel, $subUrl]) {
                    $cls = 'sub-menu-item' . ($subUrl === $currentPage ? ' current' : '');
                    echo '<li class="' . $cls . '"><a href="' . $subUrl . '" class="item-link-2 body-2">' . $subLabel . '</a></li>';
                }
                echo '</ul></li>';
            } else {
                $active = $target === $currentPage;
                echo '<li class="menu-item nav__item' . ($active ? ' current-menu-item' : '') . '"><a href="' . $target . '" class="item-link body-2 nav__link">' . $label . '</a></li>';
            }
        }
        echo '</ul>';
    }
}

if (!function_exists('render_mobile_menu')) {
    function render_mobile_menu($menu, $currentPage)
    {
        echo '<ul id="menu-mobile" class="menu">';
        foreach ($menu as $i => [$label, $target]) {
            if (is_array($target)) {
                $id = 'dropdown-menu-' . $i;
                $active = in_array($currentPage, array_column($target, 1), true);
                echo '<li class="menu-item menu-item-has-children-mobile' . ($active ? ' current-menu-mobile-item' : '') . '">';
                echo '<a href="#' . $id . '" data-bs-toggle="collapse" class="collapsed">' . $label . '</a>';
                echo '<div id="' . $id . '" class="collapse" data-bs-parent="#menu-mobile"><ul class="sub-menu-mobile">';
                foreach ($target as [$subLabel, $subUrl]) {
                    echo '<li class="menu-item' . ($subUrl === $currentPage ? ' current-item' : '') . '"><a href="' . $subUrl . '">' . $subLabel . '</a></li>';
                }
                echo '</ul></div></li>';
            } else {
                echo '<li class="menu-item' . ($target === $currentPage ? ' current-menu-mobile-item' : '') . '"><a href="' . $target . '">' . $label . '</a></li>';
            }
        }
        echo '</ul>';
    }
}

if (!function_exists('render_header_right')) {
    function render_header_right()
    {
        ?>
                <div class="header-right">
                    <a class="hv2-emergency" href="tel:+918959444999">
                        <span class="ic"><i class="icon-phone-volume"></i></span>
                        <span><small>24/7 Emergency</small><b>+91-8959444999</b></span>
                    </a>
                    <a class="hv2-book" href="contact.php">Book Appointment <i class="icon-arrow-right"></i></a>
                    <a class="hv2-call" href="tel:+918959444999" aria-label="Call emergency"><i class="icon-phone-volume"></i></a>
                    <div class="nav-icon">
                        <div class="mobile-button nav-item d-xl-none">
                            <a href="#canvasMobile" data-bs-toggle="offcanvas" aria-label="Open menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
    }
}
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <!-- [if IE ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif] -->
    <title><?= $pageTitle ?></title>
    <meta name="description" content="Agrawal Hospital, Arera Colony, Bhopal — NABH accredited multispeciality hospital for respiratory medicine, obstetrics & gynaecology, surgery and 24/7 emergency & critical care.">
    <meta name="keywords" content="Agrawal Hospital, Bhopal hospital, chest specialist Bhopal, gynaecologist Bhopal, ICU, emergency, NABH">
    <meta name="author" content="Agrawal Hospital" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Odometer -->
    <link rel="stylesheet" href="css/odometer-theme-default.css">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="css/header-v2.css" />
    <link rel="stylesheet" type="text/css" href="css/site.css" />
    <link rel="stylesheet" type="text/css" href="css/media-gallery.css" />
    <!-- Page-specific stylesheets: set $pageStyles = [...] before including header.php -->
    <?php foreach ($pageStyles ?? [] as $href): ?>
    <link rel="stylesheet" href="<?= htmlspecialchars($href) ?>" />
    <?php endforeach; ?>

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="icons/icomoon/style.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="image/favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="image/favicon.png" />


</head>

<body class="counter-scroll">

    <!-- .preload -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader-container">
                <div class="wrap-loader">
                    <div class="loader">
                    </div>
                    <div class="icon">
                        <img src="image/favicon.png" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.preload -->

    <div class="wrapper">
        <!-- Top-bar -->
        <div class="top-bar hv2-topbar">
            <div class="top-bar-inner flex align-items-center justify-content-between mx-30">
                <div class="hv2-tb-left">
                    <span class="hv2-badge">NABH Accredited</span>
                    <span class="hv2-tb-item hv2-tb-hide-md"><i class="icon-location-dot"></i>E-3/34, Arera Colony, Bhopal</span>
                    <span class="hv2-tb-item hv2-tb-hide-lg"><i class="icon-clock"></i>OPD: Mon - Sat, 10 AM - 7 PM &nbsp;·&nbsp; Emergency 24×7</span>
                </div>
                <div class="hv2-tb-right">
                    <a class="hv2-tb-item hv2-tb-hide-md" href="mailto:info@agrawalhospital.com"><i class="icon-envelope"></i>info@agrawalhospital.com</a>
                    <a class="hv2-tb-item" href="tel:+917554283383"><i class="icon-phone"></i>+91-755-4283383</a>
                    <a class="hv2-tb-item hv2-tb-hide-lg" href="tel:+917554278190"><i class="icon-phone"></i>+91-755-4278190</a>
                </div>
            </div>
        </div><!-- /.top-bar -->

        <!-- Header (sticky copy, shown on scroll up) -->
        <header class="header header-sticky hv2" id="header-sticky">
            <div class="header-content flex justify-content-between align-items-center mx-30">
                <div class="header-left flex align-items-center">
                    <div class="logo logo-header">
                        <a href="index.php"><img src="image/logo.png" alt="Agrawal Hospital"></a>
                    </div>
                    <nav class="main-menu" aria-label="Main navigation">
                        <?php render_main_menu($menu, $currentPage); ?>
                    </nav>
                </div>
                <?php render_header_right(); ?>
            </div>
        </header>

        <header class="header hv2" id="header">
            <div class="header-content flex justify-content-between align-items-center mx-30">
                <div class="header-left flex align-items-center">
                    <div class="logo logo-header">
                        <a href="index.php"><img src="image/logo.png" alt="Agrawal Hospital"></a>
                    </div>
                    <nav class="main-menu" aria-label="Main navigation">
                        <?php render_main_menu($menu, $currentPage); ?>
                    </nav>
                </div>
                <?php render_header_right(); ?>
            </div>
        </header>
        <!-- /.header -->