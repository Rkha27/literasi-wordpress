(function ($) {
    'use strict';

    /**
     * Logo Width
     */
    wp.customize('logo_width', function (value) {
        value.bind(function (newValue) {
            $('.logo img, .mobile-logo img').css(
                'max-width',
                newValue !== '' ? newValue + 'px' : ''
            );
        });
    });

    /**
     * Breadcrumb Minimum Height
     */
    wp.customize('breadcrumb_min_height', function (value) {
        value.bind(function (newValue) {
            $('.breadcrumb-area').css(
                'min-height',
                newValue !== '' ? newValue + 'px' : ''
            );
        });
    });

    /**
     * Breadcrumb Overlay Opacity
     */
    wp.customize('breadcrumb_bg_img_opacity', function (value) {
        value.bind(function (newValue) {
            $('.breadcrumb-area').each(function () {
                var opacity = newValue !== '' ? newValue : '0.6';

                $(this).css('--breadcrumb-overlay-opacity', opacity);
            });

            $('.breadcrumb-area:after').css(
                'opacity',
                newValue !== '' ? newValue : '0.6'
            );
        });
    });

    /**
     * Body Typography
     */
    wp.customize('elina_body_font_size', function (value) {
        value.bind(function (newValue) {
            $('body').css(
                'font-size',
                newValue !== '' ? newValue + 'px' : ''
            );
        });
    });

    wp.customize('elina_body_line_height', function (value) {
        value.bind(function (newValue) {
            $('body').css('line-height', newValue);
        });
    });

    wp.customize('elina_body_font_style', function (value) {
        value.bind(function (newValue) {
            $('body').css('font-style', newValue);
        });
    });

    wp.customize('elina_body_text_transform', function (value) {
        value.bind(function (newValue) {
            $('body').css('text-transform', newValue);
        });
    });

    /**
     * Heading Typography: H1-H6
     */
    for (var i = 1; i <= 6; i++) {

        (function (i) {

            var selector = 'h' + i;

            wp.customize(
                'elina_h' + i + '_font_size',
                function (value) {
                    value.bind(function (newValue) {
                        $(selector).css(
                            'font-size',
                            newValue !== '' ? newValue + 'px' : ''
                        );
                    });
                }
            );

            wp.customize(
                'elina_h' + i + '_line_height',
                function (value) {
                    value.bind(function (newValue) {
                        $(selector).css('line-height', newValue);
                    });
                }
            );

            wp.customize(
                'elina_h' + i + '_font_style',
                function (value) {
                    value.bind(function (newValue) {
                        $(selector).css('font-style', newValue);
                    });
                }
            );

            wp.customize(
                'elina_h' + i + '_text_transform',
                function (value) {
                    value.bind(function (newValue) {
                        $(selector).css('text-transform', newValue);
                    });
                }
            );

        })(i);
    }

})(jQuery);
