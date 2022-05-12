<?php
    /**
     * Plugin Name: Datalayer For Elementor
     * Plugin URI: https://github.com/soureidigital/datalayer-for-elementor
     * Description: When filling out and submitting an Elementor form, all form fields are sent to the dataLayer
     * Version: 1.0.0
     * Author: Sourei TEC, otaviodeveloper
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
        $form['name'] = $record->get_form_settings( 'form_name' );
        $form['id'] = $record->get_form_settings( 'id' );
        $raw_fields = $record->get( 'fields' );
        $meta['page_url']['title'] = 'Page URL';
        $meta['page_url']['value'] = home_url( $wp->request );
        $meta['user_agent']['title'] = 'User Agent';
        $meta['user_agent']['value'] = $_SERVER['HTTP_USER_AGENT'];
        $meta['remote_ip']['title'] = 'Remote IP';
        $meta['remote_ip']['value'] = $_SERVER['HTTP_CLIENT_IP'];
        $meta['date']['title'] = 'Date';
        $meta['date']['value'] = date(get_option('date_format'));
        $meta['time']['title'] = 'Time';
        $meta['time']['value'] = date(get_option('time_format'));


    
        $ajax_handler->add_response_data( 'fields', $raw_fields );
        $ajax_handler->add_response_data( 'form', $form );
        $ajax_handler->add_response_data( 'meta', $meta );

    },10,2);
    // function ajax_handler


    //
    add_action('wp_footer','User_Location',1);
    function User_Location(){
        ?>
            <script>
                async function fetchText(){
                    let url = 'https://ipinfo.io/json?token=2c568e62ebe8c5';
                    let response = await fetch(url);
                    let dataUserLocation = await response.json();
                    dataLayer.push({
                        'Data Location':dataUserLocation
                    });
                }
                fetchText();
            </script>
        
        <?php
    }
    //

?>