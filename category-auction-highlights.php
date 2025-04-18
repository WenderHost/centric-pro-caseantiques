<?php
/**
 * Custom template for the `auction-highlights` category.
 *
 * @link URL
 * @since 1.0.0
 *
 * @package Centric Pro for Case Antiques
 * @subpackage Component
 */

// Reconfigure the standard entry header
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
add_action( 'genesis_entry_header', 'centricpro_do_item_image', 7 );
function centricpro_do_item_image(){
	?><div class="image-frame"><span class="helper"></span><?php
	genesis_do_post_image();
	?></div><?php
}

// Reconfigure standard post content output
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
remove_action( 'genesis_post_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

// Reconfigure the standard entry footer
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

genesis();
?>