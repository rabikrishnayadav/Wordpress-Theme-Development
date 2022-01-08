<?php
/*
* This template is used display single posts
*/
get_header(); // this function for include header file
?>
<?php get_template_part('template-parts/homeFeatured') ?>
<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png">
<?php if (have_posts() ) : ?>
	<?php while( have_posts()) : the_post(); ?>
		<h1><?php the_title() ?></h1>
	<?php endwhile; ?>
<?php endif; ?>


<?php
get_footer(); // this function for include footer file
?>