<?php
/**
 * @package Social_Networks
 * @version 1.3.5
 */
/*
Plugin Name: Social Networks
Plugin URI: http://wordpress.org/plugins/social-networks-facebooktwittergoogle/
Description: Most popular social widgets in one plugin. Facebook, Twitter, LinkedIn, YouTube, Google+
Author: Invoice
Version: 1.3.13
Author URI: http://wordpress.org/plugins/social-networks-facebooktwittergoogle/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

class sn_loader {

    public $defaults = array();
    public $settings = array();

    function __construct() {
        global $wp_version;

        define('SN_WP_VERSION', intval(substr(str_replace('.', '', $wp_version), 0, 2)));

        $_dirname = trailingslashit(dirname(__FILE__));
        $_urlname = plugin_dir_url(__FILE__);

        define('SN_PATH', $_dirname);
        define('SN_URL', $_urlname);

        require_once(SN_PATH.'core/defaults.php');

        if (!defined('SN_EOL')) {
            define('SN_EOL', "\r\n");
        }

        if (is_admin()) {
            require_once(SN_PATH.'core/admin.php');
        }

        add_action('plugins_loaded', array(&$this, 'init_plugin_settings'), 9);
        add_action('wp', array(&$this, 'control_load'));
    }

    public function control_load() {
        if (!is_admin()) {
            add_action('wp_enqueue_scripts', array(&$this, 'wp_enqueue_scripts'));
            add_action('wp_print_footer_scripts', array(&$this, 'embed_contact_slider'), 1000);
            add_action('wp_head', array(&$this, 'ie_styles'));
            add_action('wp_head', array(&$this, 'embed_styles'));
        }
    }


    public function init_plugin_settings() {
        $_d = new sn_defaults();

        $this->settings = get_option('social-networks');
        $this->styler = get_option('social-networks-styler');

        if (!is_array($this->settings)) {
            $this->settings = $_d->settings;
            update_option('social-networks', $this->settings);
        } else if ($this->settings['__build__'] != $_d->settings['__build__']) {
            $this->settings = $_d->upgrade($this->settings);
            update_option('social-networks', $this->settings);
        }

        define('SOCIAL_NETWORKS', $this->settings['__version__']);

        do_action('sn_init_plugin_settings');
    }

    public function get($name) {
        return $this->settings[$name];
    }

    public function set($name, $value) {
        $this->settings[$name] = $value;
    }

    public function save() {
        update_option('social-networks', $this->settings);
    }

    public function wp_enqueue_scripts() {

        $_load_js = apply_filters('sn_load_js', true);

        wp_enqueue_script('sn-social-js', (SN_URL.'js/userscripts.js'));
        do_action('sn_wp_enqueue_scripts', $_load_js);
    }

    public function embed_styles() {
        $_load_css = apply_filters('sn_embed_styles', true);

        if ($_load_css) {
            wp_enqueue_style('sn-social', SN_URL.'css/sn-front.css');
            do_action('sn_embed_styles_css');
        }
    }

    public function ie_styles() {
        $_load_css = apply_filters('ie_styles_css', true);

        if ($_load_css) {
            echo '<!--[if lt IE 8]>'.SN_EOL;
            echo '<link rel="stylesheet" type="text/css" href="'.SN_URL.'css/ie7.css?ver=3.2.1" />'.SN_EOL;
            echo '<![endif]-->'.SN_EOL;
        }
    }


    public function embed_contact_slider() {
        do_action('sn_embed_contact_slider_before');
        do_action('sn_embed_contact_slider_before_js');

        require_once(SN_PATH.'front/build.php');

        do_action('sn_embed_contact_slider_after_js');
        do_action('sn_embed_contact_slider_after');
    }
}

global $sn_core_loader;
$sn_core_loader = new sn_loader();

?>