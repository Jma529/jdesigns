<?php
/**
 * jdesigns functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jdesigns
 */

if ( ! defined( 'THEME_VERSION' ) ) {

	$theme = wp_get_theme();
	/**gets version written in theme's style.css */
	define('THEME_VERSION', $theme->Version); 
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jdesigns_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on jdesigns, use a find and replace
		* to change 'jdesigns' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'jdesigns', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => 'Main menu',
			'header-left' => 'Header Left',
			'header-right' => 'Header Right',
			'footer' => 'Footer menu',
			'footer-bottom' => 'Footer bottom',
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'jdesigns_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 80,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'jdesigns_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jdesigns_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jdesigns_content_width', 640 );
}
add_action( 'after_setup_theme', 'jdesigns_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function jdesigns_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'jdesigns' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'jdesigns' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'jdesigns_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jdesigns_scripts() {

	wp_deregister_script('jquery');
	wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js', false, null);
	wp_enqueue_script('jquery');

	wp_register_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '1.0.0'); 
	wp_enqueue_script('slick'); 

	wp_register_script('masonry', 'https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('masonry');

	wp_register_script('isotope',  'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('isotope');
	
	
	wp_enqueue_style( 'jdesigns-style', get_stylesheet_uri(), array(), THEME_VERSION, 'all' );
	wp_style_add_data( 'jdesigns-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jdesigns-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), THEME_VERSION, true );
	wp_enqueue_script( 'jdesigns-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), THEME_VERSION, true );




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'jdesigns_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/** Register custom post types */
require get_template_directory() . '/cpt/cpt-projects.php';
require get_template_directory() . '/cpt/cpt-team.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Change Order by on Press Archive */

// Add the callback to the posts_orderby filter
add_filter('posts_orderby', 'orderby_pages_callback', 10, 2);

// The posts_orderby filter
function orderby_pages_callback($orderby_statement, $wp_query) {
	# Verify correct post type, or any other query variable
	if ($wp_query->get("post_type") === "press") {
		// Add a reverse menu order sort
		return "wp_posts.menu_order ASC";
	} else {
		# Use provided statement instead 
		return $orderby_statement;
	}
}

/* Add caret to dropdown menu */

function dropdown_arrow($item_output, $item, $depth, $args) {
	if (in_array('menu-item-has-children', $item->classes)) {
			$arrow = '<svg class="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="9" fill="currentColor">
			<path fill="currentColor" d="m15.715 1.564-6.99 6.99a.524.524 0 0 1-.74 0L.996 1.563a.524.524 0 0 1 .74-.74l6.62 6.617L14.973.823a.524.524 0 0 1 .74.741Z"/>
		</svg>'; 
			$item_output = str_replace('</a>', '</a>'. $arrow .'', $item_output);
	}
	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'dropdown_arrow', 10, 4);

/* Remove gutenberg editor */ 

add_filter('use_block_editor_for_post', '__return_false', 10);
