<?php
get_header();

get_template_part('template-parts/theme-common/a', get_post_type());
?>
<section class="page-section text-center">
	<div class="page-content">
		<img src="<?php get_404_meme_link() ?>" height="200px" width="auto" class="rounded" />
	</div>
	<header class="page-header py-5">
		<h1>404</h1>
		<p>Page not found.</p>
	</header>
</section>
<?php
get_template_part('template-parts/theme-common/b', get_post_type());
get_footer();
