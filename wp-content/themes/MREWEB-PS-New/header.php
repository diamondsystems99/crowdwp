<?php global $_URL, $_DIR; ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php if (is_category()) {
            echo single_cat_title();
            echo " | ";
            echo bloginfo('name');
        } elseif (is_tag()) {
            echo single_tag_title();
            echo " | ";
            echo bloginfo('name');
        } elseif (is_archive()) {
            echo single_cat_title();
            echo " | ";
            echo bloginfo('name');
        } elseif (is_search()) {
            echo bloginfo('name') . ' جستجو برای ' . urldecode($_GET['s']);
        } elseif (is_home() || is_front_page()) {
            echo bloginfo('name');
        } elseif (is_single() || is_page()) {
            echo get_the_title();
        } elseif (is_404()) {
            echo bloginfo('name');
        } else {
            bloginfo('name');
        } ?></title>
    <!--== Favicon ==-->

    <!-- font -->
    <link href="<?php echo $_DIR; ?>fonts/fonts.css" rel="stylesheet" />
    <!-- Icons -->
    <link href="<?php echo $_DIR; ?>fonts/font-icons.css" rel="stylesheet" />
    <link href="<?php echo $_DIR; ?>css/bootstrap.min.rtl.css" rel="stylesheet" />
    <link href="<?php echo $_DIR; ?>css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="<?php echo $_DIR; ?>css/animate.css" rel="stylesheet" />
    <link href="<?php echo $_DIR; ?>css/styles.rtl.css" rel="stylesheet" type="text/css" />
    <!-- Favicon and Touch Icons  -->
    <link href="<?php echo $_DIR; ?>images/logo/favicon.png" rel="shortcut icon" />
    <link href="<?php echo $_DIR; ?>images/logo/favicon.png" rel="apple-touch-icon-precomposed" />
    <?php wp_head(); ?>
</head>
<body class="body">
<?php

$class = 'home-default-wrapper';
if(is_home()){
    $class = 'home-default-wrapper';
}
if(is_category() || is_search() || is_tag()){
    $class = 'blog-page-wrapper';
}

?>


<?php
/*$posts = get_posts([
    'post_type' => 'home_page_config',
    'post_status' => 'publish',
    'numberposts' => -1
]);
$configId = $posts[0]->ID;*/
$configId = 3402;
?>


<!-- RTL -->
<!-- <a class="tf-btn primary" href="javascript:void(0);" id="toggle-rtl">RTL</a> -->
<!-- /RTL  -->
<!-- preload -->
<div class="preload preload-container">
    <div class="preload-logo">
        <div class="spinner"></div>
        <span class="icon icon-villa-fill"></span>
    </div>
