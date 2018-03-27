<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bridge_2_Work
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try one of the links below?' ); ?></p>
				<div class="links">
					<a href="http://b2w.van.cp.academy.red/services/">Our Services</a>
					<a href="http://b2w.van.cp.academy.red/process/">Process</a>
					<a href="http://b2w.van.cp.academy.red/process/workshops/">Workshops</a>
					<a href="http://b2w.van.cp.academy.red/about/">About Us</a>
					<a href="http://b2w.van.cp.academy.red/about/faq/">FAQ</a>
					<a href="http://b2w.van.cp.academy.red/contact-us/">Contact Us</a>
				</div>
				

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
