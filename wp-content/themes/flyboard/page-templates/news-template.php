<?php
/*
Template Name: News page template
*/
get_header();
$myposts = new WP_Query( array(
    'tax_query' => array(
        array(                
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 
                'post-format-aside',
                'post-format-audio',
                'post-format-chat',
                'post-format-gallery',
                'post-format-image',
                'post-format-link',
                'post-format-quote',
                'post-format-status',
                'post-format-video'
            ),
            'operator' => 'NOT IN'
        )
    )
) );
?>
<div id="primary" class="site-content">
	
	<div id="content" role="main">
	 <div class="thumbnail_wrapper"> 				
					 <?php echo get_the_post_thumbnail( $post->ID); ?>
				  </div>

<?php if ( $myposts->have_posts() ) : while ( $myposts->have_posts() ) : $myposts->the_post(); ?>

     <?php get_template_part( 'content', 'news' ); ?>

<?php endwhile; endif; ?>

<?php wp_reset_postdata(); ?>

	
	</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>