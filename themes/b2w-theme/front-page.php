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
				<div>
					<img src="../../images/paid-internship.svg">
					<img src="../../images/permanant-placement.svg">
					<img src="../../images/paid-internship.svg">
				</div>
		</section>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
