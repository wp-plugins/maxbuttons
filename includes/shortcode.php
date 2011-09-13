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
			$css_id = 'a#maxbutton-' . $button->id;
			$css_id_hover = 'a#maxbutton-' . $button->id . ':hover';
			
			echo '<style type="text/css">' . "\n";
			echo $css_id . ' { text-decoration: none; }' . "\n";
			echo $css_id . ' { color: ' . $button->text_color . '; }' . "\n";
			echo $css_id . ' { font-family: ' . $button->text_font_family . '; }' . "\n";
			echo $css_id . ' { font-size: ' . $button->text_font_size . '; }' . "\n";
			echo $css_id . ' { font-style: ' . $button->text_font_style . '; }' . "\n";
			echo $css_id . ' { font-weight: ' . $button->text_font_weight . '; }' . "\n";
			echo $css_id . ' { padding-top: ' . $button->text_padding_top . '; }' . "\n";
			echo $css_id . ' { padding-bottom: ' . $button->text_padding_bottom . '; }' . "\n";
			echo $css_id . ' { padding-left: ' . $button->text_padding_left . '; }' . "\n";
			echo $css_id . ' { padding-right: ' . $button->text_padding_right . '; }' . "\n";
			echo $css_id . ' { background-color: ' . $button->gradient_start_color . '; }' . "\n";
			echo $css_id . ' { background: linear-gradient(' . $button->gradient_start_color . ' 45%, ' . $button->gradient_end_color . '); }' . "\n";
			echo $css_id . ' { background: -moz-linear-gradient(' . $button->gradient_start_color . ' 45%, ' . $button->gradient_end_color . '); }' . "\n";
			echo $css_id . ' { background: -o-linear-gradient(' . $button->gradient_start_color . ' 45%, ' . $button->gradient_end_color . '); }' . "\n";
			echo $css_id . ' { background: -webkit-gradient(linear, left top, left bottom, color-stop(.45, ' . $button->gradient_start_color . '), color-stop(1, ' . $button->gradient_end_color . ')); }' . "\n";
			echo $css_id . ' { filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color . '", endColorStr="' . $button->gradient_end_color . '"); }' . "\n";
			echo $css_id . ' { -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color . '", endColorStr="' . $button->gradient_end_color . '"); }' . "\n";
			echo $css_id . ' { border-style: ' . $button->border_style . '; }' . "\n";
			echo $css_id . ' { border-width: ' . $button->border_width . '; }' . "\n";
			echo $css_id . ' { border-color: ' . $button->border_color . '; }' . "\n";
			echo $css_id . ' { border-top-left-radius: ' . $button->border_radius_top_left . '; }' . "\n";
			echo $css_id . ' { border-top-right-radius: ' . $button->border_radius_top_right . '; }' . "\n";
			echo $css_id . ' { border-bottom-left-radius: ' . $button->border_radius_bottom_left . '; }' . "\n";
			echo $css_id . ' { border-bottom-right-radius: ' . $button->border_radius_bottom_right . '; }' . "\n";
			echo $css_id . ' { -moz-border-radius-topleft: ' . $button->border_radius_top_left . '; }' . "\n";
			echo $css_id . ' { -moz-border-radius-topright: ' . $button->border_radius_top_right . '; }' . "\n";
			echo $css_id . ' { -moz-border-radius-bottomleft: ' . $button->border_radius_bottom_left . '; }' . "\n";
			echo $css_id . ' { -moz-border-radius-bottomright: ' . $button->border_radius_bottom_right . '; }' . "\n";
			echo $css_id . ' { -webkit-border-top-left-radius: ' . $button->border_radius_top_left . '; }' . "\n";
			echo $css_id . ' { -webkit-border-top-right-radius: ' . $button->border_radius_top_right . '; }' . "\n";
			echo $css_id . ' { -webkit-border-bottom-left-radius: ' . $button->border_radius_bottom_left . '; }' . "\n";
			echo $css_id . ' { -webkit-border-bottom-right-radius: ' . $button->border_radius_bottom_right . '; }' . "\n";
			echo $css_id . ' { text-shadow: ' . $button->text_shadow_offset_left . ' ' . $button->text_shadow_offset_top . ' ' . $button->text_shadow_width . ' ' . $button->text_shadow_color . '; }' . "\n";
			echo $css_id . ' { box-shadow: ' . $button->box_shadow_offset_left . ' ' . $button->box_shadow_offset_top . ' ' . $button->box_shadow_width . ' ' . $button->box_shadow_color . '; }' . "\n";
			echo $css_id_hover . ' { color: ' . $button->text_color_hover . '; }' . "\n";
			echo $css_id_hover . ' { background-color: ' . $button->gradient_start_color_hover . '; }' . "\n";
			echo $css_id_hover . ' { background: linear-gradient(' . $button->gradient_start_color_hover . ' 45%, ' . $button->gradient_end_color_hover . '); }' . "\n";
			echo $css_id_hover . ' { background: -moz-linear-gradient(' . $button->gradient_start_color_hover . ' 45%, ' . $button->gradient_end_color_hover . '); }' . "\n";
			echo $css_id_hover . ' { background: -o-linear-gradient(' . $button->gradient_start_color_hover . ' 45%, ' . $button->gradient_end_color_hover . '); }' . "\n";
			echo $css_id_hover . ' { background: -webkit-gradient(linear, left top, left bottom, color-stop(.45, ' . $button->gradient_start_color_hover . '), color-stop(1, ' . $button->gradient_end_color_hover . ')); }' . "\n";
			echo $css_id_hover . ' { filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color_hover . '", endColorStr="' . $button->gradient_end_color_hover . '"); }' . "\n";
			echo $css_id_hover . ' { -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color_hover . '", endColorStr="' . $button->gradient_end_color_hover . '"); }' . "\n";
			echo $css_id_hover . ' { border-color: ' . $button->border_color_hover . '; }' . "\n";
			echo $css_id_hover . ' { text-shadow: ' . $button->text_shadow_offset_left . ' ' . $button->text_shadow_offset_top . ' ' . $button->text_shadow_width . ' ' . $button->text_shadow_color_hover . '; }' . "\n";
			echo $css_id_hover . ' { box-shadow: ' . $button->box_shadow_offset_left . ' ' . $button->box_shadow_offset_top . ' ' . $button->box_shadow_width . ' ' . $button->box_shadow_color_hover . '; }' . "\n";
			echo '</style>' . "\n";
			
			$element_id = 'maxbutton-' . $button->id;
			
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
			
			return '<a id="' . $element_id . '" href="' . $button_url . '" ' . $button_window . '>' . $button_text . '</a>';
		}
	}
}
?>