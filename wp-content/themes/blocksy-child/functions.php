<?php
if (!defined('WP_DEBUG')) {
	die('Direct access forbidden.');
}
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
});


function plenty_get_page_link_by_title($page_title)
{
	if (isset($page_title) && !empty($page_title)) {


		$args = array(
			'post_type' => 'page',
			'posts_per_page' => 1,
			'post_status' => 'publish',
			's' => $page_title,
		);

		$query = new WP_Query($args);


		if ($query->have_posts()) {
			$query->the_post();

			$page_link = get_permalink();

			wp_reset_postdata();

			return $page_link;
		} else {
			return "#";
		}
	} else {
		return "#";
	}
}
