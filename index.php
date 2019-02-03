<?php
// index.php is mainly used as a blog listing template for the site.
// In addition to creating the index.php file we need to select a page to be used as a static blog listing page for our blog under Settings > Reading
get_header(); ?>
<article class="main-content">
  <?php
  // WordPress Loop is used to get information from our WordPress database and display it in our templates
    // We start by checking if there are posts available
    if(have_posts()):
      // if the posts are found we run a loop while there are posts
      while(have_posts()):
        // Each time we the loop runs we get the post to display its data
        the_post();
        // The title will display the title of the post
        the_title('<h1>','</h1>');
        // the_excerpt will display an excerpt from the post's content
        the_excerpt();
      endwhile;
    endif;
  ?>
</article>
<?php get_footer(); ?>
