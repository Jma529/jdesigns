<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jdesigns
 */
/* Template Name: Home */ 

 get_header();

 $image = get_the_post_thumbnail_url( get_the_ID(), 'large' );

?>




	<main id="primary" class="site">
    <section>
      <div class="section-image-cover" style="background-image: url('<?php echo $image ?>');"></div>
        <h1><?php echo the_title()?></h1>
      <
    </section>

	</main><!-- #main -->

<?php
get_footer();
