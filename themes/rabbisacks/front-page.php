 <?php
 /* Template Name: Home 

Header image code is in header.php due to sticky

 */ 
 ?>
 

  <?php while (have_posts()) : the_post(); ?>



	<div class="container uk-container uk-container-center uk-text-center">
  
	  <?php get_template_part('templates/page', 'header'); ?>


	<div class="page-sector perspectives"><h4 class="page-sector-title header-line">Perspectives</h4>

	  <?php // Covenant & Conversation

		$args = array( 'posts_per_page' => 3,  'category' => 852 ); // Covenant & Conversation cat id= 852

		$persposts = get_posts( $args );
 ?>		 
			 	

		<div class="uk-grid feature-primary">
			<div class="uk-width-medium-2-3 uk-push-1-3"> <!-- Main Post, displays on Right side on desktop -->
				<div class="uk-panel uk-panel-box">

				<?php 
					 $post = $persposts[0];
					setup_postdata( $post ); 
					?>
					<?php if ( has_post_thumbnail() ) { ?>
						<div class=""><?php the_post_thumbnail('medium'); ?></div>
					 <?php } ?>  
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

	</div> <!-- End Perspectives -->

	<div class="page-sector"><h4 class="page-sector-title header-line">Commentary</h4>

		<div class="uk-grid feature-trio">


  <?php // Commentary

	$args = array(
		 'posts_per_page' => 3,
		'tax_query' => array(
			array(
				'taxonomy' => 'media',
				'field' => 'slug',
				'terms' => 'text'
			)
		)
	);
	$postslist = get_posts( $args );

		 foreach ( $postslist as $post ) : setup_postdata( $post ); ?>		
		 	<div class="uk-width-medium-1-3"> 
				<div class="uk-panel uk-panel-box"> 
				 	<div class=""><?php the_post_thumbnail('thumbnail'); ?></div>
						<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class=""><?php the_excerpt(); ?></div>
			 	</div>
		 	</div>

		<?php
		 endforeach; wp_reset_postdata();
	 ?>

	 	</div>
	</div> <!-- End Commentary -->

	<div class="page-sector feature">
		<h4 class="page-sector-title">Why I am a Jew</h4>
			<?php
				$args = array( 'posts_per_page' => 1, 	
								'tax_query' => array(
										array(
											'taxonomy' => 'media',
											'field' => 'slug',
											'terms' => 'series'
										)
								)
				);
				$persposts = get_posts( $args );
				foreach ( $persposts as $post ) : setup_postdata( $post ); ?>	

					<div class="" style="background:url(<?php the_post_thumbnail_url('large') ?>)  no-repeat center centerw; background-size:cover" >		 	
						<div class="uk-panel uk-panel-box"> 
						 	<div class=""><?php the_post_thumbnail('large'); ?></div>
							<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						</div>	
					</div>											
				 <?php endforeach; ?>

	</div><!-- End page-sector: I Am a Jew -->




	<div class="page-sector"> 

		<div class="uk-grid feature-double">
		 	<div class="uk-width-medium-1-3"> 
		 	<h4 class="page-sector-title header-line">Books</h4>
				<div class="uk-panel uk-panel-box"> 

				<div class="uk-slidenav-position"  data-uk-slideshow="{autoplay:true}">
				    <ul class="uk-slideshow">
				    <?php 
				    $args = array(
						 'posts_per_page' => 3,
						'post_type' => 'books'
					);
					$postslist = get_posts( $args );

					 foreach ( $postslist as $post ) : setup_postdata( $post ); ?>	

			        <li>
			        	<div class="uk-panel uk-panel-box"> 
						 	<div class=""><?php the_post_thumbnail('thumbnail'); ?></div>
								<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<!-- <div class=""><?php the_excerpt(); ?></div> -->
					 	</div>
			        </li>
				      
				      <?php endforeach; ?>

				    </ul>

				    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
				    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
				    <ul class="uk-dotnav uk-dotnav-contrast uk-position-center uk-flex-center">
				    <?php $i = -1; while ($i++ < 2) { ?>
				        <li data-uk-slideshow-item="<?php echo $i ?>"><a href=""></a></li>
				        <?php } ?>
				    </ul>


			</div>

				</div>
			</div>
		 	<div class="uk-width-medium-2-3"> 
		 	 	<h4 class="page-sector-title header-line">Videos</h4>
				<div class="uk-panel uk-panel-box"> 
				<?php
							$args = array( 'posts_per_page' => 1, 	
											'tax_query' => array(
													array(
														'taxonomy' => 'media',
														'field' => 'slug',
														'terms' => 'video'
													)
											)
							);
							$persposts = get_posts( $args );
							 foreach ( $persposts as $post ) : setup_postdata( $post ); ?>	


				 	<div class=""><?php the_post_thumbnail('medium'); ?></div>
						<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class=""><?php the_excerpt(); ?></div>

				    <?php endforeach; ?>

				</div>
			</div>				
		</div>

	</div>

	<div class="page-sector quotes"><h4 class="page-sector-title header-line">Quotes</h4>
<?php 
		if ( false === ( $quotes = get_transient( 'rand_quote' ) ) ) {
		  // It wasn't there, so regenerate the data and save the transient

		  $args = array(
		     'post_type' => 'quotes',
		     'orderby'   => 'rand',
		     'posts_per_page' => '1', 
		     'tax_query' => array(
				array(
					'taxonomy' => 'featured',
					'field' => 'slug',
					'terms' => 'featured'
				)
		  )
		     );

		  $quotes = get_posts( $args );

		  //Now we store the array for one day.
		  //Just change the last parameter for another timespan in seconds.
		  $seconds_until_next_day = strtotime('tomorrow') - time();
set_transient( 'rand_quote', $quotes, $seconds_until_next_day );
		}

		
	
		  foreach ( $quotes as $post ) : setup_postdata( $post ); 
		  			$quote = get_post_meta( get_the_ID(), 'quote_text', true );
		  			$quote = str_replace('"', "", $quote);
		  			$source = get_post_meta( get_the_ID(), 'quote_place_and_date', true );
		  ?>	

					<div class="quote-large header-text"><?php echo $quote; ?> <!-- <small><?php echo $source ?></small> --></div>

		<?php endforeach; ?>

	</div>

	<div class="page-sector header-line">Social fixed width </div>
<?php //echo do_shortcode('[hype_social_tiles]'); ?>
	</div>

<?php endwhile; ?>