<?php
/*
* This is a part of template it is used to display header
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<style type="text/css">
		body{
			background: <?php echo get_theme_mod('vstheme_body_bg_color','#fff') ?>;
		}
		.site-navigation{
			background: <?php echo get_theme_mod('vstheme_nav_bg_color','#2ca358') ?>;
		}
		.site-navigation a:hover{
			background: <?php echo get_theme_mod('vstheme_nav_li_color','#000') ?>;
		}
	</style>
</head>
<body>
	<div class="site-main container">
		<header class="site-header">
			<div class="site-branding">
				<?php the_custom_logo() ?>
			</div>
		</header>
		<nav class="site-navigation">
			<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
		</nav>
	</div>