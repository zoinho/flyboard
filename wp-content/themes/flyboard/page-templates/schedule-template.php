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
  		<div class="scroll-wrapper " style="">
	<iframe class="mobileSchedule" src="https://cf-krakow.cms.efitness.com.pl/kalendarz-zajec" width="100%" height="700px" ></iframe>	
	</div>
		</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>