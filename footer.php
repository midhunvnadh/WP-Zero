<?php wp_footer(); ?>

<footer class="site-footer py-3">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer-1',
        'menu_id' => 'footer',
        'menu_class' => '',
        'link_before' => '',
        'link_after' => ''
    ));
    ?>
    <div><i class="fas fa-copyright"></i> 2021 - All Rights Reserved</div>
</footer>
</body>

</html>