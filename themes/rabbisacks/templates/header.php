<header class="banner" data-uk-sticky>
      <div class="topbanner uk-clearfix">
       
       <div id="searchbox" class="uk-hidden">
           <div class="uk-align-right close"  data-uk-toggle="{target:'#searchbox'}"><i class="uk-icon-times"></i></div>
          <?php get_search_form(); ?>
       </div>
<div class="container uk-container uk-container-center">
          <div class="nav-social uk-navbar-flip">
            <?php
            if (has_nav_menu('social_navigation')) :
              wp_nav_menu(['theme_location' => 'social_navigation', 'menu_class' => 'nav', 'walker' => new Walker_UIKIT()]);
            endif;
            ?>
        </div>
        </div>

      </div>

   <!-- Offscreen menu --> 
        <div class="uk-offcanvas" id="sidemenu">
        
          <nav class="uk-offcanvas-bar uk-offcanvas-bar-flip">
          <a href="" class="" data-uk-toggle="{target:'#sidemenu', cls:'uk-active'}">close</a>
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'items_wrap' => '<ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>%3$s</ul>','walker' => new Walker_UIKIT_offCanvas() ]);
            endif;
            ?>
            <?php
            if (has_nav_menu('secondary_navigation')) :
              wp_nav_menu(['theme_location' => 'secondary_navigation', 'items_wrap' => '<ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon secondnav" data-uk-nav>%3$s</ul>','walker' => new Walker_UIKIT_offCanvas() ]);
            endif;
            ?>


          </nav>
      
        </div>
  <!-- END Offscreen menu -->
      

      <nav class="uk-navbar">
            <ul class="uk-navbar-brand">
            <li class="logo">
                 <a class="brand " href="<?= esc_url(home_url('/')); ?>">
                  <img class="uk-hidden-large" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-sig-sm@2x.png" />                
                 <img class="uk-visible-large" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-sig@2x.png" />
                 </a>
                 </li>
                 <li class="logo-office uk-visible-large">
                 <img   src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-office@2x.png" />
                 </li>
            </ul>


         <div class="container uk-container uk-container-center">        
              <div class="nav-primary uk-navbar-flip">
                <ul class="nav-always uk-navbar-flip">
                    <li><a href="#sidemenu"  class="uk-navbar-toggle" data-uk-offcanvas=""> </a>  </li>
                    <li><a href=# class="" data-uk-toggle="{target:'#searchbox'}"> <i class="uk-icon-search"> </i> </a></li>
              </ul>

              <?php
                  if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class'=>  'uk-navbar-flip', 'menu_class' => 'uk-navbar-nav nav ', 'walker' => new Walker_UIKIT()]);
                  endif;
                  ?>
          </div>
        </div>
      </nav>

</header>

