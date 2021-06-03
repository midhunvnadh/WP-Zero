<?php
$options = get_option('stp_api_settings');
?>
<aside class="site-side p-3 text-center">
	<h3 class="site-title font-weight-bold py-1"></h3>
	<?php if (has_site_icon()) : ?>
		<div>
			<img src="<?php site_icon_url(); ?>" class="site-icon-disp" />
		</div>
	<?php endif; ?>
	<p class="site-desc text-secondary pb-3">
		<?php
		$value = $options['monk_desc_long'] === "" ? "Enter the Value in settings!" : $options['monk_desc_long'];
		echo $value;
		?>
	</p>
	<div class="icons d-flex">
		<?php $option = $options["yt_link"] == "" ? "https://youtube.com" : $options["yt_link"]; ?>
		<a class="icon btn btn-light m-1 rounded-circle" href="<?php echo $option; ?>" target="_blank">
			<span class="text-success">
				<i class="fab fa-youtube text-success"></i>
			</span>
		</a>
		<?php $option = $options["tg_link"] == "" ? "https://telegram.org" : $options["tg_link"]; ?>
		<a class="icon btn btn-light m-1 rounded-circle" href="<?php echo $option; ?>" target="_blank">
			<span class=" text-success">
				<i class="fab fa-telegram text-success"></i>
			</span>
		</a>
		<?php $option = $options["fb_link"] == "" ? "https://fb.com" : $options["fb_link"]; ?>
		<a class="icon btn btn-light m-1 rounded-circle" href="<?php echo $option; ?>" target="_blank">
			<span class="text-success">
				<i class="fab fa-facebook-f text-success"></i>
			</span>
		</a>
		<?php $option = $options["tw_link"] == "" ? "https://twitter.com" : $options["tw_link"]; ?>
		<a class="icon btn btn-light m-1 rounded-circle" href="<?php echo $option; ?>" target="_blank">
			<span class="text-success">
				<i class="fab fa-twitter text-success"></i>
			</span>
		</a>
	</div>
	<div class="container-fluid my-3 menu">
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
</aside>