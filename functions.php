<?php
require('functions/theme-init.php');

if(current_user_can('editor')) {
	require('functions/backend-editor.php');
}
require('functions/backend.php');
require('functions/frontend.php');
require('functions/functions.php');