<?php

/* Add all JavaScript files here.
WordPress will add them to templates automatically instead
of writing script tags in the header and footer. */

function collage_scripts() {

	//Don't use WordPress' local copy of jquery, load a version from a CDN instead
	wp_deregister_script('jquery');
  wp_enqueue_script(
  	'jquery',
  	"http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js",
  	false, //dependencies
  	null, //version number
  	true //load in footer
  );

  wp_enqueue_script(
  	'smoothscroll',
  	"https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/2.2.0/jquery.smooth-scroll.min.js",
  	false, //dependencies
  	null, //version number
  	true //load in footer
  );

  wp_enqueue_script(
    'slick',
    "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js",
    false, //dependencies
    null, //version number
    true //load in footer
  );

  wp_enqueue_script(
    'scripts', //handle
    get_template_directory_uri() . '/js/main.min.js', //source
    array( 'jquery' ), //dependencies
    null, // version number
    true //load in footer
  );
}

add_action( 'wp_enqueue_scripts', 'collage_scripts' );



/* Custom Title Tags */

function collage_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	return $title;
}
add_filter( 'wp_title', 'collage_wp_title', 10, 2 );

/*
  Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function collage_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'collage_page_menu_args' );



/*
 * Register a single widget area.
 * You can register additional widget areas by using register_sidebar again
 * within collage_widgets_init.
 * Display in your template with dynamic_sidebar()
 */
function collage_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => 'Primary Widget Area',
		'id' => 'primary-widget-area',
		'description' => 'The primary widget area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}

add_action( 'widgets_init', 'collage_widgets_init' );


/* Get rid of junk! - Gets rid of all the crap in the header that you dont need */

function clean_stuff_up() {
	// windows live
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	// wordpress gen tag
	remove_action('wp_head', 'wp_generator');
	// comments RSS
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 3 );
}

add_action('init', 'clean_stuff_up');


/* Here are some utility helper functions for use in your templates! */

/* pre_r() - makes for easy debugging. <?php pre_r($post); ?> */
function pre_r($obj) {
	echo "<pre>";
	print_r($obj);
	echo "</pre>";
}
