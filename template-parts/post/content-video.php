<?php
/**
 * Template part for displaying video posts
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

        <?php
            $content = apply_filters( 'the_content', get_the_content() );
            $video = false;
            // Only get video from the content if a playlist isn't present.
            if ( false === strpos( $content, 'wp-playlist-script' ) ) {
                $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
            }
        ?>

        <?php if ( '' !== get_the_post_thumbnail() && ! is_single() && empty( $video ) ) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'kiosque-featured-image' ); ?>
                </a>
            </div><!-- .post-thumbnail -->
        <?php endif; ?>

        <div class="entry-content">

            <?php 

            if ( is_single() || empty( $video ) ) :

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

            endif; ?>

        </div><!-- .entry-content -->

        <?php if ( is_single() ) : ?>
            <?php kiosque_entry_footer(); ?>
        <?php endif; ?>
    </div>
</article><!-- #post-## -->
