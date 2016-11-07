<?php

/*
  Plugin Name: Custom taxonomies
  Description:
  Version: 1.0
 */
!defined('ABSPATH') and exit;
Class HPc_c_archive {

    private static $tax_type = "c_c_archive";

    public static function init() {
        add_action("init", array(__CLASS__, "register_taxonomy"));
    }
   public static function register_taxonomy() {
      $labels = array(
        'name' => _x('C&C Dates', 'Taxonomy General Name', 'sage' ),
        'label' => 'C&C Dates' ,
        // 'singular_name'              => _x( 'Project Type', 'Taxonomy Singular Name', 'sage' ),
        // 'menu_name'                  => __( 'Project Types', 'sage' ),
        // 'all_items'                  => __( 'Project Types', 'sage' ),
        // 'parent_item'                => __( 'Parent Project Type', 'sage' ),
        // 'parent_item_colon'          => __( 'Parent Project Type:', 'sage' ),
        // 'new_item_name'              => __( 'New Project Type Name', 'sage' ),
        // 'add_new_item'               => __( 'Add New Project Type', 'sage' ),
        // 'edit_item'                  => __( 'Edit Project Type', 'sage' ),
        // 'update_item'                => __( 'Update Project Type', 'sage' ),
        // 'view_item'                  => __( 'View Project Type', 'sage' ),
        // 'separate_items_with_commas' => __( 'Separate Project Types with commas', 'sage' ),
        // 'add_or_remove_items'        => __( 'Add or remove Project Types', 'sage' ),
        // 'choose_from_most_used'      => __( 'Choose from the most used Project Types', 'sage' ),
        // 'popular_items'              => __( 'Popular Project Types', 'sage' ),
        // 'search_items'               => __( 'Search Project Types', 'sage' ),
        // 'not_found'                  => __( 'Project Type Not Found', 'sage' ),
        // 'no_terms'                   => __( 'No Project Types', 'sage' ),
        // 'items_list'                 => __( 'Project Types list', 'sage' ),
        // 'items_list_navigation'      => __( 'Project Types list navigation', 'sage' ),
      );
      $args = array(       
        "label" => "C&C Dates",
        "rewrite" => array( 'slug' => 'c_c_archive', 'with_front' => false ),
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
      );
      register_taxonomy(self::$tax_type, array( 'post' ), $args );
   }

}

HPc_c_archive::init();


Class HPparsha {

    private static $tax_type = "parsha";

    public static function init() {
        add_action("init", array(__CLASS__, "register_taxonomy"));
    }
   public static function register_taxonomy() {
      $labels = array(
        'name' => _x('Parshot', 'Taxonomy General Name', 'sage' ),
        'label' => "Parshot",
      
        // 'singular_name'              => _x( 'Project Type', 'Taxonomy Singular Name', 'sage' ),
        // 'menu_name'                  => __( 'Project Types', 'sage' ),
        // 'all_items'                  => __( 'Project Types', 'sage' ),
        // 'parent_item'                => __( 'Parent Project Type', 'sage' ),
        // 'parent_item_colon'          => __( 'Parent Project Type:', 'sage' ),
        // 'new_item_name'              => __( 'New Project Type Name', 'sage' ),
        // 'add_new_item'               => __( 'Add New Project Type', 'sage' ),
        // 'edit_item'                  => __( 'Edit Project Type', 'sage' ),
        // 'update_item'                => __( 'Update Project Type', 'sage' ),
        // 'view_item'                  => __( 'View Project Type', 'sage' ),
        // 'separate_items_with_commas' => __( 'Separate Project Types with commas', 'sage' ),
        // 'add_or_remove_items'        => __( 'Add or remove Project Types', 'sage' ),
        // 'choose_from_most_used'      => __( 'Choose from the most used Project Types', 'sage' ),
        // 'popular_items'              => __( 'Popular Project Types', 'sage' ),
        // 'search_items'               => __( 'Search Project Types', 'sage' ),
        // 'not_found'                  => __( 'Project Type Not Found', 'sage' ),
        // 'no_terms'                   => __( 'No Project Types', 'sage' ),
        // 'items_list'                 => __( 'Project Types list', 'sage' ),
        // 'items_list_navigation'      => __( 'Project Types list navigation', 'sage' ),
      );
      $args = array(       
    "labels" => $labels,
        "hierarchical" => false,
        "label" => "Parshot",
        "show_ui" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'parsha', 'with_front' => true ),
        "show_admin_column" => false,
      );
      register_taxonomy(self::$tax_type, array( 'post' ), $args );
   }

}

HPparsha::init();



