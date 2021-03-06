<?php
/*
Template Name: Team Template
*/
get_header();	
		
$myposts = new WP_Query( array(
    'tax_query' => array(
        array(                
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 
                'post-format-aside',
            ),
        )
    )
) );
?>
<div id="primary" class="site-content">

   <div id="content" class="team" role="main">
  <div class="thumbnail_wrapper"> 				
					 <?php echo get_the_post_thumbnail( $post->ID); ?>
				  </div>
				<?php echo $post->post_content ;?>
				
  <?php if ( $myposts->have_posts() ) : while ( $myposts->have_posts() ) : $myposts->the_post(); ?>

     <?php get_template_part( 'content', 'team' ); ?>

<?php endwhile; endif; ?>

<?php wp_reset_postdata(); ?>
    

				
			

		</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>