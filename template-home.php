<?php
/*
* This template is used to display Home pages
*Template Name: Home Page Template
*/
get_header();
?>
<div class="container">
	<div class="page-custom-header">
		<?php
		$banner_status = get_theme_mod('vstheme_home_banner','yes');
		?>
		<?php  if($banner_status == 'yes'): ?>
		<?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
		<img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">
		<?php endif; ?>
	</div>
	<div class="flex-row ml-0 mr-0 mt-3 text-center">
		<?php if (have_posts() ) : ?>
		<?php while( have_posts()) : the_post(); ?>
		<h1><?php the_content() ?></h1>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="home-posts row ml-0 mr-0 mt-5">
		<div class="col">
			<div class="section-head">
				<h3><?php echo get_theme_mod('vstheme_featured_block_1','Latest From Technology') ?></h3>
			</div>
			<div class="section-content pt-4">
				<?php 

				$args = array (

					'cat' => 3,
					'post_per_page' => 3

				);
				$tech_posts = new WP_Query($args);
				if ($tech_posts->have_posts() ) : ?>
				<?php while( $tech_posts->have_posts()) : $tech_posts->the_post(); ?>
				<div class="home-post row row-flex ml-0 mr-0 mb-2">
					<div class="post-thumb col-xl-4 pl-0">
						<a href="<?php the_permalink(get_the_ID()) ?>"><?php the_post_thumbnail('thumbnail',array('class'=>'img-fluid')) ?></a>
					</div>
					<div class="col-xl-8">
						<div class="post-title">
						<h4><a href="<?php the_permalink(get_the_ID()) ?>"><?php the_title() ?></a></h4>
					</div>
					<div class="post-description">
						<?php the_excerpt(); ?>
					</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="col">
			<div class="section-head">
				<h3><?php echo get_theme_mod('vstheme_featured_block_2','Latest From Social Media') ?></h3>
			</div>
			<div class="section-content pt-4">
				<?php 

				$args = array (

					'cat' => 4,
					'post_per_page' => 3
				);
				$tech_posts = new WP_Query($args);
				if ($tech_posts->have_posts() ) : ?>
				<?php while( $tech_posts->have_posts()) : $tech_posts->the_post(); ?>
				<div class="home-post row row-flex ml-0 mr-0 mb-2">
					<div class="post-thumb col-xl-4 pl-0">
						<a href="<?php the_permalink(get_the_ID()) ?>"><?php the_post_thumbnail('thumbnail',array('class'=>'img-fluid')) ?></a>
					</div>
					<div class="col-xl-8">
						<div class="post-title">
						<h4><a href="<?php the_permalink(get_the_ID()) ?>"><?php the_title() ?></a></h4>
					</div>
					<div class="post-description">
						<?php the_excerpt(); ?>
					</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>

			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>