<div id="thecontent">



 <?php // Covenant & Conversation
 
			$args = array( 'posts_per_page' => 3,  'category' => 852 ); // Covenant & Conversation cat id= 852
			$persposts = get_posts( $args );
	 ?>		 
			 	
		<div class="uk-grid uk-grid-collapse">
			<div class="uk-width-medium-2-3 uk-push-1-3 feature-primary"> <!-- Main Post, displays on Right side on desktop -->
				<div class="uk-panel uk-panel-box uk-panel-space">
				<?php 
					 $post = $persposts[0];
					setup_postdata( $post ); 
					?>
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="uk-align-center"><?php the_post_thumbnail('large-thumb', array( 'class' => 'uk-align-center' )); ?></div>
					 <?php } ?>  
					 <div class="uk-panel-body">
					 <?php 

					 ?>
					 <div> category? </div>
					<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
					<?php the_excerpt(); ?></div>
				<?php
				 // endforeach; 
			 ?>
				 </div>
			</div>

			<div class="uk-width-medium-1-3 uk-pull-2-3  feature-secondary feature-left">

			            <div class="uk-panel uk-panel-box uk-panel-space">

					<?php 
						 $post = $persposts[1];
						setup_postdata( $post ); 
						?>
						<div class="uk-align-center"><?php the_post_thumbnail('large-thumb', array( 'class' => 'uk-align-center' )); ?></div>
						<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class=""><?php the_excerpt(); ?></div>
					<?php
					 // endforeach; 
				 ?>
					 </div>
				
		            	 <div class="uk-panel uk-panel-box uk-panel-space">

					<?php 
						 $post = $persposts[2];
						setup_postdata( $post ); 
						?>
						<div class="uk-align-center"><?php the_post_thumbnail('large-thumb', array( 'class' => 'uk-align-center' )); ?></div>
						<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class=""><?php the_excerpt(); ?></div>
					<?php
					 // endforeach; 
				 ?>
			
		        </div>
				
			</div>
		</div>




	<?php
		wp_reset_postdata();
	  ?>

	</div> <!-- End Perspectives -->