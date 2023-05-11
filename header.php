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
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="https://use.typekit.net/vlu0mhw.css">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#"><?php esc_html_e( 'Skip to content', 'jdesigns' ); ?></a>
    <header class="header">
      <div class="wrapper-small">
            <div class="header-left">
              <a href="<?php echo get_home_url(); ?>">
              J Designs
              </a>
            </div>

            <div class="header-right">

              <nav class="header-menu">
                <?php
                  wp_nav_menu( array(
                    'container'         => false,
                    'theme_location'    => 'main-menu',
                    'menu_class'        => 'nav-menu',
                  ));
                ?>
              </nav>

              <div class="site-tools">
                <!-- <button class="mobile-menu-trigger" title="Mobile Menu">
                  <span class="screen-reader-text">Mobile Menu</span> -->
                    <input id="hamburger" class="hamburger" type="checkbox"/>
                      <label class="hamburger" for="hamburger">
                      <i></i>
                      <!-- <text>
                        <close>close</close>
                        <open>menu</open>
                      </text> -->
                  </label>
                  <nav class="mobile-nav" aria-label="Mobile Menu">
                  <?php
                    wp_nav_menu( array(
                      'container'         => false,
                      'theme_location'    => 'main-menu',
                      'menu_class'        => 'main-menu-mobile',
                    ));
                  ?>
                </nav>
                <!-- </button> -->
              </div>
      

            </div>
            
    </div>
  </header>

 