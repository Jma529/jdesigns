<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jdesigns
 */
/*
Template Name: Studio
*/

// Variables

$image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
$email = get_field('email');
$tel = get_field('telephone');
$location_1 = get_field('location_1');
$location_2 = get_field('location_2');

get_header();
?>



<main class="studio twocol">
  <section class="padding">
    <div class="wrapper">
      <div class="grid">
        <div class="item-1 row-1">
          <div class="team-image" style="background-image: url('<?php echo $image ?>');"></div>
          <!-- <div class="contact-info">
            <a href="emailto<?php echo $email; ?>"><?php echo $email; ?></a>
            <a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?></a>
          <div class="location">
            <?php echo $location_1 ?>
          </div>
          <div class="location">
            <?php echo $location_2 ?>
          </div> -->
        </div>
        <div class="item-2 row-1">
          <div class="text-block bg-dark">
            <div class="accent">
              <div class="line-small"></div>
              <span>STUDIO</span>
            </div>
            <div class="content"><?php the_content(); ?></div>
          </div>
        </div>
        <div class="item-3 row-2">
          <div class="text-block bg-dark">
            <div class="accent">
              <div class="line-small"></div>
              <span>ABOUT J</span>
            </div>
            <div class="content"><p>Founded by Jamie Nusser, J Designs has studios in Los Angeles + Denver. We are a full-service, multi-disciplinary design studio specializing in residential + boutique commercial properties. We aim to be a place where creativity flourishes. We feel deeply that well designed, healthy interiors are key to a balanced life + have the power to positively affect the people who live in + experience them. Each day should be lived in interiors that give you energy + allow you to thrive. We are experts at getting to know our clients + understanding their unique style, so that we can create architecturally grounded interiors with project-specific products + playful elevated details that enhance wellbeing.</p>
</div>
          </div>
        </div>
      </div>
          
          <?php if ( have_posts() ) : ?>

          <div class="posts-list">

            <?php while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/content', 'studio' );

            endwhile; ?>

          </div>

          <?php else: 

          get_template_part( 'template-parts/content', 'none' );

          endif; ?>
    </div>
</section>



</main>

<?php

get_footer();
