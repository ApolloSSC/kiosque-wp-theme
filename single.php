<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Kiosque
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<main id="main" class="site-main" role="main">
    <?php
        /* Start the Loop */
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/post/content', get_post_format() );


            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                //comments_template();
            endif;

            the_post_navigation( array(
                'prev_text' => '<span class="nav-title"><span class="nav-title-icon-wrapper">' . kiosque_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
                'next_text' => '<span class="nav-title">%title<span class="nav-title-icon-wrapper">' . kiosque_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
            ) );

        endwhile; // End of the loop.
    ?>

</main><!-- #main -->
<?php get_sidebar(); ?>


<?php get_footer();
