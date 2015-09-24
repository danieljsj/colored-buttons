<?php
/* 
Plugin Name: Colored Boxes
Description: Adds styles to be used with custom html classes like class="button-blue" or class="content-box-red"
Author: 10x Web Solutions
Author URI: http://10x.agency
*/

add_action( 'wp_enqueue_scripts', 'dsj_colored_boxes_enqueues' );
function dsj_colored_boxes_enqueues() {
	wp_enqueue_style( 
		'dsj-colored-boxes', 
		plugin_dir_url(__FILE__).'css/colored-boxes.css', 
		array()
	);
}