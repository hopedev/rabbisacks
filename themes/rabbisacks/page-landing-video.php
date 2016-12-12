  <?php
/**
 * Template Name: Video Landing page
 */
?>
<?php while (have_posts()) : the_post(); ?>

	<div class="container uk-container uk-container-center">
		<div class="container--inner">
				  <div class="page-header uk-text-center">
			  <h1 class='page-title'>Latest Videos</h1>
			</div>

		  <?php // get different landing page contents
		
		  	get_template_part('templates/content', 'video'); 	  

		  ?>



	</div>
		</div>

<?php endwhile; ?>