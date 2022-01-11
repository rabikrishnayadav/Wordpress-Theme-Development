<?php
/*
* This template is used display pages
*/
get_header(); // this function for include header file
?>
<div class="container">
	<div class="custom-header">
		<?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
		<img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">
	</div>
	<div class="flex-row ml-0 mr-0 mt-3">
		<?php if (have_posts() ) : ?>
		<?php while( have_posts()) : the_post(); ?>
		<h1><?php the_title() ?></h1>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php
get_footer(); // this function for include footer file
?>