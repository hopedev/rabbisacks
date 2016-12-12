<div id="thecontent" >

 <?php // Video category

		$args = array( 'posts_per_page' => 11,  'tax_query' => array(
			array(
				'taxonomy' => 'media',
				'field' => 'slug',
				'terms' => 'video'
			)
	) ); // 
		$posts = get_posts( $args );
	?>		 

			
	<div class="fullwidth">
				<?php 
					 $post = $posts[0];
					setup_postdata( $post ); 
					?>
					<div class=" uk-container uk-container-center">

				        <div class="uk-panel uk-panel-box uk-text-center">					
							<figure class="uk-overlay  uk-overlay-hover">
		                    <?php the_post_thumbnail('large', array( 'class' => 'uk-align-center uk-overlay-scale' )); ?>
		                     <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background  uk-ignore"></div>
							 <?php 
							  $video = get_post_meta( get_the_ID(), 'video', true );
							  if($video){
							  	echo '<a class="uk-position-cover" href="' . $video . '" data-uk-lightbox={group:\'page\'} data-lightbox-type="image" ></a>';
							  }
							?>
		                      </figure>

						</div>

					</div>
				<?php
	
			 ?>
	</div>

<h4 class="page-sector-title header-line">Featured Videos</h4>

		<div class="uk-grid uk-grid-width-medium-1-2">
				<?php for ($i = 1; $i <= 2; $i++) { ?>
		         <div class="">
			        <div class="uk-panel uk-panel-box  uk-text-center">
						<?php $post = $posts[$i]; setup_postdata( $post ); ?>
							<figure class="uk-overlay  uk-overlay-hover">
		                    <?php the_post_thumbnail('medium', array( 'class' => 'uk-align-center uk-overlay-scale' )); ?>
		                     <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background  uk-ignore"></div>
							 <?php 
							  $video = get_post_meta( get_the_ID(), 'video', true );
							  if($video){
							  	echo '<a class="uk-position-cover" href="' . $video . '" data-uk-lightbox={group:\'page\'} data-lightbox-type="image" ></a>';
							  }
							?>
		                      </figure>
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						 </div>
					 </div>

					 <?php } ?>
		            
		   
				
		</div><!-- End 2 grid -->

	<div class="uk-grid uk-grid-width-medium-1-4">
			<?php for ( $i=$i; $i <= 10; $i++) { ?>
		         <div class="">
			        <div class="uk-panel uk-panel-box">
						<?php $post = $posts[$i]; setup_postdata( $post ); ?>
							<figure class="uk-overlay  uk-overlay-hover">
		                    <?php the_post_thumbnail('medium', array( 'class' => 'uk-align-center uk-overlay-scale' )); ?>
		                     <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background  uk-ignore"></div>
							 <?php 
							  $video = get_post_meta( get_the_ID(), 'video', true );
							  if($video){
							  	echo '<a class="uk-position-cover" href="' . $video . '" data-uk-lightbox={group:\'page\'} data-lightbox-type="image" ></a>';
							  }
							?>
		                      </figure>
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						 </div>
					 </div>

					 <?php } ?>

		          
				
		</div><!-- End 2 grid -->






	<?php
		wp_reset_postdata();
	  ?>

<?php $term_link = get_term_link( (int) 849);  // media - video term id ?>
	<h2 class="uk-align-right"><a href="<?php echo $term_link ?>" > All Videos > </a></h2>

	

</div> <!-- End #thecontent -->
