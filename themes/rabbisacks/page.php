  <?php while (have_posts()) : the_post(); ?>

	<div class=" uk-container uk-container-center">
	  <?php get_template_part('templates/page', 'header'); ?>

	  <?php 
	  if(is_page('covenant-conversation-home')){
		 get_template_part('templates/content', 'conversation'); 
	  } else if(is_page('books-home')){
	  	get_template_part('templates/content', 'books'); 
	  } else if(is_page('writing-home')){
	  	get_template_part('templates/content', 'writing'); 	  
	 	  
	  } else{
	  	 get_template_part('templates/content', 'page'); 
	  }
	  ?>

 <?php 
 if ( has_post_thumbnail() ) { 
	 if(!is_page('books-home')){
	 	the_post_thumbnail('full'); 
	 }
 }
 ?>


	</div>

<?php endwhile; ?>