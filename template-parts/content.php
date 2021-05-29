<?php
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
?>
<article id="post-<?php the_ID(); ?>" class="post-entry">
	<div class="bg-white shadow rounded">
		<div class="row">
			<div class="col-3 px-0">
				<div class="container-image-holder">
					<div class="image" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/sample.jpg'; ?>);"></div>
				</div>
			</div>
			<div class="col-9 py-3 px-0">
				<div class="container">
					<header class="entry-header">
						<h6 class="m-0"><a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark"><?php the_title(); ?></a></h6>
					</header>
					<div class="text-muted py-2">
						Published
						<?php get_the_date(); ?>
						&nbsp;<i class="fas fa-circle" style="font-size: 6px;"></i>&nbsp;
						<?php echo readingTime(get_the_content()); ?>&nbsp;
						<i class="fas fa-circle" style="font-size: 6px;"></i>
						&nbsp;<?php echo getPostViews(get_the_ID()); ?> &nbsp;
					</div>
					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div>
					<div>
						<a href="<?php the_permalink(); ?>" class="text-decoration-none">Read <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>