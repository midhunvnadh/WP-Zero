<?php
get_header();

get_template_part('template-parts/theme-common/a', get_post_type());

?>				
	<?php
	while (have_posts()) : the_post();

		get_template_part('template-parts/page-content', 'page');

	endwhile;
	?>
<?php
get_template_part('template-parts/theme-common/b', get_post_type());
get_footer();
?>