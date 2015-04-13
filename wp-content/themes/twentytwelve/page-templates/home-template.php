<?php
/*
Template Name: Home page template
*/
get_header();
$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
		
?>
<div id="primary" class="site-content">
<?php 
    echo do_shortcode("[metaslider id=46]"); 
?>
   <div id="content" role="main">

			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				
				<?php get_template_part( 'content', 'home' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
  <iframe src="https://crossfit-krakow-cms.efitness.com.pl/kalendarz-zajec" width="100%" height="700px">
</div><!-- #primary -->
<?php get_footer(); ?>