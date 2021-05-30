<aside class="site-side p-3 text-center">
	<h3 class="site-title font-weight-bold py-1"></h3>
	<div class="site-icon-disp"></div>
	<p class="site-desc text-secondary pb-3"><?php bloginfo('description'); ?>The answer is yes. You could run php code in editor. But that is not for proper way of adding images. Instead, you should create shortcodes to get those images from theme folder or use like below codes


	</p>
	<div class="icons d-flex">
		<div class="icon btn btn-light m-1 rounded-circle">
			<span class="text-success">
				<i class="fab fa-facebook-f text-success"></i>
			</span>
		</div>
		<div class="icon btn btn-light m-1 rounded-circle">
			<span class="text-success">
				<i class="fab fa-facebook-f text-success"></i>
			</span>
		</div>
		<div class="icon btn btn-light m-1 rounded-circle">
			<span class="text-success">
				<i class="fab fa-facebook-f text-success"></i>
			</span>
		</div>
		<div class="icon btn btn-light m-1 rounded-circle">
			<span class="text-success">
				<i class="fab fa-facebook-f text-success"></i>
			</span>
		</div>
		<div class="icon btn btn-light m-1 rounded-circle">
			<span class="text-success">
				<i class="fab fa-facebook-f text-success"></i>
			</span>
		</div>
	</div>
	<div class="container-fluid my-4 menu">
		<?php
		wp_nav_menu(array(
			'theme_location' => 'menu-1',
			'menu_id' => 'primary-menu',
			'menu_class' => '',
			'link_before' => '<button class = "btn btn-outline-secondary w-100 my-1 border-2">',
			'link_after' => '</button>',
		));
		?>
	</div>

	<nav class="main-navigation">
	</nav>
</aside>