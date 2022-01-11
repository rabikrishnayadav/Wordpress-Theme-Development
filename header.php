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
	<title>
		<?php echo get_the_title(); ?>&nbsp; | &nbsp;
		<?php bloginfo('name') ?> 		
	</title>
	<?php wp_head() ?>
</head>
<body>
	<div class="site-main container">
		<header class="site-header">
			<div class="site-branding"></div>
		</header>
		<nav class="site-navigation">
		</nav>
	</div>