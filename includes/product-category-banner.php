
<?php
function njw_create_banner_field() {
	add_njw_category_banner_upload_field();
}

function njw_edit_banner_field($term){
	add_njw_category_banner_upload_field($term);
}
// Add custom banner upload field to product category edit screen
function add_njw_category_banner_upload_field($term = null) {
	if( !empty($term) ) {
		$banner_id = get_term_meta($term->term_id, 'njw_category_banner', true);
		$banner_url = wp_get_attachment_url($banner_id);
	} else {
		$banner_id = null;
		$banner_url = null;
	}
    ?>
    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="njw_category_banner"><?php _e('Category Banner', 'textdomain'); ?></label>
        </th>
        <td>
            <input type="hidden" id="njw_category_banner" name="njw_category_banner" value="<?php echo $banner_id ?: ''; ?>"/>
            <img src="<?php echo $banner_url ?: ''; ?>"  id="njw_category_banner_image" style="max-width:100%;"/>
            <br/>
            <button type="button" class="button button-secondary" id="njw_category_banner_button"><?php _e('Upload/Add Banner', 'textdomain'); ?></button>
            <button type="button" class="button button-secondary" id="njw_category_banner_remove"><?php _e('Remove Banner', 'textdomain'); ?></button>
        </td>
    </tr>
    <script>
        jQuery(document).ready(function($) {
            // Upload banner button functionality
            $('#njw_category_banner_button').click(function(e) {
                e.preventDefault();
                var banner = wp.media({
                    title: 'Upload Banner',
                    multiple: false
                }).open().on('select', function(e) {
                    var uploaded_banner = banner.state().get('selection').first();
                    var banner_url = uploaded_banner.toJSON().url;
                    var banner_id = uploaded_banner.toJSON().id;
                    $('#njw_category_banner').val(banner_id);
                    $('#njw_category_banner_image').attr('src', banner_url);
                });
            });

            // Remove banner button functionality
            $('#njw_category_banner_remove').click(function(e) {
                e.preventDefault();
                $('#njw_category_banner').val('');
                $('#njw_category_banner_image').attr('src', '');
            });
        });
    </script>
    <?php
}
add_action('product_cat_edit_form_fields', 'njw_edit_banner_field', 10, 2);
add_action('product_cat_add_form_fields', 'njw_create_banner_field', 10,  2);

// Save custom meta data when category is edited or added
function njw_save_njw_category_banner_meta_data($term_id) {
	if (isset($_POST['njw_category_banner']) && !empty($_POST['njw_category_banner'])) {
		update_term_meta($term_id, 'njw_category_banner', absint($_POST['njw_category_banner']));
	}
}
add_action('edited_product_cat', 'njw_save_njw_category_banner_meta_data', 10, 2);
add_action('create_product_cat', 'njw_save_njw_category_banner_meta_data', 10, 2);
