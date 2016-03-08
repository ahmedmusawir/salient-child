<?php 
/**
 *
 * Template Name: About Page Template
 *
 */

?>

<?php get_header(); ?>

<?php nectar_page_header($post->ID); ?>

<?php 
/**
 *
 * About Page ACF
 *
 */
$top_about_section = get_field('top_about_section');

$the_impact_section = get_field('the_impact_section');

$about_the_24hour_woman = get_field('about_the_24hour_woman');

$the_strategy_section = get_field('the_strategy_section');

?>

<div class="wrap">

	<section class="aboutpg-first-block">
		<img class="pull-left hidden-xs img-with-animation" data-delay="1" data-animation="fade-in-from-right"   src="/wp-content/uploads/2016/02/cheryl-triangle-jpeg-perfect.jpg" alt="">
		<img class="visible-xs" src="http://cheryl.local/wp-content/uploads/2016/02/cheryl-triangle-jpg-color-overlay-perfect.jpg" alt="">
		<!-- <img class="img-responsive pull-left" src="http://cheryl.local/wp-content/uploads/2016/02/cheryl-triangle-jpg.jpg" alt=""> -->
			
		<div class="container">
			<div class="col-xs-12 col-sm-10 col-md-8 ">			
				<article class="about-content">

					<?php echo $top_about_section; ?>

				</article>

			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->


	</section>
	<section class="aboutpg-second-block">
	
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 ">			
				<article class="impact-content">

					<?php echo $the_impact_section; ?>

				</article>

			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->

	</section>

<style type="text/css" media="screen">
	
	.aboutpg-third-block {
	 background: url("/wp-content/uploads/2016/02/about24hr-woman-bg.jpg") no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;	

	}

</style>


	<section class="aboutpg-third-block">
	
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 ">			
				<article class="hrwoman-content">

					<?php echo $about_the_24hour_woman; ?>

				</article>

			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->

	</section>

	<section class="aboutpg-fourth-block">
	
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 ">			
				<article class="strategy-content">

					<?php echo $the_strategy_section; ?>
					
				</article>

			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->

	</section>




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