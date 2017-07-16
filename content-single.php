<!-- begin CONTENT SINGLE -->

<h5 class="page-type">content-single.php</h5>	

<div id="single-post">

	<div class="row">
	
		<div class="large-6 columns">
        <div class="page-title"><h1><?php the_title(); ?></h1></div>
        <div class="page-meta"><p><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p></div>
        	<div id="single-post-content">
				<article><?php the_content(); ?></article>
			</div>
        </div>
           
        <div class="large-6 columns">        
            
			<div id="single-post-thumbnail">
				<div class="feature-image">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
					?>
				</div>
			</div>

		</div>

			
	</div>
	
</div>		

			

 
	
<!-- end CONTENT SINGLE -->