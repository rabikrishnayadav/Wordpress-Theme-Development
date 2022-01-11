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
			<article class="home-post">
				<div class="post-header">
					<div class="post-thumbnail">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('home-featured') ?></a>
					</div>
					<a href="<?php the_permalink() ?>"><h1><?php the_title() ?></h1></a>
				</div>
				<div class="post-description">
					<?php the_excerpt(); ?>
				</div>
				<div class="post-footer row ml-0 mr-0 mb-2">
					<div class="post-meta">
						<strong>Author: </strong><?php the_author(); ?>
					</div>
					<div class="post-meta">
						<strong>Posted on: </strong><?php the_time(); ?>
					</div>
				</div>
			</article>
			<?php endwhile; ?>
			<?php endif; ?>
			<div class="pagination row ml-0 mr-0">
				<?php echo paginate_links() ?>
			</div>
		</div>
		<div class="home-sidebar col-lg-4 col-xs-12 pl-0 pr-0">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>