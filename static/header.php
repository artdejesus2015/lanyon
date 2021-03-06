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

    <!-- Css Styles-->
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/plugin/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/plugin/component.css">
    <link rel="stylesheet" href="css/plugin/animations.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="cbp-spmenu-push">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header>
    <nav class="mobile-nav cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <ul class="nav navbar-nav">
            <?php
            $full_name = $_SERVER['PHP_SELF'];
            $name_array = explode('/',$full_name);
            $count = count($name_array);
            $page_name = $name_array[$count-1];
            ?>
            <li class="<?php echo ($page_name=='index.php')?'active':'';?>"><a href="index.php">Home</a></li>
            <li class="<?php echo ($page_name=='registration.php')?'active':'';?>"><a href="registration.php">Registration</a></li>
            <li class="<?php echo ($page_name=='agenda.php')?'active':'';?>"><a href="agenda.php">Agenda</a></li>
            <li class="<?php echo ($page_name=='info.php')?'active':'';?>"><a href="info.php">Info</a></li>
            <li class="<?php echo ($page_name=='travel.php')?'active':'';?>"><a href="travel.php">Travel</a></li>
            <li class="<?php echo ($page_name=='sponsors.php')?'active':'';?>"><a href="sponsors.php">Sponsor</a></li>
        </ul>

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
                <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse navbar-menu-collapse">
                <ul class="nav navbar-nav">

                    <?php
                    $full_name = $_SERVER['PHP_SELF'];
                    $name_array = explode('/',$full_name);
                    $count = count($name_array);
                    $page_name = $name_array[$count-1];
                    ?>
                    <li class="<?php echo ($page_name=='index.php')?'active':'';?>"><a href="index.php">Home</a></li>
                    <li class="<?php echo ($page_name=='registration.php')?'active':'';?>"><a href="registration.php">Registration</a></li>
                    <li class="<?php echo ($page_name=='agenda.php')?'active':'';?>"><a href="agenda.php">Agenda</a></li>
                    <li class="<?php echo ($page_name=='info.php')?'active':'';?>"><a href="info.php">Info</a></li>
                    <li class="<?php echo ($page_name=='travel.php')?'active':'';?>"><a href="travel.php">Travel</a></li>
                    <li class="<?php echo ($page_name=='sponsors.php')?'active':'';?>"><a href="sponsors.php">Sponsor</a></li>
                </ul>

                <ul class="nav nav-login">
                    <li><a href="#">Login</a></li>
                    <li class="active"><a href="#">Register</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>
</header>