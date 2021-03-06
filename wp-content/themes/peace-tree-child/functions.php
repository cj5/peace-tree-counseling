<?php
function my_theme_enqueue_styles() {

	$parent_style = 'peace-tree-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// enqueue scripts.js
function my_scripts_method() {
  wp_enqueue_script(
      'custom-script',
      get_stylesheet_directory_uri() . '/js/scripts.js',      
      array( 'jquery' )
  );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

?>