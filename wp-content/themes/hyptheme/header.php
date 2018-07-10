<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_template_directory_uri (); ?>/dist/img/public/favicon.png" rel="shortcut icon"  >

    <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow" />
    <?php } ?>
    <title>    </title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">-->
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

</head>

<body id="body" <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage" >
<header class="headerMain" itemscope itemtype="http://schema.org/WPHeader">
    <div class="innerContainer">
        <div class="logoContainer col-xs-4 col-sm-2 col-md-2">
            <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_url')?>/dist/img/logo.png" alt=""/></a>
        </div>
        <!-- ================== NAVBAR ================ -->
        <nav class="mynavbarBig navbar navbar-default col-xs-8 col-sm-7 col-md-8" role="navigation" itemscope itemtype="http://www.schema.org/SiteNavigationElement">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <?php
            wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
            );
            ?>

        </nav>

        <!-- ================== INFO PHONES ================ -->
        <div class="contactContainerBig col-xs-4 col-sm-3 col-md-2">
            <?php get_template_part('header-contact-us');?>
        </div>

        <div class="contactContainer col-xs-12 col-sm-3 col-md-2">
            <?php get_template_part('header-contact-us');?>
        </div>
        <!-- ================== END INFO PHONES ================ -->

    </div>

<!--           --><?php //get_template_part ('page-login');?>
    <!-- ================== END  NAVBAR ================ -->
</header>
