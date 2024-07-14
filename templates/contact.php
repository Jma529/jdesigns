<?php
/**
 * Template name: Contact
 * Template Post Type: page
 *
 * @package jdesigns
 */

 // Variables 

$email = get_field('email');
$tel = get_field('telephone');
$location_1 = get_field('location_1');
$location_2 = get_field('location_2');
$contact_form = do_shortcode('[ninja_form id=1]');
$image = get_the_post_thumbnail_url( get_the_ID(), 'full' );

get_header();
?>

<main id="primary" class="contact twocol">
  <section class="padding">
  <div class="wrapper large">
      <div class="grid">
        <div class="item-1 row-1">
          <div class="contact-info">
          <h1 class="h3 bold"><?php the_title(); ?></h3>
          <p class="bold">For General Inquiries</p>
            <a href="<?php echo esc_url( 'mailto:' . antispambot( $email )  ); ?>"><?php echo esc_html( antispambot( $email ) ); ?></a>
            <a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?></a>
            <div class="location">
              <?php echo $location_1 ?>
            </div>
            <div class="location">
              <?php echo $location_2 ?>
            </div>
          </div>
        </div>
        <div class="item-2 row-1">
        <?php if( !empty($image)) : ?>
          <div class="image">
            <img src="<?= $image; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();