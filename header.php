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