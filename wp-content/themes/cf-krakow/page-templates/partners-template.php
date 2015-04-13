<?php
/*
Template Name: Partners page template
*/
get_header();
$myposts = new WP_Query( array(
    'tax_query' => array(
        array(                
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 
                'post-format-gallery',
            ),
        )
    )
) );

?>
<div id="primary" class="site-content">
	
	<div id="content" role="main">
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<div class="thumbnail_wrapper"> <?php the_post_thumbnail(); ?> </div>
				<?php the_content();?> 
			<?php endwhile; // end of the loop. ?>



<?php if ( $myposts->have_posts() ) : while ( $myposts->have_posts() ) : $myposts->the_post(); ?>
	
     <?php get_template_part( 'content', 'partners' ); ?>

<?php endwhile; endif; ?>

<?php wp_reset_postdata(); ?>

	
	</div>
</div><!-- #primary -->
<?php get_footer(); ?>