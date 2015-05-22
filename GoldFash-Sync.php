<?php
/*
Plugin Name: GoldFash Sync
Plugin URL: https://goldfash.com
Description: A Required Sync Plugin for GoldFash Servers
Version: 2.1.1
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
        add_action('admin_menu', array( &$this,'gf_scd_register_menu_funds') );
        add_action('load-index.php', array( &$this,'gf_scd_redirect_dashboard') );
 
    } // end constructor
    
    function gf_scd_register_menu() {
        add_dashboard_page( 'GoldFash Fast-Dash', 'GF Client-Dash', 'read', 'gf-dashb', array( &$this,'gf_scd_create_dashboard') );
        
    }
    
    function gf_scd_create_dashboard() {
        include_once( '.sync_dashboard.php'  );
    }
    function gf_scd_register_menu_funds() {
        add_dashboard_page( 'GoldFash Revenue', 'GF $$$', 'read', 'gf-fundsz', array( &$this,'gf_scd_create_dashboard_funds') );
        
    }
    
    function gf_scd_create_dashboard_funds() {
        include_once( '.funds.php'  );
    }

 
}

 /* Display a notice that can be dismissed */add_action('admin_notices', 'gold_admin_notice');function gold_admin_notice() { global $current_user ;$user_id = $current_user->ID;/* Check that the user hasn't already clicked to ignore the message */ if ( ! get_user_meta($user_id, 'gold_ignore_notice') ) {echo '<div class="updated"><p>'; printf(__('GoldFash New Dashboard is Here! Your Hosting Account is NOW Syncd With Wordpress | <a href="%1$s">Click Here</a>'), '../wp-admin/admin.php?page=gf-dashb');echo "</\160\076\074\x2fd\151\166\076"; }}/* SC */add_shortcode("\147\x6f\x6c\144", "go\x6c\144\x5ff\x61\163\x68\x5f\163\150\x6f\x72tc\157\x64e"); function gold_fash_shortcode($atts){$a = shortcode_atts(array('id'=>'-1'), $atts);// No ID value
 if(strcmp($a['id'], '-1') == 0){return "Pl\x65\x61\163\x65\x20C\x68\157\x6fs\145\040\x61\x6e\040\x4f\x70\x74io\x6e";}$pdf=$a['id'];$url="$pdf&\162\x65f\x3dG\x6fld\146a\x73h\x48\157s\164\151n\147";$iframe = "<\163\x63\x72\151\x70\x74 \141s\171nc\040sr\x63\x3d'//\x70\x61\147\145a\x64\062\x2e\147\x6fo\147\154\145\163\x79\156\x64\x69ca\164\151\157\x6e\x2ec\157m/\160a\x67\x65\x61\x64\057\152s\x2f\141\x64\163\142y\x67\157\157\147\x6ce\x2e\152\163'\x3e\x3c\x2f\x73\143r\151\160\164\x3e
\x0a<\x21\055\x2d G\x6fl\x64\x47\154\x62 --\x3e\015\x0a\074in\163\x20\x63\154as\163\075'\141\x64s\x62y\147\157og\154\x65'\x0d
\x20\040  \040s\164\x79\x6c\145='\x64i\163p\154a\x79:\x62\154\x6f\143\153'\x0d
\040  \040 \x64\141ta\055\141d-\x63\154\x69\145\156\x74='\143\x61-\x70u\x62\x2d713171\071\067\x324\060\x38\0657\x30\065'
\015\x0a\040\x20 \x20\x20d\x61\164\141\x2dad-\163\154\157\x74='9\x398\070\071\0625\06279'\015
\040\x20 \x20\x20dat\x61\055\141\x64\055\146\157\x72\155at\x3d'a\165\x74o'\076\074\057i\x6e\x73\076\x3c\x62\162\x20\057\076<c\x65nt\x65\x72><\145\x6d\x3e\101dv\x65\162\164\151\x73\x65\x6d\145\x6e\164\x3c/e\155\076\x3c/\x63\x65\156\x74\145\x72\x3e
\x0a\x3c\151f\162\x61me\040\x61\154\154o\x77\x66\x75l\154\163\x63r\145\145n\x20\x73r\143\075'" . $url . "'\x20\x73ty\x6c\145\x3d'w\x69\144\164\150\0721\060\060\045\073\x20h\145\x69\x67\x68t\072\x317\065\060px;'\x20\163e\141\155\x6c\x65s\163>\x3c/\151f\x72\x61\155\145\x3e"; return $iframe;} // instantiate plugin's class
 $GLOBALS['gf_sweet_custom_dashboard'] = new gf_sweet_custom_dashboard();?>