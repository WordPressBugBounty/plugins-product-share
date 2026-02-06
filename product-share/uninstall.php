<?php

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

$psfw_options_array = array(
	'product_share_option',
);

foreach ($psfw_options_array as $psfw_key => $psfw_option) {
	delete_option($psfw_option);
}
 