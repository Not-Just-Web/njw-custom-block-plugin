<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

// Get the current product taxonomy title
$taxonomy = get_queried_object();
$taxonomy_title = $taxonomy->name;

// Get the custom meta category_banner
$category_banner = get_term_meta($taxonomy->term_id, 'category_banner', true);
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
	<div class="wp-block-cover is-light" style="min-height:450px;aspect-ratio:unset;">
		<span aria-hidden="true" class="wp-block-cover__background has-lite-background-color has-background-dim"></span>

		<img src="<?php echo $category_banner; ?>" class="wp-block-cover__image-background wp-post-image" alt="" data-object-fit="cover" decoding="async" loading="lazy">
		<div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">

			<div class="wp-block-group is-layout-constrained wp-container-core-group-is-layout-8 wp-block-group-is-layout-constrained">
				<h1 class="wp-block-query-title has-x-large-font-size">Category: <span><?php echo $taxonomy_title; ?></span></h1>
			</div>
		</div>
	</div>
</div>
