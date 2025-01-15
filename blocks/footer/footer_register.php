<?php

        PG_Blocks_v3::register_block_type( array(
            'name' => 'opto-energy/footer',
            'title' => __( 'Footer', 'opto_energy' ),
            'description' => __( 'Website footer with company information and links', 'opto_energy' ),
            'render_template' => 'blocks/footer/footer.php',
            'supports' => array(),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/footer/footer.js',
            'attributes' => array(
                'logo_link' => array(
                    'type' => array('object', 'null'),
                    'default' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
                ),
                'logo_image' => array(
                    'type' => array('object', 'null'),
                    'default' => array('id' => 0, 'url' => esc_url( get_template_directory_uri() . '/img/Logo-OE-dark-a.svg' ), 'size' => '', 'svg' => '', 'alt' => 'Opto Energy Sustainability')
                ),
                'description' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Wir sind der führende Distributor für energieeffiziente Solarpaneele, Wärmepumpen und nachhaltige Haushaltsgeräte. Unsere Mission ist es, moderne, professionelle und kundenorientierte Lösungen anzubieten.'
                ),
                'about_us_heading' => array(
                    'type' => array('string', 'null'),
                    'default' => 'Über Uns'
                )
            ),
            'example' => array(
'logo_link' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => ''), 'logo_image' => array('id' => 0, 'url' => esc_url( get_template_directory_uri() . '/img/Logo-OE-dark-a.svg' ), 'size' => '', 'svg' => '', 'alt' => 'Opto Energy Sustainability'), 'description' => 'Wir sind der führende Distributor für energieeffiziente Solarpaneele, Wärmepumpen und nachhaltige Haushaltsgeräte. Unsere Mission ist es, moderne, professionelle und kundenorientierte Lösungen anzubieten.', 'about_us_heading' => 'Über Uns'
            ),
            'dynamic' => true,
            'has_inner_blocks' => true,
            'version' => '1.0.269'
        ) );
