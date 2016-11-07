<?php

/*
  Plugin Name: CPT Quotes 
  Description:
  Version: 1.0
 */
!defined('ABSPATH') and exit;

Class HPquotes {

    private static $post_type = "quote";

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



// $labels = array(
//         "name" => "Quotes",
//         "singular_name" => "Quote",
//         );

//     $args = array(
//         "labels" => $labels,
//         "description" => "",
//         "public" => true,
//         "show_ui" => true,
//         "has_archive" => true,
//         "show_in_menu" => true,
//         "exclude_from_search" => false,
//         "capability_type" => "post",
//         "map_meta_cap" => true,
//         "hierarchical" => false,
//         "rewrite" => array( "slug" => "quotes", "with_front" => true ),
//         "query_var" => true,
                
//         "supports" => array( "title", "editor", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "thumbnail", "author", "page-attributes", "post-formats" ),      
//     );
//     register_post_type( "quotes", $args );


// Register Custom Taxonomy
// function topics() {

//     $labels = array(
//         'name'                       => _x( 'Topics', 'Taxonomy General Name', 'text_domain' ),
//         'singular_name'              => _x( 'Topic', 'Taxonomy Singular Name', 'text_domain' ),
//         'menu_name'                  => __( 'Topics', 'text_domain' ),
//         'all_items'                  => __( 'All Topics', 'text_domain' ),
//         'parent_item'                => __( 'Parent Topic', 'text_domain' ),
//         'parent_item_colon'          => __( 'Parent Topic:', 'text_domain' ),
//         'new_item_name'              => __( 'New Topic Name', 'text_domain' ),
//         'add_new_item'               => __( 'Add New Topic', 'text_domain' ),
//         'edit_item'                  => __( 'Edit Topic', 'text_domain' ),
//         'update_item'                => __( 'Update Topic', 'text_domain' ),
//         'separate_items_with_commas' => __( 'Separate Topic with commas', 'text_domain' ),
//         'search_items'               => __( 'Search topic', 'text_domain' ),
//         'add_or_remove_items'        => __( 'Add or remove topic', 'text_domain' ),
//         'choose_from_most_used'      => __( 'Choose from the most used topics', 'text_domain' ),
//         'not_found'                  => __( 'Not Found', 'text_domain' ),
//     );
//     $args = array(
//         'labels'                     => $labels,
//         'hierarchical'               => false,
//         'public'                     => true,
//         'show_ui'                    => true,
//         'show_admin_column'          => true,
//         'show_in_nav_menus'          => true,
//         'show_tagcloud'              => true,
//     );
//     register_taxonomy( 'topics', array( 'quotes' ), $args );

// }

// // Hook into the 'init' action
// add_action( 'init', 'topics', 0 );