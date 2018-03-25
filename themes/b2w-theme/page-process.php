<?php
/**
 * The template for displaying the Process Page.
 *
 * @package Bridge_2_Work
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
				<div class="candidate-requirements">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php echo CFS()->get( 'candidate_requirements' );?>
				</div><!-- .entry-content -->
			</section><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

			<div class="workshops-promo">
				<?php echo CFS()->get( 'workshop_pre_reqs' );?>
			</div>

			<section class="job-placement">
				<h1>Job Placements</h1>
				<p>Here's what our candidates will gain form the hiring process.</p>
				<div class="placement-content">
					<div class="img-container"><img src="<?php echo CFS()->get( 'job_placement_photo' ); ?>" alt=""/></div>
					
					<div class="boxes-container">
						<?php
						$fields = CFS()->get( 'job_placement' );
						
						foreach ( $fields as $key=>$field ) {?>
						<div class="box box-<?php echo $key ?>">
							<h3><?php echo $field['box_title'];?></h3>
							<p> <?php echo $field['box_text'];?> </p>
						</div>

							<?php
							}
							?>
					</div>
				</div>
			</section>


			<div class="contact">
				<a href="<?php echo wp_make_link_relative('http://localhost:3000/bridge-2-work/contact-us/');?>" class="btn-solid">Get in Contact</a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
