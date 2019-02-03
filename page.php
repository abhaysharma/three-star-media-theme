<?php get_header(); ?>
  <article class="main-content sub-page col-grid">
    <section class="col-2">
      <?php
      /*
        WordPress Loop is used to get information from our WordPress database and display it in our templates
        Since we are inside a tempalte that is used to display a single page's content the loop will only show information for that page.
      */
        // We start by checking if there are posts available
        if(have_posts()):
          // if the posts are found we run a loop while there are posts
          while(have_posts()):
            // Each time we the loop runs we get the post to display its data
            the_post();
            // The title will display the title of the post
            the_title('<h1>','</h1>');
            // the_content will display the post's content
            the_content();
          endwhile;
        endif;
      ?>
    </section>
    <aside class="sidebar col-1">
      <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
      	<ul id="sidebar">
      		<?php dynamic_sidebar( 'main-sidebar' ); ?>
      	</ul>
      <?php endif; ?>
    </aside>
  </article>
<?php get_footer(); ?>
