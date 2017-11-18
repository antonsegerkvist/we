<?php
defined ('ABSPATH') or die ('Direct access not allowed');

/**
 * Methods for registering and unregistering endpoints.
 */

class We_Accessors {

  /**
   * User registration endpoint.
   */

  public static function endpoint_we_register_user () {
    $user_login = $_POST['username'];
    $user_email = $_POST['email'];
    $error = register_new_user($user_login, $user_email);

    header('Content-Type: application/json');
    if (!is_wp_error($error)) {
      echo json_encode(array(
        'success' => true
      ));
    } else {
      echo json_encode(array(
        'success' => false,
        'error' => $error->errors
      ));
    }

    wp_die();
  }

  /**
   * Get all forum post taxonomies.
   */

  public static function endpoint_we_get_all_forum_taxonomies () {
    header('Content-Type: application/json');
    $terms = get_terms(array(
      'hide_empty' => false,
      'taxonomy' => 'we_forum'
    ));
    echo json_encode($terms);
    wp_die();
  }

  /**
   * Initialization method.
   */

  public static function run () {

    /**
     * Registration endpoint.
     */

    add_action(
      'wp_ajax_nopriv_endpoint_we_register_user',
      array('We_Accessors', 'endpoint_we_register_user')
    );

    /**
     * Get all forum taxonomies.
     */

    add_action(
      'wp_ajax_nopriv_endpoint_we_get_all_forum_taxonomies',
      array('We_Accessors', 'endpoint_we_get_all_forum_taxonomies')
    );
  }

}

?>
