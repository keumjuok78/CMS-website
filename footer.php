<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer">
			<?php get_sidebar( 'main' ); ?>
			<?php get_sidebar("secondary"); ?>
			<div class="footer-flex">
				<div class="footer-details">
					<p>Contact Reah’s Alterations,<br>
                    Tailor in Lower Hutt<br>
                    Address: 102 High Street, CBD, Lower Hutt 5010<br>
                    Phone: 04 570 1105</p>
</div>

			</div>


			<div class="site-info">


				Copyright © <?php echo date('Y'); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	

	<?php wp_footer(); ?>
</body>
</html>
