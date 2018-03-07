<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>
<?php  global $post; ?>
<body class="pg_<?php echo $post->post_name;  ?> ">

	<?php
	  if ($post->post_name === 'inicio') {

	  get_template_part( 'sdincludes/menu', 'frontpage');

	} else {
	  get_template_part( 'sdincludes/menu', 'general');
	}


?>
