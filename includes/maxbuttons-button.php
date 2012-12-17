<?php
include_once 'arrays.php';
include_once 'constants.php';

if (isset($_GET['id']) && $_GET['id'] != '') {
	$button = maxbuttons_get_button($_GET['id']);
}

$maxbutton_name_value = isset($button) ? $button->name : '';
$maxbutton_description_value = isset($button) ? $button->description : '';
$maxbutton_url_value = isset($button) ? $button->url : '';
$maxbutton_text_value = isset($button) ? $button->text : '';
$maxbutton_new_window_value = isset($button) ? $button->new_window : '';
$maxbutton_nofollow_value = isset($button) ? $button->nofollow : '';
$maxbutton_text_font_family_value = isset($button) ? $button->text_font_family : '';
$maxbutton_text_font_family_display = ($maxbutton_text_font_family_value != '') ? $maxbutton_text_font_family_value : $maxbutton_text_font_family_default;
$maxbutton_text_font_size_value = isset($button) ? $button->text_font_size : '';
$maxbutton_text_font_size_display = ($maxbutton_text_font_size_value != '') ? $maxbutton_text_font_size_value : $maxbutton_text_font_size_default;
$maxbutton_text_font_style_value = isset($button) ? $button->text_font_style : '';
$maxbutton_text_font_style_display = ($maxbutton_text_font_style_value != '') ? $maxbutton_text_font_style_value : $maxbutton_text_font_style_default;
$maxbutton_text_font_weight_value = isset($button) ? $button->text_font_weight : '';
$maxbutton_text_font_weight_display = ($maxbutton_text_font_weight_value != '') ? $maxbutton_text_font_weight_value : $maxbutton_text_font_weight_default;
$maxbutton_text_color_value = isset($button) ? $button->text_color : '';
$maxbutton_text_color_display = ($maxbutton_text_color_value != '') ? $maxbutton_text_color_value : $maxbutton_text_color_default;
$maxbutton_text_color_hover_value = isset($button) ? $button->text_color_hover : '';
$maxbutton_text_color_hover_display = ($maxbutton_text_color_hover_value != '') ? $maxbutton_text_color_hover_value : $maxbutton_text_color_hover_default;
$maxbutton_text_shadow_color_value = isset($button) ? $button->text_shadow_color : '';
$maxbutton_text_shadow_color_display = ($maxbutton_text_shadow_color_value != '') ? $maxbutton_text_shadow_color_value : $maxbutton_text_shadow_color_default;
$maxbutton_text_shadow_color_hover_value = isset($button) ? $button->text_shadow_color_hover : '';
$maxbutton_text_shadow_color_hover_display = ($maxbutton_text_shadow_color_hover_value != '') ? $maxbutton_text_shadow_color_hover_value : $maxbutton_text_shadow_color_hover_default;
$maxbutton_text_shadow_offset_left_value = isset($button) ? $button->text_shadow_offset_left : '';
$maxbutton_text_shadow_offset_left_display = ($maxbutton_text_shadow_offset_left_value != '') ? $maxbutton_text_shadow_offset_left_value : $maxbutton_text_shadow_offset_left_default;
$maxbutton_text_shadow_offset_top_value = isset($button) ? $button->text_shadow_offset_top : '';
$maxbutton_text_shadow_offset_top_display = ($maxbutton_text_shadow_offset_top_value != '') ? $maxbutton_text_shadow_offset_top_value : $maxbutton_text_shadow_offset_top_default;
$maxbutton_text_shadow_width_value = isset($button) ? $button->text_shadow_width : '';
$maxbutton_text_shadow_width_display = ($maxbutton_text_shadow_width_value != '') ? $maxbutton_text_shadow_width_value : $maxbutton_text_shadow_width_default;
$maxbutton_text_padding_top_value = isset($button) ? $button->text_padding_top : '';
$maxbutton_text_padding_top_display = ($maxbutton_text_padding_top_value != '') ? $maxbutton_text_padding_top_value : $maxbutton_text_padding_top_default;
$maxbutton_text_padding_bottom_value = isset($button) ? $button->text_padding_bottom : '';
$maxbutton_text_padding_bottom_display = ($maxbutton_text_padding_bottom_value != '') ? $maxbutton_text_padding_bottom_value : $maxbutton_text_padding_bottom_default;
$maxbutton_text_padding_left_value = isset($button) ? $button->text_padding_left : '';
$maxbutton_text_padding_left_display = ($maxbutton_text_padding_left_value != '') ? $maxbutton_text_padding_left_value : $maxbutton_text_padding_left_default;
$maxbutton_text_padding_right_value = isset($button) ? $button->text_padding_right : '';
$maxbutton_text_padding_right_display = ($maxbutton_text_padding_right_value != '') ? $maxbutton_text_padding_right_value : $maxbutton_text_padding_right_default;
$maxbutton_border_radius_top_left_value = isset($button) ? $button->border_radius_top_left : '';
$maxbutton_border_radius_top_left_display = ($maxbutton_border_radius_top_left_value != '') ? $maxbutton_border_radius_top_left_value : $maxbutton_border_radius_top_left_default;
$maxbutton_border_radius_top_right_value = isset($button) ? $button->border_radius_top_right : '';
$maxbutton_border_radius_top_right_display = ($maxbutton_border_radius_top_right_value != '') ? $maxbutton_border_radius_top_right_value : $maxbutton_border_radius_top_right_default;
$maxbutton_border_radius_bottom_left_value = isset($button) ? $button->border_radius_bottom_left : '';
$maxbutton_border_radius_bottom_left_display = ($maxbutton_border_radius_bottom_left_value != '') ? $maxbutton_border_radius_bottom_left_value : $maxbutton_border_radius_bottom_left_default;
$maxbutton_border_radius_bottom_right_value = isset($button) ? $button->border_radius_bottom_right : '';
$maxbutton_border_radius_bottom_right_display = ($maxbutton_border_radius_bottom_right_value != '') ? $maxbutton_border_radius_bottom_right_value : $maxbutton_border_radius_bottom_right_default;
$maxbutton_border_style_value = isset($button) ? $button->border_style : '';
$maxbutton_border_style_display = ($maxbutton_border_style_value != '') ? $maxbutton_border_style_value : $maxbutton_border_style_default;
$maxbutton_border_width_value = isset($button) ? $button->border_width : '';
$maxbutton_border_width_display = ($maxbutton_border_width_value != '') ? $maxbutton_border_width_value : $maxbutton_border_width_default;
$maxbutton_gradient_start_color_value = isset($button) ? $button->gradient_start_color : '';
$maxbutton_gradient_start_color_display = ($maxbutton_gradient_start_color_value != '') ? $maxbutton_gradient_start_color_value : $maxbutton_gradient_start_color_default;
$maxbutton_gradient_start_color_hover_value = isset($button) ? $button->gradient_start_color_hover : '';
$maxbutton_gradient_start_color_hover_display = ($maxbutton_gradient_start_color_hover_value != '') ? $maxbutton_gradient_start_color_hover_value : $maxbutton_gradient_start_color_hover_default;
$maxbutton_gradient_end_color_value = isset($button) ? $button->gradient_end_color : '';
$maxbutton_gradient_end_color_display = ($maxbutton_gradient_end_color_value != '') ? $maxbutton_gradient_end_color_value : $maxbutton_gradient_end_color_default;
$maxbutton_gradient_end_color_hover_value = isset($button) ? $button->gradient_end_color_hover : '';
$maxbutton_gradient_end_color_hover_display = ($maxbutton_gradient_end_color_hover_value != '') ? $maxbutton_gradient_end_color_hover_value : $maxbutton_gradient_end_color_hover_default;
$maxbutton_border_color_value = isset($button) ? $button->border_color : '';
$maxbutton_border_color_display = ($maxbutton_border_color_value != '') ? $maxbutton_border_color_value : $maxbutton_border_color_default;
$maxbutton_border_color_hover_value = isset($button) ? $button->border_color_hover : '';
$maxbutton_border_color_hover_display = ($maxbutton_border_color_hover_value != '') ? $maxbutton_border_color_hover_value : $maxbutton_border_color_hover_default;
$maxbutton_box_shadow_color_value = isset($button) ? $button->box_shadow_color : '';
$maxbutton_box_shadow_color_display = ($maxbutton_box_shadow_color_value != '') ? $maxbutton_box_shadow_color_value : $maxbutton_box_shadow_color_default;
$maxbutton_box_shadow_color_hover_value = isset($button) ? $button->box_shadow_color_hover : '';
$maxbutton_box_shadow_color_hover_display = ($maxbutton_box_shadow_color_hover_value != '') ? $maxbutton_box_shadow_color_hover_value : $maxbutton_box_shadow_color_hover_default;
$maxbutton_box_shadow_offset_left_value = isset($button) ? $button->box_shadow_offset_left : '';
$maxbutton_box_shadow_offset_left_display = ($maxbutton_box_shadow_offset_left_value != '') ? $maxbutton_box_shadow_offset_left_value : $maxbutton_box_shadow_offset_left_default;
$maxbutton_box_shadow_offset_top_value = isset($button) ? $button->box_shadow_offset_top : '';
$maxbutton_box_shadow_offset_top_display = ($maxbutton_box_shadow_offset_top_value != '') ? $maxbutton_box_shadow_offset_top_value : $maxbutton_box_shadow_offset_top_default;
$maxbutton_box_shadow_width_value = isset($button) ? $button->box_shadow_width : '';
$maxbutton_box_shadow_width_display = ($maxbutton_box_shadow_width_value != '') ? $maxbutton_box_shadow_width_value : $maxbutton_box_shadow_width_default;
$maxbutton_gradient_stop_value = isset($button) ? $button->gradient_stop : '';
$maxbutton_gradient_stop_display = ($maxbutton_gradient_stop_value != '') ? $maxbutton_gradient_stop_value : $maxbutton_gradient_stop_default;
$maxbutton_gradient_stop_display = strlen($maxbutton_gradient_stop_display) == 1 ? '0' . $maxbutton_gradient_stop_display : $maxbutton_gradient_stop_display;
$maxbutton_container_enabled_value = isset($button) ? $button->container_enabled : 'on';
$maxbutton_container_width_value = isset($button) ? $button->container_width : '';
$maxbutton_container_margin_top_value = isset($button) ? $button->container_margin_top : '';
$maxbutton_container_margin_right_value = isset($button) ? $button->container_margin_right : '';
$maxbutton_container_margin_bottom_value = isset($button) ? $button->container_margin_bottom : '';
$maxbutton_container_margin_left_value = isset($button) ? $button->container_margin_left : '';
$maxbutton_container_alignment_value = isset($button) ? $button->container_alignment : '';
$maxbutton_container_center_div_wrap_enabled_value = isset($button) ? $button->container_center_div_wrap_enabled : 'on';

