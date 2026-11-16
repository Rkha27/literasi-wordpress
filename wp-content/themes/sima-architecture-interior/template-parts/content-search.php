<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sima_Architecture_Interior
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 <div class="wrap">
  <?php sima_architecture_interior_post_thumbnail(); ?>

  		<div class="mb-5"></div>
 <div class="con">
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
		 <?php the_title( sprintf( '<div class="title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></div>' ); ?>
	</div><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	  <footer class="entry-footer">
		<?php sima_architecture_interior_entry_footer(); ?>
	  </footer><!-- .entry-footer -->
	  	</div>  <!-- end con -->
   </div> <!-- end wrap -->
</article><!-- #post-<?php the_ID(); ?> -->
