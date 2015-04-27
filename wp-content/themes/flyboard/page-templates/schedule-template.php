<?php
/*
Template Name: Schedule Template
*/
get_header();	

?>
<div id="primary" class="site-content">

   <div id="content" class="about_crossfit" role="main">

            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="thumbnail_wrapper"> <?php the_post_thumbnail(); ?> </div>
                <?php the_content();?> 
                
                

            <?php endwhile; // end of the loop. ?>

<iframe width="100%" height="1000px" src="http://superfly.rezervante.pl/"></iframe>
  		
		</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>