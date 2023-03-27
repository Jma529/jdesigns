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


<main>

<?php

// For certain post types, call in unique layout files that include extra sections
// The loop is handled in each of these files respectively 
if( is_post_type_archive( JDESIGNS_PROJECT_CPT_NAME ) ) : 

	get_template_part('template-parts/content-projects');


	
// For everything else, create a standard archive layout with a post list
else : 



			get_template_part( 'template-parts/content', 'none' );
			
			?>
			

<?php endif; ?>

</main>

<?php

get_footer();