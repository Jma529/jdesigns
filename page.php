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
 * @package jdesigns
 */

get_header();
?>

	<main id="primary" class="site">
		<section class="padding">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
				<hr>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	</div>
	</section>
	</main><!-- #main -->

<?php
get_footer();
