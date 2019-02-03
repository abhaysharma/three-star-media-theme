<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php
  // Adding wp_head right before the closing head tag. This defines the location for WordPress to add any styles, scripts, meta information to the head of our templates.
  wp_head(); ?>
</head>
<body>
  <div class="wrapper" id="home">
    <header>
      <div class="header-content" id="headerContent">
        <div class="logo-title">
          <a href="<?php echo get_bloginfo('url'); // get_bloginfo allows us to access information regaring our blog, in this case we are getting the url of the blog/site?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="three star media logo" class="logo animated bounceIn"/>
          </a>
          <h1>Three Star Media</h1>
        </div>
        <nav id="mainNav">
          <span class="im im-menu" id="menuIcon"></span>
          <ul>
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#team">Team</a></li>
          </ul>
        </nav>
      </div>
    </header>
