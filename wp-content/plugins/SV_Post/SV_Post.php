<?php
/*
	Plugin Name: SV-Post
	Plugin Uri: -
	Description: -
	Version: -
	Author: -
	Author Uri: -
*/
$vs_post_path = dirname(__FILE__);

// Register a new short-code: [vs_post]

add_shortcode('vs_post', 'vs_post_short_code');

require_once $vs_post_path . '/includes/sv_post_main.php';

require_once $vs_post_path . '/includes/sv_post_complate.php';


// The callback function that will replace [book]

function vs_post_short_code()
{
    ob_start();
    sv_post_main();
    return ob_get_clean();
}

//register_activation_hook(__FILE__, 'sv_auth_install'); // Activate the plugin SV-Auth

//register_deactivation_hook(__FILE__, 'sv_auth_deactivation'); // Deactivate the plugin SV-Auth


?>