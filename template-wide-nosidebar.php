<?php
/*
  Template Name: Wide - No Sidebar
*/
get_header(); ?>
  <article class="main-content sub-page">
    <section>
      <?php the_post_thumbnail();
      if(have_posts()):
        while(have_posts()):
          the_post();
          the_title('<h1>','</h1>');
          the_content();
        endwhile;
      endif;
      ?>
    </section>
  </article>
<?php get_footer(); ?>
