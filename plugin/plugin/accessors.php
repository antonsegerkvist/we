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
   * Login user endpoint.
   */

  public static function endpoint_we_login_user () {
    wp_die();
  }

  /**
   * Logout user endpoint.
   */

  public static function endpoint_we_logout_user () {
    wp_die();
  }

  /**
   * Get all forum categories.
   */

  public static function endpoint_we_get_all_forum_categories () {
    header('Content-Type: application/json');
    $terms = get_terms(array(
     'hide_empty' => false,
     'taxonomy' => 'we_forum_category'
    ));
    echo json_encode($terms);
    wp_die();
  }

  /**
   * Get all forum discussion.
   */

  public static function endpoint_we_get_all_forum_discussions () {
    header('Content-Type: application/json');
    $terms = get_terms(array(
      'hide_empty' => false,
      'taxonomy' => 'we_forum_discussion'
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
     * User login endpoint.
     */

    add_action(
      'wp_ajax_nopriv_endpoint_we_login_user',
      array('We_Accessors', 'endpoint_we_login_user')
    );

    /**
     * User logout endpoint.
     */

    add_action(
      'wp_ajax_endpoint_we_logout_user',
      array('We_Accessors', 'endpoint_we_logout_user')
    );

    /**
     * Get all forum categories.
     */

    add_action(
      'wp_ajax_endpoint_we_get_all_forum_categories',
      array('We_Accessors', 'endpoint_we_get_all_forum_categories')
    );
    add_action(
      'wp_ajax_nopriv_endpoint_we_get_all_forum_categories',
      array('We_Accessors', 'endpoint_we_get_all_forum_categories')
    );

    /**
     * Get all forum discussions.
     */

    add_action(
      'wp_ajax_endpoint_we_get_all_forum_discussions',
      array('We_Accessors', 'endpoint_we_get_all_forum_discussions')
    );
    add_action(
      'wp_ajax_nopriv_endpoint_we_get_all_forum_discussions',
      array('We_Accessors', 'endpoint_we_get_all_forum_discussions')
    );
  }

}

?>
