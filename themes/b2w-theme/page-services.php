<?php
/**
 * The template for displaying the Services Page.
 *
 * @package Bridge_2_Work
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				
				<?php echo CFS()->get( 'services_internship' );?>
				<?php echo CFS()->get( 'services_placement' );?>
				<?php echo CFS()->get( 'services_permanent' );?>
				<img src="<?php echo CFS()->get( 'services_image' );?>">

				<h2>Why Hire Temp Staff?</h2>
				<?php echo CFS()->get( 'services_hire_temp' );?>
				<img src="<?php echo CFS()->get( 'services_image2' );?>">

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
