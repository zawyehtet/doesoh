<?php

// includes/toolbar-styles

/**
 * Prevent direct access to this file.
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Sorry, you are not allowed to access this file directly.' );
}


add_action( 'wp_head', 'ddw_tbex_toolbar_styles', 100 );
add_action( 'admin_head', 'ddw_tbex_toolbar_styles', 100 );
/**
 * Add the needed CSS styles for Toolbar items of "Toolbar Extras" plugin.
 * 
 * @see https://developer.wordpress.org/resource/dashicons/
 *
 * @since 1.0.0
 *
 * @uses ddw_tbex_display_items_site()
 * @uses ddw_tbex_id_main_item()
 * @uses ddw_tbex_id_sites_browser()
 *
 * @return string CSS styling for selected Toolbar items.
 */
function ddw_tbex_toolbar_styles() {
	
	/** Subtle styling tweaks for "Login Designer" plugin */
	$fix_logindesigner = '';

	if ( ddw_tbex_display_items_site() ) {

		$fix_logindesigner = sprintf(
			'#wpadminbar #wp-admin-bar-my-sub-item {
				color: inherit;
				margin-top: 7px;
			}

			#wpadminbar #wp-admin-bar-my-sub-item .ab-item:before {
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				background-image: none !important;
				color: inherit;
				content: "%s";
				float: left;
				font: 400 20px/1 dashicons;
				margin-right: 6px;
				padding: 4px 0;
				position: relative;
				speak: none;
			}

			#wpadminbar #wp-admin-bar-my-sub-item .ab-label {
				margin-left: -5px;
				margin-top: -2px;
			}',
			'\f336'
		);

	}  // end if

	/** Add our few CSS styles inline: */
	?>
		<style type="text/css">
			/* Fix */
			#wpadminbar #wp-admin-bar-my-sites-super-admin.ab-submenu {
				border-top: 0 none !important;
			}

			/* TBEX: Main item */
			#wpadminbar #wp-admin-bar-<?php echo ddw_tbex_id_main_item(); ?> .ab-icon:before {
				top: 2px;
			}

			/* TBEX: Group Users */
			#wpadminbar #wp-admin-bar-group-tbex-users .tbex-users .ab-icon:before,
			#wpadminbar #wp-admin-bar-group-user-roles .tbex-users .ab-icon:before {
				content: '\f139';
				top: 2px;
			}

			#wpadminbar #wp-admin-bar-group-tbex-users .tbex-users,
			#wpadminbar #wp-admin-bar-group-user-roles .tbex-users {
				margin-bottom: 5px;
				margin-left: -6px;
			}

			.rtl #wpadminbar #wp-admin-bar-group-tbex-users .tbex-users .ab-icon:before,
			.rtl #wpadminbar #wp-admin-bar-group-user-roles .tbex-users .ab-icon:before {
				content: '\f141';
			}

			/* Plugin: Debug Elementor */
			#wpadminbar #wp-admin-bar-dm-debug-elementor {
				margin-bottom: 7px;
				margin-top: 5px;
			}

			#wpadminbar #wp-admin-bar-dm-debug-elementor .ab-icon:before {
				content: '\f348';
				top: 2px;
			}

			/* Customizer sub-items */
			#wpadminbar #wp-admin-bar-customize-wpwidgets {
				margin-bottom: 7px;
			}

			#wpadminbar #wp-admin-bar-customize-wpwidgets .ab-icon:before {
				content: '\f116';
				top: 2px;
			}

			#wpadminbar #wp-admin-bar-customize-wpmenus {
				margin-bottom: 7px;
			}

			#wpadminbar #wp-admin-bar-customize-wpmenus .ab-icon:before {
				content: '\f333';
				top: 2px;
			}

			#wpadminbar #wp-admin-bar-customize-css,
			#wpadminbar #wp-admin-bar-customize-simplecss,
			#wpadminbar #wp-admin-bar-customize-sccss {
				margin-bottom: 7px;
			}

			#wpadminbar #wp-admin-bar-customize-css .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-simplecss .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-sccss .ab-icon:before {
				content: '\f475';
				top: 2px;
			}

			#wpadminbar #wp-admin-bar-customize-cei,
			#wpadminbar #wp-admin-bar-customize-catch-importexport {
				margin-bottom: 7px;
			}

			#wpadminbar #wp-admin-bar-customize-cei .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-catch-importexport .ab-icon:before {
				content: '\f111';
				top: 2px;
			}

			#wpadminbar #wp-admin-bar-customize-easyloginstyler-pro {
				margin-bottom: 7px;
			}

			#wpadminbar #wp-admin-bar-customize-easyloginstyler-pro .ab-icon:before {
				content: '\f336';
				top: 2px;
			}

			#wpadminbar .tbex-customize-content .ab-icon:before {
				content: '\f540';
				top: 2px;
			}

			#wpadminbar .tbex-customize-content {
				bottom: 2px;
			}

			#wpadminbar .tbex-genesis-cpt-archive .ab-icon:before {
				content: '\f464';
				top: 2px;
			}

			#wpadminbar .tbex-view-content > a > .ab-icon:before,
			#wpadminbar .tbex-genesis-cpt-archive-view > a > .ab-icon:before {
				content: '\f177';
				top: 2px;
			}

			#wpadminbar .tbex-view-content,
			#wpadminbar .tbex-genesis-cpt-archive,
			#wpadminbar .tbex-genesis-cpt-archive-view {
				bottom: 2px;
				margin-top: 2px;
			}

			/* Dev Mode */
			#wpadminbar #wp-admin-bar-rapid-dev .ab-label {
				margin-top: -3px;
			}

			#wpadminbar .tbex-element-id .ab-icon:before {
				content: '\f107';
				top: 2px;
			}

			#wpadminbar .tbex-element-id {
				bottom: 2px;
				margin-top: 2px;
			}

			/* Sites Browser/ Demos */
			#wp-admin-bar-group-demo-import > li > a {
				margin-bottom: 5px !important;
			}

			#wpadminbar #wp-admin-bar-<?php echo ddw_tbex_id_sites_browser(); ?>,
			#wpadminbar #wp-admin-bar-envato-elements-template-kits {
				margin-top: -3px;
			}

			#wpadminbar .tbex-add-design-set .ab-icon:before {
				content: '\f502';
				top: 2px;
			}

			/* Web Group */
			#wpadminbar #wp-admin-bar-tbex-web-resources .tbex-siteicon img {
				margin-bottom: 8px;  /* Compat fix */
				margin-top: 4px;  /* Compat fix */
				width: 16px;
				height: 16px;
			}

			#wpadminbar #wp-admin-bar-tbex-web-resources .tbex-siteicon img,
			#wpadminbar #wp-admin-bar-tbex-web-resources .ab-icon.tbex-globe:before {
				margin-right: -3px;
				padding: 0 0 0 5px;
			}

			.rtl #wpadminbar #wp-admin-bar-tbex-web-resources .tbex-siteicon img,
			.rtl #wpadminbar #wp-admin-bar-tbex-web-resources .ab-icon.tbex-globe:before {
				margin-left: -3px;
				padding: 0 5px 0 0;
			}

			#wpadminbar #wp-admin-bar-tbex-web-resources .ab-icon.tbex-globe:before {
				content: '\f319';
				top: 2px;
			}

			/* Superadmin Menu */
			#wp-admin-bar-root-default > .tbex-tbmenu .ab-icon:before {
				top: 2px;
			}

			#wp-admin-bar-root-default > .tbex-tbmenu .ab-sub-wrapper .ab-icon {
				display: none !important;
			}

			/* Tweaks for groups */
			#wp-admin-bar-group-devmode-resources,
			#wp-admin-bar-group-churchcontent-resources,
			.tbex-no-addons-border,
			.tbex-group-resources-divider {
				border-top: 1px dotted rgba(235, 235, 235, 0.35);
			}

			.admin-color-light #wp-admin-bar-group-devmode-resources,
			.admin-color-light #wp-admin-bar-group-churchcontent-resources,
			.admin-color-light .tbex-no-addons-border,
			.admin-color-light .tbex-group-resources-divider {
				border-top: 1px dotted rgba(7, 7, 7, 0.2);
			}

			/* Tweaks for icons set via settings */
			#wpadminbar .ab-icon.tbexmwp-settings-icon {
				top: 2px;
			}

			/* Color fixes */
			#wpadminbar #wp-admin-bar-group-tbex-users .tbex-users .ab-icon:before,
			#wpadminbar #wp-admin-bar-group-tbex-users .tbex-users .ab-label,
			#wpadminbar #wp-admin-bar-group-user-roles .tbex-users .ab-icon:before,
			#wpadminbar #wp-admin-bar-group-user-roles .tbex-users .ab-label,
			#wpadminbar #wp-admin-bar-dm-debug-elementor .ab-icon:before,
			#wpadminbar #wp-admin-bar-dm-debug-elementor .ab-label,
			#wpadminbar #wp-admin-bar-customize-wpwidgets .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-wpwidgets .ab-label,
			#wpadminbar #wp-admin-bar-customize-wpmenus .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-wpmenus .ab-label,
			#wpadminbar #wp-admin-bar-customize-css .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-css .ab-label,
			#wpadminbar #wp-admin-bar-customize-simplecss .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-simplecss .ab-label,
			#wpadminbar #wp-admin-bar-customize-sccss .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-sccss .ab-label,
			#wpadminbar #wp-admin-bar-customize-cei .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-cei .ab-label,
			#wpadminbar #wp-admin-bar-customize-catch-importexport .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-catch-importexport .ab-label,
			#wpadminbar #wp-admin-bar-customize-easyloginstyler-pro .ab-icon:before,
			#wpadminbar #wp-admin-bar-customize-easyloginstyler-pro .ab-label,
			#wpadminbar #wp-admin-bar-my-sub-item .ab-icon:before,
			#wpadminbar #wp-admin-bar-my-sub-item .ab-label,
			#wpadminbar .tbex-view-content .ab-icon:before,
			#wpadminbar .tbex-view-content .ab-label,
			#wpadminbar .tbex-customize-content .ab-icon:before,
			#wpadminbar .tbex-customize-content .ab-label,
			#wpadminbar .tbex-genesis-cpt-archive .ab-icon:before,
			#wpadminbar .tbex-genesis-cpt-archive .ab-label,
			#wpadminbar .tbex-genesis-cpt-archive-view .ab-icon:before,
			#wpadminbar .tbex-genesis-cpt-archive-view .ab-label,
			#wpadminbar .tbex-element-id .ab-icon:before,
			#wpadminbar .tbex-element-id .ab-label,
			#wpadminbar #wp-admin-bar-rapid-dev .ab-icon:before,
			#wpadminbar #wp-admin-bar-rapid-dev .ab-label,
			#wpadminbar #wp-admin-bar-<?php echo ddw_tbex_id_sites_browser(); ?> .ab-icon:before,
			#wpadminbar #wp-admin-bar-<?php echo ddw_tbex_id_sites_browser(); ?> .ab-label,
			#wpadminbar .tbex-import-templates .ab-icon:before,
			#wpadminbar .tbex-import-templates .ab-label,
			#wpadminbar .tbex-add-design-set .ab-icon:before,
			#wpadminbar .tbex-add-design-set .ab-label,
			#wpadminbar #wp-admin-bar-tbex-web-resources .ab-icon.tbex-globe:before,
			#wp-admin-bar-root-default > .tbex-tbmenu .ab-icon:before,
			#wp-admin-bar-root-default > .tbex-tbmenu .ab-label {
				color: inherit !important;
			}

			/* Icon Label Fixes */
			#wp-admin-bar-customize-sccss .ab-label,
			#wp-admin-bar-group-demo-import .ab-label,
			#wpadminbar #wp-admin-bar-customize-easyloginstyler-pro .ab-label {
				margin-right: 15px !important;
				padding-right: 15px !important;
			}

			#wpadminbar .tbex-customize-content .ab-label,
			#wpadminbar .tbex-genesis-cpt-archive .ab-label,
			#wpadminbar .tbex-genesis-cpt-archive-view .ab-label,
			#wpadminbar .tbex-element-id .ab-label {
				padding-right: 25px;
			}

			.tbex-elementor-inspector {
				margin-bottom: 2px !important;
			}
			/* .tbex-elementor-inspector > .ab-empty-item {
				display: none !important;
			} */

			<?php echo $fix_logindesigner; ?>

			/* Media Queries */
			@media only screen and (max-width: 782px) {

				#wpadminbar #wp-admin-bar-rapid-dev .ab-icon,
				#wpadminbar #wp-admin-bar-rapid-dev .ab-icon:before {
					display: none;
				}

				#wpadminbar #wp-admin-bar-rapid-dev .ab-item,
				#wpadminbar #wp-admin-bar-rapid-dev .ab-label,
				#wpadminbar #wp-admin-bar-tbex-sitegroup-manage-content .ab-item,
				#wpadminbar #wp-admin-bar-group-tbex-users .ab-label,
				#wpadminbar #wp-admin-bar-group-user-roles .ab-label {
					display: inline-block;
				}

				#wpadminbar #wp-admin-bar-rapid-dev .ab-label {
					font-size: 16px !important;
				}

				#wpadminbar #wp-admin-bar-group-tbex-users .tbex-users .ab-icon:before,
				#wpadminbar #wp-admin-bar-group-user-roles .tbex-users .ab-icon:before {
					font-size: 16px;
					/* display: inline-block; */
					top: -16px;
				}

			}
		</style>
	<?php

}  // end function


add_action( 'wp_enqueue_scripts', 'ddw_tbex_toolbar_overflow_fix_styles' );
add_action( 'admin_enqueue_scripts', 'ddw_tbex_toolbar_overflow_fix_styles' );
/**
 * For viewports equal or wider than 783px load CSS styles to fix the overflow
 *   issue in WordPress Core Toolbar styling when there are too many items.
 *
 * Note: Code inspired by "Admin Bar Wrap Fix" plugin (GPLv2 or later).
 *
 * @since 1.4.0
 * @since 1.4.5 Set 'admin-bar' dependency (WP Core).
 *
 * @see plugin file: /assets/css/toolbar-overflow-fix.css
 */
function ddw_tbex_toolbar_overflow_fix_styles() {

	wp_register_style(
		'tbex-toolbar-overflow-fix',
		plugins_url( '/assets/css/toolbar-overflow-fix.css', dirname( __FILE__ ) ),
		array( 'admin-bar' ),
		TBEX_PLUGIN_VERSION,
		'screen'
	);

	wp_enqueue_style( 'tbex-toolbar-overflow-fix' );

}  // end function
