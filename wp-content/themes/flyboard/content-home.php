 <?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
  
?>



	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
		
		<div class="black_box">
			<span class="icon-wrapper">
				<i class="icon-"></i>
			</span>
			<div class="black_background"></div>
			<?php the_post_thumbnail(); ?>
			
		</div><!-- .entry-content -->
		<div class="news_content">
					<?php the_excerpt(); ?>
			</div>
		</div>
			
	</article><!-- #post -->
