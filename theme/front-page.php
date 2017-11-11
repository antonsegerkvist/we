<?php
/**
 * The front page template file.
 *
 * Template Name: Home
 *
 * @package We
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>
<div class="front-page-container">

  <section class="main">
    <div class="center">
      <h1>WE</h1>
      <h2>A CUSTOMIZABLE FORUM</h2>
    </div>
  </section>

  <section class="about">
    <div class="left">
      <h3>COMPONENT BASED</h3>
      <p>
        We is built using Vue.js. You can re-structure the forum and even
        redesign the components used. Everything communicates using the We
        API.
      </p>
    </div>
    <div class="right">
      <h3>CHECK IT OUT</h3>
      <p>
        You can try out the forum by following the link below.
      </p>
      <a href="javascript:void(0)">Go To Forum</a>
    </div>
  </section>

  <section class="forum">
  </section>

  <section class="credits">
  </section>

</div>
<?php get_footer(); ?>
