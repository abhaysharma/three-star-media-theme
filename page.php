<?php get_header(); ?>
  <article class="main-content sub-page col-grid">
    <section class="col-2">
      <?php
      if(have_posts()):
        while(have_posts()):
          the_post();
          the_title('<h1>','</h1>');
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
