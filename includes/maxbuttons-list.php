<?php
global $wpdb;
$buttons = $wpdb->get_results("SELECT * FROM " . maxbuttons_get_buttons_table_name());
?>

<div id="maxbuttons">
	<div class="wrap">
		<div class="icon32">
			<a href="http://maxbuttons.com" target="_blank"><img src="<?php echo MAXBUTTONS_PLUGIN_URL ?>/images/mb-32.png" alt="MaxButtons" /></a>
		</div>
		
		<h2 class="title">MaxButtons: Button List</h2>
		
		<div class="logo">
			Brought to you by
			<a href="http://maxfoundry.com" target="_blank"><img src="<?php echo MAXBUTTONS_PLUGIN_URL ?>/images/max-foundry.png" alt="Max Foundry" /></a>
		</div>
		
		<div class="clear"></div>
		
		<h2 class="tabs">
			<span class="spacer"></span>
			<a class="nav-tab nav-tab-active" href="">Buttons</a>
			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-pro">Go Pro</a>
		</h2>

		<div class="form-actions">
			<a class="button-primary" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-controller&action=button">Add New</a>
		</div>
	
		<div class="button-list">		
			<table>
				<?php foreach ($buttons as $b) { ?>
					<tr>
						<td class="cell-button">
							<?php
							$css_id = 'a#maxbutton-' . $b->id;
							$css_id_hover = 'a#maxbutton-' . $b->id . ':hover';
							
							echo '<style type="text/css">' . "\n";
							echo $css_id . ' { text-decoration: none; }' . "\n";
							echo $css_id . ' { color: ' . $b->text_color . '; }' . "\n";
							echo $css_id . ' { font-family: ' . $b->text_font_family . '; }' . "\n";
							echo $css_id . ' { font-size: ' . $b->text_font_size . '; }' . "\n";
							echo $css_id . ' { font-style: ' . $b->text_font_style . '; }' . "\n";
							echo $css_id . ' { font-weight: ' . $b->text_font_weight . '; }' . "\n";
							echo $css_id . ' { padding-top: ' . $b->text_padding_top . '; }' . "\n";
							echo $css_id . ' { padding-bottom: ' . $b->text_padding_bottom . '; }' . "\n";
							echo $css_id . ' { padding-left: ' . $b->text_padding_left . '; }' . "\n";
							echo $css_id . ' { padding-right: ' . $b->text_padding_right . '; }' . "\n";
							echo $css_id . ' { background-color: ' . $b->gradient_start_color . '; }' . "\n";
							echo $css_id . ' { background: linear-gradient(' . $b->gradient_start_color . ' 45%, ' . $b->gradient_end_color . '); }' . "\n";
							echo $css_id . ' { background: -moz-linear-gradient(' . $b->gradient_start_color . ' 45%, ' . $b->gradient_end_color . '); }' . "\n";
							echo $css_id . ' { background: -o-linear-gradient(' . $b->gradient_start_color . ' 45%, ' . $b->gradient_end_color . '); }' . "\n";
							echo $css_id . ' { background: -webkit-gradient(linear, left top, left bottom, color-stop(.45, ' . $b->gradient_start_color . '), color-stop(1, ' . $b->gradient_end_color . ')); }' . "\n";
							echo $css_id . ' { filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $b->gradient_start_color . '", endColorStr="' . $b->gradient_end_color . '"); }' . "\n";
							echo $css_id . ' { -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $b->gradient_start_color . '", endColorStr="' . $b->gradient_end_color . '"); }' . "\n";
							echo $css_id . ' { border-style: ' . $b->border_style . '; }' . "\n";
							echo $css_id . ' { border-width: ' . $b->border_width . '; }' . "\n";
							echo $css_id . ' { border-color: ' . $b->border_color . '; }' . "\n";
							echo $css_id . ' { border-top-left-radius: ' . $b->border_radius_top_left . '; }' . "\n";
							echo $css_id . ' { border-top-right-radius: ' . $b->border_radius_top_right . '; }' . "\n";
							echo $css_id . ' { border-bottom-left-radius: ' . $b->border_radius_bottom_left . '; }' . "\n";
							echo $css_id . ' { border-bottom-right-radius: ' . $b->border_radius_bottom_right . '; }' . "\n";
							echo $css_id . ' { -moz-border-radius-topleft: ' . $b->border_radius_top_left . '; }' . "\n";
							echo $css_id . ' { -moz-border-radius-topright: ' . $b->border_radius_top_right . '; }' . "\n";
							echo $css_id . ' { -moz-border-radius-bottomleft: ' . $b->border_radius_bottom_left . '; }' . "\n";
							echo $css_id . ' { -moz-border-radius-bottomright: ' . $b->border_radius_bottom_right . '; }' . "\n";
							echo $css_id . ' { -webkit-border-top-left-radius: ' . $b->border_radius_top_left . '; }' . "\n";
							echo $css_id . ' { -webkit-border-top-right-radius: ' . $b->border_radius_top_right . '; }' . "\n";
							echo $css_id . ' { -webkit-border-bottom-left-radius: ' . $b->border_radius_bottom_left . '; }' . "\n";
							echo $css_id . ' { -webkit-border-bottom-right-radius: ' . $b->border_radius_bottom_right . '; }' . "\n";
							echo $css_id . ' { text-shadow: ' . $b->text_shadow_offset_left . ' ' . $b->text_shadow_offset_top . ' ' . $b->text_shadow_width . ' ' . $b->text_shadow_color . '; }' . "\n";
							echo $css_id . ' { box-shadow: ' . $b->box_shadow_offset_left . ' ' . $b->box_shadow_offset_top . ' ' . $b->box_shadow_width . ' ' . $b->box_shadow_color . '; }' . "\n";
							echo $css_id_hover . ' { color: ' . $b->text_color_hover . '; }' . "\n";
							echo $css_id_hover . ' { background-color: ' . $b->gradient_start_color_hover . '; }' . "\n";
							echo $css_id_hover . ' { background: linear-gradient(' . $b->gradient_start_color_hover . ' 45%, ' . $b->gradient_end_color_hover . '); }' . "\n";
							echo $css_id_hover . ' { background: -moz-linear-gradient(' . $b->gradient_start_color_hover . ' 45%, ' . $b->gradient_end_color_hover . '); }' . "\n";
							echo $css_id_hover . ' { background: -o-linear-gradient(' . $b->gradient_start_color_hover . ' 45%, ' . $b->gradient_end_color_hover . '); }' . "\n";
							echo $css_id_hover . ' { background: -webkit-gradient(linear, left top, left bottom, color-stop(.45, ' . $b->gradient_start_color_hover . '), color-stop(1, ' . $b->gradient_end_color_hover . ')); }' . "\n";
							echo $css_id_hover . ' { filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $b->gradient_start_color_hover . '", endColorStr="' . $b->gradient_end_color_hover . '"); }' . "\n";
							echo $css_id_hover . ' { -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $b->gradient_start_color_hover . '", endColorStr="' . $b->gradient_end_color_hover . '"); }' . "\n";
							echo $css_id_hover . ' { border-color: ' . $b->border_color_hover . '; }' . "\n";
							echo $css_id_hover . ' { text-shadow: ' . $b->text_shadow_offset_left . ' ' . $b->text_shadow_offset_top . ' ' . $b->text_shadow_width . ' ' . $b->text_shadow_color_hover . '; }' . "\n";
							echo $css_id_hover . ' { box-shadow: ' . $b->box_shadow_offset_left . ' ' . $b->box_shadow_offset_top . ' ' . $b->box_shadow_width . ' ' . $b->box_shadow_color_hover . '; }' . "\n";
							echo '</style>' . "\n";
							
							$element_id = 'maxbutton-' . $b->id;
							echo '<a id="' . $element_id . '" href="' . $b->url . '">' . $b->text . '</a>';
							?>
						</td>
						<td valign="top" class="cell-words">
							<p><a class="button-name" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=button&id=<?php echo $b->id ?>"><?php echo $b->name ?></a></p>
							<p>[maxbutton id="<?php echo $b->id ?>"]</p>
							<p><?php echo $b->description ?></p>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
