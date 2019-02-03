<?php
/**
* Custom function to enqueue our styles, this function is called form
*/
function threestarmedia_enqueue_style() {
  wp_enqueue_style( 'fontcss', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700' );
  wp_enqueue_style( 'iconcss', 'https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css' );
  wp_enqueue_style( 'cssanimate', get_template_directory_uri().'/css/animate.css');
  wp_enqueue_style( 'main-styles', get_template_directory_uri().'/style.css', array('fontcss', 'iconcss') );
}

/**
* Custom function to enqueue our scripts, this function is called form
*/
function threestarmedia_enqueue_script() {
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js' );
  wp_enqueue_script( 'main-script', get_template_directory_uri().'/js/script.js', array('waypoints') );
}
// add_action funtions helps us to call our custom functions on different WordPress hooks in this case wp_enqueue_scripts
add_action( 'wp_enqueue_scripts', 'threestarmedia_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'threestarmedia_enqueue_script' );

/**
* Adding function to set theme options
*/
function threestarmedia_post_theme_functions() {
  // Add title-tag support to the theme, for letting wordpress use the buitin page title
  add_theme_support( 'title-tag' );
  // Add support for Featured Images in our pages and posts.
  add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'threestarmedia_post_theme_functions' );

/**
* Custom functio to register a new menu name
*/
function threestarmedia_register_menu() {
  // registering a nav menu with name Footer Menu and id footer-menu. This ID is used to call the menu in our templates using theme-location
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
// Using the add_action function to call our custom function on WordPress initialization hook called init
add_action( 'init', 'threestarmedia_register_menu' );

/**
* Function to register our custom sidebar area
*/
function threestarmedia_widgets_init() {
  // Defining arguments of our sidebar, these act as different options we set for the sidebar
  $sidebrArgs = array(
    'name'          => __( 'Main Sidebar', 'threestarmedia' ),
    'id'            => 'main-sidebar',    // ID should be LOWERCASE  ! ! !
    'description'   => __('This is the sidebar displayed on all pages with default two-column layout.','threestarmedia'),
    'class'         => 'mian-sidebar',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );
    // calling the register_sidebar WordPress function
  register_sidebar($sidebrArgs);
}
// On widgets initialization hook call our function to initialise our cutom sidebar
add_action( 'widgets_init', 'threestarmedia_widgets_init' );
