<?php

/* stylesheets and other bootstrap references */
function TheJunto_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() ); //adds stylesheet
    wp_enqueue_script('jquery'); //adds jquery library from within wordpress, hence only $handle parameter needed 
    wp_enqueue_script('bootstrap-scripts', get_template_directory_uri().'/js/bootstrap.min.js'); //adds bootstrap-specific javascript code; uses minifed version because smaller file
}
add_action( 'wp_enqueue_scripts', 'TheJunto_scripts' );


/* register navigation menus*/
register_nav_menus( array(
	'navigation' => 'Main Navigation Bar', //first is location name, second is description
	'footer' => 'Footer',
) );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

/* shows the home page as a menu item to select in view all */
function home_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


/* adds the option to upload a header image in wordpress customizer */
add_theme_support( 'custom-header', $args );
//check up on how to add default sizing for header image
add_theme_support( 'post-thumbnails' ); 

/* adds the bootstrap img-responsive class to all post images 
function add_image_responsive_class($content) {
   global $post;
   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 img-responsive"$3>'; //img-shadow after img-responsive was removed because wasn't necessary
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}
add_filter('the_content', 'add_image_responsive_class');*/


/*fonts*/
function fonts() {
    wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400|Dosis:300,600|Lato:300' );
}
add_action('wp_print_styles', 'fonts');


?>