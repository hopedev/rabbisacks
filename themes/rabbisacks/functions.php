<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/uikit-menu-walker-offcanvas.php',
  'lib/uikit-menu-walker.php'
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/* Change Excerpt length */
function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function strip_shortcode_from_excerpt( $content ) {
  $content = strip_shortcodes( $content );
  return $content;
}
add_filter('the_excerpt', 'strip_shortcode_from_excerpt', 50);



// Check homepage IDs here
function get_landing_pages($page){
  switch ($page) {
      case 'audio':
          $page_id = 13266;
          break;
      case 'video':
          $page_id = 13236;
          break;
      case 'text':
          $page_id = 13232;
          break;
      case 'cc':
          $page_id = 13229;
          break;
      case 'books':
          $page_id = 4243;
          break;
  }

return $page_id;

}


// Prints out snap down Parshot menu
class Simple_Nav_Walker extends Walker_Nav_Menu {

  /**
   * Filter used to remove built in WordPress-generated classes
   * @param  mixed $var The array item to verify
   * @return boolean      Whether or not the item matches the filter
   */
  function filter_builtin_classes( $var ) {
      return ( FALSE === strpos( $var, 'item' ) ) ? $var : ''; 
  }
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = '';
    $unfiltered_classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes = array_filter( $unfiltered_classes, array( $this, 'filter_builtin_classes' ) );
    if ( preg_grep("/^current/", $unfiltered_classes) ) {
      $classes[] = 'active';
    }
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';


    if ( ($depth === 0)) {
    $output .= '<div>' . $indent . '<li' . $value . $class_names .'>';
    } elseif ($depth > 0) {
    $output .= $indent . '<li' . $value . $class_names .'>';
    }

    //$output .= $indent . '<li' . $value . $class_names .'>';

    $atts = array();
    $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
    $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
    $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
    $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
    $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
    $attributes = '';
    foreach ( $atts as $attr => $value ) {
      if ( ! empty( $value ) ) {
        $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  function end_el(&$output, $item, $depth=0, $args=array()) { 
    if (($depth === 0)) {
      $output .= "</div>\n";
    } 
  }
}

 function adjust_image_sizes_attr( $sizes, $size ) {
   $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
   return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );



  function paginate() {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    
    $pagination = array(
      'base' => @add_query_arg('page','%#%'),
      'format' => '',
      'total' => $wp_query->max_num_pages,
      'current' => $current,
      'show_all' => true,
      'type' => 'list',
      'next_text' => '&raquo;',
      'prev_text' => '&laquo;'
      );
    
    if( $wp_rewrite->using_permalinks() )
      $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    
    if( !empty($wp_query->query_vars['s']) )
      $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    
    echo paginate_links( $pagination );
}  