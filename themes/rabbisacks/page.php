  <?php while (have_posts()) : the_post(); ?>

	<div class=" uk-container uk-container-center">
	  <?php get_template_part('templates/page', 'header'); ?>

	  <?php // get different landing page contents
	  if(is_page('covenant-conversation-homepage')){
		 get_template_part('templates/content', 'conversation'); 

	  } else if(is_page('books-homepage')){
	  	get_template_part('templates/content', 'books'); 

	  } else if(is_page('writing-homepage')){
	  	get_template_part('templates/content', 'writing'); 	  

	 } else if(is_page('audio-homepage')){
	  	get_template_part('templates/content', 'audio'); 

	  } else if(is_page('video-homepage')){
	  	get_template_part('templates/content', 'video'); 	  

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