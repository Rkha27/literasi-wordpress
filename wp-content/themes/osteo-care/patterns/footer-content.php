<?php
/**
 * Title: Footer Section
 * Slug: osteo-care/footer-content
 * Categories: osteo-care, footer
 *
 * @package osteo-care
 * @since 1.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|primary","width":"1px"}}},"backgroundColor":"primary","layout":{"type":"constrained","wideSize":"100%","contentSize":"1200px"}} -->
<div class="wp-block-group has-primary-background-color has-background"
    style="border-top-color:var(--wp--preset--color--primary);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">
    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)">
        <!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/white-logo.png" alt=""
                style="object-fit:cover" /></figure>
        <!-- /wp:image -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
                <figure class="wp-block-image size-full is-style-default" style="margin-top:0;margin-bottom:0"><img
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/mail.svg" alt=""
                        style="object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} -->
                <p class="has-white-color has-text-color has-link-color has-medium-font-size"><?php echo esc_html__( 'osteocare@example.com', 'osteo-care' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
                <figure class="wp-block-image size-full is-style-default" style="margin-top:0;margin-bottom:0"><img
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2026/03/insta.svg" alt=""
                        style="object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} -->
                <p class="has-white-color has-text-color has-link-color has-medium-font-size"><?php echo esc_html__( '@osteocare', 'osteo-care' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0"}},"border":{"top":{"color":"var:preset|color|base","width":"1px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"
        style="border-top-color:var(--wp--preset--color--base);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:0">
        <!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} -->
        <p class="has-text-align-right has-white-color has-text-color has-link-color has-medium-font-size"><?php echo esc_html__( 'Copyright @ Osteocare', 'osteo-care' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
