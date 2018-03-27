<?php
/**
 * Bridge 2 Work functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bridge_2_Work
 */

if ( ! function_exists( 'b2w_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function b2w_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // b2w_setup
add_action( 'after_setup_theme', 'b2w_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function b2w_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'b2w_content_width', 640 );
}
add_action( 'after_setup_theme', 'b2w_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function b2w_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Footer',
		'id' => 'footer-sidebar',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
}

add_action( 'widgets_init', 'b2w_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function b2w_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'b2w_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function b2w_scripts() {
	wp_enqueue_style( 'b2w-style', get_stylesheet_uri() );

	wp_enqueue_style('font-awesome-cdn','https://use.fontawesome.com/releases/v5.0.8/css/all.css', array(),
	'5.0.8'); 
	wp_enqueue_style('google-fonts-cdn','https://fonts.googleapis.com/css?family=Roboto:300,400,700');

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'b2w-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	wp_enqueue_script('b2w-scripts', get_template_directory_uri() . '/build/js/b2w-scripts.min.js', array('jquery', 'count-up-js'),'23', true);
	wp_enqueue_script('faq', get_template_directory_uri() . '/build/js/faq.min.js', array('jquery'),'23', true);
	wp_enqueue_script( 'flickity-cdn',  'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array('jquery'), false, true  );	

	wp_enqueue_script('count-up-js', get_template_directory_uri() . '/build/js/countUp.min.js', array(), '23',true); 


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'b2w_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
