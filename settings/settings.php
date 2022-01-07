<?php

Class Influx_Header_Footer{

    public function __construct()
    {
        add_action('wp_head', array($this, 'ihf_display_header_scripts'));

       
           
        add_action('wp_footer', array($this, 'ihf_display_footer_scripts'));
        
    }
    public function ihf_display_header_scripts(){
        $header_scripts = stripslashes(get_option('ihf_header_scripts'));
        
        $user = wp_get_current_user();
        if ( current_user_can( 'manage_options' ) ) {
            //Something in the case of admin
            print "";
        }else{
            print $header_scripts;
        }
    }

    public function ihf_display_footer_scripts(){
        $footer_scripts = stripslashes(get_option('ihf_footer_scripts'));
        $user = wp_get_current_user();
        if ( current_user_can( 'manage_options' ) ) {
            //Something in the case of admin
            print "";
        }else{
            print $footer_scripts;
        }
        
    }
    

}

$Inlux_Header_Footer = new Influx_Header_Footer();



?>