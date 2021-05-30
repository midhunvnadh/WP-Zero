<?php
get_header();

get_template_part('template-parts/theme-common/a', get_post_type());

?>				
	<?php
	while (have_posts()) : the_post();

		get_template_part('template-parts/page-content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile;
	?>
<?php
get_template_part('template-parts/theme-common/b', get_post_type());
get_footer();
?>