<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                                <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">
                              <?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'sima-architecture-interior' ), '<span>' . get_search_query() . '</span>' );
					?>
							</h2>
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
	

	<div class="row">
		<div class="col-md-8 animate-box">

		<?php if ( have_posts() ) : ?>
			  <div class="row">
            <div class="col-md-12 text-center">

<div class="sec-head custom-font text-center">
	<?php
		/* translators: %s: search query. */
		printf( esc_html__( 'Search Results for: %s', 'sima-architecture-interior' ), '<span class="tbg" style="font-size: 3vw" data-animate-effect="fadeInUp">' . get_search_query() . '</span>' );
	?>

</div> <!-- end tile 12 -->
</div> <!-- end column 12 -->
        </div>  <!-- end row -->

				<div class="mb-5"></div>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	
	</div> <!-- #end col -->
	<div class="col-lg-4 animate-box">
		<div class="sima-sidebar-part sidebar"><?php get_sidebar(); ?></div>
   </div> <!-- #end column -->

 </div> <!-- #end row -->
    </div> <!-- #end container -->
	</section><!-- #end blog -->

	<?php get_footer();