<?php
defined ('ABSPATH') or die ('Direct access not allowed');

/**
 * Methods for registering and unregistering taxonomies.
 */

class We_Taxonomies {

  /**
   * Register forum discussion taxonomy.
   */

  public static function register_forum_discussion_taxonomy () {

    $labels = [
      'name'              => _x('Forum Discussions', 'taxonomy general name'),
      'singular_name'     => _x('Forum Discussion', 'taxonomy singular name'),
      'search_items'      => __('Search Forum Discussions'),
      'all_items'         => __('All Forum Discussions'),
      'parent_item'       => __('Parent Forum Discussion'),
      'parent_item_colon' => __('Parent Forum Discussion:'),
      'edit_item'         => __('Edit Forum Discussion'),
      'update_item'       => __('Update Forum Discussion'),
      'add_new_item'      => __('Add New Forum Discussion'),
      'new_item_name'     => __('New Forum Post Discussion'),
      'menu_name'         => __('Forum Discussion')
    ];

    $args = [
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => ['slug' => 'we_forum_discussion'],
    ];

    register_taxonomy('we_forum_discussion', ['post'], $args);

  }

  /**
   * Register forum category.
   */

  public static function register_forum_category_taxonomy () {

    $labels = [
      'name'              => _x('Forum Categories', 'taxonomy general name'),
      'singular_name'     => _x('Forum Category', 'taxonomy singular name'),
      'search_items'      => __('Search Forum Categories'),
      'all_items'         => __('All Forum Categories'),
      'parent_item'       => __('Parent Forum Category'),
      'parent_item_colon' => __('Parent Forum Category:'),
      'edit_item'         => __('Edit Forum Category'),
      'update_item'       => __('Update Forum Category'),
      'add_new_item'      => __('Add New Forum Category'),
      'new_item_name'     => __('New Forum Category Name'),
      'menu_name'         => __('Forum Category')
    ];

    $args = [
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => ['slug' => 'we_forum_category'],
    ];

    register_taxonomy('we_forum_category', ['post'], $args);

  }

  /**
   * Initialization method.
   */

  public static function run () {

    /**
     * Add forum discussion taxonomy registration to correct hook.
     */

    add_action('init', array('We_Taxonomies', 'register_forum_discussion_taxonomy'));

    /**
     * Add forum category taxonomy registration to correct hook.
     */

    add_action('init', array('We_Taxonomies', 'register_forum_category_taxonomy'));

  }

}

?>
