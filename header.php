<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jdesigns
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site flex">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jdesigns' ); ?></a>

	<header class="header">
    <div class="wrapper header-wrapper">
          <div class="header-left">
            <a href="<?php echo get_home_url(); ?>" class="site-logo">
              <img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/jdesigns-logo-ruby.svg" alt="<?php bloginfo( 'name' ); ?>" />
            </a>
          </div>

          <div class="header-right">

            <nav class="desktop-menu">
              <?php
                wp_nav_menu( array(
                  'container'         => false,
                  'theme_location'    => 'main-menu',
                  'menu_class'        => 'main-menu',
                ));
              ?>
            </nav>

            <div class="site-tools">
              <button class="mobile-menu-trigger" title="Mobile Menu">
                <span class="screen-reader-text">Mobile Menu</span>
                <div class="inner">
                  <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </div>
              </button>
            </div>

          </div>
            <div class="mobile-menu">
              <nav class="mobile-nav" aria-label="Mobile Menu">
                <?php
                  wp_nav_menu( array(
                    'container'         => false,
                    'theme_location'    => 'main-menu',
                    'menu_class'        => 'main-menu mobile',
                  ));
                ?>
              </nav>
            </div>
  </div>
</header>

  <div class="page-wrapper">