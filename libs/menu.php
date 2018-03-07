<?php 

$args = array(
	'menu'            => 'nav',
	'menu_id' => 'navlist',
	'menu_class'      => 'cssmenu zerogrid'
);


if (function_exists('register_nav_menus')) 
{
	register_nav_menus($args);
} 

/*

function showMenu(){
	$args = array(
		'menu'            => 'nav',
		'menu_id' => 'navlist',
		'menu_class'      => 'zerogrid cssmenu'
	);

	wp_nav_menu($args);

}

*/
function showMenu(){
    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu', /* tambien lo que contiene el  Ul primero*/
        "container"=>"",  /*ESto es lo que contiene al menu por ejemplo nav, 
        pero lo quito ya que en el header incluyo el nav para controlarlo.*/
    );
    wp_nav_menu($args);
}

?>