<header class="banner">
  <div class="container uk-container uk-container-center">
    

 <!-- Offscreen menu --> 
      <div class="uk-offcanvas" id="sidemenu">
        <nav class="uk-offcanvas-bar">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'items_wrap' => '<ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>%3$s</ul>','walker' => new Walker_UIKIT_offCanvas() ]);
          endif;
          ?>
    

        </nav>
  
      </div>
  <!-- END Offscreen menu -->


      

        <nav class="uk-navbar">

          <a href="#sidemenu"  class="uk-navbar-toggle" data-uk-offcanvas=""></a>

      
 
       
    
            <div class="nav-primary uk-navbar-flip">
            <?php
            if (has_nav_menu('top_navigation')) :
              wp_nav_menu(['theme_location' => 'top_navigation', 'menu_class' => 'uk-navbar-nav nav', 'walker' => new Walker_UIKIT()]);
            endif;
            ?>
            </div>
      
          <div class="uk-navbar-brand uk-navbar-center">
           <a class="" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
          </div>

    </nav>

 
  

  </div>
</header>
