<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jdesigns
 */

get_header();
?>

	<main id="primary" class="site">

		<?php
		
		while ( have_posts() ) : the_post();

			if( JDESIGNS_PROJECT_CPT_NAME === get_post_type() ) : 

				get_template_part('templates/single/project');
			
			else : ?>

					<?php get_template_part( 'template-parts/content', get_post_type() ); ?>

			<?php endif;

		endwhile;
		
		?>

	</main><!-- #main -->

<?php

get_footer();
