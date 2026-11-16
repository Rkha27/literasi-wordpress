<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sima_Architecture_Interior
 */

get_header();
?>

    <!-- INNER PAGE BANNER -->
            <header class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center bg-img" data-stellar-background-ratio="0.5" data-overlay-dark="2" style="<?php if ( has_post_thumbnail() ) : ?>
        background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>);
    <?php endif; ?>">
                    <div class="overlay-main bg-black opacity-07"></div>
            
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">
                            <?php the_title(); ?>
							</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
									<li><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>                                  <li>
										<?php
										$categories = get_the_category();
										if ( ! empty( $categories ) ) {
											echo esc_html( $categories[0]->name );
										}
										?>
									</li>
                                </ul>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </header>
            <!-- INNER PAGE BANNER END -->

<section id="primary" class="blog section-padding">
         <div class="container">  
		
		 <div class="row">
		 <div class="col-md-8 animate-box">
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'sima-architecture-interior' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'sima-architecture-interior' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</div> <!-- #end col -->
	<div class="col-lg-4 animate-box">
		<div class="sima-sidebar-part sidebar"><?php get_sidebar(); ?></div>
   </div> <!-- #end column -->

 </div> <!-- #end row -->
    </div> <!-- #end container -->
	</section><!-- #end blog -->

	<?php get_footer();