<?php
/**
 * Template Name: Post Grid
 * Description: Grid based page layout for displaying posts
 */
?> 

<?php get_header(); ?> 
<!-- begin CONTENT-WRAPPER  -->
<div id="content-wrapper">
<h5 class="page-type">post-grid.php</h5>
 
	<div id="content" class="row">

		<div class="large-12 columns">
        <div id="page-title"><h1><?php the_title(); ?></h1></div>

			<div id="block-grid" class="row small-up-2 medium-up-3 large-up-4">	

						<?php 
						$recent_posts = wp_get_recent_posts();
						foreach($recent_posts as $recent) : ?>
							<div class="column column-block">
							<div>
								<a href="<?php echo get_permalink($recent['ID']) ?>">
									<div class="block-grid-thumbnail"><?php echo get_the_post_thumbnail($recent['ID'], 'thumbnail'); ?></div>
									<div class="block-grid-title"><?php echo $recent['post_title'] ?></div>
									<div class="block-grid-summary"><?php echo the_excerpt(); ?><?php the_content(); ?></div>
								</a>
							</div>
							</div>
						<?php endforeach; ?> 
			</div>


		</div>
		
	</div>
  
</div>
<!-- end CONTENT-WRAPPER -->
<?php get_footer(); ?>
 
 


