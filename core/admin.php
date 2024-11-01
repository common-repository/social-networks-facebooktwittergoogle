<?php

if (!defined('ABSPATH')) exit;

class sn_admin {
    public $page_ids;
    public $admin_page_url = 'options-general.php';

    function __construct() {
        add_action('admin_enqueue_scripts', array(&$this, 'admin_enqueue_scripts'));
        add_action('admin_menu', array(&$this, 'admin_menu'));
        add_action('admin_init', array(&$this, 'save_settings'));
    }

    public function admin_enqueue_scripts($hook) {
        if ($hook == 'settings_page_social-networks') {
            wp_enqueue_script('jquery-ui-core');
            wp_enqueue_script('jquery-ui-tabs');

            wp_enqueue_script('sn-styler-colorpicker-js', SN_URL.'js/colorpicker.js', array(), null, true);
            wp_enqueue_script('sn-styler-userscripts-js', SN_URL.'js/userscripts.js', array(), null, true);
            wp_enqueue_script('sn-styler-userscripts-ie-js', SN_URL.'js/userscripts-ie7.js', array(), null, true);

            wp_enqueue_style('sn-styler-colorpicker-css', SN_URL.'css/colorpicker.css');
            wp_enqueue_style('sn-styler-install-css', SN_URL.'css/install.css');
            wp_enqueue_style('sn-styler-admin-css', SN_URL.'css/admin.css');
            wp_enqueue_style('sn-styler-jqeruyui-css', SN_URL.'css/ui-lightness/jquery-ui-1.10.3.custom.css');

            do_action('sn_admin_enqueue_scripts');
        }
    }

    public function admin_menu() {

        $this->page_ids[] = add_options_page(__("Social Networks: Settings", "social-networks"), __("Social Networks", "social-networks"), 'activate_plugins', 'social-networks', array(&$this, 'tools_menu'));

    }

    public function save_settings() {
        if (!empty($_POST)) {
//            var_dump($_POST);
//            exit();
            global $sn_core_loader;

            foreach ($_POST as $k => $v) {
                $sn_core_loader->set($k, $v);
            }
            $sn_core_loader->save();
            wp_redirect($this->admin_page_url.'?page=social-networks');
            exit;
        }
    }

    public function tools_menu() {
        global $sn_core_loader;

        include(SN_PATH.'core/index.php');

        do_action('sn_admin_display_panel_after');
    }
}

$sn_core_admin = new sn_admin();

?>