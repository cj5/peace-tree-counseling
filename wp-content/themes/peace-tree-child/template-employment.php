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
Template Name: Employment
*/

get_header('custom');
?>

<section class="margins employment">
  <div class="container">
    <h2 class="heading mg-bt-xl"><?php the_title() ?></h2>
    <div class="employment-copy">
      <div class="left ib">
        <?php
        $image = get_field('employment_image');
        if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="right ib">
        <?php the_content() ?>
      </div>
      <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- <div class="content-filler"></div> -->

<?php
get_footer('custom');
