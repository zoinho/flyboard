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
				<div class="black_box">
					<h1><?php the_title();?></h1>
					<h6 class="subtitle"><?php echo get_post_meta(get_the_id(),'program_subtitle',true); ?></h6>			
				</div>
				<div class="program_image">
					<?php if (has_post_thumbnail()){
						 echo get_the_post_thumbnail();
					} ?>
				</div>
				<div class="program_description">
						<?php echo	$post->post_content; ?>
				</div>
		
	</article><!-- #post -->
