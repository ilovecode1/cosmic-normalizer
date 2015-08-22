<?php
/* 
Plugin Name: Normalizer
Description: The unoffical Normalize.css Wordpress Plugin
Version: 1.1.0
Author: Cosmic Web Services
Author URI: http://cosmicsearch.org
*/

function ecpt_normalizer() {
	wp_enqueue_style('normalizer', plugin_dir_url(__FILE__) .'normalize.min.css', '', '3.0.2');
}
add_action('wp_enqueue_scripts', 'ecpt_normalizer');
