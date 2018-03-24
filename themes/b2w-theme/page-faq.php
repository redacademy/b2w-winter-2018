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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php $backgroundImg = get_the_post_thumbnail_url(  ); ?>
				<?php endif; ?>	

				<header class="entry-header" style=" background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $backgroundImg ?>'); background-size: cover;">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<?php get_search_form(); ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
				

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
			
			<div class="faq-contact">
				<p>Have a question you can't find?</p>
				<a href="" class="btn">Learn How</a>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
