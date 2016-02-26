<?php
require('functions/theme-init.php');

if (is_admin()) {
    if (current_user_can('editor')) {
    	require('functions/backend-editor.php');
    }
    require('functions/backend.php');
} else {
    require('functions/frontend.php');
}

require('functions/functions.php');
