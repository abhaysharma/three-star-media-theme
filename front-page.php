<?php
/*
  front-page.php is the special file name used to define template of a static fron page.
  In addition to the php file we need to select a static front page from Settings > Reading in our dashboard.
*/
// Add the header.php of our theme
get_header();

// Add the temaplte for the main content, defined in main.php
get_template_part('main');

// Add the footer of our theme
get_footer();
?>
