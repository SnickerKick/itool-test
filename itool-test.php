<?php
/*
Plugin Name: Insight Tools Test Plugin
Plugin URI: https://insight-tools.com
Description: A Plugin to allow me to play around with developing plugins
Version: 1.0
Author: Ron Zandbergen
Author URI: https://insight-tools.com
License: GPL2
*/

/**
 * This plugin creates a simple widget
 */

// Activate the widget

add_action('widgets_init', 'test_widget');

function test_widget() {
    register_widget('ITool_Test_Widget');
}

// Define the widget

class ITool_Test_Widget extends WP_Widget {
    
    public function __construct() {
        $widget_ops = array(
            'classname' => 'itool_test_widget',
            'description' => "Insight Tools Test Widget",
        );
        parent::__construct('itool_test_widget', 'ITool Test Widget', $widget_ops);
    }
    
    public function widget( $args, $instance) {
        echo 'Testing, Testing...  Is this thing on?';
    }
}

