<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sima_Architecture_Interior
 */

get_header();
?>

  		<!-- INNER PAGE BANNER -->
            <header class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center bg-img" data-stellar-background-ratio="0.5" data-overlay-dark="2" style="background-image: url(https://demo.pixelonetry.com/sima/wp-content/themes/sima/images/footer-bg2.jpg);">
                    <div class="overlay-main bg-black opacity-07"></div>
            
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                            <div class="banner-title-name">
							   <?php the_title( '<h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">', '</h2>' ); ?>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>
                                  <li>
                                     <?php echo esc_html( get_theme_mod( 'sima_blog_heading_subtitle', esc_html__('Current Reading', 'sima-architecture-interior') ) ); ?>                             </li>
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
			
		 <!-- Title -->
		  
            <div class="col-md-12 text-center">

<div class="sec-head custom-font text-center">
	<?php the_title( '<h2 class="wow title-class" data-animate-effect="fadeInUp">', '</h2>' ); ?>
	<?php the_title( '<span class="tbg" style="font-size: 6vw" data-animate-effect="fadeInUp">', '</span>' ); ?>
</div> <!-- end tile 12 -->
</div> <!-- end column 12 -->

  <div class="mb-5"></div>

	<div class="row">
		<div class="col-md-8 animate-box">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

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