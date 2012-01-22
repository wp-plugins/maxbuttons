=== MaxButtons: CSS3 Button Generator for WordPress ===
Contributors: maxfoundry, arcware
Tags: buttons, CSS buttons, CSS3 buttons, button generator, CSS button generator, CSS3 button generator
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 1.4.1

A CSS3 button generator for WordPress. Powerful, easy to use plugin that anyone can use to create beautiful buttons.

== Description ==
Create great-looking CSS3 buttons that can be used on any post or page in your WordPress site. The easy to use button editor makes it a snap to generate awesome CSS3 buttons in very little time.

= Highlights =

* No coding, the plugin takes care of everything
* Create unlimited number of buttons
* Buttons are built on-the-fly as you enter and select options
* Works with all modern browsers, degrades gracefully for others
* Fully CSS3 compliant with text shadowing, box shadowing, gradients, etc
* Color picker for unlimited color combinations
* Copy an existing button to use as starting point for others
* See your buttons on different color backgrounds
* Pre-defined defaults make getting started super easy

= Upgrade to MaxButtons Pro =

Take your buttons to the next level with [MaxButtons Pro](http://maxbuttons.com/), which gives you additional features such as:

* **Icon support** (put icons to the left, right, top, or bottom of your text)
* **Multi-line text**, to communicate extra information to your users and customers
* **Google Web Fonts**, to make your buttons stand out with beautiful typography
* **Button packs**, to import pre-defined sets of buttons into your website
* **Import/export functionality** (useful for backing up and/or moving your buttons)

And for a limited time, you can get this awesome [CSS3 button generator](http://maxbuttons.com/) for **only 10!** That's HALF OFF its regular price.

= How To Use =

1. Click the MaxButtons page from the admin menu.
1. Click the Add New button.
1. Fill out and select the options needed to build your button.
1. Once you're ready, click Save.
1. A shortcode will be generated (ex: [maxbutton id="17"]).
1. Use the shortcode anywhere in your content.

You can also pass the button text and URL as parameters in the shortcode, giving you even greater flexibility. For example, if you want to create a set of buttons that look exactly the same, except for the text and URL, you could do something like this:

[maxbutton id="17" text="Search Google" url="http://google.com"]

[maxbutton id="17" text="Search Yahoo" url="http://yahoo.com"]

One other parameter you can give the shortcode is window, which tells the button whether or not to open the URL in a new window (by default the button opens the URL in the current window). To do so you always give the window parameter the value "new", shown below. Anything else will open the button URL in the current window.

[maxbutton id="17" window="new"]

NOTE: Passing parameters to the shortcode overrides those settings saved as part of the button.

== Installation ==

For automatic installation:

1. Login to your website and go to the Plugins section of your admin panel.
1. Click the Add New button.
1. Under Install Plugins, click the Upload link.
1. Select the plugin zip file from your computer then click the Install Now button.
1. You should see a message stating that the plugin was installed successfully.
1. Click the Activate Plugin link.

For manual installation:

1. You should have access to the server where WordPress is installed. If you don't, see your system administrator.
1. Copy the plugin zip file up to your server and unzip it somewhere on the file system.
1. Copy the "maxbuttons" folder into the /wp-content/plugins directory of your WordPress installation.
1. Login to your website and go to the Plugins section of your admin panel.
1. Look for "MaxButtons" and click Activate.

== Screenshots ==

1. Adding and editing a button.

== Frequently Asked Questions ==

= How do I use the shortcode in a sidebar/widget? =

Starting with version 1.4.0 widget support is built-in, so all you have to do is add the button shortcode to your widget (ex: [maxbutton id="17"]). Prior to version 1.4.0 you add to enable widget shortcode support yourself, as described in [this forum post](http://wordpress.org/support/topic/how-to-make-shortcodes-work-in-a-widget).

= How can I add the shortcode to my post/page template? =

Simply add this code snippet to any of your theme template files:
`<?php echo do_shortcode('[maxbutton id="17"]'); ?>`

= Part of my button is cutoff, how do I fix that? =

You probably need to surround your button shortcode with a div element with margins. For example:

`<div style="margin: 10px 10px 10px 10px;">
    <?php echo do_shortcode('[maxbutton id="17"]'); ?>
</div>`

Then adjust the margin values as needed (the order is: top, right, bottom, left).

== Changelog ==
= 1.4.1 =
* Changed some fields to use stripslashes instead of escape when saving to the database.

= 1.4.0 =
* Made the button output div in the button editor draggable.
* Updated styles and scripts to be used only on plugin admin pages instead of all admin pages.
* Added filter for widget_text to recognize and execute the button shortcode.

= 1.3.3 =
* Modified the description database field to be VARCHAR(500) instead of TEXT.
* Modified button list page to use button shortcodes to render each button.
* Updated the UI for the button list page.
* Added the button count to the button list page.
* Updated "Go Pro" page with copy for MaxButtons Pro.

= 1.3.2 =
* Added "Add New" to the admin menu.
* Fixed issue where gradient stop value wasn't used when copying a button.
* Fixed issue where new window option wasn't used when copying a button.
* Fixed issue where the gradient stop value wasn't being used in the button list.

= 1.3.1 =
* Fixed issue where gradient stop value was empty after upgrade to 1.3.0 (default value now used in this scenario).

= 1.3.0 =
* Changed the style of the output div so that it floats.
* Updated shortcode so that the <style> element is returned with the <a> element.
* Added option for gradient stop.

= 1.2.1 =
* Fixed issue when new sites are added with multisite/network.

= 1.2.0 =
* Added option for opening url in a new window.

= 1.1.0 =
* Added text and url parameters to shortcode.

= 1.0.0 =
* Initial version.

== Upgrade Notice ==

= 1.4.1 =
Please deactivate and then reactivate before using.
