<?php
/*
	Plugin Name: SV-Auth
	Plugin Uri: -
	Description: -
	Version: -
	Author: -
	Author Uri: -
*/

$vs_auth_path = dirname(__FILE__);

// Register a new short-code: [vs_auth]

add_shortcode('vs_auth', 'vs_auth_short_code');

require_once $vs_auth_path . '/includes/sv_auth_main.php';
require_once $vs_auth_path . '/template/sv_auth_form.php';
require_once $vs_auth_path . '/includes/sv_auth_validation.php';
require_once $vs_auth_path . '/includes/sv_auth_complate.php';

wp_enqueue_style('style_sv_auth', plugin_dir_url(__FILE__) . '/css/style_sv_auth.css');

add_action('wp_enqueue_style', true);

// The callback function that will replace [book]

function vs_auth_short_code()
{
    ob_start();
    sv_auth_main();
    return ob_get_clean();
}

//register_activation_hook(__FILE__, 'sv_auth_install'); // Activate the plugin SV-Auth

//register_deactivation_hook(__FILE__, 'sv_auth_deactivation'); // Deactivate the plugin SV-Auth

?>