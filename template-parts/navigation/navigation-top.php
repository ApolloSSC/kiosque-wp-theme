<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Kiosque
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'kiosque' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php echo kiosque_get_svg( array( 'icon' => 'bars' ) ); echo kiosque_get_svg( array( 'icon' => 'close' ) ); _e( 'Menu', 'kiosque' ); ?></button>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
</nav><!-- #site-navigation -->
<?php if(is_category()): ?>
    <nav class="main-navigation sub-category-navigation">
        <?php echo sub_category_list(); ?>
    </nav>
<?php endif; ?>
