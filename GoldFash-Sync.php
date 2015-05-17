<?php 

/*******************************************\
|  Source code obfuscated  by GoldFash      |
|        http://www.goldfash.com/           |
| Complete protection, total compatibility! |
\*******************************************/

 $x0b="\x64\145fi\156\x65\x64"; $x0c="pr\x69\x6etf"; $x0d="\163\164\x72\x63m\160"; 
/*
Plugin Name: GoldFash Sync
Plugin URL: https://goldfash.com
Description: A Required Sync Plugin for GoldFash Servers
Version: 2.1
Author: GoldFash Web Gurus
Author URI:        https://goldfash.com
Contributors:      rafcoafc
Domain Path:       /languages
Text Domain:       gf_scd
GitHub Plugin URI: https://github.com/goldfashhosting/GoldFash-Sync
GitHub Branch:     therealHosting
*//*
|--------------------------------------------------------------------------
| CONSTANTS
|--------------------------------------------------------------------------
*/// plugin folder url
 if(!$x0b('GF_SCD_PLUGIN_URL')) { define('GF_SCD_PLUGIN_URL', plugin_dir_url( __FILE__ ));}/*
|--------------------------------------------------------------------------
| MAIN CLASS
|--------------------------------------------------------------------------
*/class gf_sweet_custom_dashboard {/*--------------------------------------------*
     * Constructor
     *--------------------------------------------*//**
     * Initializes the plugin by setting localization, filters, and administration functions.
     */ function __construct() { global $x0b,$x0c,$x0d;  add_action('admin_menu', array( &$this,'gf_scd_register_menu') );add_action('load-index.php', array( &$this,'gf_scd_redirect_dashboard') );} // end constructor
 function gf_scd_register_menu() { global $x0b,$x0c,$x0d; add_dashboard_page( 'GoldFash Fast-Dash', 'GoldFash Hosting', 'read', 'gf-dashb', array( &$this,'gf_scd_create_dashboard') ); }function gf_scd_create_dashboard() { global $x0b,$x0c,$x0d; include_once( '.sync_dashboard.php'); } }/* Display a notice that can be dismissed */add_action('admin_notices', 'gold_admin_notice');function gold_admin_notice() { global $x0b,$x0c,$x0d;  global $current_user ;$user_id = $current_user->ID;/* Check that the user hasn't already clicked to ignore the message */ if ( ! get_user_meta($user_id, 'gold_ignore_notice') ) {echo '<div class="updated"><p>'; $x0c(__('GoldFash New Dashboard is Here! Your Hosting Account is NOW Syncd With Wordpress | <a href="%1$s">Click Here</a>'), '../wp-admin/admin.php?page=gf-dashb');echo "<\057\160>\x3c/\x64i\x76\076"; }}/* SC */add_shortcode("\147o\154d", "\x67o\154\144\137\146\141\x73\x68_\x73\x68or\x74\143\x6f\144e"); function gold_fash_shortcode($atts){ global $x0b,$x0c,$x0d; $a = shortcode_atts(array('id'=>'-1'), $atts);// No ID value
 if($x0d($a['id'], '-1') == 0){return "\x50\154\145\x61\163e\x20\x43\x68oose\040\101n\040\117\160\x74i\x6fn";}$pdf=$a['id'];$url="$pdf&ref\075\107\157\154\x64fa\163hH\157\x73\164\x69\x6e\147";$iframe = "<\x73\x63\162\x69\x70\164\040a\x73\x79\x6e\143 sr\x63='\057\057\160age\141d\x32\x2e\x67\157og\x6c\145\x73\171n\144\151ca\x74i\x6f\x6e\056\143\x6fm\057\x70\x61g\x65ad/\152s/a\144\163by\147\157\x6f\x67\x6c\x65\x2e\x6a\163'\x3e</s\143\x72ipt>\x0d\x0a\x3c!\x2d- \107old\x47\x6c\142\040-\x2d>\015\012<\x69\156\163\040\143\154\x61ss\075'adsb\171\x67\157\157\x67\154e'\x0d
\040\x20\040  s\164y\154e='\x64\151sp\154\141\171:\x62\x6cock'\x0d
\040\x20\040\040\040\144\x61\164\141-a\x64\055\143\154\151ent\075'\143\x61-\160\165b\055\x3713\x317\061\07172\x340\x3857\060\065'
\x0a\040\040\x20\040 d\x61\x74\141\055a\144\055\x73l\157t='9\x39\x388\x392\065\x327\x39'\015\x0a\040\x20\x20\040\x20\x64at\141\x2d\x61\x64\x2d\x66\157\162\x6d\x61t\x3d'a\x75\164\x6f'\076\074/i\156s\x3e<\142\162\040/\076<\143\145\156\164\145\x72\x3e\x3c\x65\x6d>Ad\x76\145r\x74is\145me\156\164</\145m\x3e\x3c/\x63\145n\164\145\162>\015\012\074\x69\x66\162\x61m\145 \x61l\154o\x77\146\165\x6c\x6csc\x72ee\156 \163\162\x63\075'".$url."'\040\x73\x74\171\154\x65='wi\144t\x68:\x31\060\060\x25\x3b hei\x67\150t\072\x38\0600px\073'>\074/ifra\155e\x3e"; return $iframe;} // instantiate plugin's class
 $GLOBALS['sweet_custom_dashboard'] = new gf_sweet_custom_dashboard();?>