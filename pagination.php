<?php
/**
 * Template Name: Pagination
 * Description: Grid based page layout for displaying posts with pagination
 */
?> 

<?php get_header(); ?> 
<!-- begin CONTENT-WRAPPER  -->
<div id="content-wrapper">
<h5 class="page-type">pagination.php</h5>
					
	<div id="content" class="row">
	
		<div class="large-12 columns">  
        <div class="page-title"><h1><?php the_title(); ?></h1></div> 

 																				
			<?php
			// set the "paged" parameter (use 'page' if the query is on a static front page)
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

			// the query
			$the_query = new WP_Query( 'cat=1&paged=' . $paged ); 
			?>

			<?php if ( $the_query->have_posts() ) : ?>

		    <div id="pagination" class="row small-up-2 medium-up-3 large-up-4">

				<?php
				// the loop
				while ( $the_query->have_posts() ) : $the_query->the_post(); 
				?>

				<div class="column column-block">
				<a href="<?php echo get_permalink($recent['ID']) ?>">
					<div class="paged-grid-thumbnail"><?php echo get_the_post_thumbnail($recent['ID'], 'thumbnail'); ?></div>
					<div class="paged-grid-title"><?php the_title(); ?></div>
				</a>
				</div>

				<?php endwhile; ?>

			</div>

			<div id="pagination-controls">

				<div id="go-next">
				<?php
				// get_next_posts_link() usage with max_num_pages
				echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages );
				?>
				</div>
				<div id="go-prev">
				<?php
				echo get_previous_posts_link( 'Newer Entries' );
				?>
				</div>
				
			</div>

			<?php 
			// clean up after our query
			wp_reset_postdata(); 
			?>

			<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>	
			
		</div>
		
	</div>	

</div>
<!-- begin CONTENT-WRAPPER -->
<?php get_footer(); ?>