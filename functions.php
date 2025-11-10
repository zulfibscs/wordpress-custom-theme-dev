<?php
register_nav_menus( 
    array('primary-menu' =>'TOP MENU') );
?>
<?php
function mytheme_register_menus() {
    register_nav_menus( array(
        'primary-menu' => 'TOP MENU'
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_menus' );
