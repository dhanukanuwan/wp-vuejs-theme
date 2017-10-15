<?php

get_header(); ?>

  <div class="test">
    <h1> Test Title</h1>
  </div>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <?php if ( is_home() && ! is_front_page() ) : ?>
        <header>
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
      <?php endif; ?>

      <?php
      // Start the loop.
      while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </header><!-- .entry-header -->

          <?php the_post_thumbnail(); ?>

          <div class="entry-content">
            <?php
            the_content();
            ?>
          </div><!-- .entry-content -->

        </article><!-- #post-## -->
        

      <?php  

      // End the loop.
      endwhile;

    endif;
    ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->
<?php get_footer(); ?>
