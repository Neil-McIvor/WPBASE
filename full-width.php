<?php
/**
 * Template Name: Full Width
 * Description: Full width page layout
 */
?> 
<?php get_header(); ?> 
<!-- begin CONTENT-WRAPPER  -->
<div id="content-wrapper">


<section id="full-width">
	<div class="row">
    <div class="page-title"><h1><?php the_title(); ?></h1></div>
		<div class="large-12 columns">

		<div class="page-meta">Area Type: Full Width<p><strong>full-width.php is a wide screen layout for selected pages.</strong></p></div>

				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

					endwhile; endif; 
				?>

		</div>	
		<?php [cvmh-simple-slideshow] ?>

	</div>
</section>



</div>
<!-- end CONTENT-WRAPPER -->
<?php get_footer(); ?>