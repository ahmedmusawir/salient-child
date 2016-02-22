<?php 
/**
 *
 * Template Name: About Page Template
 *
 */

?>

<?php get_header(); ?>

<?php nectar_page_header($post->ID); ?>

<div class="wrap">

	<section class="aboutpg-first-block">
	<img class="img-responsive pull-left" src="http://cheryl.local/wp-content/uploads/2016/02/cheryl-triangle.png" alt="">
	<!-- <img class="img-responsive pull-left" src="http://cheryl.local/wp-content/uploads/2016/02/cheryl-triangle-jpg.jpg" alt=""> -->
			
		<div class="container">
			
			<article class="col-xs-12 col-sm-10 col-md-8 about-content">

				<p class="about-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				
			</article>

		</div>


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