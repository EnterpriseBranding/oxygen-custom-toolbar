<?php
/*
Plugin Name:	Oxygen Custom Toolbar
Plugin URI:		https://wpdevdesign.com/custom-oxygen-toolbar/
Description:	Adds a thin horizontal bar at the top edge of browser in Oxygen editor. When hovered, slides down a panel having the various controls provided by Oxygen.
Version:		1.0.1
Author:			Sridhar Katakam
Author URI:		https://sridharkatakam.com
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

// If Oxygen is not active, abort.
// Commenting this out for now as this seems to cause issues..
// if ( ! is_plugin_active( 'oxygen/functions.php' ) ) {
// 	die;
// }

add_action( 'oxygen_before_toolbar_close', 'oct_add_controls' );
/**
 * Outputs Oxygen's controls.
 */
function oct_add_controls() { ?>

	<div class="my-controls">
			<div class="my-containers">
				<?php do_action("oxygen_basics_components_containers"); ?>
			</div>

			<div class="my-text">
				<?php do_action("oxygen_basics_components_text"); ?>
			</div>

			<div class="my-links">
				<?php do_action("oxygen_basics_components_links"); ?>
			</div>

			<div class="my-visual">
				<?php do_action("oxygen_basics_components_visual"); ?>
			</div>

			<div class="my-other">
				<?php do_action("ct_toolbar_fundamentals_list"); ?>
			</div>

			<div class="my-composite">
				<?php do_action("oxygen_helpers_components_composite"); ?>
			</div>

			<div class="my-dynamic">
				<?php do_action("oxygen_helpers_components_dynamic"); ?>
			</div>

			<div class="my-interactive">
				<?php do_action("oxygen_helpers_components_interactive"); ?>
			</div>

			<div class="my-wordpress1">
				<div class="oxygen-add-section-element my-highlight" ng-click="iframeScope.addComponent('oxy_nav_menu','nav_menu')">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/menu.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/menu-active.svg' />
					Menu
				</div>

				<div class="oxygen-add-section-element my-highlight" ng-click="iframeScope.addComponent('ct_shortcode','shortcode')">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/shortcode.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/shortcode-active.svg' />
					Shortcode
				</div>

				<div class="oxygen-add-section-element" ng-click="iframeScope.addComponent('oxy_comments')">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/commentslist.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/commentslist-active.svg' />
					Comments List
				</div>

				<div class="oxygen-add-section-element" ng-click="iframeScope.addComponent('oxy_comment_form')">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/commentform.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/commentform-active.svg' />
					Comment Form
				</div>

				<div class="oxygen-add-section-element" ng-click="iframeScope.addComponent('oxy_login_form')">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/loginform.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/loginform-active.svg' />
					Login Form
				</div>

				<div class="oxygen-add-section-element" ng-click="iframeScope.addComponent('oxy_search_form')">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/searchform.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/searchform-active.svg' />
					Search Form
				</div>
			</div> <!-- </my-wordpress1> -->

			<div class="my-wordpress2">
				<div class="oxygen-add-section-element my-highlight" ng-click="iframeScope.addDynamicContent('ct_headline', '[oxygen data=\'title\']');">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata-active.svg' />
					Title
				</div>

				<div class="oxygen-add-section-element my-highlight" ng-click="iframeScope.addDynamicContent('ct_text_block', '[oxygen data=\'content\']');">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata-active.svg' />
					Content
				</div>

				<div class="oxygen-add-section-element" ng-click="iframeScope.addDynamicContent('ct_text_block', '[oxygen data=\'date\']');">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata-active.svg' />
					Date
				</div>

				<div class="oxygen-add-section-element" ng-click="iframeScope.addDynamicContent('ct_text_block', '[oxygen data=\'terms\' taxonomy=\'category\' separator=\', \']');">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata-active.svg' />
					Categories
				</div>

				<div class="oxygen-add-section-element" ng-click="iframeScope.addDynamicContent('ct_text_block', '[oxygen data=\'terms\' taxonomy=\'post_tag\' separator=\', \']');">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata-active.svg' />
					Tags
				</div>

				<div class="oxygen-add-section-element my-highlight" ng-click="iframeScope.addComponent('ct_image');iframeScope.insertShortcodeToImage('[oxygen data=\'featured_image\']')">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata-active.svg' />
					Featured Image
				</div>

				<div class="oxygen-add-section-element" ng-click="iframeScope.addDynamicContent('ct_text_block', '[oxygen data=\'author\']');">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata-active.svg' />
					Author
				</div>

				<div class="oxygen-add-section-element" ng-click="iframeScope.addComponent('ct_image');iframeScope.insertShortcodeToImage('[oxygen data=\'author_pic\']')">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata-active.svg' />
					Author Avatar
				</div>

				<div class="oxygen-add-section-element my-highlight" ng-click="iframeScope.addCustomFieldComponent()">
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata.svg' />
					<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/add-icons/dynamicdata-active.svg' />
					Custom field
				</div>
			</div> <!-- </my-wordpress2> -->
		</div> <!-- </my-controls> -->

<?php }

add_action( 'oxygen_enqueue_ui_scripts', 'oct_enqueue_files' );
/**
 * Loads the plugin's CSS and JS files.
 */
function oct_enqueue_files() {

	wp_enqueue_style( 'oxygen-custom-toolbar', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' );

	wp_enqueue_script( 'oxygen-custom-toolbar', plugin_dir_url( __FILE__ ) . 'assets/js/oct.js', array( 'jquery' ), '1.0.0', true );

}
