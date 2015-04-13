<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
	
	<?php 
    echo do_shortcode("[metaslider id=46]"); 
?>
</div><!-- #page -->
	<footer id="colophon sticky_footer" role="contentinfo">
		<div class="site-info">
			<span class="card_accepted">Akceptujemy karty:</span>
		<span class="benefit multisport"></span>
		<span class="benefit oksystems"></span>
		<span class="benefit fitprofit"></span>
		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>
</html>