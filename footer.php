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
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jdesigns' ) ); ?>" class="">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'jdesigns' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'jdesigns' ), 'jdesigns', '<a href="http://underscores.me/">Jill Augustus</a>' );
							?>
					</div><!-- .site-info -->
					<div class="footer-col"></div>
					<div class="site-logo footer-col">
					<a href="<?php echo get_home_url(); ?>" class="site-logo">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/jdesigns-logo-ruby.svg" alt="<?php bloginfo( 'name' ); ?>" />
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
							<a href="">Contact</a>
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
