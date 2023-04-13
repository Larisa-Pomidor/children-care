<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Page title -->
    <title>Абетка - це найкращий дитячий садок</title>
    <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
    <!-- Favicons-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Page width 'Boxed' of 'Full' -->
    <div class="full">
        <!-- Preloader -->
        <div id="preloader" style="display: none">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-custom navbar-fixed-top">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="navbar-brand-centered page-scroll">
                    <a href="#page-top"><?php the_custom_logo() ?></a>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
                <div class="container">
                    <ul class="nav navbar-nav page-scroll navbar-left">
                        <li><a href="#services">Послуги</a></li>
                        <li><a href="#about">Про нас</a></li>
                        <li><a href="#team">Колектив</a></li>
                    </ul>
                    <ul class="nav navbar-nav page-scroll navbar-right">
                        <li><a href="#activities">Заняття</a></li>
                        <li><a href="#gallery">Фото</a></li>
                        <li><a href="#contact">Контакти</a></li>

                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- /navbar ends -->