<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Kiosque
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php
    if ( have_posts() ) :
        /* Start the Loop */
        while ( have_posts() ) : the_post();

            /**
             * Run the loop for the search to output the results.
             * If you want to overload this in a child theme then include a file
             * called content-search.php and that will be used instead.
             */
            get_template_part( 'template-parts/post/apercu', get_post_format() );

        endwhile; // End of the loop.

        the_posts_pagination( array(
            'prev_text' => kiosque_get_svg( array( 'icon' => 'arrow-left' ) ),
            'next_text' => kiosque_get_svg( array( 'icon' => 'arrow-right' ) ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'kiosque' ) . ' </span>',
        ) );

    else : ?>

        <div class="empty-search-result">
            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'kiosque' ); ?></p>
        </div>
        <?php
    endif;
    ?>

</main><!-- #main -->
<?php get_sidebar(); ?>

<?php get_footer();
