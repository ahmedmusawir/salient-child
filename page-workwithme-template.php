<?php 
/**
 *
 * Template Name: Work With Me Page Template
 *
 */

?>

<?php get_header(); ?>

<?php nectar_page_header($post->ID); ?>

<?php 
/**
 *
 * Work With Me Page ACF Variables
 *
 */
$a_piece_of_advice = get_field('a_piece_of_advice');

$search_my_site = get_field('search_my_site');

$subscribe_to_my_updates = get_field('subscribe_to_my_updates');

$get_with_the_program = get_field('get_with_the_program');

$book_me_as_a_speaker = get_field('book_me_as_a_speaker');

$join_my_brilliance_breakthrough = get_field('join_my_brilliance_breakthrough');

$join_my_small_group_masterminds = get_field('join_my_small_group_masterminds');

$hire_me_as_a_personal_coach = get_field('hire_me_as_a_personal_coach');

$further_assistance = get_field('further_assistance');

?>
<div class="wrap">

	<section class="workmepg-first-block">
	
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 ">			
				<article class="advice-content">

					<?php echo $a_piece_of_advice; ?>

				</article>

			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->

	</section>

<style type="text/css" media="screen">
	
.workmepg-second-block {
	 background: url(/wp-content/uploads/2016/02/workwithme-block-2-4.jpg) no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;		
}


</style>


	<section class="workmepg-second-block">
	
		<div class="container-fluid">

			<div class="col-xs-12 col-sm-6 col-md-6 ">	

				<article class="hrwoman-content">

					<?php echo $search_my_site; ?>


					<div class="search-form-container center-block">

						<?php echo get_search_form(); ?>

					</div>
				
					
				</article>

			</div> <!-- END COLS SIZES -->

			<div class="col-xs-12 col-sm-6 col-md-6 ">	

				<article class="hrwoman-content">

					<?php echo $subscribe_to_my_updates; ?>

				</article>

			</div> <!-- END COLS SIZES -->			

		</div> <!-- END CONTAINER -->


	</section>

	<section class="workmepg-third-block">
	
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 ">			
				<article class="advice-content">

					<?php echo $get_with_the_program; ?>

					
				</article>

			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->

	</section>

<style type="text/css" media="screen">
	
.workmepg-fourth-block {
	 background: url("/wp-content/uploads/2016/02/workwithme-speaker-block-1.jpg") no-repeat top center fixed; 
}


</style>


	<section class="workmepg-fourth-block">
	
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 ">			
				<article class="advice-content">

					<?php echo $book_me_as_a_speaker; ?>


			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->

	</section>


	
	<section class="workmepg-fifth-block">
		<img class="" data-delay="1" data-animation="fade-in-from-right"   src="/wp-content/uploads/2016/02/workwithme-block-4.png" alt="">
	
		<div class="container">
			
			<div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-4">		
				
				<article class="brilliance-content">

					<?php echo $join_my_brilliance_breakthrough; ?>


				</article>

			</div> <!-- END COLS SIZES -->			
		</div> <!-- END CONTAINER -->

	</section>

	<section class="workmepg-sixth-block">
		<img class="right-img" data-delay="1" data-animation="fade-in-from-right"   src="/wp-content/uploads/2016/02/workwithme-block-4b.png" alt="">
	
		<div class="container">
			
			<div class="col-xs-12 col-sm-10 col-md-10">		
				
				<article class="strategy-content">

					<?php echo $join_my_small_group_masterminds; ?>
		
				</article>

			</div> <!-- END COLS SIZES -->			
		</div> <!-- END CONTAINER -->

	</section>

	<section class="workmepg-seventh-block">

<style type="text/css" media="screen">

.workmepg-seventh-block {

	 background: url(/wp-content/uploads/2016/02/workwithme-personal-coach-bg.jpg) no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;		
}

		
</style>	
	
		<div class="container">
			<div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-6 ">			
				<article class="advice-content">

					<?php echo $hire_me_as_a_personal_coach; ?>

					
				</article>

			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->

	</section>

<style type="text/css" media="screen">
	
.workmepg-eighth-block {
	background-image: url(/wp-content/uploads/2016/02/about-strategy-bg-block-1.jpg);

}

</style>


	<section class="workmepg-eighth-block">
	
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 ">			
				<article class="advice-content">

					<?php echo $further_assistance; ?>

			
				</article>

			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->

	</section>	
	<!-- <section class="workmepg-fifth-block"> -->

		<!-- <img class="pull-left hidden-xs img-with-animation" data-delay="1" data-animation="fade-in-from-right"   src="http://cheryl.local/wp-content/uploads/2016/02/cheryl-triangle-jpeg-perfect.jpg" alt=""> -->
		<!-- <img class="visible-xs" src="http://cheryl.local/wp-content/uploads/2016/02/cheryl-triangle-jpg-color-overlay-perfect.jpg" alt=""> -->
		<!-- <img class="img-responsive pull-left" src="http://cheryl.local/wp-content/uploads/2016/02/cheryl-triangle-jpg.jpg" alt=""> -->
			
		<!-- <div class="container">
			<div class="col-xs-12 col-sm-10 col-md-8 ">			
				<article class="about-content">

					<h1>About Cheryl Liew-Chng</h1>

					<p class="about-text">
					Cheryl Liew-Chng  is an in-demand international speaker, trainer, coach, and CEO/Founder of LifeWorkz—an Asian-based firm whose mission is to guide individuals in more effectively creating, redesigning, and transitioning to “lives most excellent.” Having served in leadership positions and navigated several career transitions in many industries—while also attending graduate school and raising three boys—Cheryl experienced challenges and eventually uncovered the secrets to a life of abundance and vibrancy. 

					</p>
					
				</article> -->

			<!-- </div> --> <!-- END COLS SIZES -->
		<!-- </div> --> <!-- END CONTAINER -->


	<!-- </section> -->
	

<!-- 	
	<div class="container main-content">
		
		<div class="row">
			
			<?php 
			 global $bp; 
			 if($bp && !bp_is_blog_page()) echo '<h1>' . get_the_title() . '</h1>'; ?>
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<?php the_content(); ?>
	
			<?php endwhile; endif; ?>
				
	
		</div>

	</div> -->
	<!--/container-->
	



</div>
<?php get_footer(); ?>