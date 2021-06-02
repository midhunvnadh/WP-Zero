<?php
echo "<div class = 'd-flex justify-content-end'>";
the_posts_pagination(array(
    'prev_text' => __('<button class = "btn btn-outline-dark my-2"><i class = "fas fa-arrow-left"></i>  Previous</button>'),
    'next_text' => __('<button class = "btn btn-outline-dark my-2">Next <i class = "fas fa-arrow-right"></i></button>'),
    'before_page_number' => '<button class = "btn btn-outline-dark my-2">',
    'after_page_number'  => '</button>',
    'end_size'           => 1,
));
echo "</div>";
