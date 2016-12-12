<div id="thecontent" class="books-home page-sector">

 <?php // Covenant & Conversation

		$args = array( 'posts_per_page' => 3,  'post_type' => 'books' ); // Books
		$persposts = get_posts( $args );
	?>		 
		<div class="uk-grid uk-grid-collapse">
			<div class="uk-width-medium-2-3 feature-primary"> <!-- Main Post, displays on Right side on desktop -->
				<div class="uk-panel uk-panel-box">

				<?php 
					 $post = $persposts[0];
					setup_postdata( $post ); 
					?>
					
						<?php if ( has_post_thumbnail() ) { ?>
						<div class="uk-align-center books-homepage featured-image"><?php the_post_thumbnail('medium', array( 'class' => 'uk-align-center' )); ?></div>
					 <?php } ?>  
					 <div class="uk-panel-body">
					<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
					<div class="uk-button uk-button-primary order">Buy Now</div>
					</div>
					
				<?php
				 // endforeach; 
			 ?>
				 </div>
			</div>

			<div class="uk-width-medium-1-3 feature-right">

				<div class="uk-grid feature-secondary">

<?php for ($x = 1; $x <= 2; $x++) { ?>

		            <div class="uk-width-1-1">
			            <div class="uk-panel uk-panel-box">
					<?php $post = $persposts[$x]; setup_postdata( $post ); ?>
		
						<?php if ( has_post_thumbnail() ) { ?>
						<div class="uk-align-center books-homepage featured-image"><?php the_post_thumbnail('book-thumb', array( 'class' => 'uk-align-center' )); ?></div>
						 <?php } ?> 
						  <div class="uk-panel-body"> 
						<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class=""><?php the_excerpt(); ?></div>
						<div class="uk-align-center uk-text-center buy"><a href="<?php the_field ('purchase_link'); ?>" class="order uk-button uk-button-primary" target="_blank">Buy Now</a></div>
			 	</div>

					 </div>
				 </div>

		 <?php } ?>		 
		           
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
				    $args2 = array(
				    	 'posts_per_page' => 500,
						'offset' => 3,
						'post_type' => 'books'
					);
					$postslist = get_posts( $args2 );

					 foreach ( $postslist as $post ) : setup_postdata( $post ); ?>	

			        <li>
			        	<div class="uk-panel uk-panel-box"> 
						 	<div class="uk-align-center"><?php the_post_thumbnail('book-thumb', array( 'class' => 'uk-align-center' )); ?></div>
								<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<div class=""><?php the_excerpt(); ?></div>
								
					 	</div>
					 	<div class="uk-align-center uk-text-center buy"><a href="<?php the_field ('purchase_link'); ?>" class="order uk-button uk-button-primary" target="_blank">Buy Now</a></div>
			        </li>
				      
				      <?php endforeach; ?>

				    </ul>
					<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
			        <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
			    </div>


			</div> <!-- End slidshow -->

</div> <!-- End #thecontent -->
