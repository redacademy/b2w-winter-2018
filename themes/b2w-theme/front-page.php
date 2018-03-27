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
				<h2 class="hero-text"><?php echo CFS()->get ( 'front_page_header_text' )?></h2>
				<a href="services/" class="btn">Learn How</a>
			</div>
		</section>

		<section class="info-text-container">
			<p class="front-page-info-text"><?php echo CFS()->get ( 'fp_info_text' ) ?></p>
		</section>

		<section>
		<h1>Our Services</h1>
		<div class="front-page-services">
					<div class="front-page-services-text">	
						<img src="<?php echo get_template_directory_uri() . '/images/paid-internship.svg' ?>">
							<div class="services-sub-text">
								<h5>Paid Internship</h5>
								<p><?php echo CFS()->get( 'services_paid' );?></p>
							</div>
						</div>
					<div class="front-page-services-text">
						<img src="<?php echo get_template_directory_uri() . '/images/temp-placement.svg' ?>">
							<div class="services-sub-text">
								<h5>Temp Placement</h5>
								<p><?php echo CFS()->get( 'services_placement' );?></p>
							</div>
						</div>
					<div class="front-page-services-text">
							<img src="<?php echo get_template_directory_uri() . '/images/permanant-placement.svg' ?>">
							<div class="services-sub-text">
								<h5>Temp to Placement</h5>
								<p><?php echo CFS()->get( 'services_permanent_placement' );?></p>
					</div>
				</div>
		</section>

		<section class="fp-container">
			<div class="front-page-stats-box">
				<div class="front-page-stats">
					<h2><?php echo CFS()->get( 'fp_stats' );?></h2>
					<p><?php echo CFS()->get( 'fp_stats_text' );?></p>
				</div>
				<div class="front-page-stats">
					<h2 id="value"><?php echo CFS()->get ( 'fp_stats2' ) ?></h2>
					<p><?php echo CFS()->get ( 'fp_stats_text2' ) ?></p>
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
						<div class="front-page-testimonials-container">
							<div class="front-page-testimonials">
								<img src="<?php echo $authorPhoto?>">
								<div class="testimonial-text">
								<?php echo $authorText?>
								<div class="testimonial-sub-text">
									<h5><?php echo $authorName?></h5>
									<p><?php echo $authorPosition?></p>
								</div>
								</div>
							</div>
							<?php
						}
					?>
						</div>
					</div>

			<div class="testimonial-button">		
				<a href="services/" class="btn">Learn How</a>
			</div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
