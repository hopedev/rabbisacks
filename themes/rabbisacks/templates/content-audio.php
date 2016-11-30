<div id="thecontent">

 <?php // Writing

		$args = array( 'posts_per_page' => 3,  'tax_query' => array(
			array(
				'taxonomy' => 'media',
				'field' => 'slug',
				'terms' => 'audio'
			)
	) ); // Books
		$audioposts = get_posts( $args );
	?>		 
		<div class="uk-grid feature-primary">
			<div class="uk-width-medium-2-3"> <!-- Main Post, displays on Right side on desktop -->
				<div class="uk-panel uk-panel-box">

				<?php 
					 $post = $audioposts[0];
					setup_postdata( $post ); 
					?>
					
					<div class=""><?php the_post_thumbnail('medium', array( 'class' => 'uk-align-center' )); ?></div>
					   
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class=""><?php the_excerpt(); ?></div>
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
						 $post = $audioposts[1];
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
						 $post = $audioposts[2];
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


<?php $term_link = get_term_link( (int) 894);  //print_r( $term_link ); ?>
	<h2 class="uk-align-right"><a href="<?php echo $term_link ?>" > All Audio > </a></h2>

 <?php 
 if ( has_post_thumbnail() ) { 
	 	echo '<div class="">';
	 	the_post_thumbnail('full'); 
	 	echo '</div>';	 	
 }
 ?>
<h4 class="page-sector-title header-line">Thought for the day</h4>


	

</div> <!-- End #thecontent -->
