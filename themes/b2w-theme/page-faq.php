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

			<section class="faq">
				<?php
				$fields = CFS()->get( 'frequently_asked_questions' );
				
				foreach ( $fields as $key=>$field ) {
					$faqQuestion = $field['faq_question'];
					$faqAnswer = $field['faq_answer'];?>

					<div class="faq-set">
						<a class="faq-question" href="#question-<?php echo $key ?>"><?php echo $faqQuestion ?><span class="faq-plus">+</span></a>

						<article id="question-<?php echo $key ?>" class="faq-answer">
							<?php echo $faqAnswer ?>
							<span class="faq-minus">-</span>
						</article><!--end .faq-answer -->
					</div><!--end .faq-question -->
				<?php
				}
				?>
			</section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
