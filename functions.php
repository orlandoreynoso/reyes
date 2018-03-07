<?php 
/* devuelve el directorio de stilo de css, y se le asigna a temppath */
define('TEMPPATH',get_bloginfo('stylesheet_directory'));
/*En esto concatenamos la carpeta images*/
define('IMAGES',TEMPPATH. "/images");
// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
// add_image_size( $name, $width, $height, $crop );
include (TEMPLATEPATH . '/libs/the_breadcrumb.php');
// include (TEMPLATEPATH . '/libs/menu_mujer.php');
include (TEMPLATEPATH . '/libs/back_to_top.php');
include (TEMPLATEPATH . '/libs/entradas.php'); 
/*====================== ESTO ES PARA LAS CATEGORIAS ===============================*/
include (TEMPLATEPATH . '/libs/showcategoryold.php');
/*=============================== Menu ====================*/
include (TEMPLATEPATH . '/libs/menu.php');
/*=========  Para actualizar mi foto de perfil en la home ======================*/
include (TEMPLATEPATH . '/libs/sidebar.php');
/*============= paginacion copiada de la web ==============*/
include (TEMPLATEPATH . '/libs/paginacion.php');
?>