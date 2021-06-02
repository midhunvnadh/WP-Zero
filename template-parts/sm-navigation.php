<div class="sm-nav p-3" style="display: none;overflow-y:auto">
    <div class="container close-holder pt-5">
        <span class="close" id="close"><i class="fas fa-times"></i></span>
    </div>
    <div class="container d-flex justify-content-center">
        <?php get_search_form(); ?>
    </div>
    <div class="container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-1',
            'menu_id' => 'primary-menu',
            'menu_class' => '',
        ));
        ?>
    </div>
</div>