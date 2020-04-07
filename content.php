<?php
/**
 * @package asu-wordpress-web-standards-theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
  </header><!-- .entry-header -->

  <?php
  if ( is_search() ) :
    // Only display Excerpts for Search
  ?>
  <div class="entry-summary">
  <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->
  <?php else : ?>
  <div class="entry-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'asu-wordpress-web-standards-theme' ) ); ?>
    <?php
      wp_link_pages(
          array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'asu-wordpress-web-standards-theme' ),
            'after'  => '</div>',
          )
      );
    ?>
  </div><!-- .entry-content -->
  <?php endif; ?>

  <footer class="entry-footer">
    <?php edit_post_link( __( 'Edit', 'asu-wordpress-web-standards-theme' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->