<!--  -->
<!-- STICKY BG IMAGE ON HOMEPAGE -->
<!--  -->
<!-- Mobile homeheader  image and quote -->
<?php if (is_front_page()){ 
          // Get Header Quotes
          $headquotes = get_post_meta( get_the_ID(), 'selected_quotes', true );     
          if( $headquotes ) {
                $i = rand(0,count($headquotes)-1);
                $quoteID = ($headquotes[$i]);
                $headquote = get_post_meta( $quoteID, 'quote_text', true );
          }    


          $banners_mb = get_post_meta( get_the_ID(), 'header_images_mb', true );
          if( $banners_mb ) {
            $i = rand(0,$banners_mb-1);
             $img = (int) get_post_meta( get_the_ID(), 'header_images_mb_' . $i . '_image', true );
               $banner_mb_url =  wp_get_attachment_image_src( $img, 'full' ) ;
             }      
          ?>
  <div class="home-image home-image-mb uk-cover-background fullwidth uk-visible-small" data-uk-sticky="{top:93}" style="background-image:url(<?php echo $banner_mb_url[0] ?>)"> 
      <img class="uk-invisible" src="<?php echo $banner_mb_url[0] ?>" width="" height="" alt="">
      <div class="uk-position-cover">
        <div class="headertext uk-container " >
          <?php // Get random one of selected quotes        
          if( $headquote ) {  echo '<h2 class="quote-head uk-text-center">' . $headquote . '</h2 class="quote-head">'; }     ?>
          <h3 class="quote-att uk-text-center">Rabbi Lord Jonathan Sacks</h3>
  </div>
      </div>
    </div>
<?php  }   ?>
<!-- Medium and up homeheader image and quote -->
<?php if (is_front_page()){ ?>
      <?php 
      $banners = get_post_meta( get_the_ID(), 'header_images', true );
      if( $banners ) {
        $i = rand(0,$banners-1);
         $img = (int) get_post_meta( get_the_ID(), 'header_images_' . $i . '_image', true );
           $banner_url =  wp_get_attachment_image_src( $img, 'full' ) ;
         }      
      ?>
  <div class="home-image uk-cover-background fullwidth uk-hidden-small" data-uk-sticky="{top:121}" style="background-image:url(<?php echo $banner_url[0] ?>)"> 
      <img class="uk-invisible" src="<?php echo $banner_url[0] ?>" width="" height="" alt="">
      <div class="uk-position-cover uk-vertical-align">
        <div class="headertext uk-container uk-heading-large uk-vertical-align-middle" >
        <div class="uk-grid"><div class="uk-width-1-2">
          <?php // Get random one of selected quotes
          $headquotes = get_post_meta( get_the_ID(), 'selected_quotes', true );     
          if( $headquote ) {  echo '<span>' . $headquote . '</span>'; }      
          ?>
          <h3 class="quote-att">Rabbi Lord Jonathan Sacks</h3>
          </div></div>
        </div>
      </div>
    </div>
<?php  }   ?>


<!-- snap down menus -->
<?php if (is_page('covenant-conversation-homepage')){ ?>
      <div class="pagetop_menu">
        <div class="container uk-container uk-container-center uk-clearfix"> 
           <div class="">
              <h4 class="uk-text-center" data-uk-toggle="{target:'#parshotmenu, .toggleicon'}">
              <i class="uk-icon-caret-right toggleicon" aria-hidden="false"></i>
              <i class="uk-icon-caret-down toggleicon uk-hidden" aria-hidden="true"></i>
                click to search by parsha</h4>
              <div id="parshotmenu" class="uk-block pagemenu uk-hidden uk-clearfix">
              <div class="parshot-menu uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-5" data-uk-grid-margin>
                <?php
                wp_nav_menu(array('items_wrap'=> '%3$s', 'walker' => new Simple_Nav_Walker(), 'container'=> false ,'menu' => 'Parshot', 'menu_class' => '' ));
       echo '</div></div></div></div></div>'; 

  }   else if (is_page('writing-homepage')){ ?>
      <div class="pagetop_menu">  
        <div class="container uk-container uk-container-center uk-clearfix"> 
          <div class="">
            <h4 class="uk-text-center"><a data-uk-toggle="{target:'#categorymenu, .toggleicon'}">
              <i class="uk-icon-caret-right toggleicon" aria-hidden="false"></i>
              <i class="uk-icon-caret-down toggleicon uk-hidden" aria-hidden="true"></i>
            click to search by category</a></h4>
            <div id="categorymenu" class="uk-block pagemenu uk-hidden uk-clearfix">
            <ul class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-5" >
            <?php
            wp_list_categories(array(
              'title_li' => ''
          ));
        echo '</div></div></div></div>'; 

        }



if(!is_front_page()){  
        if ( function_exists('yoast_breadcrumb') ) {
          echo '<div class="breadcrumbscontainer uk-container uk-container-center">';
          yoast_breadcrumb('<p class="breadcrumb">','</p>');
          echo '</div>';
        }

 }   ?>








  


