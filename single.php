<?php
/*
* This template is used display single posts
*/
get_header(); // this function for include header file
?>
<div class="container">
	<?php get_template_part('template-parts/homeFeatured') ?>
	<?php if (have_posts() ) : ?>
	<?php while( have_posts()) : the_post(); ?>
	<h1><?php the_title() ?></h1>
	<p><?php the_content(); ?></p>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php
get_footer(); // this function for include footer file
?>