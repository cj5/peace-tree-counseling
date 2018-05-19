<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Peace_Tree
 */

 /*
Template Name: Page
*/

get_header('custom');
?>

<section class="hero">
  <div class="hero-img">
    <img class="hero" src="/wp-content/uploads/2018/05/railroad_tracks_through_forest-crop.jpg" alt="">
    <div class="hero-img-overlay"></div>
  </div>
  <div class="container">
    <div class="mission">
      <h2>Helping you find your way in a complicated world</h2>
    </div>
  </div>
</section>

<section class="content">
  <div class="container">
    <div class="home-img ib">
      <img src="/wp-content/uploads/2018/05/tree.jpg" alt="">
    </div>
    <div class="copy ib">
      <p>Peace Tree Counseling provides a safe, supportive, confidential environment where individuals, couples and families can learn to engage life more fully. We are dedicated to helping you identify and develop your own personal strengths,  increase self-confidence, improve communication skills, and bring resolution to issues which hinder wholeness and well-being.</p>
      <p class="italic">We are proud that Peace Tree Counseling is Handicapped Accessible and GLBT Friendly.</p>
      <p class="attention">* As of April 23, 2018 the Osceola location will be moving to 108 Chieftain Street Osceola, WI 54020.</p>
    </div>
  </div>
</section>



<!-- <div class="content-filler"></div> -->

<?php
get_footer('custom');
