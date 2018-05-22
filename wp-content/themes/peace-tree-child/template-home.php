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
Template Name: Home
*/

get_header('custom');
?>

<section class="hero">
  <div class="hero-img">
    <?php 
    $image = get_field('home_main_image');
    if( !empty($image) ): ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php endif; ?>
    <!-- <div class="hero-img-overlay"></div> -->
  </div>
  <div class="container">
    <div class="mission">
      <?php if( get_field('mission_statement') ): ?>
        <h2><?php the_field('mission_statement'); ?></h2>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="top-margin home-copy">
  <div class="container border-bottom">
    <div class="home-img ib">
      <?php 
      $image = get_field('home_secondary_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
    </div>
    <div class="copy ib">
      <?php if( get_field('home_main_content') ): ?>
        <p><?php the_field('home_main_content'); ?></p>
      <?php endif; ?>
      <?php if( get_field('red_text') ): ?>
        <p class="attention"><?php the_field('red_text'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="margins location">
  <div class="container">
    <h3>LOCATIONS</h3>
    <div class="left ib">
      <h4>Osceola</h4>
      <div class="col-1 ib">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805.436037056342!2d-92.70662748451585!3d45.31981675108721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b296e925b6eb23%3A0xf8ba20abd3e2e20!2s108+Chieftain+St%2C+Osceola%2C+WI+54020!5e0!3m2!1sen!2sus!4v1526781936643" width="600" height="194" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-2 ib">
      <?php 
      $image = get_field('location_image');

      if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      <?php endif; ?>
      </div>
    </div>
    <div class="right">
      <h4>River Falls</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.6869136472187!2d-92.62348068452907!3d44.86866818100304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f7e4cd0a502e2f%3A0x58fd5dde06dafe1c!2s710+N+Main+St%2C+River+Falls%2C+WI+54022!5e0!3m2!1sen!2sus!4v1526781991927" width="600" height="194" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>     
  </div>
</section>



<!-- <div class="content-filler"></div> -->

<?php
get_footer('custom');
