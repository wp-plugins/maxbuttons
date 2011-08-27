<?php
if ($_GET['id'] != '') {
	global $wpdb;
	$button = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . maxbuttons_get_buttons_table_name() . " WHERE id = %d", $_GET['id']));

	$data = array(
		'name' => $button->name,
		'description' => $button->description,
		'url' => $button->url,
		'text' => $button->text,
		'text_font_family' => $button->text_font_family,
		'text_font_size' => $button->text_font_size,
		'text_font_style' => $button->text_font_style,
		'text_font_weight' => $button->text_font_weight,
		'text_color' => $button->text_color,
		'text_color_hover' => $button->text_color_hover,
		'text_shadow_offset_left' => $button->text_shadow_offset_left,
		'text_shadow_offset_top' => $button->text_shadow_offset_top,
		'text_shadow_width' => $button->text_shadow_width,
		'text_shadow_color' => $button->text_shadow_color,
		'text_shadow_color_hover' => $button->text_shadow_color_hover,
		'text_padding_top' => $button->text_padding_top,
		'text_padding_bottom' => $button->text_padding_bottom,
		'text_padding_left' => $button->text_padding_left,
		'text_padding_right' => $button->text_padding_right,
		'border_radius_top_left' => $button->border_radius_top_left,
		'border_radius_top_right' => $button->border_radius_top_right,
		'border_radius_bottom_left' => $button->border_radius_bottom_left,
		'border_radius_bottom_right' => $button->border_radius_bottom_right,
		'border_style' => $button->border_style,
		'border_width' => $button->border_width,
		'border_color' => $button->border_color,
		'border_color_hover' => $button->border_color_hover,
		'box_shadow_offset_left' => $button->box_shadow_offset_left,
		'box_shadow_offset_top' => $button->box_shadow_offset_top,
		'box_shadow_width' => $button->box_shadow_width,
		'box_shadow_color' => $button->box_shadow_color,
		'box_shadow_color_hover' => $button->box_shadow_color_hover,
		'gradient_start_color' => $button->gradient_start_color,
		'gradient_start_color_hover' => $button->gradient_start_color_hover,
		'gradient_end_color' => $button->gradient_end_color,
		'gradient_end_color_hover' => $button->gradient_end_color_hover
	);

	$wpdb->insert(maxbuttons_get_buttons_table_name(), $data);
	$button_id = $wpdb->insert_id;
}
?>
<script type="text/javascript">
	<?php if ($_GET['id'] != '') { ?>
		window.location = "<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=button&id=<?php echo $button_id ?>";
	<?php } else { ?>
		window.location = "<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=list";
	<?php } ?>
</script>
