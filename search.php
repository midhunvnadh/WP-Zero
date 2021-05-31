<?php
get_header();

get_template_part('template-parts/theme-common/a', get_post_type());

if (have_posts()) : ?>

	<header class="page-header">
		<h1>Results: <?php echo get_search_query(); ?></h1>
	</header>

	<?php
	while (have_posts()) : the_post();
		get_template_part('template-parts/content', 'search');
	endwhile;

else : ?>

	<p>Sorry, but nothing matched your search terms.</p>

<?php
endif;
get_template_part('template-parts/theme-common/b', get_post_type());
get_footer();
?>