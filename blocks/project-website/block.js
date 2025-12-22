( function( blocks, element, blockEditor ) {
    const { createElement: el } = element;
    const { useBlockProps, RichText } = blockEditor;

    blocks.registerBlockType('tydedev/project-website', {
        title: 'Project Website',
        icon: 'admin-links',
        category: 'widgets',

        attributes: {
            linkText: {
                type: 'string'
            }
        },

        edit: (props) => {
            const { attributes, setAttributes } = props;
            const blockProps = useBlockProps();

            const meta = wp.data
                .select('core/editor')
                .getEditedPostAttribute('meta') || {};

            const url = meta.client_url || 'https://example.com';

            return el(
                RichText,
                {
                    tagName: 'a',
                    ...blockProps,
                    href: url,
                    value: attributes.linkText,
                    placeholder: 'Button title...',
                    onChange: (value) =>
                        setAttributes({ linkText: value }),
                    onClick: (e) => e.preventDefault()
                }
            );
        },

        save: () => null
    });
} )( window.wp.blocks, window.wp.element, window.wp.blockEditor );
