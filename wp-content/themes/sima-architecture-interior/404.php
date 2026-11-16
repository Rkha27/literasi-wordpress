<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Sima_Architecture_Interior
 */

get_header();
?>

	<div id="primary" class="blog section-padding">
         <div class="container">  
			<div class="row">
	<div class="col-md-12">

		<section class="error-404 not-found">

		<div class="sec-head custom-font text-center">
	<h2 class="wow title-class" data-animate-effect="fadeInUp"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sima-architecture-interior' ); ?></h2>
	<span class="tbg" style="font-size: 4vw" data-animate-effect="fadeInUp"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sima-architecture-interior' ); ?></span>
</div> <!-- end tile 12 -->
<div class="mb-5"></div>

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sima-architecture-interior' ); ?></p>

					<?php
					get_search_form();
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	 </div><!-- #end column -->
     </div><!-- #end row -->

		 </div><!-- #end container -->
     </div><!-- #main -->

<?php
get_footer();
