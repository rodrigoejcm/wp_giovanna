<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts(){

	if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        wp_deregister_script('giovanna-jquery-js');
        wp_register_script('giovanna-jquery-js', 'https://code.jquery.com/jquery-3.1.0.min.js', false, '3.1.0');
        wp_enqueue_script('giovanna-jquery-js');
    }

	wp_register_script('modernizr', get_bloginfo('template_url') . '/js/modernizr.js');
	wp_enqueue_script('modernizr');

	wp_register_script('livereload', 'http://:35729/livereload.js?snipver=1', null, false, true);
	wp_enqueue_script('livereload');

	wp_enqueue_script( 'giovanna-font-typekit', 'https://use.typekit.net/xuw0ghm.js'); 	

	wp_enqueue_script( 'giovanna-font-typekit-load', get_template_directory_uri() . '/js/typekit-load.js', array(), '20151215', false );

	wp_enqueue_style( 'giovanna-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

	wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');

	wp_enqueue_script( 'giovanna-parallax',  get_bloginfo('template_url') . '/js/parallax.min.js', array(), false, true); 	

	$path_giovanna= array( 'img_path' => get_template_directory_uri().'/images/');
	wp_register_script('giovanne-global-js', get_template_directory_uri().'/js/global.js',array(), null , true);
	wp_localize_script('giovanne-global-js', 'path_giovanna', $path_giovanna );
	
	wp_enqueue_script('giovanne-global-js');

}

//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu'
		)
	);
}
add_action( 'init', 'register_menus' );

function register_widgets(){

	register_sidebar( array(
		'name' => __( 'Sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}//end register_widgets()
add_action( 'widgets_init', 'register_widgets' );
