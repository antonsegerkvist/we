<?php
/**
 * @package We
 * @since 1.0
 * @version 1.0
 */
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    @font-face {
      font-family: "ProximaNovaRegular";
      src: url("<?php echo get_theme_file_uri('/assets/fonts/Proxima-Nova-Regular.ttf'); ?>");
    }
    @font-face {
      font-family: "ProximaNovaThin";
      src: url("<?php echo get_theme_file_uri('/assets/fonts/Proxima-Nova-Thin.ttf'); ?>");
    }
  </style>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
