<?php
$options = get_option('stp_api_settings');
?>
<div class="container-fluid app-start">
    <?php get_template_part("template-parts/sm-navigation"); ?>
    <div class="row main-row">
        <div class="main-col-1 col-lg-2 col-sm-12 px-0">
            <?php get_sidebar(); ?>
        </div>
        <div class="main-col-2 col-lg-10 col-sm-12 px-0">
            <div id="content" class="site-content container-fluid">
                <main id="main" class="site-main" role="main">
                    <header class="site-header py-4" id="site-header">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12 px-0 text-center">
                                <div class="container sm-header-holder">
                                    <div class="nav-toggle-holder">
                                        <span class="navigation-toggle"><i class="fas fa-bars"></i></span>
                                    </div>
                                    <div class="content">
                                        <h5><?php bloginfo('title'); ?><span class="site-desc"> - <?php bloginfo('description'); ?></span></h5>
                                        <p><?php
                                            $options = get_option('stp_api_settings');
                                            $value = $options['monk_desc_short'] === "" ? "Enter the Value in settings!" : $options['monk_desc_short'];
                                            echo $value;
                                            ?></p>
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