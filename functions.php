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

class wpb_widget extends WP_Widget
{
	function __construct()
	{
		parent::__construct(

			'wpb_widget',
			__('Categories with icons', 'wpb_widget_domain'),
			array('description' => __('Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain'),)
		);
	}
	public function widget($args, $instance)
	{
		$title = apply_filters('widget_title', $instance['title']);
		echo $args['before_widget'];
		if (!empty($title))
			echo $args['before_title'] . $title . $args['after_title'];

		function cmp($a, $b)
		{
			return strcmp($a->name, $b->name);
		}
		$categories = get_categories();
		//var_dump(json_encode($categories));
		usort($categories, "cmp");
		for ($i = 1; $i < sizeof($categories); $i = $i + 2) {
			$category = $categories[$i - 1];
			$category_name = $category->name;
			$category_unique = $category->slug . "_" . $category->term_id;
			$icon_name = $instance[$category_unique];
			$category_link = get_category_link($category->cat_ID);

			$category2 = $categories[$i];
			$category2_name = $category2->name;
			$category2_unique = $category2->slug . "_" . $category2->term_id;
			$icon2_name = $instance[$category2_unique];
			$category2_link = get_category_link($category->cat_ID);
			if ($category2_name == "" || $category_name == "") {
				continue;
			}
			if ($icon_name == "") {
				$icon_name = "fas fa-question-circle";
			}
			if ($icon2_name == "") {
				$icon2_name = "fas fa-question-circle";
			}

?>

			<div class="container-fluid">
				<div class='row text-start'>
					<div class='column text-start'>
						<a class="btn btn-link text-decoration-none w-100 text-start" href="
						<?php echo $category_link; ?>"><i class='<?php echo $icon_name; ?>'></i> <span><?php echo $category_name ?></span></a>
					</div>
					<div class='column text-start'>
						<a class="btn btn-link text-decoration-none w-100 text-start" href="
						<?php echo $category2_link; ?>"><i class='<?php echo $icon2_name; ?>'></i> <span><?php echo $category2_name ?></span></a>
					</div>
				</div>
			</div>
		<?php
		}
		echo $args['after_widget'];
	}
	public function form($instance)
	{
		if (isset($instance['title'])) {
			$title = $instance['title'];
		} else {
			$title = __('New title', 'wpb_widget_domain');
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" placeholder="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<?php

		$categories = get_categories();
		foreach ($categories as $category) {
			$category_name = $category->name;
			$category_unique = $category->slug . "_" . $category->term_id;

			if (isset($instance[$category_unique])) {
				$value = $instance[$category_unique];
			} else {
				$value = __('', 'wpb_widget_domain');
			}
		?>
			<p>
				<label for="<?php echo $this->get_field_id($category_unique); ?>"><?php _e("Icon for $category_name:"); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id($category_unique); ?>" name="<?php echo $this->get_field_name($category_unique); ?>" placeholder="<?php echo $this->get_field_name($category_unique); ?>" type="text" value="<?php echo esc_attr($value); ?>" />
			</p>
<?php
		}
	}
	public function update($new_instance, $old_instance)
	{
		$instance = array();
		foreach ($new_instance as $key => $val) {
			$instance[$key] = (!empty($val)) ? strip_tags($val) : '';
		}
		return $instance;
	}
}
function wpb_load_widget()
{
	register_widget('wpb_widget');
}
add_action('widgets_init', 'wpb_load_widget');


function readingTime($text)
{
	$wordsPerMinute = 200;
	$noOfWords = explode(" ", $text);
	$minutes = sizeof($noOfWords) / $wordsPerMinute;
	if ($minutes <= 1) {
		return "1 minute read";
	}
	return "$minutes minutes read";
}
