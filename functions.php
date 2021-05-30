<?php
add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_theme_support('html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
));

function untheme_nav_init()
{
	register_nav_menus(array(
		'menu-1' => 'Primary Menu',
	));
}
add_action('init', 'untheme_nav_init');

function untheme_widgets_init()
{
	register_sidebar(array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'untheme_widgets_init');

function untheme_scripts()
{
	wp_enqueue_style('untheme-style', get_stylesheet_uri());
	wp_enqueue_style('untheme-custom-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_script('untheme-scripts', get_template_directory_uri() . '/assets/js/scripts.js');
}
add_action('wp_enqueue_scripts', 'untheme_scripts');

function untheme_create_post_custom_post()
{
	register_post_type(
		'custom_post',
		array(
			'labels' => array(
				'name' => __('Custom Post', 'untheme'),
			),
			'public'       => true,
			'hierarchical' => true,
			'supports'     => array(
				'title',
				'editor',
				'excerpt',
				'custom-fields',
				'thumbnail',
			),
			'taxonomies'   => array(
				'post_tag',
				'category',
			)
		)
	);
}
add_action('init', 'untheme_create_post_custom_post'); // Add our work type

function wpse_relative_date()
{
	echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago';
}
add_filter('get_the_date', 'wpse_relative_date');

add_shortcode('template_dir', function ($atts) {
	return get_template_directory_uri() . '/images/' . $atts;
});


function getPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}
	return $count . ' Views';
}
function setPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
// Remove issues with prefetching adding extra views
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
function the_sample_image()
{
	echo get_template_directory_uri() . "/assets/images/sample.jpg";
}
