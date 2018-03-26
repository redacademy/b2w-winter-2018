<?php
/**
 * The template for displaying the Contact Page.
 *
 * @package Bridge_2_Work
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">




			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="main-content">
						<?php the_content(); ?>
					</div>
						<?php echo CFS()->get( 'contact_form' );?>
					
					
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
				
				
			<?php endwhile; // End of the loop. ?>

		<div class="address-container">
			<div class="address-text">
				<?php echo CFS()->get( 'contact_address' );?>
			
			</div>
			<?php get_sidebar(); ?>
			<div class="map-container"><?php echo CFS()->get( 'contact_map' );?></div>
			
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
