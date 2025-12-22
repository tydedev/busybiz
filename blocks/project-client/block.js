( function( blocks, element, blockEditor, components ) {
    const { createElement: el } = element;
    const { useBlockProps, InspectorControls } = blockEditor;
    const { PanelBody, SelectControl } = components;

    blocks.registerBlockType('tydedev/project-client', {
        title: 'Project Client',
        icon: 'admin-users',
        category: 'widgets',
        attributes: {
            fontWeight: { type: 'string', default: '400' },
            textTransform: { type: 'string', default: 'uppercase' }
        },
        edit: (props) => {
            const blockProps = useBlockProps();
            const meta = wp.data.select('core/editor').getEditedPostAttribute('meta') || {};
            const clientName = meta.client_name || 'Client Name';

            return el('div', {},
                // sidebar per modificare font weight e transform
                el(InspectorControls, {},
                    el(PanelBody, { title: 'Typography', initialOpen: true },
                        el(SelectControl, {
                            label: 'Font Weight',
                            value: props.attributes.fontWeight,
                            options: [
                                { label: 'Regular', value: '400' },
                                { label: 'Medium', value: '500' },
                                { label: 'Bold', value: '700' },
                            ],
                            onChange: (value) => props.setAttributes({ fontWeight: value })
                        }),
                        el(SelectControl, {
                            label: 'Text Transform',
                            value: props.attributes.textTransform,
                            options: [
                                { label: 'Uppercase', value: 'uppercase' },
                                { label: 'Lowercase', value: 'lowercase' },
                                { label: 'Capitalize', value: 'capitalize' },
                                { label: 'None', value: 'none' }
                            ],
                            onChange: (value) => props.setAttributes({ textTransform: value })
                        })
                    )
                ),
                // anteprima live
                el('p', { ...blockProps, style: { 
                    fontWeight: props.attributes.fontWeight,
                    textTransform: props.attributes.textTransform
                } }, clientName)
            );
        },
        save: () => null // render dinamico via PHP
    });
} )( window.wp.blocks, window.wp.element, window.wp.blockEditor, window.wp.components );
