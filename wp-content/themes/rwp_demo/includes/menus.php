<?php
register_nav_menu( 'main_menu', 'Huvudmenyn' );

/**
 * Bootstrap wants to have 'current' as class on the active page
 */
function add_current_class_to_active_page( $menu_items ) {
	return str_replace('current-menu-item', 'current-menu-item active', $menu_items);
}
add_filter( 'wp_nav_menu', 'add_current_class_to_active_page' );