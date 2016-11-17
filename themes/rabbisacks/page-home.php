<?php /* Template Name: Home */ ?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<article class="row">
<div class="candc col span_8"><h2><?php  the_field('covenant_conversation_title');?></h2>
<div class="row">


<?php
$the_query = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 1, 
  'cat'  => '852'

  ));

  while ($the_query->have_posts()) :
    $the_query->the_post();
  ?>
<div class="col span_4"><?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="image">
   <?php the_post_thumbnail('thumbnail'); ?>
   </a>
 <?php endif; ?></div>
<div class="col span_8">
<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
  <p> <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('j F Y'); ?></time> <span class="cat"><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></span></p>
  <?php the_advanced_excerpt('length=75&use_words=1&allowed_tags=i&read_more=read more&add_link=1'); ?>
</div>
<?php endwhile;  wp_reset_query(); ?>



</div>
</div>
<div class="signup col span_4">

 <h3><?php  the_field('mail_list_subscribe');?></h3>


<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://rabbisacks.us7.list-manage.com/subscribe/post?u=2a91b54e856e0e4ee78b585d2&amp;id=3fee45c1ad" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
  <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
  <input type="email" value="Email" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
  <label for="mce-FNAME">First Name  <span class="asterisk">*</span>
</label>
  <input type="text" value="First name" name="FNAME" class="required" id="mce-FNAME">
</div>
<div class="mc-field-group">
  <label for="mce-LNAME">Last Name  <span class="asterisk">*</span>
</label>
  <input type="text" value="Last name" name="LNAME" class="required" id="mce-LNAME">
</div>
<div class="mc-field-group">
  <label for="mce-MMERGE3">City  <span class="asterisk">*</span>
</label>
  <input type="text" value="City" name="MMERGE3" class="required" id="mce-MMERGE3">
</div>
<div class="mc-field-group">
  <label for="mce-MMERGE4">Country  <span class="asterisk">*</span>
</label>
  <input type="text" value="Country" name="MMERGE4" class="required" id="mce-MMERGE4">
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->



</div>

</article>
<article id="latest" class="row">
  <h2><?php  the_field('featured_articles_sub_heading');?></h2>






  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>


<?php $posts = get_field('featured_articles');
 
if( $posts ): ?>

  <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
    <?php setup_postdata($post); ?>
  <div class="col span_6 post">
<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
  <p> <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('j F Y'); ?></time> <span class="cat"><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></span></p>
  <?php the_advanced_excerpt('length=30&use_words=1&allowed_tags=strong&read_more=read more&add_link=1'); ?>
  </div>
  <?php endforeach; ?>

  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


  
</article>
<article id="lower-content" class="row">

  <div class="col span_8 first">
 


<?php if( get_field('video_code') ): 
$video = get_field("video_code");
?>
<div class="row first"><?php echo do_shortcode(" $video "); ?></div>
<?php endif; ?>

<div class="row">
  <h3><a href="<?php the_field('home_link');?>" title="<?php  the_field('home_title');?>" rel="bookmark"><?php the_field('home_title');?></a></h3>
  <p><?php  the_field('home_text');?></p>
    
</div></div>
<div class="col span_4 aside-content">
<?php  the_field('content_area');?>
</div>

</article>


<div class="quote row">
<?php $posts = get_field('quotes_select');
 
if( $posts ): ?>
  <ul class="quotes">
  <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
    <?php setup_postdata($post); ?>
  <li class="post"><p>“<?php  the_field('quote_text');?>”
</p><span class="source"><?php  the_field('quote_place_and_time');?></span></li>
  <?php endforeach; ?>
  </ul>
  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
</div>

<article  class="row">


<div class="col span_6" >
 <h2><?php the_field('left_column_sub_heading');?></h2>
<h3><a href="<?php the_field('left_column_link');?>" title="link to<?php the_field('left_column_heading');?>" rel="bookmark"><?php the_field('left_column_heading');?></a></h3>
<p class="date"><?php the_field('left_column_date');?></p>
 <p><?php the_field('left_column_text');?> <a href="<?php the_field('left_column_link');?>">Read more</a></p>

</div>



<div class="col span_6" >



 <h2><?php the_field('right_column_sub_heading');?></h2>

<h3><a href="<?php the_field('right_column_link');?>" title="<?php the_field('right_column_heading');?>" rel="bookmark"><?php the_field('right_column_heading');?></a></h3>
<p class="date"><?php the_field('left_column_date');?></p>
 <p><?php the_field('right_column_text');?><a href="<?php the_field('right_column_link');?>">Read more</a></p>

</div>


 



</article>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>