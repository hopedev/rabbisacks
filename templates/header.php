<header class="banner">
  <div class="container uk-container uk-container-center">

      <div class="topbanner uk-clearfix">
          <div class="nav-primary uk-navbar-flip">
            <?php
            if (has_nav_menu('social_navigation')) :
              wp_nav_menu(['theme_location' => 'social_navigation', 'menu_class' => 'uk-navbar-nav nav', 'walker' => new Walker_UIKIT()]);
            endif;
            ?>
        </div>

      </div>

   <!-- Offscreen menu --> 
        <div class="uk-offcanvas" id="sidemenu">
          <nav class="uk-offcanvas-bar">
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
      </nav>

 
  

  </div>
</header>
