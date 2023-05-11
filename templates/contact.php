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

get_header();
?>

<main id="primary" class="contact twocol">
  <section class="padding">
    <div class="wrapper">
      <h1><?php the_title(); ?></h1>
      <hr>
      <div class="grid">
        <div class="col-1">
          <div class="contact-info">
            <a href="emailto<?php echo $email; ?>"><?php echo $email; ?></a>
            <a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?></a>
            <div class="location">
              <?php echo $location_1 ?>
            </div>
            <div class="location">
              <?php echo $location_2 ?>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="contact-form">
            <h2>Send us a message<h2>
            <?php echo $contact_form; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();