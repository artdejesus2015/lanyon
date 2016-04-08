<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lanyon Live</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <?php wp_head(); ?>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

    <style>
        @media screen and (max-width: 782px) {
            html {
                margin-top: 0 !important;
            }
        }
    </style>
</head>

<body <?php body_class( 'cbp-spmenu-push' ); ?>>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header>
    <nav class="mobile-nav cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <button type="button" class="menu-toggle"><span class="icon-cross"></span></button>

        <?php

        $defaults = array(
                'theme_location'  => 'primary',
                'menu'            => 'Main Menu',
                'menu_class'      => 'nav navbar-nav'
        );
        wp_nav_menu( $defaults );

        ?>

        <ul class="nav nav-login">
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
        </ul>
    </nav>

    <nav class="navbar navbar-default navbar-menu">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-menu-toggle">
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand light-navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php the_field('light_logo', 'option'); ?>"></a>
                <a class="navbar-brand dark-navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php the_field('dark_logo', 'option'); ?>"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse navbar-menu-collapse">
                <?php

                $defaults = array(
                        'theme_location'  => 'primary',
                        'menu'            => 'Main Menu',
                        'menu_class'      => 'nav navbar-nav'
                );
                wp_nav_menu( $defaults );

                ?>

                <ul class="nav nav-login">
                    <li><a href="#">Login</a></li>
                    <li class="active"><a href="#">Register</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>
</header>