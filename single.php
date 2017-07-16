<?php get_header(); ?>

<!-- begin CONTENT-WRAPPER  -->
<div id="content-wrapper">
<h5 class="page-type">single.php</h5>


<div id="content" class="row">

	<div class="large-9 columns">

		
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content-single', get_post_format() );
  
				endwhile; endif; 
			?>
				
	</div>	
	<div class="large-3 columns">
			  
				  <div class="sidebar">
					<aside>
					  <div id="recent-posts">
						<ul>

						<?php
							$recent_posts = wp_get_recent_posts();
							foreach( $recent_posts as $recent ){
								echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
							}
							wp_reset_query();
						?>

						</ul>		  
					  </div>
					</aside>		  
				  
				  
					  <aside>
					   <div id="custom-posts">
						<!-- Display a List of a CUSTOM POST TYPE -->
						<ul>

						<?php
							$recent_posts = wp_get_recent_posts(array('post_type'=>'news-post'));
							foreach( $recent_posts as $recent ){
								echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Custom '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
							}
						?>

						</ul>
						</div>
					  </aside>	
				  
				  </div>
				  
	</div>

</div>

</div>
<!-- end CONTENT-WRAPPER -->
<?php get_footer(); ?>