$redirect = false;
$button_id = 0;

if ($_POST) {
	global $wpdb;
	
	$data = array(
		'name' => $_POST[$maxbutton_name_key] != '' ? stripslashes($_POST[$maxbutton_name_key]) : __('Unnamed Button', 'maxbuttons'),
		'description' => stripslashes($_POST[$maxbutton_description_key]),
		'url' => stripslashes($_POST[$maxbutton_url_key]),
		'text' => stripslashes($_POST[$maxbutton_text_key]),
		'new_window' => $wpdb->escape($_POST[$maxbutton_new_window_key]),
		'nofollow' => $wpdb->escape($_POST[$maxbutton_nofollow_key]),
		'text_font_family' => $_POST[$maxbutton_text_font_family_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_font_family_key]) : $maxbutton_text_font_family_default,
		'text_font_size' => $_POST[$maxbutton_text_font_size_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_font_size_key]) : $maxbutton_text_font_size_default,
		'text_font_style' => $_POST[$maxbutton_text_font_style_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_font_style_key]) : $maxbutton_text_font_style_default,
		'text_font_weight' => $_POST[$maxbutton_text_font_weight_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_font_weight_key]) : $maxbutton_text_font_weight_default,
		'text_color' => $_POST[$maxbutton_text_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_color_key]) : $maxbutton_text_color_default,
		'text_color_hover' => $_POST[$maxbutton_text_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_color_hover_key]) : $maxbutton_text_color_hover_default,
		'text_shadow_offset_left' => $_POST[$maxbutton_text_shadow_offset_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_shadow_offset_left_key]) .'px' : $maxbutton_text_shadow_offset_left_default,
		'text_shadow_offset_top' => $_POST[$maxbutton_text_shadow_offset_top_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_shadow_offset_top_key]) .'px' : $maxbutton_text_shadow_offset_top_default,
		'text_shadow_width' => $_POST[$maxbutton_text_shadow_width_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_shadow_width_key]) .'px' : $maxbutton_text_shadow_width_default,
		'text_shadow_color' => $_POST[$maxbutton_text_shadow_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_shadow_color_key]) : $maxbutton_text_shadow_color_default,
		'text_shadow_color_hover' => $_POST[$maxbutton_text_shadow_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_shadow_color_hover_key]) : $maxbutton_text_shadow_color_hover_default,
		'text_padding_top' => $_POST[$maxbutton_text_padding_top_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_padding_top_key]) . 'px' : $maxbutton_text_padding_top_default,
		'text_padding_bottom' => $_POST[$maxbutton_text_padding_bottom_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_padding_bottom_key]) . 'px' : $maxbutton_text_padding_bottom_default,
		'text_padding_left' => $_POST[$maxbutton_text_padding_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_padding_left_key]) . 'px' : $maxbutton_text_padding_left_default,
		'text_padding_right' => $_POST[$maxbutton_text_padding_right_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_padding_right_key]) . 'px' : $maxbutton_text_padding_right_default,
		'border_radius_top_left' => $_POST[$maxbutton_border_radius_top_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_radius_top_left_key]) . 'px' : $maxbutton_border_radius_top_left_default,
		'border_radius_top_right' => $_POST[$maxbutton_border_radius_top_right_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_radius_top_right_key]) . 'px' : $maxbutton_border_radius_top_right_default,
		'border_radius_bottom_left' => $_POST[$maxbutton_border_radius_bottom_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_radius_bottom_left_key]) . 'px' : $maxbutton_border_radius_bottom_left_default,
		'border_radius_bottom_right' => $_POST[$maxbutton_border_radius_bottom_right_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_radius_bottom_right_key]) . 'px' : $maxbutton_border_radius_bottom_right_default,
		'border_style' => $_POST[$maxbutton_border_style_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_style_key]) : $maxbutton_border_style_default,
		'border_width' => $_POST[$maxbutton_border_width_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_width_key]) . 'px' : $maxbutton_border_width_default,
		'border_color' => $_POST[$maxbutton_border_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_color_key]) : $maxbutton_border_color_default,
		'border_color_hover' => $_POST[$maxbutton_border_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_color_hover_key]) : $maxbutton_border_color_hover_default,
		'box_shadow_offset_left' => $_POST[$maxbutton_box_shadow_offset_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_box_shadow_offset_left_key]) . 'px' : $maxbutton_box_shadow_offset_left_default,
		'box_shadow_offset_top' => $_POST[$maxbutton_box_shadow_offset_top_key] != '' ? $wpdb->escape($_POST[$maxbutton_box_shadow_offset_top_key]) . 'px' : $maxbutton_box_shadow_offset_top_default,
		'box_shadow_width' => $_POST[$maxbutton_box_shadow_width_key] != '' ? $wpdb->escape($_POST[$maxbutton_box_shadow_width_key]) . 'px' : $maxbutton_box_shadow_width_default,
		'box_shadow_color' => $_POST[$maxbutton_box_shadow_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_box_shadow_color_key]) : $maxbutton_box_shadow_color_default,
		'box_shadow_color_hover' => $_POST[$maxbutton_box_shadow_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_box_shadow_color_hover_key]) : $maxbutton_box_shadow_color_hover_default,
		'gradient_start_color' => $_POST[$maxbutton_gradient_start_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_gradient_start_color_key]) : $maxbutton_gradient_start_color_default,
		'gradient_start_color_hover' => $_POST[$maxbutton_gradient_start_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_gradient_start_color_hover_key]) : $maxbutton_gradient_start_color_hover_default,
		'gradient_end_color' => $_POST[$maxbutton_gradient_end_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_gradient_end_color_key]) : $maxbutton_gradient_end_color_default,
		'gradient_end_color_hover' => $_POST[$maxbutton_gradient_end_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_gradient_end_color_hover_key]) : $maxbutton_gradient_end_color_hover_default,
		'gradient_stop' => $_POST[$maxbutton_gradient_stop_key] != '' ? $wpdb->escape($_POST[$maxbutton_gradient_stop_key]) : $maxbutton_gradient_stop_default,
		'container_enabled' => $wpdb->escape($_POST[$maxbutton_container_enabled_key]),
		'container_width' => $_POST[$maxbutton_container_width_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_width_key]) . 'px' : '',
		'container_margin_top' => $_POST[$maxbutton_container_margin_top_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_margin_top_key]) . 'px' : '',
		'container_margin_right' => $_POST[$maxbutton_container_margin_right_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_margin_right_key]) . 'px' : '',
		'container_margin_bottom' => $_POST[$maxbutton_container_margin_bottom_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_margin_bottom_key]) . 'px' : '',
		'container_margin_left' => $_POST[$maxbutton_container_margin_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_margin_left_key]) . 'px' : '',
		'container_alignment' => $_POST[$maxbutton_container_alignment_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_alignment_key]) : '',
		'container_center_div_wrap_enabled' => $wpdb->escape($_POST[$maxbutton_container_center_div_wrap_enabled_key])
	);

	if ($_GET['id'] == '') {
		// This is a new button
		$wpdb->insert(maxbuttons_get_buttons_table_name(), $data);
		$button_id = $wpdb->insert_id;
	} else {
		// Updating an existing button
		$where = array('id' => $_GET['id']);
		$data_format = array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');
		$where_format = array('%d');
		$wpdb->update(maxbuttons_get_buttons_table_name(), $data, $where, $data_format, $where_format);
		$button_id = $_GET['id'];
	}
	
	$redirect = true;
}

