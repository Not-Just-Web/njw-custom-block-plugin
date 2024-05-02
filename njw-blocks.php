<?php
/**
 * Plugin Name:       NJW Blocks
 * Description:       Plugin to create custom gutenberg block in wordpress.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Sanjay Adhikari (Aremedia)
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       aremedia-blocks
 *
 * @package           create-block
 */

define( 'NJW_BLOCKS_PLUGIN_FILE',  __FILE__);
define( 'NJW_BLOCKS_DIR',  plugin_dir_path(NJW_BLOCKS_PLUGIN_FILE) );

require_once NJW_BLOCKS_DIR . 'includes/product-category-banner.php';

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_NJW_BLOCKS_block_init() {
	$block_folder = NJW_BLOCKS_DIR . 'build/blocks';

    if( file_exists($block_folder )) :
      $all_blocks = glob($block_folder . '/*', GLOB_ONLYDIR);

      foreach( $all_blocks as $block) :
				$block_name = basename($block);
				if ($block_name === 'product-cat-cover-image') {
						register_block_type( $block, array(
								'style' => 'wp-block-cover',
						) );
				} else {
						register_block_type( $block );
				}
      endforeach;
    endif;
}
add_action( 'init', 'create_block_NJW_BLOCKS_block_init' );


// function njw_enqueue_cover_block_style() {
// 	if ( ! wp_style_is( 'wp-block-cover', 'enqueued' ) ) {
// 			wp_enqueue_style(
// 					'wp-block-cover', // Handle
// 					includes_url( 'blocks/cover/style.min.css' ), // File URL
// 					array(), // Dependencies
// 					wp_get_theme()->get( 'Version' ) // Version number
// 			);
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'njw_enqueue_cover_block_style' );
