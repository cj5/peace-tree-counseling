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
Template Name: Providers
*/

get_header('custom');
?>

<section class="top-margin">
  <div class="container">
    <h2 class="heading mg-bt-lg"><?php the_title() ?></h2>
    <div class="providers-copy">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content() ?>
      <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="margins provider-images">
  <div class="container">
    <?php if( get_field('providers_text') ): ?>
      <p class="center"><?php the_field('providers_text'); ?></p>
    <?php endif; ?>

<!-- PROVIDER 1 -->
    <a href="<?php the_field('provider_1_link'); ?>">
    <div class="provider-image ib">
    <?php
      $image = get_field('provider_1_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php if( get_field('provider_1_description') ): ?>
      <p><?php the_field('provider_1_description'); ?></p>
    <?php endif; ?>
    </div>
    </a>
<!-- PROVIDER 2 -->
    <a href="<?php the_field('provider_2_link'); ?>">
    <div class="provider-image ib">
    <?php
      $image = get_field('provider_2_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php if( get_field('provider_2_description') ): ?>
      <p><?php the_field('provider_2_description'); ?></p>
    <?php endif; ?>
    </div>
    </a>
<!-- PROVIDER 3 -->
    <a href="<?php the_field('provider_3_link'); ?>">
    <div class="provider-image ib">
    <?php
      $image = get_field('provider_3_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php if( get_field('provider_3_description') ): ?>
      <p><?php the_field('provider_3_description'); ?></p>
    <?php endif; ?>
    </div>
    </a>
<!-- PROVIDER 4 -->
    <a href="<?php the_field('provider_4_link'); ?>">
    <div class="provider-image ib">
    <?php
      $image = get_field('provider_4_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php if( get_field('provider_4_description') ): ?>
      <p><?php the_field('provider_4_description'); ?></p>
    <?php endif; ?>
    </div>
    </a>
<!-- PROVIDER 5 -->
    <a href="<?php the_field('provider_5_link'); ?>">
    <div class="provider-image ib">
    <?php
      $image = get_field('provider_5_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php if( get_field('provider_5_description') ): ?>
      <p><?php the_field('provider_5_description'); ?></p>
    <?php endif; ?>
    </div>
    </a>
<!-- PROVIDER 6 -->
    <a href="<?php the_field('provider_6_link'); ?>">
    <div class="provider-image ib">
    <?php
      $image = get_field('provider_6_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php if( get_field('provider_6_description') ): ?>
      <p><?php the_field('provider_6_description'); ?></p>
    <?php endif; ?>
    </div>
    </a>
<!-- PROVIDER 7 -->
    <a href="<?php the_field('provider_7_link'); ?>">
    <div class="provider-image ib">
    <?php
      $image = get_field('provider_7_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php if( get_field('provider_7_description') ): ?>
      <p><?php the_field('provider_7_description'); ?></p>
    <?php endif; ?>
    </div>
    </a>
    
  </div>
</section>

<!-- <div class="content-filler"></div> -->

<?php
get_footer('custom');
