<?php

//adding js to wordpress

function adding_scripts() {

//wp_register_script('uikitJs', get_template_directory_uri() . '/js/uikit.min.js', array('jquery'));	
wp_register_script('jQueryEasing', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js' , array('jquery'));
wp_register_script('classieJs', get_template_directory_uri() . '/js/classie.js', array('jquery'));
wp_register_script('cbpAnimatedHeader', get_template_directory_uri() . '/js/cbpAnimatedHeader.js', array('jquery'));
wp_register_script('freelancerJs', get_template_directory_uri() . '/js/freelancer.js', array('jquery'));
wp_register_script('BootstrapJs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' , array('jquery'));
//wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js' );


//wp_enqueue_script('uikitJs');
//wp_enqueue_script('jquery');
wp_enqueue_script('BootstrapJs');
wp_enqueue_script('jQueryEasing');
wp_enqueue_script('classieJs');
wp_enqueue_script('cbpAnimatedHeader');
wp_enqueue_script('freelancerJs');



}

// adding styles to wordpress

function adding_styles() {
//wp_register_style('uikitCss', get_template_directory_uri() . '/css/uikit.min.css');
wp_register_style('BootstrapCss', get_template_directory_uri() . '/css/bootstrap.min.css');
wp_register_style('styleCss', get_template_directory_uri() . '/style.css');
wp_register_style('fontAwasome', get_template_directory_uri() . '/font-awesome/font-awesome.min.css');
wp_register_style('font1Css', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
wp_register_style('font2Css', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');

//wp_enqueue_style('uikitCss');
wp_enqueue_style('BootstrapCss');
wp_enqueue_style('styleCss');
wp_enqueue_style('fontAwasome');
wp_enqueue_style('font1Css');
wp_enqueue_style('font2Css');

}

// enqueing stylesheets, and js script to wordpress admin area

add_action( 'wp_enqueue_scripts', 'adding_scripts' );
add_action( 'wp_enqueue_scripts', 'adding_styles' );


/*

CUSTOM POST TYPES

*/


add_action( 'init', 'codex_dog_init' );
/**
 * Register a dog post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_dog_init() {
	$labels = array(
		'name'               => _x( 'Dogs', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Dog', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Dogs', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Dogs', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'dog', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Dog', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Dogs', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Dog', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Dogs', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Dogs', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Dogs', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Dogs:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Dogs found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Dogs found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'dog' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'dog', $args );
}

add_action( 'init', 'codex_service_init' );
/**
 * Register a services post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_service_init() {
	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Services', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'services', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Service', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Service', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Service', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Service', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Services', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Service', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Service:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Service found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Service found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'service', $args );
}


add_action( 'init', 'codex_booking_init' );
/**
 * Register a services post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_booking_init() {
	$labels = array(
		'name'               => _x( 'Bookings', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Booking', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Bookings', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Bookings', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'booking', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Booking', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Bookings', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Bookings', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Bookings', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Bookings', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Bookings', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Booking:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Bookings found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Bookings found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'booking' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'booking', $args );
}