</div>
<!-- /preload -->
<div id="wrapper">
    <div class="clearfix" id="pagee">
        <!-- Main Header -->
        <header class="main-header fixed-header">
            <!-- Header Lower -->
            <div class="header-lower">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <div class="inner-header-left">
                                <div class="logo-box flex">
                                    <div class="logo">
                                        <a href="<?php echo $_URL; ?>"><img
                                                    alt="logo"
                                                    height="48"
                                                    src="<?php echo $_DIR; ?>images/logo/crowd.webp"
                                                    width="65"
                                            /></a>
                                    </div>
                                </div>
                                <div class="nav-outer flex align-center">
                                    <!-- Main Menu -->
                                    <nav class="main-menu show navbar-expand-md">
                                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                            <?php
                                                $args = array(
                                                    'theme_location' => 'topTreeMenu',
                                                    'menu_class' => 'navigation clearfix'
                                                );
                                                wp_nav_menu($args);
                                            ?>
                                        </div>
                                    </nav>
                                    <!-- Main Menu End-->
                                </div>
                            </div>
                            <div class="inner-header-right header-account">
                                <a
                                        class="tf-btn btn-line btn-login"
                                        data-bs-toggle="modal"
                                        href="#"
                                >
                                    <svg
                                            fill="none"
                                            height="20"
                                            viewbox="0 0 20 20"
                                            width="20"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M13.1251 5C13.1251 5.8288 12.7959 6.62366 12.2099 7.20971C11.6238 7.79576 10.8289 8.125 10.0001 8.125C9.17134 8.125 8.37649 7.79576 7.79043 7.20971C7.20438 6.62366 6.87514 5.8288 6.87514 5C6.87514 4.1712 7.20438 3.37634 7.79043 2.79029C8.37649 2.20424 9.17134 1.875 10.0001 1.875C10.8289 1.875 11.6238 2.20424 12.2099 2.79029C12.7959 3.37634 13.1251 4.1712 13.1251 5ZM3.75098 16.765C3.77776 15.1253 4.44792 13.5618 5.61696 12.4117C6.78599 11.2616 8.36022 10.6171 10.0001 10.6171C11.6401 10.6171 13.2143 11.2616 14.3833 12.4117C15.5524 13.5618 16.2225 15.1253 16.2493 16.765C14.2888 17.664 12.1569 18.1279 10.0001 18.125C7.77014 18.125 5.65348 17.6383 3.75098 16.765Z"
                                                stroke="black"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                        ></path></svg
                                    >ورود به سیستم</a
                                >
                                <div class="flat-bt-top">
                                    <a class="tf-btn primary" href="#">
                                        <svg
                                                fill="none"
                                                height="20"
                                                viewbox="0 0 21 20"
                                                width="21"
                                                xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                    d="M13.625 14.375V17.1875C13.625 17.705 13.205 18.125 12.6875 18.125H4.5625C4.31386 18.125 4.0754 18.0262 3.89959 17.8504C3.72377 17.6746 3.625 17.4361 3.625 17.1875V6.5625C3.625 6.045 4.045 5.625 4.5625 5.625H6.125C6.54381 5.62472 6.96192 5.65928 7.375 5.72834M13.625 14.375H16.4375C16.955 14.375 17.375 13.955 17.375 13.4375V9.375C17.375 5.65834 14.6725 2.57417 11.125 1.97834C10.7119 1.90928 10.2938 1.87472 9.875 1.875H8.3125C7.795 1.875 7.375 2.295 7.375 2.8125V5.72834M13.625 14.375H8.3125C8.06386 14.375 7.8254 14.2762 7.64959 14.1004C7.47377 13.9246 7.375 13.6861 7.375 13.4375V5.72834M17.375 11.25V9.6875C17.375 8.94158 17.0787 8.22621 16.5512 7.69876C16.0238 7.17132 15.3084 6.875 14.5625 6.875H13.3125C13.0639 6.875 12.8254 6.77623 12.6496 6.60041C12.4738 6.4246 12.375 6.18614 12.375 5.9375V4.6875C12.375 4.31816 12.3023 3.95243 12.1609 3.6112C12.0196 3.26998 11.8124 2.95993 11.5512 2.69876C11.2901 2.4376 10.98 2.23043 10.6388 2.08909C10.2976 1.94775 9.93184 1.875 9.5625 1.875H8.625"
                                                    stroke="white"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1.5"
                                            ></path></svg
                                        >کرادکاو</a
                                    >
                                </div>
                            </div>
                            <div class="mobile-nav-toggler mobile-button">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Lower -->
            <!-- Mobile Menu  -->
            <div class="close-btn">
                <span class="icon flaticon-cancel-1"></span>
            </div>
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="<?php echo $_URL; ?>">
                            <img alt="nav-logo"
                              height="44"
                              src="<?php echo $_DIR; ?>images/logo/crowd.webp"
                              width="140" />
                        </a>
                    </div>
                    <div class="bottom-canvas">
                        <div class="login-box flex align-center">
                            <a data-bs-toggle="modal" href="#modalLogin">ورود</a>
                            <span>/</span>
                            <a data-bs-toggle="modal" href="#modalRegister">ثبت نام</a>
                        </div>
                        <div class="menu-outer"></div>
                        <div class="button-mobi-sell">
                            <a class="tf-btn primary" href="#">کرادکاو</a>
                        </div>
                        <div class="mobi-icon-box">
                            <div class="box d-flex align-items-center">
                                <span class="icon icon-phone2"></span>
                                <div>021-22255095</div>
                            </div>
                            <div class="box d-flex align-items-center">
                                <span class="icon icon-mail"></span>
                                <div>crowdyab.ir@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->
        </header>


