<?php
/**
 * Title: Why Choose Us Section
 * Slug: osteo-care/why-us
 * Categories: osteo-care, featured
 * Keywords: why us, choose us, features, benefits
 *
 * @package osteo-care
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" id="why-us"
    style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:image {"id":155,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img
                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/doc1.png" alt="" class="wp-image-155" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"primary","fontSize":"large"} -->
            <p class="has-primary-color has-text-color has-link-color has-large-font-size"
                style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500"><?php esc_html_e('WHY CHOOSE US', 'osteo-care'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40","right":"0","left":"0"}}}} -->
            <h2 class="wp-block-heading"
                style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--40);margin-left:0"><?php esc_html_e('Why people choose', 'osteo-care'); ?> <span
                    class="has-font-family has-font-family has-crimson-pro-font-family"><em><?php esc_html_e('us', 'osteo-care'); ?></em></span></h2>
            <!-- /wp:heading -->

            <!-- wp:list {"className":"is-style-check-list","style":{"typography":{"lineHeight":"1.6"}},"fontSize":"medium"} -->
            <ul style="line-height:1.6" class="wp-block-list is-style-check-list has-medium-font-size">
                <!-- wp:list-item -->
                <li><?php esc_html_e('Root Cause Focused', 'osteo-care'); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e('Extended, Unhurried Appointments', 'osteo-care'); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e('Whole-Person Care', 'osteo-care'); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e('Highly Qualified Practitioners', 'osteo-care'); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e('Measurable Progress, Every Session', 'osteo-care'); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e('Warm, Welcoming Environment', 'osteo-care'); ?></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
