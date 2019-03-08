<?php


// Registrar Scripts e CSS

function portfolio_scripts(){
	//Desregistra  o Jquery do WP
	wp_deregister_script('jquery');

	//Registra o Jquery novo 
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js',
		array(), "3.1.1", true);

	//Registra o app.js 
	wp_register_script( 'app', get_template_directory_uri() . '/js/app.js',
		array( 'jquery' ), "1.0", true);


	wp_enqueue_script( 'app' );
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

// CSS
function portfolio_css(){
	wp_register_style('portfolio-style', get_template_directory_uri() . '/style.css', array(), "1.0", false);
	wp_enqueue_style( 'portfolio-style' );
}
add_action( 'wp_enqueue_scripts', 'portfolio_css' );

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');


 /********* SVG *****************/

function cc_mime_types($mimes) {
       $mimes['svg'] = 'image/svg+xml';
       return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


?>