<?php 

function add_menu() {
  register_nav_menu('header-menu', 'Header Menu' );
}
add_action( 'init', 'add_menu' );

function add_script() {
 
	wp_register_script('jquery-1', 'https://code.jquery.com/jquery-1.12.4.js' , '', '', false);
	wp_enqueue_script('jquery-1');
}
  
add_action( 'wp_enqueue_scripts', 'add_script' );  

function create_sidebar(){
	$args = array(
		'name'          => 'Sidebar 1',
		'id'            => "sidebar",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	);
	register_sidebar( $args );
}
add_action('init','create_sidebar');
?>