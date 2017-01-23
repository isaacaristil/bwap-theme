<?php
/**
 * Theme constants
 *
 * define the constants used in the theme here
 */
//define('','');

/**
 * Theme functions
 */
if (is_admin()) {
    if (current_user_can('editor')) {
    	require('functions/backend-editor.php');
    }
    require('functions/backend.php');
} else {
    /**
     * Include helpers
     *
     * Uncomment if needed
     */
    //require('classes/Page.php');

    require('functions/frontend.php');
    require('functions/theme-init.php');
}

require('functions/functions.php');

/**
 *  Uncomment for WooCommerce usage
 */
//require('functions/woocommerce/wc.init.php');

/**
 * Add theme configuration
 */

// requires https://github.com/alanpilloud/bwap-ga
// add_theme_support('google-analytics', 'UA-CODE');

// requires https://github.com/alanpilloud/bwap-ga
// add_theme_support('cleaner');
