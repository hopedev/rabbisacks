<?php

/*
  Plugin Name: CPT Projects 
  Description:
  Version: 1.0
 */
!defined('ABSPATH') and exit;

Class IWCproject {

    private static $post_type = "project";

    public static function init() {
        add_action("init", array(__CLASS__, "register_post_type"));
    }

    public static function register_post_type() {
      $labels = array(
            'name'                  => _x( 'Projects', 'Post Type General Name', 'sage' ),
            'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'sage' ),
            'menu_name'             => __( 'Projects', 'sage' ),
            'name_admin_bar'        => __( 'Project', 'sage' ),
            'archives'              => __( 'Project Archives', 'sage' ),
            'parent_item_colon'     => __( 'Parent Project:', 'sage' ),
            'all_items'             => __( 'All Projects', 'sage' ),
            'add_new_item'          => __( 'Add New Project', 'sage' ),
            'add_new'               => __( 'Add New Project', 'sage' ),
            'new_item'              => __( 'New Project', 'sage' ),
            'edit_item'             => __( 'Edit Project', 'sage' ),
            'update_item'           => __( 'Update Project', 'sage' ),
            'view_item'             => __( 'View Project', 'sage' ),
            'search_items'          => __( 'Search Project', 'sage' ),
            'not_found'             => __( 'Project Not found', 'sage' ),
            'not_found_in_trash'    => __( 'Project Not found in Trash', 'sage' ),
            'featured_image'        => __( 'Featured Image', 'sage' ),
            'set_featured_image'    => __( 'Set featured image', 'sage' ),
            'remove_featured_image' => __( 'Remove featured image', 'sage' ),
            'use_featured_image'    => __( 'Use as featured image', 'sage' ),
            'insert_into_item'      => __( 'Insert into Project', 'sage' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Project', 'sage' ),
            'items_list'            => __( 'Projects list', 'sage' ),
            'items_list_navigation' => __( 'Projects list navigation', 'sage' ),
            'filter_items_list'     => __( 'Filter Projects list', 'sage' ),      
            );
        $args = array(
            'label'                 => __( 'Project', 'sage' ),
            'description'           => __( 'Projects for work page', 'sage' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
            'taxonomies'            => array( 'project_type', ' project_category' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-schedule',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => 'work',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );

        register_post_type(self::$post_type, $args);
    } 
}
IWCproject::init();


Class IWCproject_type {

    private static $tax_type = "project_type";

    public static function init() {
        add_action("init", array(__CLASS__, "register_taxonomy"));
    }
   public static function register_taxonomy() {
      $labels = array(
        'name'                       => _x( 'Project Types', 'Taxonomy General Name', 'sage' ),
        'singular_name'              => _x( 'Project Type', 'Taxonomy Singular Name', 'sage' ),
        'menu_name'                  => __( 'Project Types', 'sage' ),
        'all_items'                  => __( 'Project Types', 'sage' ),
        'parent_item'                => __( 'Parent Project Type', 'sage' ),
        'parent_item_colon'          => __( 'Parent Project Type:', 'sage' ),
        'new_item_name'              => __( 'New Project Type Name', 'sage' ),
        'add_new_item'               => __( 'Add New Project Type', 'sage' ),
        'edit_item'                  => __( 'Edit Project Type', 'sage' ),
        'update_item'                => __( 'Update Project Type', 'sage' ),
        'view_item'                  => __( 'View Project Type', 'sage' ),
        'separate_items_with_commas' => __( 'Separate Project Types with commas', 'sage' ),
        'add_or_remove_items'        => __( 'Add or remove Project Types', 'sage' ),
        'choose_from_most_used'      => __( 'Choose from the most used Project Types', 'sage' ),
        'popular_items'              => __( 'Popular Project Types', 'sage' ),
        'search_items'               => __( 'Search Project Types', 'sage' ),
        'not_found'                  => __( 'Project Type Not Found', 'sage' ),
        'no_terms'                   => __( 'No Project Types', 'sage' ),
        'items_list'                 => __( 'Project Types list', 'sage' ),
        'items_list_navigation'      => __( 'Project Types list navigation', 'sage' ),
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
      register_taxonomy(self::$tax_type, array( 'project' ), $args );
   }

}

IWCproject_type::init();


Class IWCproject_category {

    private static $tax_type = "project_category";

    public static function init() {
        add_action("init", array(__CLASS__, "register_taxonomy"));
    }
   public static function register_taxonomy() {
      $labels = array(
        'name'                       => _x( 'Project Categories', 'Taxonomy General Name', 'sage' ),
        'singular_name'              => _x( 'Project Category', 'Taxonomy Singular Name', 'sage' ),
        'menu_name'                  => __( 'Project Categories', 'sage' ),
        'all_items'                  => __( 'Project Categories', 'sage' ),
        'parent_item'                => __( 'Parent Project Category', 'sage' ),
        'parent_item_colon'          => __( 'Parent Project Category:', 'sage' ),
        'new_item_name'              => __( 'New Project Category Name', 'sage' ),
        'add_new_item'               => __( 'Add New Project Category', 'sage' ),
        'edit_item'                  => __( 'Edit Project Category', 'sage' ),
        'update_item'                => __( 'Update Project Category', 'sage' ),
        'view_item'                  => __( 'View Project Category', 'sage' ),
        'separate_items_with_commas' => __( 'Separate Project Categories with commas', 'sage' ),
        'add_or_remove_items'        => __( 'Add or remove Project Categories', 'sage' ),
        'choose_from_most_used'      => __( 'Choose from the most used Project Categories', 'sage' ),
        'popular_items'              => __( 'Popular Project Categories', 'sage' ),
        'search_items'               => __( 'Search Project Categories', 'sage' ),
        'not_found'                  => __( 'Project Category Not Found', 'sage' ),
        'no_terms'                   => __( 'No Project Categories', 'sage' ),
        'items_list'                 => __( 'Project Categories list', 'sage' ),
        'items_list_navigation'      => __( 'Project Categories list navigation', 'sage' ),
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
      register_taxonomy(self::$tax_type, array( 'project' ), $args );
   }

}


IWCproject_category::init();
