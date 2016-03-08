<?php 

#-----------------------------------------------------------------#
# Widget areas
#-----------------------------------------------------------------#
if(function_exists('register_sidebar')) {
	
	register_sidebar(array('name' => 'Blog Sidebar', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	register_sidebar(array('name' => 'Page Sidebar', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	register_sidebar(array('name' => 'WooCommerce Sidebar', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	
	register_sidebar(array('name' => 'Footer Area 1', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	register_sidebar(array('name' => 'Footer Area 2', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	// register_sidebar(array('name' => 'Footer Area 3', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	
	global $options; 
	$footerColumns = (!empty($options['footer_columns'])) ? $options['footer_columns'] : '4';
	if($footerColumns == '5' || $footerColumns == '4'){
		register_sidebar(array('name' => 'Footer Area 3', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	}
	if($footerColumns == '6'){
		register_sidebar(array('name' => 'Footer Area 4', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	}
	register_sidebar(array('name' => 'Footer Menu', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));


	/**
	 *
	 * Frontpage Service Widgets
	 *
	 */
	register_sidebar(array(
		'id' => 'frontpage-service-widget-1',
		'name' => __('Frontpage Social  Widget 1', 'jointstheme'),
		'description' => __('The first Service widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="front-service-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'frontpage-service-widget-2',
		'name' => __('Frontpage Social Widget 2', 'jointstheme'),
		'description' => __('The second Service widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="front-service-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'frontpage-service-widget-3',
		'name' => __('Frontpage Social  Widget 3', 'jointstheme'),
		'description' => __('The third Service widget.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="front-service-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));



}

