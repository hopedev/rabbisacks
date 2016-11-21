<div id="thecontent">

 <?php // Covenant & Conversation

		$args = array( 'posts_per_page' => 3,  'category' => 852 ); // Covenant & Conversation cat id= 852

		$persposts = get_posts( $args );
		 // print_r($myposts[0]->ID);
		 // foreach ( $myposts as $post ) : setup_postdata( $post ); ?>		 
			 	<!-- <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>  -->
		<?php
		 // endforeach; 
	 ?>
		<div class="uk-grid feature-primary">
			<div class="uk-width-medium-2-3 uk-push-1-3"> <!-- Main Post, displays on Right side on desktop -->
				<div class="uk-panel uk-panel-box">

				<?php 
					 $post = $persposts[0];
					setup_postdata( $post ); 
					?>
					
					<div class=""><?php the_post_thumbnail('medium'); ?></div>
					   
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class=""><?php the_excerpt(); ?></div>
				<?php
				 // endforeach; 
			 ?>
				 </div>
			</div>

			<div class="uk-width-medium-1-3 uk-pull-2-3">

				<div class="uk-grid feature-secondary feature-left">
		            <div class="uk-width-1-1">
			            <div class="uk-panel uk-panel-box">

					<?php 
						 $post = $persposts[1];
						setup_postdata( $post ); 
						?>
						<div class=""><?php the_post_thumbnail('thumbnail'); ?></div>
						<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class=""><?php the_excerpt(); ?></div>
					<?php
					 // endforeach; 
				 ?>
					 </div>
				 </div>
		            <div class="uk-width-1-1">
		            	 <div class="uk-panel uk-panel-box">

					<?php 
						 $post = $persposts[2];
						setup_postdata( $post ); 
						?>
						<div class=""><?php the_post_thumbnail('thumbnail'); ?></div>
						<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class=""><?php the_excerpt(); ?></div>
					<?php
					 // endforeach; 
				 ?>
					 </div>
					</div>
		        </div>
				
			</div>
		</div>




	<?php
		wp_reset_postdata();
	  ?>



</div>
