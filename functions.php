<?php


	
	register_nav_menu( 'primary', __( 'Primary Menu' ) );
	
	add_theme_support( 'post-thumbnails' );
	
	add_image_size('portada-thumb', 100, 100, true);
	
	register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Estos widgets se mostraran en el lado derecho' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));
	