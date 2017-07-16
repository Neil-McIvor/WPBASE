<!-- begin SIDEBAR -->		
			
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


<!-- end SIDEBAR -->	