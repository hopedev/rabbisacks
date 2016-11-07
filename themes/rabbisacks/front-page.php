  <?php while (have_posts()) : the_post(); ?>

<div class="home-image uk-cover-background" >Main image / carousel? Full Width</div>

	<div class=" uk-container uk-container-center uk-text-center">
  
	  <?php get_template_part('templates/page', 'header'); ?>


	<div class="page-sector perspectives"><h2>Perspectives</h2>

	  <?php // Covenant & Conversation

		$args = array( 'posts_per_page' => 3,  'category' => 5 );

		$myposts = get_posts( $args );
		// print_r($myposts[0]->ID);
		// foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

		<!-- 	<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li> -->
		<?php
		// endforeach; 
	 ?>
		<div class="uk-grid">
		<div class="uk-width-medium-1-3 uk-push-1-2">

		<?php 
			$gridpost = $myposts[0];
			foreach ( $gridpost as $post ) : setup_postdata( $post ); 
			?>

			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		
		<?php
		 endforeach; 
	 ?>
		</div>
		<div class="uk-width-medium-2-3 uk-pull-1-2">
			
		</div>
		</div>




	<?php
		wp_reset_postdata();
	  ?>

	</div>

	<div class="page-sector">Commentary fixed width </div>

	<div class="page-sector">Video Full Width</div>

	<div class="page-sector">Books | Video fixed width </div>

	<div class="page-sector">Social fixed width </div>

	</div>

<?php endwhile; ?>