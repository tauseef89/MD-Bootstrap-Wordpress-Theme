<?php

/**
 * Include external files
 */
require_once('inc/pagination.inc.php');
require_once('inc/template-tags.inc.php');
// Register Custom Navigation Walker
require_once get_template_directory() . '/components/class-wp-bootstrap-navwalker.php';


/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


/**
 * Setup Theme
 */
function mdbtheme_setup() {
    // Add featured image support
    add_theme_support('post-thumbnails');

    // register nav menus
    register_nav_menus( array(
      'primary' => __( 'Primary Menu' ),
    ) );
}
add_action('after_setup_theme', 'mdbtheme_setup');

/**
 * Register our sidebars and widgetized areas.
 */
function mdb_widgets_init() {

  register_sidebar( array(
    'name'          => 'Main Sidebar',
    'id'            => 'sidebar-1',
    'before_widget' => '<div id="%1$s" class="card mb-4 %2$s">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<div class="card-header">',
    'after_title'   => '</div><div class="card-body">',
  ) );

  register_sidebar( array(
    'name'          => 'Footer Sidebar',
    'id'            => 'sidebar-2',
    'before_widget' => '<div id="%1$s" class="col-md-3 mb-4 %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="font-weight-bold text-uppercase mt-5 mb-3">',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'mdb_widgets_init' );

?>