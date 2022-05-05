<?php
    /**
     * Plugin Name: Datalayer FormSubmit Elementor
     * Plugin URI: https://sourei.com.br
     * Description: Plugin que define o datalayer
     * Version: 1.0
     * Author: Sourei TEC
     * Author URI: https://github.com/otaviocefet
    **/


    // enqueue formSubmit function
    function enqueue_dataLayer_formSubmit(){
        wp_register_script('formSubmit', plugin_dir_url( __FILE__ ) . '/includes/jquerynew.js', array('jquery'), '1.2', true);
        wp_enqueue_script('formSubmit');
    }
    add_action('wp_enqueue_scripts', 'enqueue_dataLayer_formSubmit');
    // enqueue formSubmit function


    // dataLayer declaration
    function dataLayerDeclaration(){
        $post = $wp_query->get_queried_object();
        $pagename = $post->post_name;       
        
        ?>
            <script>
                dataLayer = [{
                    'pageCategory':'<?php $pagename ?>',
                }];
            </script>
        <?php
    // dataLayer declaration

    }

    // function ajax_handler
    add_action('elementor_pro/forms/new_record',function($record, $ajax_handler) {
        $form_name = $record->get_form_settings( 'form_name' );
        //normalize the fields
        $raw_fields = $record->get( 'fields' );
        $fields = [];
        foreach ( $raw_fields as $id => $field ) {
            $fields[ $id ] = $field['value'];
        }
    
        $ajax_handler->add_response_data( 'fields', $raw_fields );
    },10,2);
    // function ajax_handler

?>