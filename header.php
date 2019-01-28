<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <?php
    // Adding wp_head before the closing head tag, this is where our styles will be enqueued. Also, WordPress and plugins will use this location to add any styles and/or meta information for our web pages.
    wp_head();
  ?>
</head>
<body>
	<div class="wrapper" id="home">
		<header>
			<div class="header-content" id="headerContent">
				<div class="logo-title">
          <?php // Add get_template_directory_uri() in front of each image path. ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="three star media logo" class="logo animated bounceIn"/>
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
