<?php
function mytheme_setup() {

    // Register navigation menus
    register_nav_menus( array(
        'primary-menu' => __( 'Top Menu', 'mytheme' ),
    ) );

    // Enable featured image support
    add_theme_support( 'post-thumbnails' );

    // Enable custom header support
    add_theme_support( 'custom-header' );
}

// Hook it so WordPress runs it at the right time
add_action( 'after_setup_theme', 'mytheme_setup' );
?>
