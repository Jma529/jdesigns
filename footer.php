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
				<div class="site-logo col">
				<a href="<?php echo get_home_url(); ?>" class="site-logo">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/jdesigns-logo-ruby.svg" alt="<?php bloginfo( 'name' ); ?>" />
				</a>
				</div>
				<div class="form col">

				</div>
			</div>
		</div>
						

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
