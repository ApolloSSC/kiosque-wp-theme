<?php
/**
 * Template part for displaying image posts
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
	<?php
		if ( is_sticky() && is_home() ) :
			echo kiosque_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
	?>
    <?php
        // If a regular post or page, and not the front page, show the featured image.
        if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! kiosque_is_frontpage() ) ) ) : ?>
            <div class="image-article" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
    <?php endif; ?>
    <div class="contenu-article">
        <header class="entry-header">
            <?php
            if ( 'post' === get_post_type() ) :
                echo '<div class="entry-meta">';
                kiosque_posted_on();
            endif;
            the_title( '<h1 class="entry-title">', '</h1>' );
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">

            <?php if ( is_single() || '' === get_the_post_thumbnail() ) :

                // Only show content if is a single post, or if there's no featured image.
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
        <?php
        kiosque_entry_footer();
        ?>
    </div>


</article><!-- #post-## -->
