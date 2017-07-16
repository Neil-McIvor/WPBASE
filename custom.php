<?php
/**
 * Template Name: Custom Post2
 * Description: Page layout for displaying custom posts.
 */
?> 
   
<?php get_header(); ?>
<!-- begin CONTENT-WRAPPER  -->
<div id="content-wrapper">
<h5 class="page-type">custom.php</h5>
    

   
    <div id="content" class="row">
		<div class="large-12 columns"> 
		<div id="page-title"><h2><?php the_title(); ?></h2></div>
		 
			<!-- begin Display Custom Posts -->	 
			<div id="custom-post" class="row small-up-2 medium-up-3 large-up-4" > 

					<?php 
						$args =  array( 
							'post_type' => 'news-post',
							'orderby' => 'menu_order',
							'order' => 'ASC'
						);
						 $custom_query = new WP_Query( $args );
						 while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
						<div class="column column-block">
						<div>
<?php /*?>							<a href="<?php the_permalink(); ?>">
								<div class="custom-post">
								<div class="custom-post-title"><h3><?php the_title(); ?></h3></div>
								<div class="custom-post-thumb"><?php echo get_the_post_thumbnail($recent['ID'], 'thumbnail'); ?></div>
								<div class="custom-post-excerpt"><?php the_excerpt(); ?></div>
								</div>
							</a><?php */?>

								<div class="custom-post">
								<div class="custom-post-title"><h3><?php the_title(); ?></h3></div>
								<div class="custom-post-thumb"><?php echo get_the_post_thumbnail($recent['ID'], 'thumbnail'); ?></div>
								<div class="custom-post-excerpt"><?php the_excerpt(); ?></div>
								</div>
						
						</div>
						</div>
					<?php endwhile; ?>

				</div>
				<!-- end Display Custom Posts -->
				
		</div>

		
	</div>
</div>
<!-- end CONTENT-WRAPPER -->
<?php get_footer(); ?>