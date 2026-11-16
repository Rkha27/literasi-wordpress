<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sima_Architecture_Interior
 */

?>

 <?php 
  $footer_logo = get_theme_mod( 'footer_logo_img', get_template_directory_uri() . '/images/logo.png' ); 
  $footer_bg_img = get_theme_mod( 'footer_bg_img', get_template_directory_uri() . '/images/footer-bg.jpg' );  
  $footer_descrection = get_theme_mod( 'sima_footer_content_section_footer_descreption', 'Architecture-Studio is founded on the principle of collective creativity. Since its establishment, the firm has championed open dialogue, the exchange of ideas, teamwork, shared knowledge, and a unified passion for design.' ); 
  $footer_title = get_theme_mod( 'sima_footer_content_section_footer_title', 'GET IN TOUCH' ); 
  $footer_address = get_theme_mod( 'sima_footer_content_section_footer_adress', 'address: Beverly Hills, Los Angeles CA, USA' ); 
  $footer_phone = get_theme_mod( 'sima_footer_content_section_footer_phone', 'phone: +(123) 456 789' );
  $footer_email = get_theme_mod( 'sima_footer_content_section_footer_email', sprintf( __( 'e-mail: %s', 'sima-architecture-interior' ), 'info@example.com' ) ); 
 ?>

    <footer class="sima-footer_style2 default" style="background-image: url(<?php echo esc_url( $footer_bg_img ); ?>);">                      
		<div class="footer-content-outer">

			<div class="footer-top-content">
					<div class="sima-footer_style2-main-block">
							<div class="prague-logo">
				    <a href="<?php echo esc_url( home_url('/') ); ?>">
                          <img class="footer-logo" src="<?php echo esc_url( $footer_logo ); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">	
                      </a>
                      </div>	
								<div class="footer-main-content">
						<?php if ( ! empty( $footer_descrection ) ) : ?>
							<p><?php echo wp_kses_post( $footer_descrection ); ?></p>
						<?php endif; ?>                       
							</div>        							
								</div>
					

                      <div class="sima-footer_style2-info-block">
                                    <div class="sima-footer_style2-info-block">
            <div class="textwidget custom-html-widget">

                        <h6 class="footer-info-block-title">
						 <?php echo wp_kses_post( $footer_title ); ?>
					  </h6>
                
                <div class="footer-info-block-content">

                     <?php if ( ! empty( $footer_phone ) ) : ?>
                        <p>
                            <a href="tel:<?php echo esc_attr( $footer_phone ); ?>">
                                <?php echo esc_html( $footer_phone ); ?>
                            </a>
                        </p>
                    <?php endif; ?>

                    <?php if ( ! empty( $footer_email ) ) : ?>
                        <p>
                            <a href="mailto:<?php echo esc_attr( $footer_email ); ?>">
                                <?php echo esc_html( $footer_email ); ?>
                            </a>
                        </p>
                    <?php endif; ?>
                  <?php if ( ! empty( $footer_address ) ) : ?>
                    <p><?php echo esc_html( $footer_address ); ?></p>
                <?php endif; ?>
                </div>
            </div>
        </div>
                                    </div>

					</div>
								<div class="footer-bottom-content">

					<!-- Footer copyright -->
                          <div class="footer-copyright">
							<?php
    $sima_copyright = get_theme_mod('sima_copyright', sprintf( __('© 2026 - <span>%s</span> ALL RIGHTS RESERVED.', 'sima-architecture-interior'), get_bloginfo('name')));
    ?>
	    <p>
    <?php echo wp_kses_post( $sima_copyright ); ?> | 
    <a href="https://pixelonetry.com/downloads/sima-architecture-interior-wordpress-theme/">
        <span><?php echo esc_html__('Sima Architecture Interior', 'sima-architecture-interior'); ?></span>
    </a>
    | 
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sima-architecture-interior' ) ); ?>">
        <span>
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf( esc_html__( 'PROUDLY POWERED BY %s', 'sima-architecture-interior' ), 'WordPress' );
            ?>
        </span>
    </a>
</p>
         </div>
                        
										<!-- End footer copyright -->

                                                                                  
                    <div class="prague-social-nav">
            <div class="item">
                 <?php do_action( 'sima_social' ); ?>
            </div>
        </div>
                                		
				</div>
			</div>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
