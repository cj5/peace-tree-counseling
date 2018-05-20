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

<section class="top-margin home-copy">
  <div class="container border-bottom">
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

<section class="margins location">
  <div class="container">
    <h3>LOCATIONS</h3>
    <div class="left ib">
      <h4>Osceola</h4>
      <div class="col-1 ib">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805.436037056342!2d-92.70662748451585!3d45.31981675108721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b296e925b6eb23%3A0xf8ba20abd3e2e20!2s108+Chieftain+St%2C+Osceola%2C+WI+54020!5e0!3m2!1sen!2sus!4v1526781936643" width="600" height="265" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-2 ib">
        <img src="/wp-content/uploads/2018/05/location.jpg" alt="">
      </div>
    </div>
    <div class="right">
      <h4>River Falls</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.6869136472187!2d-92.62348068452907!3d44.86866818100304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f7e4cd0a502e2f%3A0x58fd5dde06dafe1c!2s710+N+Main+St%2C+River+Falls%2C+WI+54022!5e0!3m2!1sen!2sus!4v1526781991927" width="600" height="265" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>     
  </div>
</section>



<!-- <div class="content-filler"></div> -->

<?php
get_footer('custom');
