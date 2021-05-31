<div class="container-fluid app-start">
    <div class="row main-row">
        <div class="main-col-1 col-lg-2 col-sm-12 px-0">
            <?php get_sidebar(); ?>
        </div>
        <div class="main-col-2 col-lg-10 col-sm-12 px-0">
            <div id="content" class="site-content">
                <main id="main" class="site-main" role="main">
                    <header class="site-header py-4" id="site-header">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12 px-0 text-center">
                                <div class="container">
                                    <div class="content">
                                        <h5><?php bloginfo('title'); ?> - <?php bloginfo('description'); ?></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 px-0 py-2 d-flex align-items-end">
                                <div class="container">
                                    <div class="d-flex justify-content-center align-items-end">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="row">
                        <?php if (is_widget_bar_less_page()) { ?>
                            <div class="col-lg-12">
                                <div class="container p-3 posts-holder">
                                <?php } else { ?>
                                    <div class="col-lg-8">
                                        <div class="container p-5 posts-holder">
                                        <?php } ?>