<article id="post-<?php the_ID(); ?>" class="post-entry mb-5">
	<div class="bg-white shadow rounded">
		<div class="row">
			<div class="col-lg-3 col-sm-12 px-0">
				<div class="container-image-holder">
					<?php
					if (has_post_thumbnail()) :
					?>
						<div class="image" style="background-image: url(<?php the_post_thumbnail_url() ?>);"></div>
					<?php
					else :
					?>
						<div class="image" style="background-image: url(<?php the_sample_image(); ?>);"></div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-9 col-sm-12 py-3 px-0">
				<div class="container">
					<header class="entry-header">
						<h6 class="m-0"><a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark"><?php the_title(); ?></a></h6>
					</header>
					<div class="text-muted py-2">
						Published
						<?php get_the_date(); ?><br />
						<?php echo readingTime(get_the_content()); ?>&nbsp;
						<i class="fas fa-circle" style="font-size: 6px;"></i>
						&nbsp;<?php echo getPostViews(get_the_ID()); ?> &nbsp;
					</div>
					<div class="entry-content">
						<?php echo implode(' ', array_slice(explode(' ', get_the_excerpt()), 0, 10)) . "..."; ?>
					</div>
					<div class="py-2">
						<a href="<?php the_permalink(); ?>" class="text-decoration-none">Read <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>