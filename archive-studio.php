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
    <h1 class="page-header"><?php the_title(); ?></h1>
		<hr>
      <div class="grid">
        <div class="col-1">
          <div class="team-image" style="background-image: url('<?php echo $image ?>');"></div>
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
        <div class="text-block">
          <div class="accent">
            <div class="line-small"></div>
            <span>J Designs</span>
          </div>
          <div class="content"><?php the_content(); ?></div>
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
    </div>
</section>



</main>

<?php

get_footer();
