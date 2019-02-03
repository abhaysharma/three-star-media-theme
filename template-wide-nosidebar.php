<?php
/*
  Template Name: Wide - No Sidebar
*/
get_header(); ?>
  <article class="main-content sub-page">
    <section>
      <?php
      // Using WordPress loop to get the post information
      if(have_posts()):
        while(have_posts()):
          the_post();
          // To display the feature image of the WordPress page we can use the_post_thumbnail function, we can also use arguments to control the size, class name, title of the thumbnail 
          the_post_thumbnail();
          the_title('<h1>','</h1>');
          the_content();
        endwhile;
      endif;
      ?>
    </section>
  </article>
<?php get_footer(); ?>
