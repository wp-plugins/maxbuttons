<?php


if(isset($_POST['alter_charset'])) {
    
    global $maxbuttons_installed_version;
    global $wpdb;
    $table_name = maxbuttons_get_buttons_table_name();

    $sql = "ALTER TABLE " . $table_name . " CONVERT TO CHARACTER SET utf8";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    $wpdb->query($wpdb->prepare($sql));
    $response = 'CHARSET now utf_8 COLLATE utf8_general_ci';

} else {
    $response = '';
}

?>

<div id="maxbuttons">
	<div class="wrap">
		<div class="icon32">
			<a href="http://maxbuttons.com" target="_blank"><img src="<?php echo MAXBUTTONS_PLUGIN_URL ?>/images/mb-32.png" alt="MaxButtons" /></a>
		</div>
		
		<h2 class="title"><?php _e('MaxButtons: Support', 'maxbuttons') ?></h2>
		
		<div class="logo">
			<?php _e('Brought to you by', 'maxbuttons') ?>
			<a href="http://maxfoundry.com/?ref=mbfree" target="_blank"><img src="<?php echo MAXBUTTONS_PLUGIN_URL ?>/images/max-foundry.png" alt="Max Foundry" /></a>
			<?php printf(__('Upgrade to MaxButtons Pro today! %sClick Here%s', 'maxbuttons'), '<a href="http://www.maxbuttons.com/pricing/?utm_source=wordpress&utm_medium=mbrepo&utm_content=button-settings-upgrade&utm_campaign=plugin">', '</a>' ) ?>
		</div>

		<div class="clear"></div>
		<div class="main">
    		<h2 class="tabs">
    			<span class="spacer"></span>
    			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-controller&action=list"><?php _e('Buttons', 'maxbuttons') ?></a>
    			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-pro"><?php _e('Go Pro', 'maxbuttons') ?></a>
                <a class="nav-tab nav-tab-active" href=""><?php _e('Settings', 'maxbuttons') ?></a>
    			<a class="nav-tab" href="<?php echo admin_url() ?>admin.php?page=maxbuttons-support"><?php _e('Support', 'maxbuttons') ?></a>
    		</h2>
    		
    		<h3><?php _e('WARNING: We strongly recommend backing up your database before altering the charset of the MaxButtons table in your WordPress database.', 'maxbuttons') ?></h3>

            <h3><?php _e('The button below should help fix the "foreign character issue" some people experience when using MaxButtons. If you use foreign characters in your buttons and after saving see ????, use this button.', 'maxbuttons') ?></h3>
    	
            <form action="" method="POST">
                <input type="submit" name="alter_charset" value="<?php _e('Change MaxButtons Table To UTF8', 'maxbuttons') ?>" /> <?php echo $response; ?>
            </form>
        </div>
        <div class="ad-wrap">
        <div class="ads">
            <h3><?php _e('Get MaxButtons Pro for $19', 'maxbuttons'); ?></h3>
            <p><?php _e('Do so much more with MB Pro.  Get 2 free buttons packs when you buy.  Just use MBFREE at checkout.', 'maxbuttons'); ?></p>
            <p><strong><?php _e('Some extra features for going Pro:', 'maxbuttons'); ?></strong></p>
            <ul>
                <li><?php _e('Great Support', 'maxbuttons'); ?></li>
                <li><?php _e('Pre-Made Button Packs', 'maxbuttons'); ?></li>
                <li><?php _e('Two Lines of Editable Text', 'maxbuttons'); ?></li>
                <li><?php _e('Add An Icon To Your Buttons', 'maxbuttons'); ?></li>
                <li><?php _e('Google Web Fonts', 'maxbuttons'); ?></li>
                <li><?php _e('Many more benefits!', 'maxbuttons'); ?></li>
            </ul>
            <a class="button-primary" href="http://www.maxbuttons.com/pricing/?utm_source=wordpress&utm_medium=mbrepo&utm_content=button-settings-sidebar-19&utm_campaign=plugin"><?php _e('Get MaxButtons Pro Now!', 'maxbuttons'); ?></a>
        </div>
        <div class="ads">
            <h3><?php _e('Everything for $99', 'maxbuttons'); ?></h3>
            <p><?php _e('Our best deal is the All-In-One package, which gets you everything we have for only $99.', 'maxbuttons'); ?></p>
            <p><?php _e('This includes MaxButtons Pro, all current button packs and all new button packs for one year.', 'maxbuttons'); ?></p>
            <p><?php _e('You save more than 85% compared to buying everything individually, regularly valued at over $700.', 'maxbuttons'); ?></p>
            <a class="button-primary" href="http://www.maxbuttons.com/pricing/?utm_source=wordpress&utm_medium=mbrepo&utm_content=button-settings-sidebar-99&utm_campaign=plugin"><?php _e('Get MaxButtons All-In-One', 'maxbuttons'); ?></a>
        </div>
    </div>
	</div>
</div>
