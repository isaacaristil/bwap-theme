<?php
/**
 *  Enqueue files
 *  Your CSS and JS files goes here
 */
add_action('wp_enqueue_scripts', function(){
	wp_register_style('styles', get_bloginfo( 'template_url' ) . '/style.css', false, 1);
	wp_enqueue_style('styles');

	wp_deregister_script('jquery');
    wp_deregister_script('wp-embed');
    /*
    wp_register_script('scripts', get_bloginfo( 'template_url' ).'/js/scripts.js', null, null, true );
    wp_enqueue_script('scripts');
    */
});

/**
 *  Removing the admin bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 *  Remove login logo
 */
add_action('login_enqueue_scripts', function () {
    echo '
    <style type="text/css">
        .login h1 a {
            background-image: none;
            width:100%;
            padding-bottom: 30px;
        }
    </style>';
});

add_filter( 'login_headerurl', 'get_home_url' );
add_filter( 'login_headertitle', '__return_empty_string' );
