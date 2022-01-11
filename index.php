<?php
/*
* This is My First Theme
*/
get_header(); // this function for include header file
?>
<div class="home-main container">
	<div class="row mr-0 ml-0">
		<div class="home-posts col-8">
			<?php if (have_posts() ) : ?>
			<?php while( have_posts()) : the_post(); ?>
			<h1><?php the_title() ?></h1>
			<p><?php the_content(); ?></p>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="home-sidebar col-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>