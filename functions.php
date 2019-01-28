<?php
// Declaring and defining a function threestarmedia_enqueue_style
function threestarmedia_enqueue_style(){

  // Enqueuing google font using absolute path
  wp_enqueue_style('fontcss','https://fonts.googleapis.com/css?family=Open+Sans:400,700');

  // Enqueuing icons using iconmonstr
  wp_enqueue_style('iconcss','https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css');

  // Enqueuing animate.css from our css folder
  wp_enqueue_style('cssanimate',get_stylesheet_directory_uri().'/css/animate.css');

  // Enqueuing main stylesheet of our theme.
  wp_enqueue_style('main-styles',get_stylesheet_directory_uri().'/style.css', array('fontcss','iconcss'));
}

// Declaring and defining a function names threestarmedia_enqueue_script
function threestarmedia_enqueue_script(){
  // Enqueue jQuery from WordPress core
  wp_enqueue_script('jquery');
  // Enqueuing the waypoints library
  wp_enqueue_script('waypoints',get_stylesheet_directory_uri().'/js/jquery.waypoints.min.js');
  // Enqueuing our script file
  wp_enqueue_script('mian-script', get_stylesheet_directory_uri().'/js/script.js', array('jquery'));
}
// Adding a hook to the wp_enqueue_scripts action and calling our function threestarmedia_enqueue_style
add_action('wp_enqueue_scripts','threestarmedia_enqueue_style');

// Adding a hook to the wp_enqueue_scripts action and calling our function threestarmedia_enqueue_script
add_action('wp_enqueue_scripts','threestarmedia_enqueue_script');
