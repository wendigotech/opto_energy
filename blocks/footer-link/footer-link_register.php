<?php

        PG_Blocks_v3::register_block_type( array(
            'name' => 'opto-energy/footer-link',
            'title' => __( 'Footer link', 'opto_energy' ),
            'render_template' => 'blocks/footer-link/footer-link.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/footer-link/footer-link.js',
            'attributes' => array(
                'link' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
                )
            ),
            'example' => array(
'link' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
            ),
            'dynamic' => true,
            'version' => '1.0.256'
        ) );
