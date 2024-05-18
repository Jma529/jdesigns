<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jdesigns
 */

?>

<footer id="colophon" class="site-footer">
		<div class="footer-content">
			<div class="wrapper-small">
			<div class="footer-top">
				<div class="site-logo footer-col">
					<?php the_custom_logo();?>
					</a>
				</div>
			</div>
			<hr>
			<div class="footer-bottom">
			<nav class="footer-menu col">
					<?php
                wp_nav_menu( array(
                    'container'         => false,
                    'theme_location'    => 'footer',
                    'menu_class'        => 'nav-menu',
                  )); 
                ?> 
				</nav> 
				<div class="form col">
					<p class="link-style">Stay in the know</p>
					<!-- <p class="italic text-cap">Subscribe to our newsletter</p> -->
					<?php get_template_part('template-parts/mailchimp-form'); ?>
				</div>
			</div>
		</div>
		<div class="footer-bar">
			<div class="site-info">
			<p>&copy 2023 J Designs</p>
			</div>															
			</div>
	</div>


</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>

</html>