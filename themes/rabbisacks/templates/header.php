<header class="banner" data-uk-sticky>

      <div class="topbanner uk-clearfix">
       <div class="container uk-container uk-container-center">
          <div class="nav-primary uk-navbar-flip">
            <?php
            if (has_nav_menu('social_navigation')) :
              wp_nav_menu(['theme_location' => 'social_navigation', 'menu_class' => 'uk-navbar-nav nav', 'walker' => new Walker_UIKIT()]);
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
         <div class="container uk-container uk-container-center">
            <div class="uk-navbar-brand">
                <a class="" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            </div>
         
              <div class="nav-primary">
                  <?php
                  if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'uk-navbar-nav nav', 'walker' => new Walker_UIKIT()]);
                  endif;
                  ?>
              </div>

              <div class="uk-navbar-flip">
                     <a href="#sidemenu"  class="uk-navbar-toggle" data-uk-offcanvas=""></a>  
                <span>Search</span>
        
          </div>
        </div>
      </nav>

</header>

<?php if (is_front_page()){ ?>
<div class="home-image uk-cover-background fullwidth" data-uk-sticky="{top:80}"> 


      <img class="uk-invisible" src="" width="" height="" alt="">
      <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle">
        <div class="headertext uk-container uk-container-center uk-text-center" >Morality is taught by being lived. It is learned by doing</div>

      </div>
    </div>
<?php  }   ?>

<!-- snap down menus -->
<?php if (is_page('covenant-conversation-home')){ ?>
<div class="pagetop_menu">  <div class="container uk-container uk-container-center uk-clearfix"> 
<h3 class="uk-text-center"><a data-uk-toggle="{target:'#parshotmenu'}">click to search by parsha</a></h3>
<div id="parshotmenu" class="uk-hidden uk-clearfix">
<?php
wp_nav_menu(array('items_wrap'=> '%3$s', 'walker' => new Simple_Nav_Walker(), 'container'=>'div', 'container_class'=>'parshot-menu uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-5' ,'menu' => 'Parshot', 'menu_class' => '' ));
 echo '</div></div></div>'; 

  }   ?>



  


