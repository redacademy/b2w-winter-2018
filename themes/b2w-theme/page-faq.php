<?php
/**
 * The template for displaying the FAQ Page.
 *
 * @package Bridge_2_Work
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			<button id="test">click me!</button>

			<section class="faq">
				<?php
				$fields = CFS()->get( 'frequently_asked_questions' );
				foreach ( $fields as $field ) {?>
					<article class="faq-set">
						<h4 class="faq-question"><?php echo $field['faq_question'];?> </h4>
						<span class="faq-plus">+</span>
						<span class="faq-minus">-</span>
						<div class="faq-answer"><?php echo $field['faq_answer']; ?> </div>
					</article>
				<?php
				}
				?>
			</section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
