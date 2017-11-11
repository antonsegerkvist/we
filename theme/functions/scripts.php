<?php
/**
 * @package We
 * @since 1.0
 * @version 1.0
 */
?>

<?php
function we_scripts () {
  wp_enqueue_script ('we_js_bundle', get_theme_file_uri('/assets/js/app.bundle.js'), array(), '1.0');
}
add_action ('wp_enqueue_scripts', 'we_scripts');
?>
