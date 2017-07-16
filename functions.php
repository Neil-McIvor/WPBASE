<?php
// Add scripts and stylesheets
function base_scripts() {
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/foundation/css/foundation.css' );
	wp_enqueue_style( 'app', get_template_directory_uri() . '/foundation/css/app.css' );
	wp_enqueue_style( 'branding', get_template_directory_uri() . '/foundation/css/branding.css' );
	
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'slicktheme', get_template_directory_uri() . '/slick/slick-theme.css' );
	
	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/foundation/js/vendor/jquery.js' );
	wp_enqueue_script( 'what-input', get_template_directory_uri() . '/foundation/js/vendor/what-input.js' );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/foundation/js/vendor/foundation.js' );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/foundation/js/app.js');
	
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js');
	
	
//wp_enqueue_script( 'example', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );			
// ...after that, the array contains the ID, location of the file, an additional array with required depenedencies (such as jQuery), and the version number.	
}

add_action( 'wp_enqueue_scripts', 'base_scripts' );


// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');
				wp_enqueue_style( 'OpenSans');
				wp_register_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,600,900');
				wp_enqueue_style( 'Roboto');				
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');


//ADD CUSTOM MENUS
 function register_my_menus() {
  register_nav_menus(
    array(
      'sidebar-menu' => __( 'Sidebar Menu' ),
      'primary-menu' => __( 'Primary Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//CUSTOM EXCERPT LENGTH
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function base_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'base_custom_excerpt_length', 999 );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function base_excerpt_more( $more ) {
    return '<div class="read-more"><a href="'.get_the_permalink().'" rel="nofollow">Read More...</a></div>';
}
add_filter( 'excerpt_more', 'base_excerpt_more' );

// Support Search Form
add_theme_support( 'html5', array( 'search-form' ) );


// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Create Custom Thumbnail Size 
add_image_size( 'custom-thumbnail', 0, 0, true ); // TEST by uploading

// WordPress Titles
add_theme_support( 'title-tag' );

	//add_image_size( 'base-featured-image', 1920, 1080, true );

	//add_image_size( 'base-thumbnail-avatar', 100, 100, true );

// CUSTOM POST TYPES //

// Custom Post Type
function create_news_post() {
	register_post_type( 'news-post',
			array(
			'labels' => array(
					'name' => __( 'News Posts' ),
					'singular_name' => __( 'News Post' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action( 'init', 'create_news_post' );

// THEME WIDGETS

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Column One',
		'id'            => 'column-1',
		'before_widget' => '<div class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Column Two',
		'id'            => 'column-2',
		'before_widget' => '<div class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Column Three',
		'id'            => 'column-3',
		'before_widget' => '<div class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Column Four',
		'id'            => 'column-4',
		'before_widget' => '<div class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


// Background Image
$defaults = array(
	'default-color'          => '000000',
	'default-image'          => '../../images/banner-image_04',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

?>
