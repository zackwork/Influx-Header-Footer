<?php
    /*

    Plugin Name: Influx Header Footer
    Plugin URI: 
    Description: Inject scripts into header footer and shows it to users except admin
    Version: 1.0.0
    Author: ZackSnyder
    Author URI: 
    License: Commercial (TheUnknown.com)

    */

    if(!defined('WP_IHF_PATH')){
        define('WP_IHF_PATH', plugin_dir_path(__FILE__) );
    }
    if(!defined('WP_IHF_URL')){
        define('WP_IHF_URL', plugin_dir_url(__FILE__) );
    }

    
    class WP_IHF{

        public function __construct()
        {
            $this->hooks();
            $this->init();
        }

        private function hooks(){
            add_action('admin_menu', array($this, 'influx_header_footer_admin_menu_option'));
            
            
        }
        private function init(){
            include WP_IHF_PATH . "settings/settings.php";
        }
        public function influx_header_footer_admin_menu_option(){
             add_submenu_page('options-general.php','Influx Header & Footer', 
             'Influx Header and Footer', 'administrator', 'influx-header-footer', array($this, 'influx_header_footer'));
            
        }
        public function influx_header_footer(){
            include WP_IHF_PATH . "view/view.php";
        }
    }

    $WP_IHF = new WP_IHF();
