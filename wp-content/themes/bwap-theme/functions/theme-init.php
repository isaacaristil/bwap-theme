<?php
/**
 * Theme initialisation
 * 
 * All of this happens only when the theme is activated, thus it should be
 * runing just once.
 */
add_action('after_switch_theme', function(){
    /**
     *  Link attached images directly to the file
     *  
     *  That's usefull if we want to use a popup window management
     */
    update_option('image_default_link_type', 'file');
    
    /**
     *  We don't want to use yearmonths folders for uploads
     */
    update_option('uploads_use_yearmonth_folders', false);
    
    /**
     *  Set Timezone to GMT 1
     */
    update_option('gmt_offset', 1);
    
    /**
     *  Disable the use of smilies
     */
    update_option('use_smilies', false);
    
    /**
     *  Disable pings and trackbacks
     */
    update_option('default_ping_status', false);

    /**
     *  Disable comments
     */
    update_option('default_comment_status', false);
});