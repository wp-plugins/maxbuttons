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
			if ($button->gradient_stop != '') {
				$gradient_stop = strlen($button->gradient_stop) == 1 ? '0' . $button->gradient_stop : $button->gradient_stop;
			} else {
				$gradient_stop = '45'; // Default
			}
			
			// Begin style element
			$output = '<style type="text/css">';
			
			// The container style
			if ($button->container_enabled == 'on') {
				$output .= 'div#maxbutton-' . $button->id . '-container { ';

				if ($button->container_alignment != '') {
					$output .= $button->container_alignment . '; ';
				}
				
				if ($button->container_width != '') {
					$output .= 'width: ' . $button->container_width . '; ';
				}
				
				if ($button->container_margin_top != '') {
					$output .= 'margin-top: ' . $button->container_margin_top . '; ';
				}

				if ($button->container_margin_right != '') {
					$output .= 'margin-right: ' . $button->container_margin_right . '; ';
				}
				
				if ($button->container_margin_bottom != '') {
					$output .= 'margin-bottom: ' . $button->container_margin_bottom . '; ';
				}
				
				if ($button->container_margin_left != '') {
					$output .= 'margin-left: ' . $button->container_margin_left . '; ';
				}
				
				$output .= '} ';
			}
			
			// The button style
			$output .= 'a#maxbutton-' . $button->id . ' { ';
			$output .= 'text-decoration: none; ';
			$output .= 'color: ' . $button->text_color . '; ';
			$output .= 'font-family: ' . $button->text_font_family . '; ';
			$output .= 'font-size: ' . $button->text_font_size . '; ';
			$output .= 'font-style: ' . $button->text_font_style . '; ';
			$output .= 'font-weight: ' . $button->text_font_weight . '; ';
			$output .= 'padding-top: ' . $button->text_padding_top . '; ';
			$output .= 'padding-right: ' . $button->text_padding_right . '; ';
			$output .= 'padding-bottom: ' . $button->text_padding_bottom . '; ';
			$output .= 'padding-left: ' . $button->text_padding_left . '; ';
			$output .= 'background-color: ' . $button->gradient_start_color . '; ';
			$output .= 'background: linear-gradient(' . $button->gradient_start_color . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color . '); ';
			$output .= 'background: -moz-linear-gradient(' . $button->gradient_start_color . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color . '); ';
			$output .= 'background: -o-linear-gradient(' . $button->gradient_start_color . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color . '); ';
			$output .= 'background: -webkit-gradient(linear, left top, left bottom, color-stop(.' . $gradient_stop . ', ' . $button->gradient_start_color . '), color-stop(1, ' . $button->gradient_end_color . ')); ';
			$output .= 'filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color . '", endColorStr="' . $button->gradient_end_color . '"); ';
			$output .= '-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color . '", endColorStr="' . $button->gradient_end_color . '"); ';
			$output .= 'border-style: ' . $button->border_style . '; ';
			$output .= 'border-width: ' . $button->border_width . '; ';
			$output .= 'border-color: ' . $button->border_color . '; ';
			$output .= 'border-top-left-radius: ' . $button->border_radius_top_left . '; ';
			$output .= 'border-top-right-radius: ' . $button->border_radius_top_right . '; ';
			$output .= 'border-bottom-left-radius: ' . $button->border_radius_bottom_left . '; ';
			$output .= 'border-bottom-right-radius: ' . $button->border_radius_bottom_right . '; ';
			$output .= '-moz-border-radius-topleft: ' . $button->border_radius_top_left . '; ';
			$output .= '-moz-border-radius-topright: ' . $button->border_radius_top_right . '; ';
			$output .= '-moz-border-radius-bottomleft: ' . $button->border_radius_bottom_left . '; ';
			$output .= '-moz-border-radius-bottomright: ' . $button->border_radius_bottom_right . '; ';
			$output .= '-webkit-border-top-left-radius: ' . $button->border_radius_top_left . '; ';
			$output .= '-webkit-border-top-right-radius: ' . $button->border_radius_top_right . '; ';
			$output .= '-webkit-border-bottom-left-radius: ' . $button->border_radius_bottom_left . '; ';
			$output .= '-webkit-border-bottom-right-radius: ' . $button->border_radius_bottom_right . '; ';
			$output .= 'text-shadow: ' . $button->text_shadow_offset_left . ' ' . $button->text_shadow_offset_top . ' ' . $button->text_shadow_width . ' ' . $button->text_shadow_color . '; ';
			$output .= 'box-shadow: ' . $button->box_shadow_offset_left . ' ' . $button->box_shadow_offset_top . ' ' . $button->box_shadow_width . ' ' . $button->box_shadow_color . '; ';
			$output .= '} ';
			
			// The button style - visited
			$output .= 'a#maxbutton-' . $button->id . ':visited { ';
			$output .= 'text-decoration: none; ';
			$output .= 'color: ' . $button->text_color . '; ';
			$output .= '} ';
			
			// The button style - hover
			$output .= 'a#maxbutton-' . $button->id . ':hover { ';
			$output .= 'text-decoration: none; ';
			$output .= 'color: ' . $button->text_color_hover . '; ';
			$output .= 'background-color: ' . $button->gradient_start_color_hover . '; ';
			$output .= 'background: linear-gradient(' . $button->gradient_start_color_hover . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color_hover . '); ';
			$output .= 'background: -moz-linear-gradient(' . $button->gradient_start_color_hover . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color_hover . '); ';
			$output .= 'background: -o-linear-gradient(' . $button->gradient_start_color_hover . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color_hover . '); ';
			$output .= 'background: -webkit-gradient(linear, left top, left bottom, color-stop(.' . $gradient_stop . ', ' . $button->gradient_start_color_hover . '), color-stop(1, ' . $button->gradient_end_color_hover . ')); ';
			$output .= 'filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color_hover . '", endColorStr="' . $button->gradient_end_color_hover . '"); ';
			$output .= '-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color_hover . '", endColorStr="' . $button->gradient_end_color_hover . '"); ';
			$output .= 'border-color: ' . $button->border_color_hover . '; ';
			$output .= 'text-shadow: ' . $button->text_shadow_offset_left . ' ' . $button->text_shadow_offset_top . ' ' . $button->text_shadow_width . ' ' . $button->text_shadow_color_hover . '; ';
			$output .= 'box-shadow: ' . $button->box_shadow_offset_left . ' ' . $button->box_shadow_offset_top . ' ' . $button->box_shadow_width . ' ' . $button->box_shadow_color_hover . '; ';
			$output .= '}';
			
			// End the style element
			$output .= '</style>';
						
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
			
			// Check to add the container
			if ($button->container_enabled == 'on') {				
				$output .= '<div id="maxbutton-' . $button->id . '-container">';
			}
			
			$output .= '<a id="maxbutton-' . $button->id . '" href="' . $button_url . '" ' . $button_window . '>' . $button_text . '</a>';
			
			// Check to close the container
			if ($button->container_enabled == 'on') {
				$output .= '</div>';
				
				// Might need to clear the float
				if ($button->container_alignment == 'float: right' || $button->container_alignment == 'float: left') {
					$output .= '<div style="clear: both;"></div>';
				}
			}
			
			return $output;
		}
	}
}
?>