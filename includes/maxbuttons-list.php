<?php
$result = '';


$button = new maxButton(); 


if ($_POST) {
	if (isset($_POST['button-id']) && isset($_POST['bulk-action-select'])) {
		if ($_POST['bulk-action-select'] == 'trash') {
			$count = 0;
			
			foreach ($_POST['button-id'] as $id) {
				$button->set($id);
				$button->setStatus('trash'); 
				$count++;
			}
			
			if ($count == 1) {
				$result = __('Moved 1 button to the trash.', 'maxbuttons');
			}
			
			if ($count > 1) {
				$result = __('Moved ', 'maxbuttons') . $count . __(' buttons to the trash.', 'maxbuttons');
			}
		}
	}
}

if (isset($_GET['message']) && $_GET['message'] == '1') {
	$result = __('Moved 1 button to the trash.', 'maxbuttons');
}

$args = array();
if (isset($_GET["orderby"])) 
	$args["orderby"] = $_GET["orderby"]; 
if (isset($_GET["order"])) 
	$args["order"] = $_GET["order"]; 


$published_buttons = $button->getButtons($args);
$published_buttons_count = count($published_buttons);

$trashed_buttons = $button->getButtons(array("status" => "trash"));
$trashed_buttons_count = count($trashed_buttons);

?>

<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#bulk-action-all").click(function() {
			jQuery("#maxbuttons input[name='button-id[]']").each(function() {
				if (jQuery("#bulk-action-all").is(":checked")) {
					jQuery(this).attr("checked", "checked");
				}
				else {
					jQuery(this).removeAttr("checked");
				}
			});
		});
		
		<?php if ($result != '') { ?>
			jQuery("#mb-maxbuttons .message").show();
		<?php } ?>
	});
</script>

<div id="maxbuttons">
	<div class="wrap">
		<div class="icon32">
			<a href="http://maxbuttons.com" target="_blank"><img src="<?php echo maxButtons::get_plugin_url() ?>images/mb-32.png" alt="MaxButtons" /></a>
		</div>
		
		<h2 class="title"><?php _e('MaxButtons: Button List', 'maxbuttons') ?></h2>
		
		<div class="logo">
			<?php do_action("mb-display-logo"); ?> 

		</div>
		
		<div class="clear"></div>
		<div class="main">
			<?php do_action('mb-display-tabs'); ?> 

			<div class="form-actions">
				<a class="button-primary" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-controller&action=button"><?php _e('Add New', 'maxbuttons') ?></a>
			</div>

			<?php if ($result != '') { ?>
				<div class="mb-message"><?php echo $result ?></div>
			<?php } ?>
			
			<p class="status">
				<strong><?php _e('All', 'maxbuttons') ?></strong> <span class="count">(<?php echo $published_buttons_count ?>)</span>

				<?php if ($trashed_buttons_count > 0) { ?>
					<span class="separator">|</span>
					<a href="<?php echo admin_url() ?>admin.php?page=maxbuttons-controller&action=list&status=trash"><?php _e('Trash', 'maxbuttons') ?></a> <span class="count">(<?php echo $trashed_buttons_count ?>)</span>
				<?php } ?>
			</p>
			
			<form method="post">
				<select name="bulk-action-select" id="bulk-action-select">
					<option value=""><?php _e('Bulk Actions', 'maxbuttons') ?></option>
					<option value="trash"><?php _e('Move to Trash', 'maxbuttons') ?></option>
				</select>
				<input type="submit" class="button" value="<?php _e('Apply', 'maxbuttons') ?>" />
			
				<div class="button-list preview-buttons">		
					<table cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<th><input type="checkbox" name="bulk-action-all" id="bulk-action-all" /></th>
							<th><?php _e('Button', 'maxbuttons') ?></th>
							<?php 
							$link_order = (! isset($_GET["order"]) || $_GET["order"] == "DESC") ? "ASC" : 'DESC';
							
							
							$sort_url = add_query_arg(array(
								"orderby" => "name",
								"order" => $link_order
								));
							?>
							<th class='manage-column column-name sortable <?php echo strtolower($link_order) ?>'>
							<a href="<?php echo $sort_url ?>">
							<span><?php _e('Name and Description', 'maxbuttons') ?></span>							
							<span class="sorting-indicator"></span>
								</a></th>							
			
						
							<th><?php _e('Shortcode', 'maxbuttons') ?></th>
							<th><?php _e('Actions', 'maxbuttons') ?></th>
						</tr>
						<?php foreach ($published_buttons as $b) { 
								$id = $b["id"]; 
 							
								$button->set($id); 
						?>
							<tr>
								<td valign="center">
									<input type="checkbox" name="button-id[]" id="button-id-<?php echo $id ?>" value="<?php echo $id ?>" />
								</td>
								<td>
									<div class="shortcode-container">
										<?php 
											//echo do_shortcode('[maxbutton id="' . $id . '" externalcss="false" ignorecontainer="true"]'); 
										
										$button->display( array("preview" => true, "preview_part" => "full") ); 
										?>
									</div>
								</td>
								<td>
									<a class="button-name" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=button&id=<?php echo $id ?>"><?php echo $button->getName() ?></a>
									<br />
									<p><?php echo $button->getDescription() ?></p>
								</td>
								<td>
									[maxbutton id="<?php echo $id ?>"]<br />
									[maxbutton name="<?php echo $button->getName() ?>"]
								</td>
								<td>
									<a href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=button&id=<?php echo $id ?>"><?php _e('Edit', 'maxbuttons') ?></a>
									<span class="separator">|</span>
									<a href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=copy&id=<?php echo $id ?>"><?php _e('Copy', 'maxbuttons') ?></a>
									<span class="separator">|</span>
									<a href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=trash&id=<?php echo $id ?>"><?php _e('Move to Trash', 'maxbuttons') ?></a>
								</td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</form>
		</div>
	</div>
	<div class="ad-wrap">
		<?php do_action("mb-display-ads"); ?> 
	</div>

</div>
