</div>
</div>
<div class="col-lg-4 widgets-sidebar py-2">
    <div class="container h-100">
        <?php
        if (!is_widget_bar_less_page()) {
            dynamic_sidebar();
        }
        ?>
    </div>
</div>
</div>

</main>
</div>
</div>
</div>
</div>

</div>
<?php
$path = $_SERVER['REQUEST_URI'];
if (strpos($path, '/product/') !== false) :
?>
    <style>
        @media screen and (min-width: 753px) and (min-width: 1500px) {

            body .woocommerce-form .products li.product,
            body .woocommerce .products li.product {
                width: calc((100% / 4) - 34px) !important;
            }
        }
    </style>
<?php
endif;
?>