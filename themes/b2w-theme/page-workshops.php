<?php
/**
 * The template for displaying the Workshops Page.
 *
 * @package Bridge_2_Work
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php $backgroundImg = get_the_post_thumbnail_url(  ); ?>
				<?php endif; ?>	

				<header class="entry-header" style=" background: linear-gradient(to right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php echo $backgroundImg ?>'); background-size: cover;">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="workshop-intro">
					<?php the_content(); ?>
				</div><!-- .workshop-intro -->
				<ol class="workshops">
					<?php
						$fields = CFS()->get( 'workshops' );
						
						foreach ( $fields as $key=>$field ) {
							$workshopIcon = $field['workshop_icon'];
							$workshopTitle = $field['workshop_title'];
							$workshopContent = $field['workshop_content'];?>
							<li>
								<div class="workshop-header">
									<img src="<?php echo $workshopIcon ?>" alt="workshop icon" class="workshop-icon">
									<h2 class="workshop-title"><span class="workshop-number">0<?php echo $key+1 ?>.</span><?php echo $workshopTitle ?></h2>
								</div>
								<p class="workshop-content"><?php echo $workshopContent ?></p>
							</li>
							
						<?php
						}
					?>
				</ol><!--end .workshop-learnings -->
			</article><!-- #post-## -->	

			<?php endwhile; // End of the loop. ?>

			
			<div class="contact">
				<a href="<?php echo wp_make_link_relative('http://localhost:3000/bridge-2-work/contact-us/');?>" class="btn-solid">Get in Contact</a>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
