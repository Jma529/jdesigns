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
		<div class="wrapper-small">
			<div class="footer-content">
				<div class="footer-top">
					<div class="site-logo footer-col">
						<?php the_custom_logo();?>
					</a>
					</div>
					<div class="footer-col tagline">
						<h3 class="h2 ruby">Intentional,<br> Effortless,<br> 
						Designed For Living.</h3>
					</div>
				</div>
			<hr>
			<div class="footer-bottom">
				<nav class="footer-menu col">
					<ul class="nav-menu">
						<li>
							<a href="#">Instagram</a>
						</li>
						<li>
							<a href="#">Pinterest</a>
						</li>
						<li>
							<a href="<?php echo get_permalink( get_page_by_path('contact') );?>">Contact</a>
						</li>
					</ul>
				</nav>
				<div class="form col">
					<p class="link-style">Stay in the know</p>
					<?php get_template_part('template-parts/mailchimp-form'); ?>
				</div>
			</div>
		</div>
		</div>
	</div>
						

	</footer><!-- #colophon -->
</div><!-- #page wrapper -->

<?php wp_footer(); ?>

</body>
</html>
