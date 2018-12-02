<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Compact - Multipurpose Corporate Business Website Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.png" type="image/x-icon">

    <!-- LOAD CSS FILES -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">

    <!-- color scheme -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/switcher/demo.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/switcher/colors/blue.css" type="text/css" id="colors">

</head>
<body>
<div id="wrapper">
<!-- header begin -->
<header class="site-header-1 site-header">
    <!-- Main bar start -->
    <div id="sticked-menu" class="main-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- logo begin -->
                    <div id="logo" class="pull-left">
                        <a href="index.html">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="" class="logo">
                        </a>
                    </div>
                    <!-- logo close -->

                    <!-- btn-mobile menu begin -->
                    <a id="show-mobile-menu" class="btn-mobile-menu hidden-lg hidden-md"><i class="fa fa-bars"></i></a>
                    <!-- btn-mobile menu close -->

                    <!-- mobile menu begin -->
                    <nav id="mobile-menu" class="site-mobile-menu hidden-lg hidden-md">
                        <ul></ul>
                    </nav>
                    <!-- mobile menu close -->

                    <!-- desktop menu begin -->
                    <nav id="desktop-menu" class="site-desktop-menu hidden-xs hidden-sm">
                        <ul class="clearfix">
                            <li class="active">
                                <?php
                                $args = array(
                                    'menu' => 'Menu 1',
                                    'container_class' => false,
                                    'items_wrap' => '%3$s',
                                    'container' => false,

                                );
                                wp_nav_menu($args);
                                ?>
                            </li>
                        </ul>
                    </nav>
                    <!-- desktop menu close -->

                    <!-- Header Group Button Right begin -->
                    <div class="header-buttons pull-right hidden-xs hidden-sm">

                        <div class="header-contact">
                            <ul class="clearfix">
                                <li class="phone"><i class="fa fa-phone"></i> <span>0112-826-2789</span></li>
                                <li class="border-line">|</li>
                            </ul>
                        </div>

                        <!-- Button Modal popup searchbox -->
                        <div class="search-button">
                            <!-- Trigger the modal with a button -->
                            <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <!-- Header Group Button Right close -->

                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
