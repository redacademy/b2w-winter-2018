<?php

/* Template Name: About Page*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<h2> <span class="underline">What</span> <span class="title-norm">We're All About</span></h2>
			<div class="about-text">
				<?php echo CFS()->get( 'about_blurb' );?>
			</div>
		
		<section class="who-we-are-wrapper">
			<h2> <span class="underline">Who</span> <span class="title-norm">We Are</span></h2>
			<div class="employee-wrapper">
				<?php
					$fields = CFS()->get( 'employee' );
						foreach ( $fields as $field ) {
							?> <div class="person-container">
							<div class="emp-photo">
							<img src="<?php echo $field['employee_picture'] ?>">
						</div>
					<p class="emp-name"><?php	echo $field['employee_name']?></p> 
						</div>
						<?php
						}	
					?>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
