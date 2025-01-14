
( function ( blocks, element, blockEditor ) {
    const el = element.createElement,
        registerBlockType = blocks.registerBlockType,
        ServerSideRender = PgServerSideRender3,
        InspectorControls = blockEditor.InspectorControls,
        useBlockProps = blockEditor.useBlockProps;
        
    const {__} = wp.i18n;
    const {ColorPicker, TextControl, ToggleControl, SelectControl, Panel, PanelBody, Disabled, TextareaControl, BaseControl} = wp.components;
    const {useSelect} = wp.data;
    const {RawHTML, Fragment} = element;
   
    const {InnerBlocks, URLInputButton, RichText} = wp.blockEditor;
    const useInnerBlocksProps = blockEditor.useInnerBlocksProps || blockEditor.__experimentalUseInnerBlocksProps;
    
    const propOrDefault = function(val, prop, field) {
        if(block.attributes[prop] && (val === null || val === '')) {
            return field ? block.attributes[prop].default[field] : block.attributes[prop].default;
        }
        return val;
    }
    
    const block = registerBlockType( 'opto-energy/footer', {
        apiVersion: 2,
        title: 'Footer',
        description: 'Website footer with company information and links',
        icon: 'block-default',
        category: 'opto_energy',
        keywords: [],
        supports: {},
        attributes: {
            logo_link: {
                type: ['object', 'null'],
                default: {post_id: 0, url: '#', title: '', 'post_type': null},
            },
            logo_image: {
                type: ['object', 'null'],
                default: {id: 0, url: (pg_project_data_opto_energy ? pg_project_data_opto_energy.url : '') + 'img/Logo-OE-dark-a.svg', size: '', svg: '', alt: 'Opto Energy Sustainability'},
            },
            description: {
                type: ['string', 'null'],
                default: `Wir sind der führende Distributor für energieeffiziente Solarpaneele, Wärmepumpen und nachhaltige Haushaltsgeräte. Unsere Mission ist es, moderne, professionelle und kundenorientierte Lösungen anzubieten.`,
            },
            about_us_heading: {
                type: ['string', 'null'],
                default: `Über Uns`,
            }
        },
        example: { attributes: { logo_link: {post_id: 0, url: '#', title: '', 'post_type': null}, logo_image: {id: 0, url: (pg_project_data_opto_energy ? pg_project_data_opto_energy.url : '') + 'img/Logo-OE-dark-a.svg', size: '', svg: '', alt: 'Opto Energy Sustainability'}, description: `Wir sind der führende Distributor für energieeffiziente Solarpaneele, Wärmepumpen und nachhaltige Haushaltsgeräte. Unsere Mission ist es, moderne, professionelle und kundenorientierte Lösungen anzubieten.`, about_us_heading: `Über Uns` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'bg-primary pt-5 text-white' });
            const setAttributes = props.setAttributes; 
            
            props.logo_image = useSelect(function( select ) {
                return {
                    logo_image: props.attributes.logo_image.id ? select('core').getMedia(props.attributes.logo_image.id) : undefined
                };
            }, [props.attributes.logo_image] ).logo_image;
            
            
            const innerBlocksProps = useInnerBlocksProps({ className: 'd-flex justify-content-evenly list-unstyled' }, {
                template: [
    [ 'opto-energy/footer-link-name', {} ],
    [ 'opto-energy/footer-link-name', {} ],
    [ 'opto-energy/footer-link-name', {} ],
    [ 'opto-energy/footer-link-name', {} ]
],
            } );
                            
            
            return el(Fragment, {}, [
                el('footer', { ...blockProps }, [' ', ' ', el('div', { className: 'container pb-4 pt-4' }, [' ', ' ', el('div', { className: 'row' }, [' ', ' ', el('div', { className: 'me-auto py-3' }, [' ', ' ', el('a', { className: 'align-items-end d-inline-flex h2 link-info mb-4 text-decoration-none text-uppercase', href: propOrDefault( props.attributes.logo_link.url, 'logo_link', 'url' ), onClick: function(e) { e.preventDefault(); } }, [' ', ' ', props.attributes.logo_image && props.attributes.logo_image.svg && pgCreateSVG3(RawHTML, {}, pgMergeInlineSVGAttributes(propOrDefault( props.attributes.logo_image.svg, 'logo_image', 'svg' ), { className: 'img-fluid rounded-3 w-50' })), props.attributes.logo_image && !props.attributes.logo_image.svg && propOrDefault( props.attributes.logo_image.url, 'logo_image', 'url' ) && el('img', { src: propOrDefault( props.attributes.logo_image.url, 'logo_image', 'url' ), className: 'img-fluid rounded-3 w-50 ' + (props.attributes.logo_image.id ? ('wp-image-' + props.attributes.logo_image.id) : ''), alt: propOrDefault( props.attributes.logo_image?.alt, 'logo_image', 'alt' ) }), ' ', ' ']), ' ', ' ', el(RichText, { tagName: 'p', className: 'mb-3', value: propOrDefault( props.attributes.description, 'description' ), onChange: function(val) { setAttributes( {description: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', ' ']), ' ', ' ', el('div', { className: 'py-3 text-start' }, [' ', ' ', el(RichText, { tagName: 'h4', className: 'fw-bold h5 mb-4 text-info text-uppercase', value: propOrDefault( props.attributes.about_us_heading, 'about_us_heading' ), onChange: function(val) { setAttributes( {about_us_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', ' ', el('ul', { ...innerBlocksProps }), ' ', ' ']), ' ', ' ', ' ', ' ', ' ', ' ']), ' ', ' ', el('div', { className: 'pb-3 pt-3 text-center' }, [' ', ' ', el('hr', { className: 'mt-0' }), ' ', ' ', el('p', { className: 'mb-0' }, ['Copyright © ', el('span', {}, '2024'), ' ', el('span', {}, 'oe-dev'), '. Alle Rechte vorbehalten.']), ' ', ' ']), ' ', ' ', ' ', ' ']), ' ', ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgMediaImageControl('logo_image', setAttributes, props, 'full', false, 'Logo Image', '' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    pgUrlControl('logo_link', setAttributes, props, 'Logo Link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.description,
                                        help: __( '' ),
                                        label: __( 'Description' ),
                                        onChange: function(val) { setAttributes({description: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.about_us_heading,
                                        help: __( '' ),
                                        label: __( 'About Us Heading' ),
                                        onChange: function(val) { setAttributes({about_us_heading: val}) },
                                        type: 'text'
                                    }),    
                                ])
                            )
                        ]
                    )                            

            ]);
        },

            save: function(props) {
                return el(InnerBlocks.Content);
            }                        
    
    } );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
