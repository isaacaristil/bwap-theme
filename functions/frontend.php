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
});

/**
 *  Removing the admin bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 *  Removing Rest support
 */
add_filter('rest_enabled', '_return_false');
add_filter('rest_jsonp_enabled', '_return_false');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11, 0 );

/**
 *  Removing useless Meta
 */
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); //remove shortlink
remove_action('wp_head', 'wp_generator'); //remove Generator
remove_action('wp_head', 'rsd_link'); //remove RSD
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest

/**
 *  Removing Emojies
 */
remove_action('wp_head', 'print_emoji_detection_script', 7); //Remove Emojies JS
remove_action('wp_print_styles', 'print_emoji_styles'); //Remove Emojies CSS

/**
 *  Removing RSS feeds. Don't add this if you need RSS feeds
 */
remove_action('wp_head', 'feed_links_extra', 3); //Extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // General feeds: Post and Comment Feed

/**
 *  Custom login logo
 */
add_action('login_enqueue_scripts', function () {
    echo '
    <style type="text/css">
        .login h1 a {
            background-image: url('.get_stylesheet_directory_uri().'/images/logo.svg);
            width:100%;
            padding-bottom: 30px;
        }
    </style>';
});

add_filter( 'login_headerurl', 'get_home_url' );
add_filter( 'login_headertitle', '__return_empty_string' );
