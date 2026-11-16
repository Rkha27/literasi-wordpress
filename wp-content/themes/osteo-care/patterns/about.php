<?php
/**
 * Title: About Section
 * Slug: osteo-care/about
 * Categories: osteo-care, featured
 * Keywords: about, features, stats
 *
 * @package osteo-care
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" id="about"
    style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
    <!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"0"},"blockGap":{"left":"var:preset|spacing|20"},"margin":{"bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-bottom:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"0"},"blockGap":"0"},"@mobile":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"0"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center"
            style="padding-right:var(--wp--preset--spacing--80);padding-left:0;flex-basis:66.66%">
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"primary","fontSize":"large"} -->
            <p class="has-primary-color has-text-color has-link-color has-large-font-size"
                style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500"><?php esc_html_e('WHAT WE DO', 'osteo-care'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40","right":"0","left":"0"}}}} -->
            <h2 class="wp-block-heading"
                style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--40);margin-left:0"><?php esc_html_e('Your body has the power to', 'osteo-care'); ?> <span class="has-font-family has-font-family has-crimson-pro-font-family"><em><?php esc_html_e('heal itself', 'osteo-care'); ?></em></span></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray","fontSize":"medium"} -->
            <p class="has-light-gray-color has-text-color has-link-color has-medium-font-size"
                style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e('Osteopathy is a system of healthcare that emphasises the interrelationship between the body\'s structure and function. Through skilled, gentle touch, we identify restrictions, imbalances, and tensions and help your body resolve them.', 'osteo-care'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Book a Visit', 'osteo-care'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
            <!-- wp:image {"id":50,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img
                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/physiotherapist.png"
                    alt="" class="wp-image-50" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70"},"margin":{"top":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;padding-top:var(--wp--preset--spacing--70)">
        <!-- wp:column {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"white"} -->
        <div class="wp-block-column has-white-background-color has-background"
            style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading -->
                    <h2 class="wp-block-heading"><?php esc_html_e('2k+', 'osteo-care'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
                    <p class="has-light-gray-color has-text-color has-link-color"><?php esc_html_e('Happy patients', 'osteo-care'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-base-background-color has-background"
                    style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                    <!-- wp:image {"id":26,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/group.svg" alt=""
                            class="wp-image-26" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"white"} -->
        <div class="wp-block-column has-white-background-color has-background"
            style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading -->
                    <h2 class="wp-block-heading"><?php esc_html_e('98%', 'osteo-care'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
                    <p class="has-light-gray-color has-text-color has-link-color"><?php esc_html_e('Satisfaction rate', 'osteo-care'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-base-background-color has-background"
                    style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                    <!-- wp:image {"id":28,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/star.svg" alt=""
                            class="wp-image-28" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"white"} -->
        <div class="wp-block-column has-white-background-color has-background"
            style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading -->
                    <h2 class="wp-block-heading"><?php esc_html_e('5+', 'osteo-care'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
                    <p class="has-light-gray-color has-text-color has-link-color"><?php esc_html_e('Certified experts', 'osteo-care'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-base-background-color has-background"
                    style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                    <!-- wp:image {"id":27,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/stethoscope.svg" alt=""
                            class="wp-image-27" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
