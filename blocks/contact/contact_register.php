<?php

        PG_Blocks_v3::register_block_type( array(
            'name' => 'opto-energy/contact',
            'title' => __( 'Contact', 'opto_energy' ),
            'description' => __( 'Contact section with form and email link', 'opto_energy' ),
            'render_template' => 'blocks/contact/contact.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/contact/contact.js',
            'attributes' => array(
                'contact_heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Schreiben Sie uns noch heute und erhalten Sie eine exklusive Beratung.'
                ),
                'contact_email_link' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => 'mailto:info@opto-energy.de', 'post_type' => '', 'title' => '')
                ),
                'contact_email_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Kontaktieren Sie uns: info@opto-energy.de'
                ),
                'form_title' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Unser Kontaktformular'
                ),
                'message_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Ihre Nachricht an uns'
                ),
                'message_placeholder' => array(
                    'type' => array('string', 'null'),
                    'default' => ''
                ),
                'submit_button' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => '')
                ),
                'submit_label' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Absenden'
                ),
                'submit_icon' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '<svg height="16" width="16" class="ms-1" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"> 
    <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>     
</svg>', 'alt' => null)
                )
            ),
            'example' => array(
'contact_heading' => 'Schreiben Sie uns noch heute und erhalten Sie eine exklusive Beratung.', 'contact_email_link' => array('post_id' => 0, 'url' => 'mailto:info@opto-energy.de', 'post_type' => '', 'title' => ''), 'contact_email_label' => 'Kontaktieren Sie uns: info@opto-energy.de', 'form_title' => 'Unser Kontaktformular', 'message_label' => 'Ihre Nachricht an uns', 'message_placeholder' => '', 'submit_button' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => ''), 'submit_label' => 'Absenden', 'submit_icon' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '<svg height="16" width="16" class="ms-1" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"> 
    <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>     
</svg>', 'alt' => null)
            ),
            'dynamic' => true,
            'has_inner_blocks' => true,
            'version' => '1.0.269'
        ) );
