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
					<div class="services-container-desktop">
					<div class="services-title-container">
						<h1>What We Do at B2W</h1>
							<div class="services-hide"><?php echo CFS()->get( 'services_info' );?></div>
					</div>
						<div class="services-hide-desktop">
							<?php echo CFS()->get( 'services_internship' );?>
							<?php echo CFS()->get( 'services_placement' );?>
							<?php echo CFS()->get( 'services_permanent' );?>
						</div>
						<img src="<?php echo CFS()->get( 'services_image' );?>">
					</div>

					<div class="services-container-desktop">
						<div class="hire-temp1">
							<h1>Why Hire Temp Staff?</h1>
								<?php echo CFS()->get( 'services_hire_temp' );?>
						</div>
								<img src="<?php echo CFS()->get( 'services_image2' );?>" class="hire-temp2">
					</div>

					<h1>What People Are Saying</h1>

					<div class="desktop-services">
						<div class="main-carousel">
							<?php
								$fields = CFS()->get( 'testimonial_loop' );
								foreach ( $fields as $field ) :
									$authorPhoto = $field['author_photo'];
									$authorName = $field['author_name'];
									$authorText = $field['testimonial_text'];
								?>

									<div class="carousel-cell service-page-testimonials">
										<div class="carousel-img-name">	
											<img src="<?php echo $authorPhoto?>">
											<h4><?php echo $authorName?></h4>
												</br>
										</div>
											<p><?php echo $authorText?></p>
									</div>
						<?php
						endforeach;
						?>
						</div>
					</div>

					<div class="mobile-services">
							<?php
								$fields = CFS()->get( 'testimonial_loop' );
								foreach ( $fields as $field ) :
									$authorPhoto = $field['author_photo'];
									$authorName = $field['author_name'];
									$authorText = $field['testimonial_text'];
								?>

									<div class="service-page-testimonials">
										<img src="<?php echo $authorPhoto?>">
											</br>
									<div class="mobile-services-text">
										<p><?php echo $authorText?></p>
										<h4><?php echo $authorName?></h4>
									</div>
								</div>
						<?php
						endforeach;
						?>
					</div>

				<div class="discover-button">
					<a href="process/" class="btn">Discover Our Process</a>
				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
