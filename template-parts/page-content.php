<article id="post-<?php the_ID(); ?>" class="post-entry">
    <div class="">
        <div class="container-image-holder">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/sample.jpg'; ?>" class="img-fluid" />
        </div>
        <header class="entry-header py-3">
            <h1 class="m-0"><a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark"><?php the_title(); ?></a></h1>
        </header>
        <div class="text-muted py-2">
            Published
            <?php get_the_date(); ?>
            &nbsp;<i class="fas fa-circle" style="font-size: 6px;"></i>&nbsp;
            &nbsp;<?php echo getPostViews(get_the_ID()); ?> &nbsp;
        </div>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>
</article>