<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
      
      <?php echo get_the_category_list(); ?>
    </header>
    <div class="entry-content">
     <div class="featured-image">
     <?php the_post_thumbnail('full'); ?>
     </div>
     <div class="downloads">
            <?php if( get_field('pdf_upload') ): ?>
               <div class="row"><a href="<?php the_field('pdf_upload');?>" class="pdf_button">Download as PDF</a></div> 
            <?php endif; ?>

            <?php if( get_field('hebrew_pdf') ): ?>
               <div class="row"><a href="<?php the_field('hebrew_pdf');?>" class="pdf_button">Download in Hebrew</a></div> 
            <?php endif; ?>

            <?php if( get_field('portuguese_pdf') ): ?>
               <div class="row"><a href="<?php the_field('portuguese_pdf');?>" class="pdf_button">Download in Portuguese</a></div> 
            <?php endif; ?>

            <?php if( get_field('spanish') ): ?>
               <div class="row"><a href="<?php the_field('spanish');?>" class="pdf_button">Download in Spanish</a></div> 
            <?php endif; ?>
      </div>

      <?php the_content(); ?>
     
    </div>
    <footer>
      <div class="uk-grid uk-grid-width-medium-1-3">


      <?php // Related posts by TAG
        $orig_post = $post;
        global $post;
        $tags = wp_get_post_tags($post->ID);
        
        if ($tags) {
        $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
        $args=array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=>3, // Number of related posts to display.
        'ignore_sticky_posts'=>1
        );
        
        $my_query = new wp_query( $args );

        while( $my_query->have_posts() ) {
        $my_query->the_post();

        ?>


      <div class="col span_4"><?php if ( has_post_thumbnail()) : ?>
         <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="image">
         <?php the_post_thumbnail('medium'); ?>
         </a>
       <?php endif; ?>
      <h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
        <p> <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('j F Y'); ?></time> <span class="cat"><?php
      $category = get_the_category(); 
      echo $category[0]->cat_name;
      ?></span></p>
        <?php the_excerpt();

        //the_advanced_excerpt('length=40&use_words=1&allowed_tags=strong&read_more=read more&add_link=1'); ?>
      </div>


        <? }
        }
        $post = $orig_post;
  wp_reset_query(); ?>
<!--           <nav class="post-nav">
  <ul class="pager">
    <li class="previous"><?php previous_post_link( '%link', '&larr; %title' ); ?></li>
    <li class="next"><?php next_post_link( '%link', '%title &rarr;' ); ?></li>
  </ul> -->
</nav>
    </footer>

  </article>
<?php endwhile; ?>
