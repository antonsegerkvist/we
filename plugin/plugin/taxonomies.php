<?php
defined ('ABSPATH') or die ('Direct access not allowed');

/**
 * Methods for registering and unregistering taxonomies.
 */

class We_Taxonomies {

  /**
   * Register forum taxonomies.
   */

  public static function register_forum_taxonomy () {

    $labels = [
      'name'              => _x('Forum Posts', 'taxonomy general name'),
      'singular_name'     => _x('Forum Post', 'taxonomy singular name'),
      'search_items'      => __('Search Forum Posts'),
      'all_items'         => __('All Forum Posts'),
      'parent_item'       => __('Parent Forum Post'),
      'parent_item_colon' => __('Parent Forum Post:'),
      'edit_item'         => __('Edit Forum Post'),
      'update_item'       => __('Update Forum Post'),
      'add_new_item'      => __('Add New Forum Post'),
      'new_item_name'     => __('New Forum Post Name'),
      'menu_name'         => __('Forum Post')
    ];

    $args = [
      'hierarchical'      => true, // make it hierarchical (like categories)
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => ['slug' => 'forum'],
    ];

    register_taxonomy('forum', ['post'], $args);

  }

  /**
   * Initialization method.
   */

  public static function run () {

    /**
     * Add forum taxonomy registration to correct hook.
     */

    add_action('init', array('We_Taxonomies', 'register_forum_taxonomy'));

  }

}

?>
