(function (wp) {

    const { registerFormatType, applyFormat, removeFormat, getActiveFormat } = wp.richText;
    const { RichTextToolbarButton } = wp.blockEditor || wp.editor;
    const { Popover, Button, ButtonGroup, MenuGroup, MenuItem } = wp.components;
    const { __ } = wp.i18n;
    const { createElement, Fragment, useState } = wp.element;

    const name = 'osteo-care/font-family';

    registerFormatType(name, {
        title: __('Font Family', 'osteo-care'),
        tagName: 'span',
        className: 'has-font-family',
        attributes: {
            class: 'class',
        },
        edit: function (props) {
            const { isActive, value, onChange } = props;
            const [isVisible, setIsVisible] = useState(false);
            const toggleVisible = () => setIsVisible(!isVisible);

            const fonts = [
                { label: 'Crimson Pro', slug: 'crimson-pro' },
                { label: 'DM Sans', slug: 'dm-sans' },
                { label: 'Ubuntu', slug: 'ubuntu' },
                { label: 'System', slug: 'system' },
                { label: 'Serif', slug: 'serif' },
                { label: 'Monospace', slug: 'monospace' },
            ];

            const onSelect = (slug) => {
                if (!slug) {
                    onChange(removeFormat(value, name));
                } else {
                    onChange(applyFormat(value, {
                        type: name,
                        attributes: {
                            class: `has-font-family has-${slug}-font-family`,
                        },
                    }));
                }
                setIsVisible(false); // Close after select
            };

            const activeFormat = getActiveFormat(value, name);
            let activeSlug = '';
            if (activeFormat && activeFormat.attributes.class) {
                const match = activeFormat.attributes.class.match(/has-([a-z0-9-]+)-font-family/);
                if (match) {
                    const caught = match[1];
                    if (caught !== 'font') activeSlug = caught;
                }
            }

            return createElement(
                Fragment,
                {},
                createElement(
                    RichTextToolbarButton,
                    {
                        icon: 'awards',
                        title: __('Font Family', 'osteo-care'),
                        onClick: toggleVisible,
                        isActive: isActive || isVisible,
                    }
                ),
                isVisible && createElement(
                    Popover,
                    {
                        position: 'bottom center',
                        focusOnMount: 'container',
                        onClose: () => setIsVisible(false)
                    },
                    createElement(
                        'div',
                        { style: { padding: '10px', minWidth: '150px' } },
                        createElement(
                            ButtonGroup,
                            { style: { display: 'flex', flexDirection: 'column', gap: '5px' } },
                            createElement(
                                Button,
                                {
                                    isSecondary: true,
                                    isPressed: !activeSlug,
                                    onClick: () => onSelect('')
                                },
                                __('Default', 'osteo-care')
                            ),
                            fonts.map((font) => (
                                createElement(
                                    Button,
                                    {
                                        key: font.slug,
                                        isSecondary: true,
                                        isPressed: activeSlug === font.slug,
                                        onClick: () => onSelect(font.slug),
                                        style: { fontFamily: `var(--wp--preset--font-family--${font.slug})` }
                                    },
                                    font.label
                                )
                            ))
                        )
                    )
                )
            );
        },
    });
})(window.wp);
