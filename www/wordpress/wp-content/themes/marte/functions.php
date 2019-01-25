<?php
/**
 * marte functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package marte
 */

/**
 * Load a template part into a template
 *
 * @since 1.0.0
 *
 * @param string $slug The slug name for the generic template.
 * @param string $name The name of the specialised template.
 */

 
if ( ! function_exists( 'marte_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function marte_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on marte, use a find and replace
		 * to change 'marte' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'marte', get_template_directory() . '/languages' );
		
		add_editor_style('editor-style.css');

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'marte' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

// Set up the WordPress core custom background feature.
$defaults = array(
'default-color'  => 'ffffff',
'default-image'  => '',
 );
add_theme_support( 'custom-background', $defaults );
		



		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		
		add_post_type_support( 'page', 'excerpt' );
		
	}
endif;
add_action( 'after_setup_theme', 'marte_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marte_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'marte_content_width', 640 );
}
add_action( 'after_setup_theme', 'marte_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function marte_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'marte' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'marte' ),
		'before_widget' => '<section id="%1$s" class="widget widgetContainer %2$s"><div class="widgetContainerInner">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );	
	

}
add_action( 'widgets_init', 'marte_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function marte_scripts() {

	wp_enqueue_script( 'marte-general', get_template_directory_uri() . '/assets/js/general.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'marte-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marte_scripts' );

function marte_styles() {
   wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'marte_styles');

function marte_header_output(){
	
	echo '<script type="text/javascript">';
	
	echo 'var marteFrontPage = false;';
	
	if( is_front_page() ){
		echo 'marteFrontPage = true;';
	}
	
	echo '</script>';
	
}
add_action( 'wp_head', 'marte_header_output' );

require get_template_directory() . '/inc/marte-variables.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

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

function marte_upgrade(){
	
	wp_enqueue_style('marte_upgrade', get_template_directory_uri().'/assets/css/upgrade.css' );
	
}

add_action('customize_controls_print_scripts', 'marte_upgrade');

