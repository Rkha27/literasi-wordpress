<?php
/**
 * Title: Hero Section
 * Slug: osteo-care/hero
 * Categories: osteo-care, featured
 * Keywords: hero, banner, header
 *
 * @package osteo-care
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"24px"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" id="home"
    style="padding-top:24px;padding-right:24px;padding-left:24px">
    <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/hero-banner.png","id":52,"dimRatio":50,"overlayColor":"primary","isUserOverlayColor":true,"sizeSlug":"large","align":"full","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"padding":{"top":"118px","bottom":"var:preset|spacing|70","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"@mobile":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover alignfull is-light"
        style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;padding-top:118px;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
        <img class="wp-block-cover__image-background wp-image-52 size-large" alt=""
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/hero-banner.png"
            data-object-fit="cover" /><span aria-hidden="true"
            class="wp-block-cover__background has-primary-background-color has-background-dim"></span>
        <div class="wp-block-cover__inner-container">
            <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60"}},"@mobile":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"0"}}}}} -->
            <div class="wp-block-columns"
                style="margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60)">
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
                        <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white"} -->
                        <h1 class="wp-block-heading has-white-color has-text-color has-link-color"
                            style="margin-top:0;margin-bottom:0"><?php esc_html_e('Recover Faster, Move Better & Stay Active', 'osteo-care'); ?> <span
                                class="has-font-family has-font-family has-crimson-pro-font-family"><em><?php esc_html_e('Your Path to Wellness.', 'osteo-care'); ?></em></span></h1>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} -->
                    <p class="has-white-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Experience personalized osteopathy care designed to relieve pain, improve mobility, and restore your body’s natural balance.', 'osteo-care'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-inverted"} -->
                        <div class="wp-block-button is-style-inverted"><a
                                class="wp-block-button__link wp-element-button"><?php esc_html_e('Get started', 'osteo-care'); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"@mobile":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}}}} -->
            <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"></div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"35%"} -->
                <div class="wp-block-column" style="flex-basis:35%">
                    <!-- wp:group {"className":"glass-effect","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group glass-effect"
                        style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">
                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:image {"id":98,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"53px"},"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"},"width":"2px"}},"borderColor":"white"} -->
                                <figure class="wp-block-image size-full has-custom-border"><img
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/1.jpg" alt=""
                                        class="has-border-color has-white-border-color wp-image-98"
                                        style="border-width:2px;border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;aspect-ratio:1;object-fit:cover" />
                                </figure>
                                <!-- /wp:image -->

                                <!-- wp:image {"id":99,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"53px"},"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"},"width":"2px"}},"borderColor":"white"} -->
                                <figure class="wp-block-image size-full has-custom-border"><img
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/3.jpg" alt=""
                                        class="has-border-color has-white-border-color wp-image-99"
                                        style="border-width:2px;border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;aspect-ratio:1;object-fit:cover" />
                                </figure>
                                <!-- /wp:image -->

                                <!-- wp:image {"id":100,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"53px"},"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"},"width":"2px"}},"borderColor":"white"} -->
                                <figure class="wp-block-image size-full has-custom-border"><img
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/2.jpg" alt=""
                                        class="has-border-color has-white-border-color wp-image-100"
                                        style="border-width:2px;border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;aspect-ratio:1;object-fit:cover" />
                                </figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"white"} -->
                                <h3 class="wp-block-heading has-white-color has-text-color has-link-color"
                                    style="padding-top:0;padding-bottom:0"><?php esc_html_e('10K +', 'osteo-care'); ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} -->
                                <p class="has-white-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Happy customers', 'osteo-care'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->
