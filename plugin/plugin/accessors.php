<?php
defined ('ABSPATH') or die ('Direct access not allowed');

/**
 * Methods for registering and unregistering endpoints.
 */

class We_Accessors {

  /**
   * User registration endpoint.
   */

  public static function endpoint_register_user () {
    $user_login = $_POST['username'];
    $user_email = $_POST['email'];
    $error = register_new_user($user_login, $user_email);

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
   * Initialization method.
   */

  public static function run () {
    add_action('wp_ajax_nopriv_endpoint_register_user', array('We_Accessors', 'endpoint_register_user'));
  }

}

?>
