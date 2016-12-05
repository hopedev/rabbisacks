
		 <?php 
		 if ( has_post_thumbnail() ) { 
			 if(!is_page(array('books-homepage', 'writing-homepage'))){
			 	the_post_thumbnail('full'); 
			 }
		 }
		 ?>

		 <footer class="content-info">
  <div class="container">
  <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-4">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div>
    &copy; <?php echo date("Y") ?> Rabbi Sacks. All rights reserved. The Office of Rabbi Sacks is kindly supported by The Covenant &amp; Conversation Trust.
    </div>
  </div>
</footer>