<?php

        PG_Blocks_v3::register_block_type( array(
            'name' => 'opto-energy/footer-link-name',
            'title' => __( 'Footer link name', 'opto_energy' ),
            'render_template' => 'blocks/footer-link-name/footer-link-name.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/footer-link-name/footer-link-name.js',
            'attributes' => array(
                'footer_link' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => '')
                )
            ),
            'example' => array(
'footer_link' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
            ),
            'dynamic' => true,
            'version' => '1.0.262'
        ) );
