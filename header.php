<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Kiosque
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php if(!is_single()) : ?>
        <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'kiosque' ); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <?php get_search_form(); ?>
            <?php get_template_part( 'template-parts/header/header', 'image' ); ?>

        </header><!-- #masthead -->
        <?php if(!is_search()) : ?>
            <nav>
                <?php if ( has_nav_menu( 'top' ) ) : ?>
                    <div class="navigation-top">
                        <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
                    </div><!-- .navigation-top -->
                <?php endif; ?>
            </nav>
        <?php else : ?>
            <header class="page-header">
                <?php if ( have_posts() ) : ?>
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'kiosque' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                <?php else : ?>
                    <h1 class="page-title"><?php _e( 'Nothing Found', 'kiosque' ); ?></h1>
                <?php endif; ?>
            </header><!-- .page-header -->
        <?php endif; ?>
    <?php endif; ?>


	<div class="site-content-contain">
		<div id="content" class="site-content">
