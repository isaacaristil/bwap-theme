<?php
/**
 *  Hide menu items
 */
add_action('admin_menu', function() {
	/**
     *  Remove menus items
     */
    remove_menu_page('mainwp_child_tab');
	remove_menu_page('upload.php');
}, 999 );