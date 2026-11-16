<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sima_Architecture_Interior
 */

?>

<section class="no-results not-found">


	 <!-- Title -->
		  
            <div class="col-md-12 text-center">

<div class="sec-head custom-font text-center">
	<h2 class="wow title-class" data-animate-effect="fadeInUp"><?php esc_html_e( 'Nothing Found', 'sima-architecture-interior' ); ?></h2>
	<span class="tbg" style="font-size: 6vw" data-animate-effect="fadeInUp"><?php esc_html_e( 'Nothing Found', 'sima-architecture-interior' ); ?></span>
</div> <!-- end tile 12 -->
</div> <!-- end column 12 -->

  <div class="mb-5"></div>

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sima-architecture-interior' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sima-architecture-interior' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sima-architecture-interior' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
