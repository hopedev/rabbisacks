  <?php while (have_posts()) : the_post(); ?>

	<div class=" uk-container uk-container-center uk-text-center">
  
	  <?php get_template_part('templates/page', 'header'); ?>

	  <?php //get_template_part('templates/content', 'page'); 

	  ?>


<div>Main image / carousel? Full Width</div>

<div class="page-sector">Perspectives fixed width </div>

<div class="page-sector">Commentary fixed width </div>

<div class="page-sector">Video Full Width</div>

<div class="page-sector">Books | Video fixed width </div>

<div class="page-sector">Social fixed width </div>

	</div>

<?php endwhile; ?>