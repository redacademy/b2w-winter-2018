<?php
/**
 * The template for displaying the Contact Page.
 *
 * @package Bridge_2_Work
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="contact-text-container">
			<h2>Get in Touch</h2>
			<p>Our team is eager to learn about your staffing needs, email us today!</p>
			<img src="<?php echo get_template_directory_uri() . '/images/contact-mail.svg' ?>">
		</div>


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		<div class="contact-text-container">
			<h2>Address</h2>
		<div class="address-container">
			<p>910-409 Granville Street</p>
			<p>Vancouver, BC V6C 1A3</p>
		</div>
		<div class="phone-number-container">
			<h2>t&nbsp</h2>
			<p>604.566.4414</p>
		</div>

		<div class="map-container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.527719269591!2d-123.11672588431044!3d49.285345679331634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486718278c74303%3A0xb6e4579a0eaf41a4!2sThriving+Generations+Employment+Agency!5e0!3m2!1sen!2sca!4v1521753749272" width="400" height="300" frameborder="0" style="border:0" class="map"></iframe>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
