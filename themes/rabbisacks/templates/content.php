<!-- Content for an archive page -->

<article <?php post_class('uk-article'); ?>>
  <header>

  <?php // get type of post, C&C, text, audio, video (or book?) 
  	if(in_category('covenant-conversation')) {
  		$type = "c-c";
  	} else if (has_term( 'text', 'media' ) ){
  		$type = "t";

  	} else if (has_term( 'video', 'media' ) ){
  		$type = "v";

  	} else if (has_term( 'audio', 'media' ) ){
  		$type = "a";

  	} else {
  		$type = "other";
  	}
  ?>
    <h2 class="entry-title uk-article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="uk-badge uk-badge-notification"><?php echo $type; ?></span></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <?php 
  $video = get_post_meta( get_the_ID(), 'video', true );
  if($video){
  	echo '<div class="video">';
  	echo '<a class="uk-button" href="' . $video . '" data-uk-lightbox={group:\'page\'} data-lightbox-type="image" >watch</a>';
  	echo '</div>';
  }
?>

</article>
