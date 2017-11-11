<?php
/**
 * The front page template file.
 *
 * Template Name: Home
 *
 * @package We
 * @since 1.0
 * @version 1.0
 *
 * Meta data tags:
 *
 * @page_main_title
 * @page_main_subtitle
 * @page_about_col1_title
 * @page_about_col1_content
 * @page_about_col2_title
 * @page_about_col2_content
 * @page_forum_title
 * @page_forum_link_href
 * @page_forum_link_title
 */
?>

<?php get_header(); ?>
<div class="front-page-container">

  <section class="main">
    <div class="center">
      <h1><?php echo get_post_meta(get_the_ID(), "page_main_title", true); ?></h1>
      <h2><?php echo get_post_meta(get_the_ID(), "page_main_subtitle", true); ?></h2>
    </div>
  </section>

  <section class="about">
    <div class="left">
      <h3><?php echo get_post_meta(get_the_ID(), "page_about_col1_title", true); ?></h3>
      <p><?php echo get_post_meta(get_the_ID(), "page_about_col1_content", true); ?></p>
    </div>
    <div class="right">
      <h3><?php echo get_post_meta(get_the_ID(), "page_about_col2_title", true); ?></h3>
      <p><?php echo get_post_meta(get_the_ID(), "page_about_col2_content", true); ?></p>
    </div>
  </section>

  <section class="forum">
    <h3><?php echo get_post_meta(get_the_ID(), "page_forum_title", true); ?></h3>
    <br/>
    <a href="<?php echo get_post_meta(get_the_ID(), "page_forum_link_href", true); ?>">
      <?php echo get_post_meta(get_the_ID(), "page_forum_link_title", true); ?>
    </a>
  </section>

</div>
<?php get_footer(); ?>
