<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

// Get the current product taxonomy title
$taxonomy = get_queried_object();
$taxonomy_title = $taxonomy->name;

// Get the custom meta category_banner
$category_banner_id = get_term_meta($taxonomy->term_id, 'njw_category_banner', true);

// Get the image URL from the image ID
$category_banner_url = wp_get_attachment_url($category_banner_id);

// Get the product taxonomy description with auto paragraph tags
$taxonomy_description = wpautop($taxonomy->description);
?>

<div <?php echo get_block_wrapper_attributes(); // get block attribute is itself escaped ?>>
	<div class="wp-block-cover is-light" style="min-height:450px;aspect-ratio:unset;">
		<span aria-hidden="true" class="wp-block-cover__background has-lite-background-color has-background-dim"></span>

		<img src="<?php echo esc_url($category_banner_url); ?>" class="wp-block-cover__image-background wp-post-image" alt="" data-object-fit="cover" decoding="async" loading="lazy">
		<div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">

			<div class="wp-block-group is-layout-constrained wp-container-core-group-is-layout-8 wp-block-group-is-layout-constrained">
				<h1 class="wp-block-query-title has-x-large-font-size">Category: <span><?php echo esc_html($taxonomy_title); ?></span></h1>
				<div class="wp-block-term-description has-medium-font-size">
					<?php echo wp_kses_post($taxonomy_description); ?>
				</div>
			</div>
		</div>
	</div>
</div>
