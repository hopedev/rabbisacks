<div id="thecontent">

 <?php // Writing

		$args = array( 'posts_per_page' => 9,  'tax_query' => array(
			array(
				'taxonomy' => 'media',
				'field' => 'slug',
				'terms' => 'text'
			)
	) ); // Books
		$textposts = get_posts( $args );
	?>		 
		<div class="uk-grid  uk-grid-collapse">
			<div class="uk-width-medium-2-3 feature-primary"> <!-- Main Post, displays on Right side on desktop -->
				<div class="uk-panel uk-panel-box">

				<?php 
					 $post = $textposts[0];
					setup_postdata( $post ); 
					?>
					
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="uk-panel-teaser uk-align-center books-homepage featured-image"><?php the_post_thumbnail('medium', array( 'class' => 'uk-align-center' )); ?></div>
										<?php
				}
			 ?>
					    <div class="uk-panel-body">
					<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class=""><?php the_excerpt(); ?></div>
					</div>
				<?php
				 // endforeach; 
			 ?>
				 </div>
			</div>

			<div class="uk-width-medium-1-3 feature-right feature-secondary">

				<div class="uk-grid uk-grid-collapse">
		            <div class="uk-width-1-1">
			            <div class="uk-panel uk-panel-box">

					<?php 
						 $post = $textposts[1];
						setup_postdata( $post ); 
						?>
						<div class=""><?php the_post_thumbnail('medium', array( 'class' => 'uk-align-center' )); ?></div>
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
						 $post = $textposts[2];
						setup_postdata( $post ); 
						?>
						<div class=""><?php the_post_thumbnail('medium', array( 'class' => 'uk-align-center' )); ?></div>
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





<h4 class="page-sector-title header-line">Thought for the day</h4>
 <?php 
 // Get image and quote here.
 
 ?>


<div class="uk-grid uk-grid-width-medium-1-3 uk-grid-divider" data-uk-grid-margin>
			<?php for ($x = 3; $x <= 8; $x++) { ?>
		         <div class="">
			        <div class="uk-panel uk-panel-box">
						<?php $post = $textposts[$x]; setup_postdata( $post ); ?>
							
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<h4><?php the_time('F j, Y'); ?>	</h4>
						 </div>
					 </div>

					 <?php } ?>

		          
				
		</div><!-- End 2 grid -->

<?php $term_link = get_term_link( (int) 893);  //print_r( $term_link ); ?>
	<h2 class="uk-align-right"><a href="<?php echo $term_link ?>" > All Writing > </a></h2>

</div> <!-- End #thecontent -->