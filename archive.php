<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jdesigns
 */

get_header();
?>


<main class="<?php echo strtolower( get_post_type_object( get_post_type() )->labels->name ) . '-archive'; ?>">


<?php

// For certain post types, call in unique layout files that include extra sections
// The loop is handled in each of these files respectively 
if( is_post_type_archive( JDESIGNS_PROJECT_CPT_NAME ) ) : 

	get_template_part('templates/archive/projects');

	elseif( is_post_type_archive( JDESIGNS_TEAM_CPT_NAME ) ) : 

		get_template_part('template-parts/content-studio');

		// elseif( is_post_type_archive('press' ) ) : 

		// 	get_template_part('template-parts/press');
		

	
// For everything else, create a standard archive layout with a post list


	else : ?>
		<section class="padding">
			<div class="wrapper">
			<?php if ( have_posts() ) : ?>


		<div class="posts-list">

			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content' );

			endwhile; ?>

		</div>

		<?php else: 

		get_template_part( 'template-parts/content', 'none' );

		endif; ?>

				
	<?php endif; ?>
	
		</div>
	</section>

	</main>

<?php

get_footer();