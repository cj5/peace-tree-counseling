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
Template Name: Provider Details
*/

get_header('custom');
?>

<div class="page-title">
  <div class="container">
  <?php if( get_field('provider_title') ): ?>
      <h2 class="heading"><?php the_field('provider_title'); ?></h2>
    <?php endif; ?>
  </div>
</div>
<section class="margins provider-details">
  <div class="container">    
    <div class="provider-img left ib">
      <?php
      $image = get_field('provider_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
    </div>
    <div class="providers-copy right ib">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content() ?>
      <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
    <div class="office-locations mg-tp-lg">
      <h4>Office Locations</h4>
      <?php if( get_field('office_locations') ): ?>
        <p><?php the_field('office_locations'); ?></p>
      <?php endif; ?>
    </div>
    <div class="populations-served">
      <h4>Populations Served</h4>
      <?php if( get_field('populations_served') ): ?>
        <p><?php the_field('populations_served'); ?></p>
      <?php endif; ?>
    </div>
    <div class="special-interests">
      <h4>Special Interests</h4>
      <?php if( get_field('special_interests') ): ?>
        <p><?php the_field('special_interests'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- <div class="content-filler"></div> -->

<?php
get_footer('custom');
