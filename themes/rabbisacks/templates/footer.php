
		 <?php 
		 if ( has_post_thumbnail() ) { 
			 if(is_page(array('covenant-conversation-homepage'))){
			 	// the_post_thumbnail('full'); 
			 	$footimg = get_post_meta( get_the_ID(), 'footer_image', true );
			 	if($footimg){
			 		$footimgfull =  wp_get_attachment_image( $footimg, 'full' ) ;
			 		echo $footimgfull;
    
			 	}
			 }
		 }
		 ?>

		 <footer class="content-info">
  <div class="container">
	  <div class="uk-block">
		  <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-4">
	  	
	    <?php dynamic_sidebar('sidebar-footer'); ?>
	    </div>
    </div>
    <div class="uk-block uk-text-small">
    &copy; <?php echo date("Y") ?> Rabbi Sacks. All rights reserved. The Office of Rabbi Sacks is kindly supported by The Covenant &amp; Conversation Trust.
    </div>

  </div>
</footer>