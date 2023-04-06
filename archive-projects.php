<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jdesigns
 */
/*
Template Name: Projects
*/



get_header();
?>


<main class="projects">


<?php if ( have_posts() ) : ?>

<div class="posts-list">

  <?php while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/content-projects', 'post' );

  endwhile; ?>

</div>

<?php else: 

get_template_part( 'template-parts/content', 'none' );

endif; ?>


</main>

<?php

get_footer();