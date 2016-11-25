<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
      <div>
     <?php the_field ('book_sub_heading'); ?>
     </div>
       <time><strong>Publication date:</strong> <?php the_field ('publication_date'); ?></time> 
   
    </header>
    <div class="entry-content">

     <div class="featured-image">
     <?php the_post_thumbnail('full'); ?>
     </div>


 
<a href="<?php the_field ('purchase_link'); ?>" class="buy-book btn" target="_blank">Buy now</a>

      <?php the_content(); ?>
     
    </div>

    <footer>
      <div class="uk-grid uk-grid-width-medium-1-3">


     
<!--           <nav class="post-nav">
  <ul class="pager">
    <li class="previous"><?php previous_post_link( '%link', '&larr; %title' ); ?></li>
    <li class="next"><?php next_post_link( '%link', '%title &rarr;' ); ?></li>
  </ul> -->
</nav>
    </footer>

  </article>
<?php endwhile; ?>
