
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
    
    const block = registerBlockType( 'opto-energy/contact', {
        apiVersion: 2,
        title: 'Contact',
        description: 'Contact section with form and email link',
        icon: 'block-default',
        category: 'opto_energy',
        keywords: [],
        supports: {},
        attributes: {
            contact_heading: {
                type: ['string', 'null'],
                default: `Schreiben Sie uns noch heute und erhalten Sie eine exklusive Beratung.`,
            },
            contact_email_link: {
                type: ['object', 'null'],
                default: {post_id: 0, url: 'mailto:info@opto-energy.de', title: '', 'post_type': null},
            },
            contact_email_label: {
                type: ['string', 'null'],
                default: `Kontaktieren Sie uns: info@opto-energy.de`,
            },
            form_title: {
                type: ['string', 'null'],
                default: `Unser Kontaktformular`,
            },
            message_label: {
                type: ['string', 'null'],
                default: `Ihre Nachricht an uns`,
            },
            message_placeholder: {
                type: ['string', 'null'],
                default: ``,
            },
            submit_button: {
                type: ['object', 'null'],
                default: {post_id: 0, url: '', title: '', 'post_type': null},
            },
            submit_label: {
                type: ['string', 'null'],
                default: `Absenden`,
            },
            submit_icon: {
                type: ['object', 'null'],
                default: {id: 0, url: '', size: '', svg: `<svg height="16" width="16" class="ms-1" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"> 
    <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>     
</svg>`, alt: null},
            }
        },
        example: { attributes: { contact_heading: `Schreiben Sie uns noch heute und erhalten Sie eine exklusive Beratung.`, contact_email_link: {post_id: 0, url: 'mailto:info@opto-energy.de', title: '', 'post_type': null}, contact_email_label: `Kontaktieren Sie uns: info@opto-energy.de`, form_title: `Unser Kontaktformular`, message_label: `Ihre Nachricht an uns`, message_placeholder: ``, submit_button: {post_id: 0, url: '', title: '', 'post_type': null}, submit_label: `Absenden`, submit_icon: {id: 0, url: '', size: '', svg: `<svg height="16" width="16" class="ms-1" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"> 
    <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>     
</svg>`, alt: null} } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'bg-secondary pb-5 pt-5 text-center', id: 'contact', 'data-pg-name': 'Contact' });
            const setAttributes = props.setAttributes; 
            
            props.submit_icon = useSelect(function( select ) {
                return {
                    submit_icon: props.attributes.submit_icon.id ? select('core').getMedia(props.attributes.submit_icon.id) : undefined
                };
            }, [props.attributes.submit_icon] ).submit_icon;
            
            
            const innerBlocksProps = useInnerBlocksProps({ className: 'container', 'data-empty-placeholder': null }, {
            } );
                            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'container pb-5 pt-5' }, [' ', el(RichText, { tagName: 'h3', className: 'fw-bold h2 mb-4 text-white', value: propOrDefault( props.attributes.contact_heading, 'contact_heading' ), onChange: function(val) { setAttributes( {contact_heading: val }) } }), el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.contact_email_link.url, 'contact_email_link', 'url' ), className: 'btn btn-outline-success pb-2 pe-4 ps-4 pt-2', onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.contact_email_label, 'contact_email_label' ), onChange: function(val) { setAttributes( {contact_email_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', { className: 'container mx-auto px-5 pt-10 pb-10 text-light' }, [' ', el(RichText, { tagName: 'h2', className: 'font-bold fw-bold h3 mb-5 text-center text-lg text-white', value: propOrDefault( props.attributes.form_title, 'form_title' ), onChange: function(val) { setAttributes( {form_title: val }) } }), ' ', el('div', { ...innerBlocksProps }), ' ', ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgMediaImageControl('submit_icon', setAttributes, props, 'full', false, 'Submit Icon', '' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Contact Heading' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.contact_heading,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({contact_heading: val}) },
                                        })
                                    ]),
                                    pgUrlControl('contact_email_link', setAttributes, props, 'Contact Email Link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.contact_email_label,
                                        help: __( '' ),
                                        label: __( 'Contact Email Label' ),
                                        onChange: function(val) { setAttributes({contact_email_label: val}) },
                                        type: 'text'
                                    }),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Form Title' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.form_title,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({form_title: val}) },
                                        })
                                    ]),
                                    el(TextControl, {
                                        value: props.attributes.message_label,
                                        help: __( '' ),
                                        label: __( 'Message Label' ),
                                        onChange: function(val) { setAttributes({message_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextareaControl, {
                                        value: props.attributes.message_placeholder,
                                        help: __( '' ),
                                        label: __( 'Message Placeholder' ),
                                        onChange: function(val) { setAttributes({message_placeholder: val}) },
                                    }),
                                    pgUrlControl('submit_button', setAttributes, props, 'Submit Button', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.submit_label,
                                        help: __( '' ),
                                        label: __( 'Submit Label' ),
                                        onChange: function(val) { setAttributes({submit_label: val}) },
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
