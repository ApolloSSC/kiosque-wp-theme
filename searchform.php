<?php
/**
 * Template for displaying search forms in Kiosque
 *
 * @package WordPress
 * @subpackage Kiosque
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'kiosque' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="Recherche..." value="<?php echo get_search_query(); ?>" name="s" required />
	<button type="submit" class="search-submit"><?php echo kiosque_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'kiosque' ); ?></span></button>
</form>
