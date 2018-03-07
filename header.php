<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>  
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">    
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">    
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/analitycs.js'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/efecto.js'></script>
    <?php wp_head(); ?>
</head>
<body>
<div id="contenedor">

    <?php if (is_page(4 )): ?>
    <?php include TEMPLATEPATH.'/template/header_home.php'; ?>        
    <?php else: ?>
    <?php include TEMPLATEPATH.'/template/header.php' ?>
    <?php endif ?>


