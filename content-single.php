<?php
/**
 * @package asu-wordpress-web-standards-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="entry-content">
    <?php the_content(); ?>
    <?php
      wp_link_pages(
          array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'asu-wordpress-web-standards-theme' ),
            'after'  => '</div>',
          )
      );
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php
      /* translators: used between list items, there is a space after the comma */
      $category_list = get_the_category_list( __( ', ', 'asu-wordpress-web-standards-theme' ) );

      /* translators: used between list items, there is a space after the comma */
      $tag_list = get_the_tag_list( '', __( ', ', 'asu-wordpress-web-standards-theme' ) );

      if ( '' != $tag_list ) {
        $meta_text = __( '<h3>Keywords:</h3><p>%2$s.</p>', 'asu-wordpress-web-standards-theme' );
      }

      printf(
          $meta_text,
          $category_list,
          $tag_list,
          get_permalink()
      );
    ?>

    <?php edit_post_link( __( 'Edit', 'asu-wordpress-web-standards-theme' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->
