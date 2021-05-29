<aside class="site-side p-3 text-center">
	<h3 class="site-title font-weight-bold py-1"></h3>
	<div class="site-icon-disp"></div>
	<p class="site-title pb-3"><?php bloginfo('description'); ?>The answer is yes. You could run php code in editor. But that is not for proper way of adding images. Instead, you should create shortcodes to get those images from theme folder or use like below codes


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
	<div class="container-fluid my-4">
		<div class="d-flex justify-content-stretch px-2">
			<button class="btn btn-secondary w-100"><i class="fas fa-lock"></i> Login</button>
		</div>
	</div>
	<div class="d-flex justify-content-start flex-column">
		<button type="button" class="btn btn-link text-decoration-none font-weight-bold my-2 text-start d-flex justify-content-start text-secondary">
			<i class="fas fa-home" style="font-size: 21px;"></i>
			<span>&nbsp;Blog Home</span>
		</button>
		<button type="button" class="btn btn-link text-decoration-none font-weight-bold my-2 text-start d-flex justify-content-start">
			&nbsp;<i class="fas fa-bookmark" style="font-size: 21px;"></i>
			<span>&nbsp;&nbsp;Blog Post</span>
		</button>
		<button type="button" class="btn btn-link text-decoration-none font-weight-bold my-2 text-start d-flex justify-content-start">
			&nbsp;<i class="fas fa-user" style="font-size: 21px;"></i>
			<span>&nbsp;About Me</span>
		</button>
	</div>
	<nav class="main-navigation">
		<?php
		/*wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                        ));*/
		?>
	</nav>
</aside>