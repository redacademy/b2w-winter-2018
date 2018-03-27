<?php

/* Template Name: About Page*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="what-about-wrapper">
				<h2> <span class="underline">What</span> <span class="title-norm">We're All About</span></h2>
					<div class="about-text">
						<?php echo CFS()->get( 'about_blurb' );?>
					</div>
			</section>
		
			<section class="who-we-are-wrapper">
				<h2> <span class="underline">Who</span> <span class="title-norm">We Are</span></h2>
				<div class="employee-wrapper">
					<?php
						$fields = CFS()->get( 'employee' );
							foreach ( $fields as $key=>$field ) {

								$employeePicture = $field['employee_picture'];
								$employeeName = $field['employee_name'];
								$employeeText = $field['employee_text'];

					?>	<div class="person-wrap">
								<div class="emp-photo photo-<?php echo $key ?>">
									<button class="emp-info-button emp-button-<?php echo $key ?>">
										<img src="<?php echo $employeePicture ?>">
									</button>
								</div>
								<h3 class="emp-name"><?php	echo $employeeName ?></h3> 
							</div>

							<div class= "text-wrap text-name-<?php echo $key ?>">
								<h3> <?php echo $employeeName ?> </h3>
								<?php echo $employeeText?>
							</div>
						<?php
							}	
					?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
