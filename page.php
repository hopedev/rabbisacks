  <?php while (have_posts()) : the_post(); ?>

	<div class=" uk-container uk-container-center uk-text-center">
  
	  <?php get_template_part('templates/page', 'header'); ?>

	  <?php get_template_part('templates/content', 'page'); ?>

	</div>

<?php endwhile; ?>