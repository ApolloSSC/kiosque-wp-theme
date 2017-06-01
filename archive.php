<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Kiosque
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<main id="main" class="site-main" role="main">

<?php
if ( have_posts() ) : ?>
    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/post/apercu', get_post_format() );

    endwhile;

    the_posts_pagination( array(
        'prev_text' => kiosque_get_svg( array( 'icon' => 'arrow-left' ) ),
        'next_text' => kiosque_get_svg( array( 'icon' => 'arrow-right' ) ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'kiosque' ) . ' </span>',
    ) );

else :

    get_template_part( 'template-parts/post/content', 'none' );

endif; ?>

</main><!-- #main -->
<?php get_sidebar(); ?>

<?php get_footer();
