<?php
get_header();

get_template_part('template-parts/theme-common/a', get_post_type());

while (have_posts()) : the_post();
	setPostViews(get_the_ID());
	get_template_part('template-parts/post-content', get_post_type());

endwhile;
get_template_part('template-parts/theme-common/b', get_post_type());
get_footer();