function maxbuttons_strip_px($value) {
	return rtrim($value, 'px');
}
?>

<script type="text/javascript">
	<?php if ($redirect == true) { ?>
		window.location = "<?php echo admin_url() ?>admin.php?page=maxbuttons-controller&action=button&id=<?php echo $button_id ?>";
	<?php } ?>
	
	jQuery(document).ready(function() {		
		<?php if (isset($_GET['id']) && $_GET['id'] > 0) { ?>
			jQuery("#maxbuttons .message").show();
		<?php } ?>
		
		jQuery("#maxbuttons .output").draggable();
		
		showColorPickerForButtonTextColor();
		showColorPickerForButtonTextHoverColor();
		showColorPickerForButtonTextShadowColor();
		showColorPickerForButtonTextShadowHoverColor();
		showColorPickerForButtonGradientStartColor();
		showColorPickerForButtonGradientStartHoverColor();
		showColorPickerForButtonGradientEndColor();
		showColorPickerForButtonGradientEndHoverColor();
		showColorPickerForButtonBorderColor();
		showColorPickerForButtonBorderHoverColor();
		showColorPickerForButtonBoxShadowColor();
		showColorPickerForButtonBoxShadowHoverColor();
		showColorPickerForOutputBackgroundColor();
		
		jQuery("#button-save").click(function() {			
			jQuery("#new-button-form").submit();
			return false;
		});
		
		jQuery("#<?php echo $maxbutton_url_key ?>").keyup(function() {
			jQuery("#maxbuttons .output .result a").attr("href", jQuery(this).val());
		});

		jQuery("#<?php echo $maxbutton_text_key ?>").keyup(function() {
			jQuery("#maxbuttons .output .result a").text(jQuery(this).val());
		});
		
		jQuery("#<?php echo $maxbutton_text_font_family_key ?>").change(function() {
			var font_family = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text_font_family_default ?>";
			jQuery("#maxbuttons .output .result a").css("font-family", font_family);
		});
		
		jQuery("#<?php echo $maxbutton_text_font_size_key ?>").change(function() {
			var font_size = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text_font_size_default ?>";
			jQuery("#maxbuttons .output .result a").css("font-size", font_size);
		});
		
		jQuery("#<?php echo $maxbutton_text_font_style_key ?>").change(function() {
			var font_style = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text_font_style_default ?>";
			jQuery("#maxbuttons .output .result a").css("font-style", font_style);
		});
		
		jQuery("#<?php echo $maxbutton_text_font_weight_key ?>").change(function() {
			var font_weight = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text_font_weight_default ?>";
			jQuery("#maxbuttons .output .result a").css("font-weight", font_weight);
		});

		jQuery("#<?php echo $maxbutton_text_padding_top_key ?>").keyup(function() {
			var padding_top = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text_padding_top_default ?>";
			jQuery("#maxbuttons .output .result a").css("padding-top", padding_top);
		});
		
		jQuery("#<?php echo $maxbutton_text_padding_bottom_key ?>").keyup(function() {
			var padding_bottom = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text_padding_bottom_default ?>";
			jQuery("#maxbuttons .output .result a").css("padding-bottom", padding_bottom);
		});
		
		jQuery("#<?php echo $maxbutton_text_padding_left_key ?>").keyup(function() {
			var padding_left = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text_padding_left_default ?>";
			jQuery("#maxbuttons .output .result a").css("padding-left", padding_left);
		});
		
		jQuery("#<?php echo $maxbutton_text_padding_right_key ?>").keyup(function() {
			var padding_right = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text_padding_right_default ?>";
			jQuery("#maxbuttons .output .result a").css("padding-right", padding_right);
		});
		
		jQuery("#<?php echo $maxbutton_border_radius_top_left_key ?>").keyup(function() {
			var radius_top_left = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_border_radius_top_left_default ?>";
			jQuery("#maxbuttons .output .result a").css("border-top-left-radius", radius_top_left);
			jQuery("#maxbuttons .output .result a").css("-moz-border-radius-topleft", radius_top_left);
			jQuery("#maxbuttons .output .result a").css("-webkit-border-top-left-radius", radius_top_left);
		});
		
		jQuery("#<?php echo $maxbutton_border_radius_top_right_key ?>").keyup(function() {
			var radius_top_right = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_border_radius_top_right_default ?>";
			jQuery("#maxbuttons .output .result a").css("border-top-right-radius", radius_top_right);
			jQuery("#maxbuttons .output .result a").css("-moz-border-radius-topright", radius_top_right);
			jQuery("#maxbuttons .output .result a").css("-webkit-border-top-right-radius", radius_top_right);
		});
		
		jQuery("#<?php echo $maxbutton_border_radius_bottom_left_key ?>").keyup(function() {
			var radius_bottom_left = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_border_radius_bottom_left_default ?>";
			jQuery("#maxbuttons .output .result a").css("border-bottom-left-radius", radius_bottom_left);
			jQuery("#maxbuttons .output .result a").css("-moz-border-radius-bottomleft", radius_bottom_left);
			jQuery("#maxbuttons .output .result a").css("-webkit-border-bottom-left-radius", radius_bottom_left);
		});
		
		jQuery("#<?php echo $maxbutton_border_radius_bottom_right_key ?>").keyup(function() {
			var radius_bottom_right = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_border_radius_bottom_right_default ?>";
			jQuery("#maxbuttons .output .result a").css("border-bottom-right-radius", radius_bottom_right);
			jQuery("#maxbuttons .output .result a").css("-moz-border-radius-bottomright", radius_bottom_right);
			jQuery("#maxbuttons .output .result a").css("-webkit-border-bottom-right-radius", radius_bottom_right);
		});
		
		jQuery("#<?php echo $maxbutton_border_style_key ?>").change(function() {
			var border_style = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_border_style_default ?>";
			jQuery("#maxbuttons .output .result a").css("border-style", border_style);
		});
		
		jQuery("#<?php echo $maxbutton_border_width_key ?>").keyup(function() {
			var border_width = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_border_width_default ?>";
			jQuery("#maxbuttons .output .result a").css("border-width", border_width);
		});
		
		jQuery("#maxbuttons .output .result a").css("text-decoration", "none");
		jQuery("#maxbuttons .output .result a").css("color", "<?php echo $maxbutton_text_color_display ?>");
		jQuery("#maxbuttons .output .result a").css("font-family", "<?php echo $maxbutton_text_font_family_display ?>");
		jQuery("#maxbuttons .output .result a").css("font-size", "<?php echo $maxbutton_text_font_size_display ?>");
		jQuery("#maxbuttons .output .result a").css("font-style", "<?php echo $maxbutton_text_font_style_display ?>");
		jQuery("#maxbuttons .output .result a").css("font-weight", "<?php echo $maxbutton_text_font_weight_display ?>");
		jQuery("#maxbuttons .output .result a").css("padding-top", "<?php echo $maxbutton_text_padding_top_display ?>");
		jQuery("#maxbuttons .output .result a").css("padding-bottom", "<?php echo $maxbutton_text_padding_bottom_display ?>");
		jQuery("#maxbuttons .output .result a").css("padding-left", "<?php echo $maxbutton_text_padding_left_display ?>");
		jQuery("#maxbuttons .output .result a").css("padding-right", "<?php echo $maxbutton_text_padding_right_display ?>");
		jQuery("#maxbuttons .output .result a").css("background-color", "<?php echo $maxbutton_gradient_start_color_display ?>");
		jQuery("#maxbuttons .output .result a").css("background", "linear-gradient(<?php echo $maxbutton_gradient_start_color_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_display ?>)");
		jQuery("#maxbuttons .output .result a").css("background", "-moz-linear-gradient(<?php echo $maxbutton_gradient_start_color_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_display ?>)");
		jQuery("#maxbuttons .output .result a").css("background", "-o-linear-gradient(<?php echo $maxbutton_gradient_start_color_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_display ?>)");
		jQuery("#maxbuttons .output .result a").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, <?php echo $maxbutton_gradient_start_color_display ?>), color-stop(1, <?php echo $maxbutton_gradient_end_color_display ?>))");
		jQuery("#maxbuttons .output .result a").css("border-style", "<?php echo $maxbutton_border_style_display ?>");
		jQuery("#maxbuttons .output .result a").css("border-width", "<?php echo $maxbutton_border_width_display ?>");
		jQuery("#maxbuttons .output .result a").css("border-color", "<?php echo $maxbutton_border_color_display ?>");
		jQuery("#maxbuttons .output .result a").css("border-top-left-radius", "<?php echo $maxbutton_border_radius_top_left_display ?>");
		jQuery("#maxbuttons .output .result a").css("border-top-right-radius", "<?php echo $maxbutton_border_radius_top_right_display ?>");
		jQuery("#maxbuttons .output .result a").css("border-bottom-left-radius", "<?php echo $maxbutton_border_radius_bottom_left_display ?>");
		jQuery("#maxbuttons .output .result a").css("border-bottom-right-radius", "<?php echo $maxbutton_border_radius_bottom_right_display ?>");
		jQuery("#maxbuttons .output .result a").css("-moz-border-radius-topleft", "<?php echo $maxbutton_border_radius_top_left_display ?>");
		jQuery("#maxbuttons .output .result a").css("-moz-border-radius-topright", "<?php echo $maxbutton_border_radius_top_right_display ?>");
		jQuery("#maxbuttons .output .result a").css("-moz-border-radius-bottomleft", "<?php echo $maxbutton_border_radius_bottom_left_display ?>");
		jQuery("#maxbuttons .output .result a").css("-moz-border-radius-bottomright", "<?php echo $maxbutton_border_radius_bottom_right_display ?>");
		jQuery("#maxbuttons .output .result a").css("-webkit-border-top-left-radius", "<?php echo $maxbutton_border_radius_top_left_display ?>");
		jQuery("#maxbuttons .output .result a").css("-webkit-border-top-right-radius", "<?php echo $maxbutton_border_radius_top_right_display ?>");
		jQuery("#maxbuttons .output .result a").css("-webkit-border-bottom-left-radius", "<?php echo $maxbutton_border_radius_bottom_left_display ?>");
		jQuery("#maxbuttons .output .result a").css("-webkit-border-bottom-right-radius", "<?php echo $maxbutton_border_radius_bottom_right_display ?>");
		jQuery("#maxbuttons .output .result a").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> <?php echo $maxbutton_text_shadow_color_display ?>");
		jQuery("#maxbuttons .output .result a").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_display ?> <?php echo $maxbutton_box_shadow_offset_top_display ?> <?php echo $maxbutton_box_shadow_width_display ?> <?php echo $maxbutton_box_shadow_color_display ?>");
		jQuery("#maxbuttons .output .result a").css("-pie-background", "linear-gradient(<?php echo $maxbutton_gradient_start_color_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_display ?>)");
		jQuery("#maxbuttons .output .result a").css("position", "relative");
		jQuery("#maxbuttons .output .result a").css("behavior", "url('<?php echo MAXBUTTONS_PLUGIN_URL ?>/pie/PIE.htc')");
		
		jQuery("#maxbuttons .output .result a.hover").css("text-decoration", "none");
		jQuery("#maxbuttons .output .result a.hover").css("color", "<?php echo $maxbutton_text_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover").css("background-color", "<?php echo $maxbutton_gradient_start_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover").css("background", "linear-gradient(<?php echo $maxbutton_gradient_start_color_hover_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_hover_display ?>)");
		jQuery("#maxbuttons .output .result a.hover").css("background", "-moz-linear-gradient(<?php echo $maxbutton_gradient_start_color_hover_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_hover_display ?>)");
		jQuery("#maxbuttons .output .result a.hover").css("background", "-o-linear-gradient(<?php echo $maxbutton_gradient_start_color_hover_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_hover_display ?>)");
		jQuery("#maxbuttons .output .result a.hover").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, <?php echo $maxbutton_gradient_start_color_hover_display ?>), color-stop(1, <?php echo $maxbutton_gradient_end_color_hover_display ?>))");
		jQuery("#maxbuttons .output .result a.hover").css("border-color", "<?php echo $maxbutton_border_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> <?php echo $maxbutton_text_shadow_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_display ?> <?php echo $maxbutton_box_shadow_offset_top_display ?> <?php echo $maxbutton_box_shadow_width_display ?> <?php echo $maxbutton_box_shadow_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover").css("-pie-background", "linear-gradient(<?php echo $maxbutton_gradient_start_color_hover_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_hover_display ?>)");
		jQuery("#maxbuttons .output .result a.hover").css("position", "relative");
		jQuery("#maxbuttons .output .result a.hover").css("behavior", "url('<?php echo MAXBUTTONS_PLUGIN_URL ?>/pie/PIE.htc')");
	});
	
	function showColorPickerForButtonTextColor() {
		jQuery('#<?php echo $maxbutton_text_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_text_color_display ?>');
		jQuery('#<?php echo $maxbutton_text_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_text_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_text_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_text_color_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-normal").css("color", '#' + hex);
				
				// Need this so that the hover color doesn't change when the normal color changes
				var text_color_hover = jQuery("#<?php echo $maxbutton_text_color_hover_key ?>").val();
				jQuery("#button-hover").css("color", text_color_hover);
			}
		});
	}
	
	function showColorPickerForButtonTextHoverColor() {
		jQuery('#<?php echo $maxbutton_text_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_text_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_text_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_text_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_text_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_text_color_hover_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-hover").css("color", '#' + hex);
				
				// Need this so that the normal color doesn't change when the hover color changes
				var text_color = jQuery("#<?php echo $maxbutton_text_color_key ?>").val();
				jQuery("#button-normal").css("color", text_color);
			}
		});
	}
	
	function showColorPickerForButtonTextShadowColor() {
		jQuery('#<?php echo $maxbutton_text_shadow_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_text_shadow_color_display ?>');
		jQuery('#<?php echo $maxbutton_text_shadow_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_text_shadow_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_text_shadow_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_text_shadow_color_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-normal").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_default ?> <?php echo $maxbutton_text_shadow_offset_top_default ?> <?php echo $maxbutton_text_shadow_width_default ?> " + '#' + hex);
				
				// Need this so that the hover color doesn't change when the normal color changes
				var text_shadow_color_hover = jQuery("#<?php echo $maxbutton_text_shadow_color_hover_key ?>").val();
				jQuery("#button-hover").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_default ?> <?php echo $maxbutton_text_shadow_offset_top_default ?> <?php echo $maxbutton_text_shadow_width_default ?> " + text_shadow_color_hover);
			}
		});
	}
	
	function showColorPickerForButtonTextShadowHoverColor() {
		jQuery('#<?php echo $maxbutton_text_shadow_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_text_shadow_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_text_shadow_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_text_shadow_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_text_shadow_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_text_shadow_color_hover_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-hover").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_default ?> <?php echo $maxbutton_text_shadow_offset_top_default ?> <?php echo $maxbutton_text_shadow_width_default ?> " + '#' + hex);
				
				// Need this so that the normal color doesn't change when the hover color changes
				var text_shadow_color = jQuery("#<?php echo $maxbutton_text_shadow_color_key ?>").val();
				jQuery("#button-normal").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_default ?> <?php echo $maxbutton_text_shadow_offset_top_default ?> <?php echo $maxbutton_text_shadow_width_default ?> " + text_shadow_color);
			}
		});
	}
	
	function showColorPickerForButtonGradientStartColor() {
		jQuery('#<?php echo $maxbutton_gradient_start_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_gradient_start_color_display ?>');
		jQuery('#<?php echo $maxbutton_gradient_start_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_gradient_start_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_gradient_start_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_gradient_start_color_key ?>_box span').css('background-color', '#' + hex);
				
				var start_color = '#' + hex;
				var end_color = jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_default ?>";
				jQuery("#button-normal").css("background-color", start_color);
				jQuery("#button-normal").css("background", "linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-moz-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-o-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color + "), color-stop(1, " + end_color + "))");
				jQuery("#button-normal").css("-pie-background", "linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("position", "relative");
				jQuery("#button-normal").css("behavior", "url('<?php echo MAXBUTTONS_PLUGIN_URL ?>/pie/PIE.htc')");
		
				// Need this so that the hover color doesn't change when the normal color changes
				var start_color_hover = jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_hover_default ?>";
				var end_color_hover = jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_hover_default ?>";
				jQuery("#button-hover").css("background-color", start_color_hover);
				jQuery("#button-hover").css("background", "linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-moz-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-o-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color_hover + "), color-stop(1, " + end_color_hover + "))");
			}
		});
	}
	
	function showColorPickerForButtonGradientStartHoverColor() {
		jQuery('#<?php echo $maxbutton_gradient_start_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_gradient_start_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_gradient_start_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_gradient_start_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_gradient_start_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_gradient_start_color_hover_key ?>_box span').css('background-color', '#' + hex);
				
				var start_color_hover = '#' + hex;
				var end_color_hover = jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_hover_default ?>";
				jQuery("#button-hover").css("background-color", start_color_hover);
				jQuery("#button-hover").css("background", "linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-moz-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-o-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color_hover + "), color-stop(1, " + end_color_hover + "))");
				jQuery("#button-hover").css("-pie-background", "linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("position", "relative");
				jQuery("#button-hover").css("behavior", "url('<?php echo MAXBUTTONS_PLUGIN_URL ?>/pie/PIE.htc')");
				
				// Need this so that the normal color doesn't change when the hover color changes
				var start_color = jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_default ?>";
				var end_color = jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_default ?>";
				jQuery("#button-normal").css("background-color", start_color);
				jQuery("#button-normal").css("background", "linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-moz-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-o-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color + "), color-stop(1, " + end_color + "))");
			}
		});
	}
	
	function showColorPickerForButtonGradientEndColor() {
		jQuery('#<?php echo $maxbutton_gradient_end_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_gradient_end_color_display ?>');
		jQuery('#<?php echo $maxbutton_gradient_end_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_gradient_end_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_gradient_end_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_gradient_end_color_key ?>_box span').css('background-color', '#' + hex);
				
				var start_color = jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_default ?>";
				var end_color = '#' + hex;
				jQuery("#button-normal").css("background-color", start_color);
				jQuery("#button-normal").css("background", "linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-moz-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-o-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color + "), color-stop(1, " + end_color + "))");
				jQuery("#button-normal").css("-pie-background", "linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("position", "relative");
				jQuery("#button-normal").css("behavior", "url('<?php echo MAXBUTTONS_PLUGIN_URL ?>/pie/PIE.htc')");
				
				// Need this so that the hover color doesn't change when the normal color changes
				var start_color_hover = jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_hover_default ?>";
				var end_color_hover = jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_hover_default ?>";
				jQuery("#button-hover").css("background-color", start_color_hover);
				jQuery("#button-hover").css("background", "linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-moz-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-o-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color_hover + "), color-stop(1, " + end_color_hover + "))");
			}
		});
	}
	
	function showColorPickerForButtonGradientEndHoverColor() {
		jQuery('#<?php echo $maxbutton_gradient_end_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_gradient_end_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_gradient_end_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_gradient_end_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_gradient_end_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_gradient_end_color_hover_key ?>_box span').css('background-color', '#' + hex);
				
				var start_color_hover = jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_hover_default ?>";
				var end_color_hover = '#' + hex;
				jQuery("#button-hover").css("background-color", start_color_hover);
				jQuery("#button-hover").css("background", "linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-moz-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-o-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color_hover + "), color-stop(1, " + end_color_hover + "))");
				jQuery("#button-hover").css("-pie-background", "linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-hover").css("position", "relative");
				jQuery("#button-hover").css("behavior", "url('<?php echo MAXBUTTONS_PLUGIN_URL ?>/pie/PIE.htc')");
				
				// Need this so that the normal color doesn't change when the hover color changes
				var start_color = jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_default ?>";
				var end_color = jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_default ?>";
				jQuery("#button-normal").css("background-color", start_color);
				jQuery("#button-normal").css("background", "linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-moz-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-o-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-normal").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color + "), color-stop(1, " + end_color + "))");
			}
		});
	}
	
	function showColorPickerForButtonBorderColor() {
		jQuery('#<?php echo $maxbutton_border_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_border_color_display ?>');
		jQuery('#<?php echo $maxbutton_border_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_border_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_border_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_border_color_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-normal").css("border-color", '#' + hex);
				
				// Need this so that the hover color doesn't change when the normal color changes
				var border_color_hover = jQuery("#<?php echo $maxbutton_border_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_border_color_hover_key ?>").val() : "<?php echo $maxbutton_border_color_hover_default ?>";
				jQuery("#button-hover").css("border-color", border_color_hover);
			}
		});
	}
	
	function showColorPickerForButtonBorderHoverColor() {
		jQuery('#<?php echo $maxbutton_border_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_border_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_border_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_border_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_border_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_border_color_hover_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-hover").css("border-color", '#' + hex);
				
				// Need this so that the normal color doesn't change when the hover color changes
				var border_color = jQuery("#<?php echo $maxbutton_border_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_border_color_key ?>").val() : "<?php echo $maxbutton_border_color_default ?>";
				jQuery("#button-normal").css("border-color", border_color);
			}
		});
	}
	
	function showColorPickerForButtonBoxShadowColor() {
		jQuery('#<?php echo $maxbutton_box_shadow_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_box_shadow_color_display ?>');
		jQuery('#<?php echo $maxbutton_box_shadow_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_box_shadow_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_box_shadow_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_box_shadow_color_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-normal").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_default ?> <?php echo $maxbutton_box_shadow_offset_top_default ?> <?php echo $maxbutton_box_shadow_width_default ?> " + '#' + hex);
				
				// Need this so that the hover color doesn't change when the normal color changes
				var box_shadow_color_hover = jQuery("#<?php echo $maxbutton_box_shadow_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_box_shadow_color_hover_key ?>").val() : "<?php echo $maxbutton_box_shadow_color_hover_default ?>";
				jQuery("#button-hover").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_default ?> <?php echo $maxbutton_box_shadow_offset_top_default ?> <?php echo $maxbutton_box_shadow_width_default ?> " + box_shadow_color_hover);
			}
		});
	}
	
	function showColorPickerForButtonBoxShadowHoverColor() {
		jQuery('#<?php echo $maxbutton_box_shadow_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_box_shadow_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_box_shadow_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_box_shadow_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_box_shadow_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_box_shadow_color_hover_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-hover").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_default ?> <?php echo $maxbutton_box_shadow_offset_top_default ?> <?php echo $maxbutton_box_shadow_width_default ?> " + '#' + hex);
				
				// Need this so that the normal color doesn't change when the hover color changes
				var box_shadow_color = jQuery("#<?php echo $maxbutton_box_shadow_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_box_shadow_color_key ?>").val() : "<?php echo $maxbutton_box_shadow_color_default ?>";
				jQuery("#button-normal").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_default ?> <?php echo $maxbutton_box_shadow_offset_top_default ?> <?php echo $maxbutton_box_shadow_width_default ?> " + box_shadow_color_hover);
			}
		});
	}
	
	function showColorPickerForOutputBackgroundColor() {
		jQuery('#button_output_box span').css('background-color', '#f1f1f1');
		jQuery('#button_output_box span').ColorPicker({
			'color': '#f1f1f1',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#button_output').attr('value', '#' + hex);
				jQuery('#button_output_box span').css('background-color', '#' + hex);
				jQuery('#maxbuttons .output').css('background-color', '#' + hex);
			}
		});
	}
