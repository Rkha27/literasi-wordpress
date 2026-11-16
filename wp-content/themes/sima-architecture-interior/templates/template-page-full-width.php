<?php 
/**
Template Name:Page Full Width
*/

get_header();
?>


<section id="primary" class="section-banner blog-section">
        <div class="container-fluid">
             <div class="row">

            <div class="col-md-12 text-center">

<div class="sec-head custom-font text-center">
	<?php the_title( '<h2 class="wow title-class" data-animate-effect="fadeInUp">', '</h2>' ); ?>
	<?php the_title( '<span class="tbg" style="font-size: 6vw" data-animate-effect="fadeInUp">', '</span>' ); ?>

</div> <!-- end column 12 -->
        </div>  <!-- end row -->
        
                <div class="col-lg-12">
                    <?php the_post(); ?>
                    <article class="post-items">
                        <div class="post-content">
                            <?php
                                the_content();
                            ?>
                        </div>
                    </article>					
                    <?php
						if( $post->comment_status == 'open' ) { 
							 comments_template( '', true ); // show comments 
						}
					?>
                </div>

             </div>   <!-- end row  -->
        </div>  <!-- end container  -->
    </section> <!-- end section -->
	
<?php get_footer(); ?>