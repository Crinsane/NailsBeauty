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
                            <?php wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'menuzord-menu pull-right']);?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>