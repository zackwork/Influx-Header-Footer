<?php


Class View_Class{

    public function __construct(){
        if(array_key_exists('submit_ihf_scripts_update', $_POST)){

            update_option('ihf_header_scripts', $_POST['textInputHeader']);
            
            update_option('ihf_footer_scripts', $_POST['textInputFooter']);
            echo "<div class='notice notice-success is-dismissible'><p>Scripts have been saved.</p></div>";
            
    
        }
    }

}

$VIEW_CLASS = new View_Class();
