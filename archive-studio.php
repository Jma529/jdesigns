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
    <?php the_content(); ?>
      <div class="grid">
        <div class="item-1 row-1">
          <div class="team-image" style="background-image: url('<?php echo $image ?>');"></div>
        </div>
        <div class="item-2 row-1">
          <div class="text-block bg-dark">
            <div class="accent">
              <div class="line-small"></div>
              <p class="tagline">THE STUDIO</p>
            </div>
            <div class="content"> <?= get_field('studio_bio'); ?></div>
          </div>
        </div>
        <div class="item-3 row-2">
          <div class="text-block bg-dark">
            <div class="accent">
              <div class="line-small"></div>
              <p class="tagline">ABOUT J</p>
            </div>
            <div class="content">
              <?= get_field('about_j_bio'); ?>
            </div>
          </div>
        </div>
      
          
          <?php if ( have_posts() ) : ?>

          <div class="posts-list item-4 row-2">

            <?php while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/content', 'studio' );

            endwhile; ?>

          </div>

          <?php else: 

          get_template_part( 'template-parts/content', 'none' );

          endif; ?>
        </div> 
    </div>
</section>

<?php get_template_part('template-parts/call-to-action'); ?>

</main>

<?php

get_footer();
