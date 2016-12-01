<?php while (have_posts()) : the_post(); ?>
  <?php if (in_category("covenant-conversation")){
      echo '<h4 class="page-sector-title header-line">Covenant & Conversation</h4>';  
  }
  ?>
  <article <?php post_class(); ?>>
    <header><?php get_template_part('templates/entry-meta'); ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      
      <div>Categories</div>
      <?php echo get_the_category_list(); ?>
    </header>
    <div class="entry-content">
     <div class="featured-image">
     <?php the_post_thumbnail('full'); ?>
     </div>
     <div class="downloads uk-clearfix"> 
      <div class="uk-float-left uk-panel uk-panel-box"><i class="uk-icon-download" ></i></div>
     <div class="uk-grid uk-grid-width-medium-1-4">
           
            <?php if( get_field('pdf_upload') ): ?>
               <div class="uk-panel uk-panel-box"><a href="<?php the_field('pdf_upload');?>" class="pdf_button">Download as PDF</a></div> 
            <?php endif; ?>

            <?php if( get_field('hebrew_pdf') ): ?>
               <div class="uk-panel uk-panel-box"><a href="<?php the_field('hebrew_pdf');?>" class="pdf_button">Download in Hebrew</a></div> 
            <?php endif; ?>

            <?php if( get_field('portuguese_pdf') ): ?>
               <div class="uk-panel uk-panel-box"><a href="<?php the_field('portuguese_pdf');?>" class="pdf_button">Download in Portuguese</a></div> 
            <?php endif; ?>

            <?php if( get_field('spanish') ): ?>
               <div class="uk-panel uk-panel-box"><a href="<?php the_field('spanish');?>" class="pdf_button">Download in Spanish</a></div> 
            <?php endif; ?>
      </div>
</div>
      <?php the_content(); ?>
      <div class="tags">Tagged with:
      <?php echo get_the_tag_list(); ?> 
      </div>
    </div>
    <footer>
     
<!-- 
     Other posts bit -->

<div class="page-sector"> 

    <div class="uk-grid feature-double">
      <div class="uk-width-medium-1-3"> 
      <h4 class="page-sector-title header-line">Books</h4>
        <div class="uk-panel uk-panel-box"> 

        <div class="uk-slidenav-position"  data-uk-slideshow="{autoplay:true}">
            <ul class="uk-slideshow">
            <?php 
            $args = array(
             'posts_per_page' => 3,
            'post_type' => 'books'
          );
          $postslist = get_posts( $args );

           foreach ( $postslist as $post ) : setup_postdata( $post ); ?>  

              <li>
                <div class="uk-panel uk-panel-box"> 
              <div class=""><?php the_post_thumbnail('book-thumb'); ?></div>
                <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <!-- <div class=""><?php the_excerpt(); ?></div> -->
            </div>
              </li>
              
              <?php endforeach; ?>

            </ul>

            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            <ul class="uk-dotnav uk-dotnav-contrast uk-position-center uk-flex-center">
            <?php $i = -1; while ($i++ < 2) { ?>
                <li data-uk-slideshow-item="<?php echo $i ?>"><a href=""></a></li>
                <?php } ?>
            </ul>


      </div>

        </div>
      </div>
      <div class="uk-width-medium-2-3 feature-primary"> 
        <h4 class="page-sector-title header-line">Videos</h4>
        <div class="uk-panel uk-panel-box"> 
        <?php
              $args = array( 'posts_per_page' => 1,   
                      'tax_query' => array(
                          array(
                            'taxonomy' => 'media',
                            'field' => 'slug',
                            'terms' => 'video'
                          )
                      )
              );
              $persposts = get_posts( $args );
               foreach ( $persposts as $post ) : setup_postdata( $post ); ?>  
        
          <figure class="uk-overlay  uk-overlay-hover">
            <?php the_post_thumbnail('large-video-thumb', array( 'class' => 'uk-align-center' )); ?>
            <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background  uk-ignore"></div>
             <?php 
                $video = get_post_meta( get_the_ID(), 'video', true );
                if($video){
                  echo '<a class="uk-position-cover" href="' . $video . '" data-uk-lightbox={group:\'page\'} data-lightbox-type="image" ></a>';
                }
              ?>
                          </figure>
            
            
         <div class="uk-panel-body">
            <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?></div>

            <?php endforeach; ?>

        </div>
      </div>        
    </div>

  </div>


<!--      Related posts bit -->


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
        
        $postslist = get_posts( $args );
        echo '<div class="page-sector"><h4 class="page-sector-title header-line">Related Articles</h4>';
        echo  '<div class="uk-grid uk-grid-width-medium-1-3">';


           foreach ( $postslist as $post ) : setup_postdata( $post ); ?>    
            <div class="uk-width-medium-1-3"> 
              <div class="uk-panel uk-panel-box"> 
                <div class="uk-panel-teaser uk-align-center"><?php the_post_thumbnail('thumbnail', array( 'class' => 'uk-align-center' )); ?></div>
                  <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class=""><?php the_excerpt(); ?></div>
              </div>
            </div>

          <?php
           endforeach; wp_reset_postdata();

         } //end if tags
   ?>
    </footer>
  </article>

<?php endwhile; ?>
