<?php
/**
 * Template Name: Three Columns
 * Description: Column based page layout for displaying widgets in a row of three.
 */
?> 

<?php get_header(); ?>

<!-- begin CONTENT-WRAPPER  -->
<div id="content-wrapper">
<h5 class="page-type">three-col.php</h5>

	<div id="content" class="row">
	
	<div class="large-7 columns">

				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

					endwhile; endif; 
				?>

	</div>	
	<div class="large-5 columns">
				<div class="feature-image">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
					?>
				</div>
	</div>
	
	</div>


	<div id="widget-content" class="row">
	<div class="large-4 columns">

			  <div class="sidebar">
				  <?php dynamic_sidebar( 'column-1' ); ?>
			  </div>

	</div>
	<div class="large-4 columns">

			  <div class="sidebar">
				  <?php dynamic_sidebar( 'column-2' ); ?>
			  </div>

	</div>
	<div class="large-4 columns">

			  <div class="sidebar">
				  <?php dynamic_sidebar( 'column-3' ); ?>
			  </div>

	</div>
	</div>


</div>
<!-- begin CONTENT-WRAPPER -->
<?php get_footer(); ?>