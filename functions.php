<?php


	
	register_nav_menu( 'primary', __( 'Primary Menu' ) );
	
	add_theme_support( 'post-thumbnails' );
	
	add_image_size('portada-thumb', 100, 100, true);
	
	register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));
	