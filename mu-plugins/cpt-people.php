<?php

/*
  Plugin Name: CPT People 
  Description:
  Version: 1.0
 */
!defined('ABSPATH') and exit;

Class IWCpeople {

    private static $post_type = "person";

    public static function init() {
        add_action("init", array(__CLASS__, "register_post_type"));
    }

    public static function register_post_type() {
      $labels = array(
        'name' => __( 'People', 'sage' ),
        'singular_name' => __( 'Person', 'sage' ),
        'add_new' => __( 'Add New Person', 'sage' ),
        'add_new_item' => __( 'Add New Person', 'sage' ),
        'edit_item' => __( 'Edit Person', 'sage' ),
        'new_item' => __( 'New Person', 'sage' ),
        'view_item' => __( 'View Person', 'sage' ),
        'search_items' => __( 'Search People', 'sage' ),
        'not_found' => __( 'No people found', 'sage' ),
        'not_found_in_trash' => __( 'No people found in Trash', 'sage' ),
        'parent_item_colon' => __( 'Parent Person:', 'sage' ),
        'menu_name' => __( 'People', 'sage' ),
      );
        $args = array(
            'labels' => $labels,
            'supports' => array( 'title','editor', 'thumbnail', 'revisions' ),
            'taxonomies' => array( 'position' ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
             'menu_icon' => 'dashicons-groups',

            'show_in_nav_menus' => false,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'post'
        );

        register_post_type(self::$post_type, $args);
    } 
}

IWCpeople::init();


Class IWCposition {

    private static $tax_type = "position";

    public static function init() {
        add_action("init", array(__CLASS__, "register_taxonomy"));
    }
   public static function register_taxonomy() {
      $labels = array(
        'name'                       => _x( 'Positions', 'Taxonomy General Name', 'sage' ),
        'singular_name'              => _x( 'Position', 'Taxonomy Singular Name', 'sage' ),
        'menu_name'                  => __( 'Positions', 'sage' ),
        'all_items'                  => __( 'All Positions', 'sage' ),
        'parent_item'                => __( 'Parent Position', 'sage' ),
        'parent_item_colon'          => __( 'Parent Position:', 'sage' ),
        'new_item_name'              => __( 'New Position Name', 'sage' ),
        'add_new_item'               => __( 'Add New Position', 'sage' ),
        'edit_item'                  => __( 'Edit Position', 'sage' ),
        'update_item'                => __( 'Update Position', 'sage' ),
        'view_item'                  => __( 'View Position', 'sage' ),
        'separate_items_with_commas' => __( 'Separate positions with commas', 'sage' ),
        'add_or_remove_items'        => __( 'Add or remove positions', 'sage' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
        'popular_items'              => __( 'Popular Positions', 'sage' ),
        'search_items'               => __( 'Search Positions', 'sage' ),
        'not_found'                  => __( 'Position Not Found', 'sage' ),
        'no_terms'                   => __( 'No Positions', 'sage' ),
        'items_list'                 => __( 'Positions list', 'sage' ),
        'items_list_navigation'      => __( 'Positions list navigation', 'sage' ),
      );
      $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
      );
      register_taxonomy(self::$tax_type, array( 'person' ), $args );
   }

}

IWCposition::init();


// Class IWCposition {

//     private static $tax_type = "position";

//     public static function init() {
//         add_action("init", array(__CLASS__, "register_taxonomy"));
//     }
//    public static function register_taxonomy() {
//       $labels = array(
//         'name'                       => _x( 'Positions', 'Taxonomy General Name', 'sage' ),
//         'singular_name'              => _x( 'Position', 'Taxonomy Singular Name', 'sage' ),
//         'menu_name'                  => __( 'Positions', 'sage' ),
//         'all_items'                  => __( 'All Positions', 'sage' ),
//         'parent_item'                => __( 'Parent Position', 'sage' ),
//         'parent_item_colon'          => __( 'Parent Position:', 'sage' ),
//         'new_item_name'              => __( 'New Position Name', 'sage' ),
//         'add_new_item'               => __( 'Add New Position', 'sage' ),
//         'edit_item'                  => __( 'Edit Position', 'sage' ),
//         'update_item'                => __( 'Update Position', 'sage' ),
//         'view_item'                  => __( 'View Position', 'sage' ),
//         'separate_items_with_commas' => __( 'Separate positions with commas', 'sage' ),
//         'add_or_remove_items'        => __( 'Add or remove positions', 'sage' ),
//         'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
//         'popular_items'              => __( 'Popular Positions', 'sage' ),
//         'search_items'               => __( 'Search Positions', 'sage' ),
//         'not_found'                  => __( 'Position Not Found', 'sage' ),
//         'no_terms'                   => __( 'No Positions', 'sage' ),
//         'items_list'                 => __( 'Positions list', 'sage' ),
//         'items_list_navigation'      => __( 'Positions list navigation', 'sage' ),
//       );
//       $args = array(
//         'labels'                     => $labels,
//         'hierarchical'               => true,
//         'public'                     => true,
//         'show_ui'                    => true,
//         'show_admin_column'          => true,
//         'show_in_nav_menus'          => true,
//         'show_tagcloud'              => true,
//       );
//       register_taxonomy(self::$tax_type, array( 'person' ), $args );
//    }

// }

// IWCposition::init();