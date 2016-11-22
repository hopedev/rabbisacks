<div id="thecontent">

 <?php // Covenant & Conversation

		$args = array( 'posts_per_page' => 3,  'post_type' => 'books' ); // Books
		$persposts = get_posts( $args );
	?>		 
		<div class="uk-grid feature-primary">
			<div class="uk-width-medium-2-3"> <!-- Main Post, displays on Right side on desktop -->
				<div class="uk-panel uk-panel-box">

				<?php 
					 $post = $persposts[0];
					setup_postdata( $post ); 
					?>
					
					<div class=""><?php the_post_thumbnail('medium', array( 'class' => 'uk-align-center' )); ?></div>
					   
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class=""><?php the_excerpt(); ?></div>
					<div class="uk-button order">Order Now</div>
				<?php
				 // endforeach; 
			 ?>
				 </div>
			</div>

			<div class="uk-width-medium-1-3">

				<div class="uk-grid feature-secondary feature-right">
		            <div class="uk-width-1-1">
			            <div class="uk-panel uk-panel-box">

					<?php 
						 $post = $persposts[1];
						setup_postdata( $post ); 
						?>
						<div class=""><?php the_post_thumbnail('medium', array( 'class' => 'uk-align-center' )); ?></div>
						<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class=""><?php the_excerpt(); ?></div>
						<div class="uk-button order">Order Now</div>
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
						<div class=""><?php the_post_thumbnail('medium', array( 'class' => 'uk-align-center' )); ?></div>
						<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class=""><?php the_excerpt(); ?></div>
						<div class="uk-button order">Order Now</div>
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

 <?php 
 if ( has_post_thumbnail() ) { 
	 	echo '<div class="">';
	 	the_post_thumbnail('full'); 
	 	echo '</div>';	 	
 }
 ?>



		<div data-uk-slideset="{default: 3}">
		 <div class="uk-slidenav-position">
		    <ul class="uk-grid uk-slideset bookset">
				    <?php 
				    $args = array(
				    	 'posts_per_page' => -1,
						'post_type' => 'books'
					);
					$postslist = get_posts( $args );

					 foreach ( $postslist as $post ) : setup_postdata( $post ); ?>	

			        <li>
			        	<div class="uk-panel uk-panel-box"> 
						 	<div class=""><?php the_post_thumbnail('thumbnail'); ?></div>
								<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<div class=""><?php the_excerpt(); ?></div>
								
					 	</div>
					 	<div class="uk-button order">Order Now</div>
			        </li>
				      
				      <?php endforeach; ?>

				    </ul>
					<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
			        <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
			    </div>


			</div> <!-- End slidshow -->

</div> <!-- End #thecontent -->
