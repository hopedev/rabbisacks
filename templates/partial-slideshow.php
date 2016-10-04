<?php

// Set a variable that says what style of slideshow?


// Using ACF but calling with WP get_post_meta so works without ACF plugin

?>

<ul class="uk-slideshow" data-uk-slideshow="{autoplay:true, animation: 'swipe'}">


<?php
    $slideshow = get_post_meta( 20, $slideshow_name , true );
    $partialname = $slideshow_name . "_";

    if( $slideshow ) {
      for( $i = 0; $i < $slideshow; $i++ ) {
        $title  = esc_html( get_post_meta( get_the_ID(), $partialname . $i . '_text', true ) );
        $link = (int) get_post_meta( get_the_ID(), $partialname . $i . '_page_link', true ) ;
        $image = (int) get_post_meta( get_the_ID(), $partialname . $i . '_image', true );
        
        
         $image =   wp_get_attachment_url( $image ) ;
         echo '<li title="' . $link . '"> <img src="' .  $image  .  '" width="" height="" alt="' . $title . '">';
         echo '<div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle uk-text-center">';
            echo '<div><p> '. $slideshow_name . '</p>';
            echo '<h3> '. get_the_title($link) . '</h3>';            
            echo '</div></div>';
         echo '</li>';
      }

    } 
?>

</ul>