  <?php while (have_posts()) : the_post(); ?>

	<div class="container uk-container uk-container-center">
		<div class="container--inner">
		  <?php get_template_part('templates/page', 'header'); ?>

		  <?php
		  	 get_template_part('templates/content', 'page'); 
		  
		  ?>



	</div>
		</div>

<?php endwhile; ?>