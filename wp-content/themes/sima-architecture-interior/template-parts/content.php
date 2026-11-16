<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sima_Architecture_Interior
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! is_singular() ) : ?>
    <div class="wrap">
  <?php endif; ?>

		<?php sima_architecture_interior_post_thumbnail(); ?>

		<div class="mb-5"></div>
				<?php if ( ! is_singular() ) : ?>
    <div class="con">
        <?php endif; ?>
	<div class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="date entry-meta">
				<?php
				sima_architecture_interior_posted_on(); 
				?>
				<span class="ti-tag"></span>
				<?php
				sima_architecture_interior_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php if ( is_singular() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<div class="title entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );
		endif;?>

</div><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( is_singular() ) :
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sima-architecture-interior' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		else :
			the_excerpt();
			echo '<div class="more"><a href="' . esc_url( get_permalink() ) . '" class="sr-button sr-button1 medium-button underline-text">' . esc_html__( 'Read More ', 'sima-architecture-interior' ) . '<i class="ti-arrow-right"></i></a></div>';
		endif;
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sima-architecture-interior' ),
				'after'  => '</div>',
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sima-architecture-interior' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sima_architecture_interior_entry_footer(); ?>
	</footer><!-- .entry-footer -->

		 <?php if( is_single() ) {?>
	<!-- .author-content -->
	<div class="author-post clearfix">
        <?php $avatar = get_avatar( get_the_author_meta( 'ID' ), $size = 75 ); ?>
        <?php if( $avatar ) : ?>
          <div class="author-image"> 
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo $avatar; ?></a>
          </div>
        <?php endif; ?>
        <div class="author-details">
        <h6><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></h6>
        <p><?php echo esc_html( get_the_author_meta('description') ); ?></p>
        </div> 
      </div> <!-- .author-content -->
	  <?php }?>

	<?php if ( ! is_singular() ) : ?>
		</div>  <!-- end con -->
  <?php endif; ?>

<?php if ( ! is_singular() ) : ?>
		</div> <!-- end wrap -->
  <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->