</script>

<div id="maxbuttons">
	<div class="wrap">
		<div class="icon32">
			<a href="http://maxbuttons.com" target="_blank"><img src="<?php echo MAXBUTTONS_PLUGIN_URL ?>/images/mb-32.png" alt="MaxButtons" /></a>
		</div>
		
		<h2 class="title"><?php _e('MaxButtons: Add/Edit Button', 'maxbuttons') ?></h2>
		
		<div class="logo">
			<?php _e('Brought to you by', 'maxbuttons') ?>
			<a href="http://maxfoundry.com/?ref=mbfree" target="_blank"><img src="<?php echo MAXBUTTONS_PLUGIN_URL ?>/images/max-foundry.png" alt="Max Foundry" /></a>
			<?php printf(__('makers of %sMaxGalleria%s and %sMaxInbound%s', 'maxbuttons'), '<a href="http://maxgalleria.com/?ref=mbfree" target="_blank">', '</a>', '<a href="http://maxinbound.com/?ref=mbfree" target="_blank">', '</a>') ?>
		</div>
		
		<div class="clear"></div>

		<h2 class="tabs">
			<span class="spacer"></span>
			<a class="nav-tab nav-tab-active" href=""><?php _e('Button', 'maxbuttons') ?></a>
			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-pro"><?php _e('Go Pro', 'maxbuttons') ?></a>
			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-support"><?php _e('Support', 'maxbuttons') ?></a>
		</h2>
	
		<form id="new-button-form" method="post">
			<div class="form-actions">				
				<a id="button-save" class="button-primary"><?php _e('Save', 'maxbuttons') ?></a>
				<a id="button-copy" class="button" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=copy&id=<?php echo $_GET['id'] ?>"><?php _e('Copy', 'maxbuttons') ?></a>
				<a id="button-trash" class="button" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=trash&id=<?php echo $_GET['id'] ?>"><?php _e('Move to Trash', 'maxbuttons') ?></a>
				<a id="button-delete" class="button" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=delete&id=<?php echo $_GET['id'] ?>"><?php _e('Delete Permanently', 'maxbuttons') ?></a>
			</div>
			
			<div class="message">
				<?php _e('To use this button, place the following shortcode anywhere in your site content:', 'maxbuttons') ?>
				<strong>[maxbutton id="<?php echo $_GET['id'] ?>"]</strong>
			</div>
			
			<div class="option-container">
				<div class="title"><?php _e('Basics', 'maxbuttons') ?></div>
				<div class="inside">
					<div class="option">
						<div class="label"><?php _e('Name', 'maxbuttons') ?></div>
						<div class="note"><?php _e('Something that you can quickly identify the button with.', 'maxbuttons') ?></div>
						<div class="clear"></div>
						<div class="input">
							<input type="text" id="<?php echo $maxbutton_name_key ?>" name="<?php echo $maxbutton_name_key ?>" value="<?php echo $maxbutton_name_value ?>" maxlength="100" />
						</div>
					</div>
					
					<div class="option">
						<div class="label"><?php _e('Description', 'maxbuttons') ?></div>
						<div class="note"><?php _e('Brief explanation about how and where the button is used.', 'maxbuttons') ?></div>
						<div class="clear"></div>
						<div class="input">
							<textarea id="<?php echo $maxbutton_description_key ?>" name="<?php echo $maxbutton_description_key ?>"><?php echo $maxbutton_description_value ?></textarea>
						</div>
					</div>
					
					<div class="option">
						<div class="label"><?php _e('URL', 'maxbuttons') ?></div>
						<div class="note"><?php _e('The link when the button is clicked.', 'maxbuttons') ?></div>
						<div class="clear"></div>
						<div class="input">
							<input type="text" id="<?php echo $maxbutton_url_key ?>" name="<?php echo $maxbutton_url_key ?>" value="<?php echo $maxbutton_url_value ?>" maxlength="500"/>
						</div>
					</div>
					
					<div class="option">
						<div class="label"><?php _e('Text', 'maxbuttons') ?></div>
						<div class="note"><?php _e('The actual words that appear on the button.', 'maxbuttons') ?></div>
						<div class="clear"></div>
						<div class="input">
							<input type="text" id="<?php echo $maxbutton_text_key ?>" name="<?php echo $maxbutton_text_key ?>" value="<?php echo $maxbutton_text_value ?>" maxlength="100"/>
						</div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Open in New Window', 'maxbuttons') ?></div>
						<div class="input">
							<input type="checkbox" id="<?php echo $maxbutton_new_window_key ?>" name="<?php echo $maxbutton_new_window_key ?>" <?php if ($maxbutton_new_window_value == 'on') { echo 'checked="checked"'; } else { echo ''; } ?>>
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Use rel="nofollow"', 'maxbuttons') ?></div>
						<div class="input">
							<input type="checkbox" id="<?php echo $maxbutton_nofollow_key ?>" name="<?php echo $maxbutton_nofollow_key ?>" <?php if ($maxbutton_nofollow_value == 'on') { echo 'checked="checked"'; } else { echo ''; } ?>>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div class="option-container">
				<div class="title"><?php _e('Text', 'maxbuttons') ?></div>
				<div class="inside">
					<div class="option-design">
						<div class="label"><?php _e('Font', 'maxbuttons') ?></div>
						<div class="input">
							<select id="<?php echo $maxbutton_text_font_family_key ?>" name="<?php echo $maxbutton_text_font_family_key ?>">
							<?php
							foreach ($maxbuttons_font_families as $name => $value) {
								$selected = ($maxbutton_text_font_family_value == $value) ? 'selected="selected"' : '';
								echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
							}
							?>
							</select>
						</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_font_family_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Size', 'maxbuttons') ?></div>
						<div class="input">
							<select id="<?php echo $maxbutton_text_font_size_key ?>" name="<?php echo $maxbutton_text_font_size_key ?>">
							<?php
							foreach ($maxbuttons_font_sizes as $name => $value) {
								$selected = ($maxbutton_text_font_size_value == $value) ? 'selected="selected"' : '';
								echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
							}
							?>
							</select>
						</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_font_size_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Style', 'maxbuttons') ?></div>
						<div class="input">
							<select id="<?php echo $maxbutton_text_font_style_key ?>" name="<?php echo $maxbutton_text_font_style_key ?>">
							<?php
							foreach ($maxbuttons_font_styles as $name => $value) {
								$selected = ($maxbutton_text_font_style_value == $value) ? 'selected="selected"' : '';
								echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
							}
							?>
							</select>
						</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_font_style_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Weight', 'maxbuttons') ?></div>
						<div class="input">
							<select id="<?php echo $maxbutton_text_font_weight_key ?>" name="<?php echo $maxbutton_text_font_weight_key ?>">
							<?php
							foreach ($maxbuttons_font_weights as $name => $value) {
								$selected = ($maxbutton_text_font_weight_value == $value) ? 'selected="selected"' : '';
								echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
							}
							?>
							</select>
						</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_font_weight_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Shadow Offset Left', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_text_shadow_offset_left_key ?>" name="<?php echo $maxbutton_text_shadow_offset_left_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_text_shadow_offset_left_value) ?>" />px</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_shadow_offset_left_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Shadow Offset Top', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_text_shadow_offset_top_key ?>" name="<?php echo $maxbutton_text_shadow_offset_top_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_text_shadow_offset_top_value) ?>" />px</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_shadow_offset_top_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Shadow Width', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_text_shadow_width_key ?>" name="<?php echo $maxbutton_text_shadow_width_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_text_shadow_width_value) ?>" />px</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_shadow_width_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="spacer"></div>
					
					<div class="option-design">
						<div class="label"><label><?php _e('Padding', 'maxbuttons') ?></label></div>
						<div class="input">
							<table>
								<tr>
									<td>
										<div class="cell-label"><?php _e('Top', 'maxbuttons') ?></div>
										<div class="input"><input class="tiny" type="text" id="<?php echo $maxbutton_text_padding_top_key ?>" name="<?php echo $maxbutton_text_padding_top_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_text_padding_top_value) ?>" />px</div>
										<div class="default-other"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_padding_top_default ?></div>
										<div class="clear"></div>
									</td>
									<td>
										<div class="cell-label"><?php _e('Bottom', 'maxbuttons') ?></div>
										<div class="input"><input class="tiny" type="text" id="<?php echo $maxbutton_text_padding_bottom_key ?>" name="<?php echo $maxbutton_text_padding_bottom_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_text_padding_bottom_value) ?>" />px</div>
										<div class="default-other"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_padding_bottom_default ?></div>
										<div class="clear"></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="cell-label"><?php _e('Left', 'maxbuttons') ?></div>
										<div class="input"><input class="tiny" type="text" id="<?php echo $maxbutton_text_padding_left_key ?>" name="<?php echo $maxbutton_text_padding_left_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_text_padding_left_value) ?>" />px</div>
										<div class="default-other"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_padding_left_default ?></div>
										<div class="clear"></div>
									</td>
									<td>
										<div class="cell-label"><?php _e('Right', 'maxbuttons') ?></div>
										<div class="input"><input class="tiny" type="text" id="<?php echo $maxbutton_text_padding_right_key ?>" name="<?php echo $maxbutton_text_padding_right_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_text_padding_right_value) ?>" />px</div>
										<div class="default-other"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_padding_right_default ?></div>
										<div class="clear"></div>
									</td>
								</tr>
							</table>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div class="option-container">
				<div class="title"><?php _e('Border', 'maxbuttons') ?></div>
				<div class="inside">
					<div class="option-design">
						<div class="label"><label><?php _e('Radius', 'maxbuttons') ?></label></div>
						<div class="input">
							<table>
								<tr>
									<td>
										<div class="cell-label"><?php _e('Top Left', 'maxbuttons') ?></div>
										<div class="input"><input class="tiny" type="text" id="<?php echo $maxbutton_border_radius_top_left_key ?>" name="<?php echo $maxbutton_border_radius_top_left_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_border_radius_top_left_value) ?>" />px</div>
										<div class="default-other"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_border_radius_top_left_default ?></div>
										<div class="clear"></div>
									</td>
									<td>
										<div class="cell-label"><?php _e('Top Right', 'maxbuttons') ?></div>
										<div class="input"><input class="tiny" type="text" id="<?php echo $maxbutton_border_radius_top_right_key ?>" name="<?php echo $maxbutton_border_radius_top_right_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_border_radius_top_right_value) ?>" />px</div>
										<div class="default-other"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_border_radius_top_right_default ?></div>
										<div class="clear"></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="cell-label"><?php _e('Bottom Left', 'maxbuttons') ?></div>
										<div class="input"><input class="tiny" type="text" id="<?php echo $maxbutton_border_radius_bottom_left_key ?>" name="<?php echo $maxbutton_border_radius_bottom_left_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_border_radius_bottom_left_value) ?>" />px</div>
										<div class="default-other"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_border_radius_bottom_left_default ?></div>
										<div class="clear"></div>
									</td>
									<td>
										<div class="cell-label"><?php _e('Bottom Right', 'maxbuttons') ?></div>
										<div class="input"><input class="tiny" type="text" id="<?php echo $maxbutton_border_radius_bottom_right_key ?>" name="<?php echo $maxbutton_border_radius_bottom_right_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_border_radius_bottom_right_value) ?>" />px</div>
										<div class="default-other"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_border_radius_bottom_right_default ?></div>
										<div class="clear"></div>
									</td>
								</tr>
							</table>
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Style', 'maxbuttons') ?></div>
						<div class="input">
							<select id="<?php echo $maxbutton_border_style_key ?>" name="<?php echo $maxbutton_border_style_key ?>">
							<?php
							foreach ($maxbuttons_border_styles as $name => $value) {
								$selected = ($maxbutton_border_style_value == $value) ? 'selected="selected"' : '';
								echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
							}
							?>
							</select>
						</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_border_style_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Width', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_border_width_key ?>" name="<?php echo $maxbutton_border_width_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_border_width_value) ?>" />px</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_border_width_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Shadow Offset Left', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_box_shadow_offset_left_key ?>" name="<?php echo $maxbutton_box_shadow_offset_left_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_box_shadow_offset_left_value) ?>" />px</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_box_shadow_offset_left_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Shadow Offset Top', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_box_shadow_offset_top_key ?>" name="<?php echo $maxbutton_box_shadow_offset_top_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_box_shadow_offset_top_value) ?>" />px</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_box_shadow_offset_top_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Shadow Width', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_box_shadow_width_key ?>" name="<?php echo $maxbutton_box_shadow_width_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_box_shadow_width_value) ?>" />px</div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_box_shadow_width_default ?></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div class="option-container">
				<div class="title"><?php _e('Colors', 'maxbuttons') ?></div>
				<div class="inside">
					<div class="option-design">
						<div class="label"><?php _e('Gradient Stop', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_gradient_stop_key ?>" name="<?php echo $maxbutton_gradient_stop_key ?>" value="<?php echo $maxbutton_gradient_stop_value ?>" maxlength="2" /></div>
						<div class="default"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_gradient_stop_default ?> (1 - 99 accepted)</div>
						<div class="clear"></div>
					</div>
					
					<div class="spacer"></div>
					
					<div class="option-design">
						<div class="label"><label><?php _e('Colors', 'maxbuttons') ?></label></div>
						<div class="input">
							<table>
								<tr>
									<td>
										<div class="cell-label"><?php _e('Text', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_text_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_text_color_key ?>" name="<?php echo $maxbutton_text_color_key ?>" value="<?php echo $maxbutton_text_color_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_color_default ?></div>
										<div class="clear"></div>
									</td>
									<td>
										<div class="cell-label"><?php _e('Text Hover', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_text_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_text_color_hover_key ?>" name="<?php echo $maxbutton_text_color_hover_key ?>" value="<?php echo $maxbutton_text_color_hover_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_color_hover_default ?></div>
										<div class="clear"></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="cell-label"><?php _e('Text Shadow', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_text_shadow_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_text_shadow_color_key ?>" name="<?php echo $maxbutton_text_shadow_color_key ?>" value="<?php echo $maxbutton_text_shadow_color_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_shadow_color_default ?></div>
										<div class="clear"></div>
									</td>
									<td>
										<div class="cell-label"><?php _e('Text Shadow Hover', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_text_shadow_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_text_shadow_color_hover_key ?>" name="<?php echo $maxbutton_text_shadow_color_hover_key ?>" value="<?php echo $maxbutton_text_shadow_color_hover_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_text_shadow_color_hover_default ?></div>
										<div class="clear"></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="cell-label"><?php _e('Gradient Start', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_gradient_start_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_gradient_start_color_key ?>" name="<?php echo $maxbutton_gradient_start_color_key ?>" value="<?php echo $maxbutton_gradient_start_color_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_gradient_start_color_default ?></div>
										<div class="clear"></div>
									</td>
									<td>
										<div class="cell-label"><?php _e('Gradient Start Hover', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_gradient_start_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_gradient_start_color_hover_key ?>" name="<?php echo $maxbutton_gradient_start_color_hover_key ?>" value="<?php echo $maxbutton_gradient_start_color_hover_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_gradient_start_color_hover_default ?></div>
										<div class="clear"></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="cell-label"><?php _e('Gradient End', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_gradient_end_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_gradient_end_color_key ?>" name="<?php echo $maxbutton_gradient_end_color_key ?>" value="<?php echo $maxbutton_gradient_end_color_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_gradient_end_color_default ?></div>
										<div class="clear"></div>
									</td>
									<td>
										<div class="cell-label"><?php _e('Gradient End Hover', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_gradient_end_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_gradient_end_color_hover_key ?>" name="<?php echo $maxbutton_gradient_end_color_hover_key ?>" value="<?php echo $maxbutton_gradient_end_color_hover_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_gradient_end_color_hover_default ?></div>
										<div class="clear"></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="cell-label"><?php _e('Border', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_border_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_border_color_key ?>" name="<?php echo $maxbutton_border_color_key ?>" value="<?php echo $maxbutton_border_color_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_border_color_default ?></div>
										<div class="clear"></div>
									</td>
									<td>
										<div class="cell-label"><?php _e('Border Hover', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_border_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_border_color_hover_key ?>" name="<?php echo $maxbutton_border_color_hover_key ?>" value="<?php echo $maxbutton_border_color_hover_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_border_color_hover_default ?></div>
										<div class="clear"></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="cell-label"><?php _e('Box Shadow', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_box_shadow_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_box_shadow_color_key ?>" name="<?php echo $maxbutton_box_shadow_color_key ?>" value="<?php echo $maxbutton_box_shadow_color_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_box_shadow_color_default ?></div>
										<div class="clear"></div>
									</td>
									<td>
										<div class="cell-label"><?php _e('Box Shadow Hover', 'maxbuttons') ?></div>
										<span class="colorpicker-box" id="<?php echo $maxbutton_box_shadow_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_box_shadow_color_hover_key ?>" name="<?php echo $maxbutton_box_shadow_color_hover_key ?>" value="<?php echo $maxbutton_box_shadow_color_hover_value ?>" />
										<div class="default-color"><?php _e('Default:', 'maxbuttons') ?> <?php echo $maxbutton_box_shadow_color_hover_default ?></div>
										<div class="clear"></div>
									</td>
								</tr>
							</table>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div class="option-container">
				<div class="title"><?php _e('Container', 'maxbuttons') ?></div>
				<div class="inside">
					<div class="option-design">
						<div class="label"><?php _e('Use Container', 'maxbuttons') ?></div>
						<div class="input"><input type="checkbox" id="<?php echo $maxbutton_container_enabled_key ?>" name="<?php echo $maxbutton_container_enabled_key ?>" <?php if ($maxbutton_container_enabled_value == 'on') { echo 'checked="checked"'; } else { echo ''; } ?>></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Wrap with Center Div', 'maxbuttons') ?></div>
						<div class="input"><input type="checkbox" id="<?php echo $maxbutton_container_center_div_wrap_enabled_key ?>" name="<?php echo $maxbutton_container_center_div_wrap_enabled_key ?>" <?php if ($maxbutton_container_center_div_wrap_enabled_value == 'on') { echo 'checked="checked"'; } else { echo ''; } ?>></div>
						<div class="default">&lt;div align="center"&gt;</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Width', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_container_width_key ?>" name="<?php echo $maxbutton_container_width_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_container_width_value) ?>" />px</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Margin Top', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_container_margin_top_key ?>" name="<?php echo $maxbutton_container_margin_top_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_container_margin_top_value) ?>" />px</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Margin Right', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_container_margin_right_key ?>" name="<?php echo $maxbutton_container_margin_right_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_container_margin_right_value) ?>" />px</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Margin Bottom', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_container_margin_bottom_key ?>" name="<?php echo $maxbutton_container_margin_bottom_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_container_margin_bottom_value) ?>" />px</div>
						<div class="clear"></div>
					</div>

					<div class="option-design">
						<div class="label"><?php _e('Margin Left', 'maxbuttons') ?></div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_container_margin_left_key ?>" name="<?php echo $maxbutton_container_margin_left_key ?>" value="<?php echo maxbuttons_strip_px($maxbutton_container_margin_left_value) ?>" />px</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label"><?php _e('Alignment', 'maxbuttons') ?></div>
						<div class="input">
							<select id="<?php echo $maxbutton_container_alignment_key ?>" name="<?php echo $maxbutton_container_alignment_key ?>">
							<?php
							foreach ($maxbuttons_container_alignments as $name => $value) {
								$selected = ($maxbutton_container_alignment_value == $value) ? 'selected="selected"' : '';
								echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
							}
							?>
							</select>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</form>
	
		<div class="output">
			<div class="header"><?php _e('Button Output', 'maxbuttons') ?></div>
			<div class="inner">
				<?php _e('The top is the normal button, the bottom one is the hover.', 'maxbuttons') ?>
				<div class="result">
					<a id="button-normal" href="<?php echo $maxbutton_url_value ?>"><?php echo $maxbutton_text_value ?></a>
					<p>&nbsp;</p>
					<a id="button-hover" href="<?php echo $maxbutton_url_value ?>" class="hover"><?php echo $maxbutton_text_value ?></a>
				</div>
				
				<span class="colorpicker-box" id="button_output_box">
					<span></span>
				</span>
				<input style="display: none;" type="text" id="button_output" name="button_output" value="" />
				<div class="note"><?php _e('Change this color to see your button on a different background.', 'maxbuttons') ?></div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
