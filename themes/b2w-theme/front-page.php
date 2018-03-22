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
				<h1 class="hero-text">Be The Difference.</h1>
				<button class="btn">Learn How</button>
			</div>
		</section>

		<section>
			<p class="front-page-info-text">We help create economic empowerment and a thriving life for mothers and their children on their journey to financial stability.</p>
		</section>

		<section>
			<h2>Our Services</h2>
				<div class="front-page-services">
					<div class="front-page-services-text">	
						<img src="<?php echo get_template_directory_uri() . '/images/paid-internship.svg' ?>">
							<h5>Paid Internship</h2>
					</div>
					<div class="front-page-services-text">
							<img src="<?php echo get_template_directory_uri() . '/images/temp-placement.svg' ?>">
							<h5>Temp Placement</h2>
					</div>
					<div class="front-page-services-text">
							<img src="<?php echo get_template_directory_uri() . '/images/permanant-placement.svg' ?>">
							<h5>Temp to Placement</h2>
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
					<h2>32,000</h2>
					<p>single parents accessing income assistant in BC (May 2016)</p>
				</div>
			</div>
			<div class="front-page-stats">
				<h3>Most of them are single mothers.</h3>
			</div>
		</section>

		<section>
			<h2>What People Are Saying</h2>

				<?php
						$fields = CFS()->get( 'testimonial_loop' );
						foreach ( $fields as $field ) {
							$authorPhoto = $field['author_photo'];
							?><img src="<?php echo $authorPhoto?>">
							<?php
						}
					?>

				<?php
						$fields = CFS()->get( 'testimonial_loop' );
						foreach ( $fields as $field ) {
							$authorText = $field['testimonial_text'];
							?><?php echo $authorText?>
							<?php
						}
					?>

		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
