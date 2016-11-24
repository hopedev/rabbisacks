<?php

/*
  Plugin Name: CPT Quotes 
  Description:
  Version: 1.0
 */
!defined('ABSPATH') and exit;

Class HPquotes {

    private static $post_type = "quotes";

    public static function init() {
        add_action("init", array(__CLASS__, "register_post_type"));
    }

    public static function register_post_type() {
      $labels = array(
        'name' => __( 'Quotes', 'sage' ),
        'singular_name' => __( 'Quote', 'sage' ),
        'add_new' => __( 'Add New Quote', 'sage' ),
        'add_new_item' => __( 'Add New Quote', 'sage' ),
        'edit_item' => __( 'Edit Quote', 'sage' ),
        'new_item' => __( 'New Quote', 'sage' ),
        'view_item' => __( 'View Quote', 'sage' ),
        'search_items' => __( 'Search Quotes', 'sage' ),
        'not_found' => __( 'No quotes found', 'sage' ),
        'not_found_in_trash' => __( 'No quotes found in Trash', 'sage' ),
        'parent_item_colon' => __( 'Parent Quote:', 'sage' ),
        'menu_name' => __( 'Quotes', 'sage' ),
      );
        $args = array(
            'labels' => $labels,
            'supports' => array( 'title','editor',  'revisions' ),
            'taxonomies' => array( 'category' ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
             'menu_icon' => 'dashicons-format-quote',

            'show_in_nav_menus' => true,
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

HPquotes::init();

Class HPtopics {

    private static $tax_type = "topics";

    public static function init() {
        add_action("init", array(__CLASS__, "register_taxonomy"));
    }
   public static function register_taxonomy() {
      $labels = array(
        'name'                       => _x( 'Topics', 'Taxonomy General Name', 'sage' ),
        'singular_name'              => _x( 'Topic', 'Taxonomy Singular Name', 'sage' ),
        'menu_name'                  => __( 'Topics', 'sage' ),
        'all_items'                  => __( 'All Topics', 'sage' ),
        'parent_item'                => __( 'Parent Topic', 'sage' ),
        'parent_item_colon'          => __( 'Parent Topic:', 'sage' ),
        'new_item_name'              => __( 'New Topic Name', 'sage' ),
        'add_new_item'               => __( 'Add New Topic', 'sage' ),
        'edit_item'                  => __( 'Edit Topic', 'sage' ),
        'update_item'                => __( 'Update Topic', 'sage' ),
        'separate_items_with_commas' => __( 'Separate Topic with commas', 'sage' ),
        'search_items'               => __( 'Search topic', 'sage' ),
        'add_or_remove_items'        => __( 'Add or remove topic', 'sage' ),
        'choose_from_most_used'      => __( 'Choose from the most used topics', 'sage' ),
        'not_found'                  => __( 'Not Found', 'sage' ),
      
      );
      $args = array(       
    "labels" => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
      );
      register_taxonomy(self::$tax_type, array( 'quotes' ), $args );
   }

}

HPtopics::init();

Class HPfeature {

    private static $tax_type = "featured";

    public static function init() {
        add_action("init", array(__CLASS__, "register_taxonomy"));
    }
   public static function register_taxonomy() {
      $labels = array(
        'name'                       => _x( 'Featured', 'Taxonomy General Name', 'sage' ),
        'singular_name'              => _x( 'Featured', 'Taxonomy Singular Name', 'sage' ),


      
      );
      $args = array(       
    "labels" => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
      );
      register_taxonomy(self::$tax_type, array( 'quotes' ), $args );
   }

}

HPfeature::init();
