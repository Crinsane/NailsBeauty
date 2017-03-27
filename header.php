<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta name="description" content="Nails Beauty - Nail, Spa and Beauty HTML Template"/>
    <meta name="keywords" content="responsive nail,nail salon,spa specials,foot spa,beauty solution,specials offer,"/>
    <meta name="author" content="SumerianLab"/>

    <?php wp_head();?>
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">

    <!--[if lt IE 9]>
    <script>
        window.location.href = "browser-not-supported.html";
    </script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<!-- Reserve for facebook - DO NOT TOUCH -->
<div id="fb-root"></div>

<div id="wrapper">
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-nav navbar-fixed-top navbar-colored navbar-transparent navbar-sticky-animated animated-active">
            <div class="header-nav-wrapper">
                <div class="container">
                    <nav>
                        <div id="menuzord" class="menuzord no-bg">
                            <a class="menuzord-brand" href="index.html"><img src="<?php echo trailingslashit(get_template_directory_uri());?>images/logo-wide.png" alt=""></a>
                            <ul class="pull-right hidden-sm hidden-xs ml-30">
                                <li>
                                    <a class="btn btn-colored btn-orange mt-20 p-10 pl-20 pr-20 text-white"
                                       data-bg-color="rgba(1, 203, 217, 0.95)" href="page-booknow.html">BOOKING NOW</a>
                                </li>
                            </ul>
                            <?php wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'menuzord-menu pull-right']);?>
<!--                            <ul class="menuzord-menu pull-right">-->
<!--                                <li><a href="index.html">Home</a></li>-->
<!--                                <li><a href="javascript:void(0)">Pages</a>-->
<!--                                    <ul class="dropdown">-->
<!--                                        <li><a href="page-about.html">About</a></li>-->
<!--                                        <li><a href="page-services.html">Services</a></li>-->
<!--                                        <li><a href="shortcodes.html">Shortcodes</a></li>-->
<!--                                        <li><a href="page-404.html">404</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="javascript:void(0)">Our Staff</a>-->
<!--                                    <ul class="dropdown">-->
<!--                                        <li><a href="staff.html">Our Staff</a></li>-->
<!--                                        <li><a href="staff-details.html">Staff Details</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="javascript:void(0)">Gallery</a>-->
<!--                                    <ul class="dropdown">-->
<!--                                        <li><a href="page-gallery-2-column.html">2 Column</a></li>-->
<!--                                        <li><a href="page-gallery-3-column.html">3 Column</a></li>-->
<!--                                        <li><a href="page-gallery-4-column.html">4 Column</a></li>-->
<!--                                        <li><a href="page-gallery-tiles.html">Titles</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="javascript:void(0)">Blog</a>-->
<!--                                    <ul class="dropdown">-->
<!--                                        <li><a href="blog-2-column.html">Blog</a></li>-->
<!--                                        <li><a href="blog-details.html">Blog Details</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="page-contact.html">Contact</a></li>-->
<!--                            </ul>-->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>