<?php

//adding js to wordpress

function adding_scripts() {

//wp_register_script('uikitJs', get_template_directory_uri() . '/js/uikit.min.js', array('jquery'));	
wp_register_script('jQueryEasing', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js' , array('jquery'));
wp_register_script('classieJs', get_template_directory_uri() . '/js/classie.js', array('jquery'));
wp_register_script('cbpAnimatedHeader', get_template_directory_uri() . '/js/cbpAnimatedHeader.js', array('jquery'));
wp_register_script('freelancerJs', get_template_directory_uri() . '/js/freelancer.js', array('jquery'));
wp_register_script('BootstrapJs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' , array('jquery'));

//wp_enqueue_script('uikitJs');
wp_enqueue_script('classieJs');
wp_enqueue_script('cbpAnimatedHeader');
wp_enqueue_script('freelancerJs');
wp_enqueue_script('BootstrapJs');
wp_enqueue_script('jQueryEasing');


}

// adding styles to wordpress

function adding_styles() {
//wp_register_style('uikitCss', get_template_directory_uri() . '/css/uikit.min.css');
wp_register_style('BootstrapCss', get_template_directory_uri() . '/css/bootsrap.min.css');
wp_register_style('styleCss', get_template_directory_uri() . '/style.css');
wp_register_style('font1Css', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
wp_register_style('font2Css', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');

//wp_enqueue_style('uikitCss');
wp_enqueue_style('BootstrapCss');
wp_enqueue_style('styleCss');
wp_enqueue_style('font1Css');
wp_enqueue_style('font2Css');

}

// enqueing stylesheets, and js script to wordpress admin area

add_action( 'wp_enqueue_scripts', 'adding_scripts' );
add_action( 'wp_enqueue_scripts', 'adding_styles' );

?>
