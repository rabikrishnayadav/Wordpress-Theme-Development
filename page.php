<?php
/*
* This template is used display pages
*/
get_header(); // this function for include header file
?>

<?php if (have_posts() ) : ?>
	<?php while( have_posts()) : the_post(); ?>
		<h1><?php the_title() ?></h1>
	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer(); // this function for include footer file
?>