<?php
/**
 * Plugin Name: Dev. Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-addon
 */

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/widget-1.php' );
	require_once( __DIR__ . '/widgets/widget-2.php' );

	$widgets_manager->register( new \Elementor_Widget_1() );
	$widgets_manager->register( new \Elementor_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );