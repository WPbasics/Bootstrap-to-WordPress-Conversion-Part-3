<?php

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

// Theme Setup

function wpbasics_theme_setup(){
    // Nav Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );
}

add_action('after_setup_theme', 'wpbasics_theme_setup');