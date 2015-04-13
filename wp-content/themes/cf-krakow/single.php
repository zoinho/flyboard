<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
		
		<div class="black_box">
					<h1><?php the_title(); ?></h1>

					<h6 class="subtitle"><?php echo the_date()."   |   "; echo the_time(); ?></h6>
							<?php the_post_thumbnail(); ?>
		<div class="news_content">
	
				<?php the_content();?> 
				</div>
		</div><!-- .entry-content -->
		</div>
			
	</article>

			<?php endwhile; // end of the loop. ?>


	

<?php get_footer(); ?>