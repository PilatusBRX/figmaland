<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
function figmaland_setup() {
	
	load_theme_textdomain( 'figmaland', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );	
	add_theme_support( 'title-tag' );	
	add_theme_support( 'post-thumbnails' );

// Menus
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'figmaland' ),
		)
	);
	register_nav_menus(
		array(
			'menu-2' => esc_html__( 'Social Links', 'figmaland' ),
		)
	);
	register_nav_menus(
		array(
			'bloco-1' => esc_html__( 'Bloco do footer 1', 'figmaland' ),
		)
	);
	register_nav_menus(
		array(
			'bloco-2' => esc_html__( 'Bloco do footer 2', 'figmaland' ),
		)
	);
	register_nav_menus(
		array(
			'bloco-3' => esc_html__( 'Bloco do footer 3', 'figmaland' ),
		)
	);

	function register_footer_widget() {
		register_sidebar( array(
			'name'          => 'Footer Widget',
			'id'            => 'footer_widget',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}
	add_action( 'widgets_init', 'register_footer_widget' );



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
			'figmaland_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 78,
			'width'       => 206,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'figmaland_setup' );

function figmaland_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'figmaland_content_width', 640 );
}
add_action( 'after_setup_theme', 'figmaland_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function figmaland_scripts() {
	wp_enqueue_style( 'figmaland-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('figmaland-main-style', get_theme_file_uri('/assets/css/styles.css'));

	wp_enqueue_script('figmaland-main-script', get_theme_file_uri('/assets/js/app.js'), array('jquery'), '1.0', true);	
}
add_action( 'wp_enqueue_scripts', 'figmaland_scripts' );



//Remover Gutemberg Block
function use_classic_editor() {   
    add_filter( 'use_block_editor_for_post', '__return_false' );   
}
add_action( 'admin_init', 'use_classic_editor' );
