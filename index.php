<?php
get_header();
get_template_part('template-parts/theme-common/a', get_post_type());
?>

<?php
if (have_posts()) : while (have_posts()) : the_post();
		get_template_part('template-parts/content', get_post_type());
	endwhile;

	get_template_part("template-parts/pagination");

endif;
?>

<?php
get_template_part('template-parts/theme-common/b', get_post_type());
get_footer();
?>