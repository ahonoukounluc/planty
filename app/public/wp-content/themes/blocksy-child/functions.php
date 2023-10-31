<?php
if (!defined('WP_DEBUG')) {
	die('Direct access forbidden.');
}

//hook nav

add_action('after_setup_theme', 'wp_planty_setup');

function wp_planty_setup()
{
	register_nav_menu('main', __('Navigation Menu', 'planty'));
	register_nav_menu('order', __('Navigation Order', 'planty'));
	register_nav_menu('footer', __('Navigation Footer', 'planty'));
}

//Enqueue style

function add_admin_button($items, $args)
{
	$admin_url = get_admin_url();

	if (is_user_logged_in() == true) {
		if ($args->theme_location == 'main') {
			$items .= '<li class="nav-item"><a class="nav-link p-0" href="' . $admin_url . '">Admin</a></li>';
		}
	}
	return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_button', 10, 2);


//Enqueue style

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
});
