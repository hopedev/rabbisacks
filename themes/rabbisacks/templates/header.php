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
                  <img class="uk-visible-small" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-sig-sm@2x.png" />                
                 <img class="uk-hidden-small" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-sig@2x.png" />
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
<?php if (is_front_page()){ ?>


      <?php 
      $banners = get_post_meta( get_the_ID(), 'header_images', true );
      
      if( $banners ) {
        $i = rand(0,$banners-1);
         $img = (int) get_post_meta( get_the_ID(), 'header_images_' . $i . '_image', true );
           $banner_url =  wp_get_attachment_image_src( $img, 'full' ) ;
         }
      
      ?>

<div class="home-image uk-cover-background fullwidth" data-uk-sticky="{top:133}" style="background-image:url(<?php echo $banner_url[0] ?>)"> 

      <img class="uk-invisible" src="" width="" height="" alt="">
      <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle">
        <div class="headertext uk-container uk-container-center uk-text-center uk-heading-large" >

      <?php // Get random one of selected quotes
      $headquotes = get_post_meta( get_the_ID(), 'selected_quotes', true );     
      if( $headquotes ) {
            $i = rand(0,$banners-1);
            $quoteID = ($headquotes[$i]);
            $headquote = get_post_meta( $quoteID, 'quote_text', true );
            echo $headquote;
          }    
      ?><h2 class="quote-att">Rabbi Lord Jonathan Sacks</h2>
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








  


