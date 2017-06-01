<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Kiosque
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="contenu-article">
        <?php
        if ( is_sticky() && is_home() ) :
            echo kiosque_get_svg( array( 'icon' => 'thumb-tack' ) );
        endif;
        ?>
        <header class="entry-header">
            <?php
            if ( 'post' === get_post_type() ) :
                echo '<div class="entry-meta">';
                kiosque_posted_on();
                echo '</div><!-- .entry-meta -->';
            endif;
            the_title( '<h1 class="entry-title">', '</h1>' );
            ?>
        </header><!-- .entry-header -->

        <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'kiosque-featured-image' ); ?>
                </a>
            </div><!-- .post-thumbnail -->
        <?php endif; ?>

        <div class="entry-content">
            <?php
            /* translators: %s: Name of current post */
            the_content( sprintf(
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'kiosque' ),
                get_the_title()
            ) );

            wp_link_pages( array(
                'before'      => '<div class="page-links">' . __( 'Pages:', 'kiosque' ),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ) );
            ?>
        </div><!-- .entry-content -->
        <?php kiosque_entry_footer(); ?>
    </div>
</article><!-- #post-## -->
