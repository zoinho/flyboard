<?php
/*
Template Name: Home page template
*/
get_header();
/*$myposts = new WP_Query( array(
    'tax_query' => array(
        array(                
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 
                'post-format-gallery',
            ),
        )
    )
) );*/
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
	<!-- <div class="scroll-wrapper main" style="">
	<iframe class="mobileSchedule" src="https://cf-krakow.cms.efitness.com.pl/kalendarz-zajec" width="100%" height="700px" ></iframe>	
	</div> -->

	<div id="content" role="main" class="main">
		
<?php if ( $myposts->have_posts() ) : while ( $myposts->have_posts() ) : $myposts->the_post(); ?>

     <?php get_template_part( 'content', 'home' ); ?>
	
<?php endwhile; endif; ?>

<?php wp_reset_postdata(); ?>

	</div>
	
	
</div>

	

<?php get_footer(); ?>