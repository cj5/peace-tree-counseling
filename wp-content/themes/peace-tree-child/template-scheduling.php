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
Template Name: Scheduling
*/

get_header('custom');
?>

<div class="page-title">
  <div class="container">
    <h2 class="heading"><?php the_title() ?></h2>
  </div>
</div>
<section class="scheduling top-margin">  
  <div class="container">
    <div class="intro">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content() ?>
      <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
    <section class="upper-section top-margin">
      <div class="left ib">
        <?php
        $image = get_field('scheduling_image');
        if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <div class="right ib">
        <?php if( get_field('scheduling_upper_text') ): ?>
          <p><?php the_field('scheduling_upper_text'); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <section class="lower-section margins">
      <?php if( get_field('scheduling_lower_text_section_1') ): ?>
        <p><?php the_field('scheduling_lower_text_section_1'); ?></p>
      <?php endif; ?>
    </section>
  </div>
</section>

<!-- <div class="content-filler"></div> -->

<?php
get_footer('custom');
