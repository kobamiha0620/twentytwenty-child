<?php add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
);
}

if ( isset( $GLOBALS['wp_embed'] ) ) {
	remove_filter( 'the_content', array( $GLOBALS['wp_embed'], 'autoembed' ), 8 );
}

// function my_scripts_method() {
// 	wp_enqueue_script(
// 		'custom_script',
// 		get_template_directory_uri() . '/assets/js/main.js',
// 	);
// }
// add_action('wp_enqueue_scripts', 'my_scripts_method');
