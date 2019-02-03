<?php get_header(); ?>
<article class="main-content">
  <?php
    if(have_posts()):
      while(have_posts()):
        the_post();
        the_title('<h1>','</h1>');
        the_excerpt();
      endwhile;
    endif;
  ?>
</article>
<?php get_footer(); ?>
