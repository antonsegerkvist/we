<?php
function we_styles () {
  wp_enqueue_style ('we_css_bundle', get_theme_file_uri('/assets/css/app.bundle.css'), array(), '1.0');
}
add_action ('wp_enqueue_scripts', 'we_styles');
?>
