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
Template Name: Contact
*/

get_header('custom');
?>

<div class="page-title">
  <div class="container">
    <h2 class="heading"><?php the_title() ?></h2>
  </div>
</div>
<section class="margins contact-us">
  <div class="container">    
    <div class="contact-copy">      
      <div class="locations">
        <h3>Locations</h3>
        <div class="left ib">
        <?php if( get_field('location_1') ): ?>
          <p><?php the_field('location_1'); ?></p>
        <?php endif; ?>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805.436037056342!2d-92.70662748451585!3d45.31981675108721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b296e925b6eb23%3A0xf8ba20abd3e2e20!2s108+Chieftain+St%2C+Osceola%2C+WI+54020!5e0!3m2!1sen!2sus!4v1526781936643" width="600" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="right ib">
        <?php if( get_field('location_2') ): ?>
          <p><?php the_field('location_2'); ?></p>
        <?php endif; ?>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.6869136472187!2d-92.62348068452907!3d44.86866818100304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f7e4cd0a502e2f%3A0x58fd5dde06dafe1c!2s710+N+Main+St%2C+River+Falls%2C+WI+54022!5e0!3m2!1sen!2sus!4v1526781991927" width="600" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="hours left ib">
        <h3>Hours of Operation</h3>
        <ul>
          <li><span class="bold">Monday:</span>
            <?php if( get_field('monday_hours') ): ?>
              <p><?php the_field('monday_hours'); ?></p>
            <?php endif; ?>
          </li>
          <li><span class="bold">Tuesday:</span>
            <?php if( get_field('tuesday_hours') ): ?>
              <p><?php the_field('tuesday_hours'); ?></p>
            <?php endif; ?>
          </li>
          <li><span class="bold">Wednesday:</span>
            <?php if( get_field('wednesday_hours') ): ?>
              <p><?php the_field('wednesday_hours'); ?></p>
            <?php endif; ?>
          </li>
          <li><span class="bold">Thursday:</span>
            <?php if( get_field('thursday_hours') ): ?>
              <p><?php the_field('thursday_hours'); ?></p>
            <?php endif; ?>
          </li>
          <li><span class="bold">Friday:</span>
            <?php if( get_field('friday_hours') ): ?>
              <p><?php the_field('friday_hours'); ?></p>
            <?php endif; ?>
          </li>
          <li><span class="bold">Saturday:</span>
            <?php if( get_field('saturday_hours') ): ?>
              <p><?php the_field('saturday_hours'); ?></p>
            <?php endif; ?>
          </li>
          <li><span class="bold">Sunday:</span>
            <?php if( get_field('sunday_hours') ): ?>
              <p><?php the_field('sunday_hours'); ?></p>
            <?php endif; ?>
          </li>
        </ul>
      </div>
      <div class="contact-info right ib">
        <h3>Contact Info</h3>
        <?php if( get_field('contact_info') ): ?>
          <p><?php the_field('contact_info'); ?></p>
        <?php endif; ?>
      </div>      
    </div>
  </div>
</section>

<!-- <div class="content-filler"></div> -->

<?php
get_footer('custom');
