<?php
add_shortcode('maxbutton', 'maxbuttons_button_shortcode');
function maxbuttons_button_shortcode($atts) {
	extract(shortcode_atts(array(
		'id' => '',
		'text' => '',
		'url' => '',
		'window' => ''
	), $atts));
	
	$button_id = "{$id}";
	
	if ($button_id != '') {
		global $wpdb;
		$button = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . maxbuttons_get_buttons_table_name() . " WHERE id = %d", $button_id));
		
		if (isset($button)) {
			$gradient_stop = strlen($button->gradient_stop) == 1 ? '0' . $button->gradient_stop : $button->gradient_stop;
			
			// Begin style element
			$style = '<style type="text/css">';
			
			// The button style
			$style .= 'a#maxbutton-' . $button->id . ' { ';
			$style .= 'text-decoration: none; ';
			$style .= 'color: ' . $button->text_color . '; ';
			$style .= 'font-family: ' . $button->text_font_family . '; ';
			$style .= 'font-size: ' . $button->text_font_size . '; ';
			$style .= 'font-style: ' . $button->text_font_style . '; ';
			$style .= 'font-weight: ' . $button->text_font_weight . '; ';
			$style .= 'padding-top: ' . $button->text_padding_top . '; ';
			$style .= 'padding-right: ' . $button->text_padding_right . '; ';
			$style .= 'padding-bottom: ' . $button->text_padding_bottom . '; ';
			$style .= 'padding-left: ' . $button->text_padding_left . '; ';
			$style .= 'background-color: ' . $button->gradient_start_color . '; ';
			$style .= 'background: linear-gradient(' . $button->gradient_start_color . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color . '); ';
			$style .= 'background: -moz-linear-gradient(' . $button->gradient_start_color . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color . '); ';
			$style .= 'background: -o-linear-gradient(' . $button->gradient_start_color . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color . '); ';
			$style .= 'background: -webkit-gradient(linear, left top, left bottom, color-stop(.' . $gradient_stop . ', ' . $button->gradient_start_color . '), color-stop(1, ' . $button->gradient_end_color . ')); ';
			$style .= 'filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color . '", endColorStr="' . $button->gradient_end_color . '"); ';
			$style .= '-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color . '", endColorStr="' . $button->gradient_end_color . '"); ';
			$style .= 'border-style: ' . $button->border_style . '; ';
			$style .= 'border-width: ' . $button->border_width . '; ';
			$style .= 'border-color: ' . $button->border_color . '; ';
			$style .= 'border-top-left-radius: ' . $button->border_radius_top_left . '; ';
			$style .= 'border-top-right-radius: ' . $button->border_radius_top_right . '; ';
			$style .= 'border-bottom-left-radius: ' . $button->border_radius_bottom_left . '; ';
			$style .= 'border-bottom-right-radius: ' . $button->border_radius_bottom_right . '; ';
			$style .= '-moz-border-radius-topleft: ' . $button->border_radius_top_left . '; ';
			$style .= '-moz-border-radius-topright: ' . $button->border_radius_top_right . '; ';
			$style .= '-moz-border-radius-bottomleft: ' . $button->border_radius_bottom_left . '; ';
			$style .= '-moz-border-radius-bottomright: ' . $button->border_radius_bottom_right . '; ';
			$style .= '-webkit-border-top-left-radius: ' . $button->border_radius_top_left . '; ';
			$style .= '-webkit-border-top-right-radius: ' . $button->border_radius_top_right . '; ';
			$style .= '-webkit-border-bottom-left-radius: ' . $button->border_radius_bottom_left . '; ';
			$style .= '-webkit-border-bottom-right-radius: ' . $button->border_radius_bottom_right . '; ';
			$style .= 'text-shadow: ' . $button->text_shadow_offset_left . ' ' . $button->text_shadow_offset_top . ' ' . $button->text_shadow_width . ' ' . $button->text_shadow_color . '; ';
			$style .= 'box-shadow: ' . $button->box_shadow_offset_left . ' ' . $button->box_shadow_offset_top . ' ' . $button->box_shadow_width . ' ' . $button->box_shadow_color . '; ';
			$style .= '} ';
			
			// The button style - hover
			$style .= 'a#maxbutton-' . $button->id . ':hover { ';
			$style .= 'color: ' . $button->text_color_hover . '; ';
			$style .= 'background-color: ' . $button->gradient_start_color_hover . '; ';
			$style .= 'background: linear-gradient(' . $button->gradient_start_color_hover . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color_hover . '); ';
			$style .= 'background: -moz-linear-gradient(' . $button->gradient_start_color_hover . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color_hover . '); ';
			$style .= 'background: -o-linear-gradient(' . $button->gradient_start_color_hover . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color_hover . '); ';
			$style .= 'background: -webkit-gradient(linear, left top, left bottom, color-stop(.' . $gradient_stop . ', ' . $button->gradient_start_color_hover . '), color-stop(1, ' . $button->gradient_end_color_hover . ')); ';
			$style .= 'filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color_hover . '", endColorStr="' . $button->gradient_end_color_hover . '"); ';
			$style .= '-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color_hover . '", endColorStr="' . $button->gradient_end_color_hover . '"); ';
			$style .= 'border-color: ' . $button->border_color_hover . '; ';
			$style .= 'text-shadow: ' . $button->text_shadow_offset_left . ' ' . $button->text_shadow_offset_top . ' ' . $button->text_shadow_width . ' ' . $button->text_shadow_color_hover . '; ';
			$style .= 'box-shadow: ' . $button->box_shadow_offset_left . ' ' . $button->box_shadow_offset_top . ' ' . $button->box_shadow_width . ' ' . $button->box_shadow_color_hover . '; ';
			$style .= '}';
			
			// End the style element
			$style .= '</style>';
						
			$button_text = "{$text}" != '' ? "{$text}" : $button->text;
			$button_url = "{$url}" != '' ? "{$url}" : $button->url;
			$button_window = '';
			
			if ("{$window}" != '') {
				if ("{$window}" == 'new') {
					$button_window = 'target="_blank"';
				}
			} else {
				if ($button->new_window == 'on') {
					$button_window = 'target="_blank"';
				}
			}
			
			return $style . '<a id="maxbutton-' . $button->id . '" href="' . $button_url . '" ' . $button_window . '>' . $button_text . '</a>';
		}
	}
}
?>