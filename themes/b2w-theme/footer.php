<?php
/**
 * The template for displaying the footer.
 *
 * @package Bridge_2_Work
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				</div><!-- .site-info -->
				
				<div class="footer-logo-widget-wrapper">
					<div class="footer-logo">
						<img src="<?php echo get_template_directory_uri() . '/images/B2W_logo_final.png'?>">
					</div>
				
					<div class="widget-container">
						<?php if ( is_active_sidebar( 'footer-sidebar') ) : ?>
							<?php dynamic_sidebar( 'footer-sidebar' ); ?>
						<?php endif; ?>
					</div>
				</div>

				<p class="footer-copy"> &copy; 2018 Bridge2Work - Thriving Generation Employment Agency CCC Inc. </p> 
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
