<?php
/**
 * The Header for our theme.
 *
 *
 * @package Polis Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <?php wp_head(); ?>
</head>
<body data-siteurl="<?php bloginfo('url');?>/" id="mini-header-body">
<div id="map-bg"></div>
<div class="container shadow">
    <header class="col-md-12 header mini">
        <a href="<?php bloginfo('url');?>" class="col-md-2 left">  <!-- logo -->
            <img src="<?php bloginfo('template_url');?>/img/logo-mini.png">
        </a>
    </header>
    <nav class="col-md-12 nav" id="nav">
        <a href="<?php bloginfo('url');?>">
            <img src="<?php bloginfo('template_url');?>/img/logo-mini.png">
        </a>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
    <div class="content-bg">