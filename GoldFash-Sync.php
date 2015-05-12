<?php
/*
Plugin Name: GoldFash Sync
Plugin URL: https://goldfash.com
Description: A Required Sync Plugin for GoldFash Servers
Version: 1.1
Author: GoldFash Web Gurus
Author URI:        https://goldfash.com
Contributors:      rafcoafc
Domain Path:       /languages
Text Domain:       gf_scd
GitHub Plugin URI: https://github.com/goldfashhosting/GoldFash-Sync
GitHub Branch:     therealHosting
*/
/*
|--------------------------------------------------------------------------
| CONSTANTS
|--------------------------------------------------------------------------
*/

// plugin folder url
if(!defined('GF_SCD_PLUGIN_URL')) {
	define('GF_SCD_PLUGIN_URL', plugin_dir_url( __FILE__ ));
}

/*
|--------------------------------------------------------------------------
| MAIN CLASS
|--------------------------------------------------------------------------
*/

class gf_sweet_custom_dashboard {
 
	/*--------------------------------------------*
	 * Constructor
	 *--------------------------------------------*/
 
	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	function __construct() {
	
		add_action('admin_menu', array( &$this,'gf_scd_register_menu') );
		add_action('load-index.php', array( &$this,'gf_scd_redirect_dashboard') );
 
	} // end constructor
	
	function gf_scd_register_menu() {
		add_dashboard_page( 'GoldFash Fast-Dash', 'GF Client-Dash', 'read', 'gf-dashb', array( &$this,'gf_scd_create_dashboard') );
	}
	
	function gf_scd_create_dashboard() {
		include_once( 'sync_dashboard.php'  );
	}

 
}
 
// instantiate plugin's class
$GLOBALS['sweet_custom_dashboard'] = new gf_sweet_custom_dashboard();

?>
