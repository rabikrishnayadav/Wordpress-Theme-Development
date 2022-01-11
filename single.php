<?php
/*
* This template is used display single posts
*/
get_header(); // this function for include header file
?>
<div class="container post-content">
	<?php if (have_posts() ) : ?>
	<?php while( have_posts()) : the_post(); ?>
		<div class="post-image">
			<?php the_post_thumbnail('home-featured') ?>
		</div>
		<div class="post-title">
			<h1><?php the_title() ?></h1>		
		</div>
		<div class="post-meta-row">
			<div class="post-meta">
				<strong>Author: </strong><?php the_author(); ?>
			</div>
			<div class="post-meta">
				<strong>Posted on: </strong><?php the_time(); ?>
			</div>
		</div>
		<div class="post-content">
			<p><?php the_content(); ?></p>
		</div>
		
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php
get_footer(); // this function for include footer file
?>