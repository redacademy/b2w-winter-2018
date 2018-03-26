<?php
/**
 * The template file for displaying the Front-Page.
 *
 * @package Bridge_2_Work
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="front-page-hero">
			<div class="hero-text-container">
				<h2 class="hero-text">Be The Difference.</h2>
				<a href="services/" class="btn">Learn How</a>
			</div>
		</section>

		<section class="info-text-container">
			<p class="front-page-info-text">We help create economic empowerment and a thriving life for mothers and their children on their journey to financial stability.</p>
		</section>

		<section>
		<h1>Our Services</h1>
		<div class="front-page-services">
					<div class="front-page-services-text">	
						<img src="<?php echo get_template_directory_uri() . '/images/paid-internship.svg' ?>">
							<h5>Paid Internship</h5>
					</div>
					<div class="front-page-services-text">
							<img src="<?php echo get_template_directory_uri() . '/images/temp-placement.svg' ?>">
							<h5>Temp Placement</h5>
					</div>
					<div class="front-page-services-text">
							<img src="<?php echo get_template_directory_uri() . '/images/permanant-placement.svg' ?>">
							<h5>Temp to Placement</h5>
					</div>
				</div>
		</section>

		<section class="fp-container">
			<div class="front-page-stats-box">
				<div class="front-page-stats">
					<h2>1 in 5</h2>
					<p>children live in poverty and most them are from single parent homes.</p>
				</div>
				<div class="front-page-stats">
					<h2 id="value">32,000</h2>
					<p>single parents accessing income assistant in BC (May 2016)</p>
				</div>
			</div>
			<div class="front-page-stats">
				<h3>Most of them are single mothers.</h3>
			</div>
		</section>

		<section>
		<h1>What People Are Saying</h1>
					<?php
						$fields = CFS()->get( 'testimonial_loop' );
						foreach ( $fields as $field ) {
							$authorPhoto = $field['author_photo'];
							$authorText = $field['testimonial_text'];
							$authorName = $field['author_name'];
							$authorPosition = $field['author_position'];
							?>
							<div class="front-page-testimonials">
								<img src="<?php echo $authorPhoto?>">
								<?php echo $authorText?>
								<?php echo $authorName?>
								<?php echo $authorPosition?>
							</div>
							<?php
						}
					?>
			<div class="testimonial-button">		
				<a href="services/" class="btn">Learn How</a>
			</div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
