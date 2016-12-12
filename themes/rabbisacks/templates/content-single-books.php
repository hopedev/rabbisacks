<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>


  <div class="uk-grid uk-grid-width-medium-1-2">
    <div>
       <div class="featured-image">
     <?php the_post_thumbnail('book-home'); ?>
     </div>

    </div>
    <div>
          <header>

          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php //get_template_part('templates/entry-meta'); ?>
          <div>
         <?php 
           $sub = get_post_meta( get_the_ID(), 'book_sub_heading', true );          
          $pub = get_post_meta( get_the_ID(), 'publication_date', true );
        $pub = new DateTime($pub);
         //the_field ('book_sub_heading'); 
           echo '<h3>' . $sub . '</h3>';
         ?>
         </div>
         
           <time><strong>Publication date:</strong> <?php echo $pub->format('j M Y');
           //the_field ('publication_date'); ?></time> 
       
        </header>
        <div class="buy uk-align-center uk-text-center">
          <a href="<?php the_field ('purchase_link'); ?>" class="order uk-button uk-button-primary" target="_blank">Buy now</a>

        </div>
       <div class="entry-content">

        

     

          <?php the_content(); ?>
         
        </div>



      </div>

    </div>   <!-- End Grid --> 
 

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
