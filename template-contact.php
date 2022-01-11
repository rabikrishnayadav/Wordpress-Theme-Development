<?php 
/* 
* This template is used to display Contact pages
*Template Name: Contact Page Template
*/
get_header();
?>

<div class="container">
	<?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
	<img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">
	<div class="flex-row ml-0 mr-0 mt-3">
		<?php if (have_posts() ) : ?>
		<?php while( have_posts()) : the_post(); ?>
		<h1><?php the_title() ?></h1>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>


<?php
get_footer();
?>