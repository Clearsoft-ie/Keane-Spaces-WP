<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Clearsoft
 * @subpackage RedmondsFarm
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Keane Spaces - For the quirky space in your life</title>
    <meta name="Damien Keane is one of Ireland’s leading garden and landscape designers.  His bespoke design and build concepts allow for the seamless fusion of structure and exquisite planting in the timeless spaces he creates." content="" />
    <meta name="Author" content="Shane Byrne" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/layout.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/custom.css" rel="stylesheet" type="text/css" />

    <?php wp_head(); ?>

</head>

<body class="smoothscroll enable-animation">

<div id="wrapper">

    <div id="header" class="navbar-toggleable-md clearfix header-md transparent sticky b-0 disable-uppercase shadow-after-3">

        <header id="topNav">
            <div class="container">

                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <ul class="float-right nav nav-pills nav-social nav-second-main hidden-md-down">

                    <li>
                        <a href="https://www.instagram.com/damienkeanegardens_/" target="_blank" class="social-instagram text-center text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Instragram">
                            <i class="icon-instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://twitter.com/damienkeane?lang=en" target="_blank" class="social-twitter text-center text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter">
                            <i class="icon-twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.facebook.com/damienkeanegardendesign/" target="_blank" class="social-facebook text-center text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>

                </ul>

                <a class="logo float-left scrollTo" href="#top">
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo_light.png" alt="" />
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo_dark.png" alt="" />
                </a>

                <div class="navbar-collapse collapse float-right nav-main-collapse">
                    <nav class="nav-main">
                        <ul id="topMain" class="nav nav-pills nav-main nav-hover-animate nav-animate-fadeIn nav-onepage">
                            <?php
                            if ( has_nav_menu( 'primary-menu' ) ) {
                                wp_nav_menu( array(
                                    'container' 		=> '',
                                    'items_wrap' 		=> '%3$s',
                                    'theme_location' 	=> 'primary-menu',
                                ) );
                            } else {
                                wp_list_pages( array(
                                    'container' => '',
                                    'title_li' 	=> '',
                                ) );
                            }
                            ?>
                        </ul>

                    </nav>
                </div>

            </div>
        </header>
        <!-- /Top Nav -->

    </div>