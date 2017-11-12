<?php
function we_scripts () {
  if (is_front_page()) {
    wp_enqueue_script ('we_js_bundle', get_theme_file_uri('/assets/js/app.bundle.js'), array(), '1.0');
  } else {
    wp_enqueue_script ('we_vue_bundle', get_theme_file_uri('/assets/js/vue.bundle.js'), array(), '1.0');
  }
}
add_action ('wp_enqueue_scripts', 'we_scripts');
?>
