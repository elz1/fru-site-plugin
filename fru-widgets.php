<?php
/*
Plugin Name: Fruition Widgets
Description: Plugin to add a custom widgets for Fruition.net
Version: 1.0
Author: Lauren Zandstra
*/
define( 'FRUWIDGETS__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
require_once( FRUWIDGETS__PLUGIN_DIR . 'class.fru-widgets.php' );

// Register and load the widget
function load_fru_widgets() {
	register_widget( 'job_widget' );
	register_widget( 'Thumbs_Recent_Posts' );
}

add_action( 'widgets_init', 'load_fru_widgets' );




?>
