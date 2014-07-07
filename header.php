<?php
/**
 * La cabecera para nuestro tema.
 *
 * @package WordPress
 * @subpackage Primeras-Huellitas
 * @since Primeras Huellitas 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <title><?php wp_title(''); ?></title>
    <meta name="description" content="Proyecto Educativo que representa para el niño la posibilidad de ampliar su relación con el mundo." />
    <meta name="author" content="Adaptar.ME">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Indie+Flower'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/base.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/skeleton.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.flexslider.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
    <div class="background-header">
        <header role="banner">
            <div class="container">
                <div class="sixteen columns">
                    <nav id="navigation-menu" class="clearfix der" role="navigation">
                        <h3 class="ocultar">Menu</h3>
                        <ul id="navigation-menu">
                            <li><a href="#nosotros">Nosotros</a></li>
                            <li><a href="#servicios">Servicios</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <h1><a href="#top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="scale-with-grid"/></a></h1>
            </div>
        </header>
    </div>

    <div class="container">
        <div class="clearfix" role="main">