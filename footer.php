<div class="push"></div>
</div>
<footer>
<div class="footer-content">
  <p>
    2016, Three Star Media. All Rights Reserved.
  </p>
</div>
<?php
  // Add the menu using the theme-location argument to set the menu location
  //  Additionally we can define arguments to add classes, ids, HTML elements, and more to the nav structure using arguments
  wp_nav_menu(array(
  'theme-location' => 'footer-menu',
  'menu_class' => 'my-footer-menu')
);?>
</footer>
<?php
  /*
  Add wp_foot right before the closing body tag </body> in your theme's footer file.
  This location is used by WordPress and plugins to add any script files to your theme.
  */
  wp_footer();
?>
</body>
</html>
