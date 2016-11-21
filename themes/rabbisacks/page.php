  <?php while (have_posts()) : the_post(); ?>

	<div class=" uk-container uk-container-center">
  
	  <?php get_template_part('templates/page', 'header'); ?>

	  <?php 
	  if(is_page('covenant-conversation-home')){

		 get_template_part('templates/content', 'conversation'); 
	  } else{
	  	 get_template_part('templates/content', 'page'); 
	  }
	 


	  ?>
 <?php the_post_thumbnail('full'); ?>
	</div>

<?php endwhile; ?>