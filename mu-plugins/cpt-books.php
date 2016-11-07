<?php

/*
  Plugin Name: CPT Books 
  Description:
  Version: 1.0
 */
!defined('ABSPATH') and exit;

Class IWCbooks {

    private static $post_type = "books";

    public static function init() {
        add_action("init", array(__CLASS__, "register_post_type"));
    }

    public static function register_post_type() {
      $labels = array(
        'name' => __( 'Books', 'sage' ),
        'singular_name' => __( 'Book', 'sage' ),
        'add_new' => __( 'Add New Book', 'sage' ),
        'add_new_item' => __( 'Add New Book', 'sage' ),
        'edit_item' => __( 'Edit Book', 'sage' ),
        'new_item' => __( 'New Book', 'sage' ),
        'view_item' => __( 'View Book', 'sage' ),
        'search_items' => __( 'Search Books', 'sage' ),
        'not_found' => __( 'No books found', 'sage' ),
        'not_found_in_trash' => __( 'No books found in Trash', 'sage' ),
        'parent_item_colon' => __( 'Parent Book:', 'sage' ),
        'menu_name' => __( 'Books', 'sage' ),
      );
        $args = array(
            'labels' => $labels,
            'supports' => array( 'title','editor', 'thumbnail', 'excerpt', 'revisions' ),
            'taxonomies' => array( 'category' ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
             'menu_icon' => 'dashicons-book',

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

IWCbooks::init();