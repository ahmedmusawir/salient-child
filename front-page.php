<?php get_header(); ?>

<?php nectar_page_header($post->ID); ?>

<?php 
/**
 *
 * ACF Variables
 *
 */

/**
 *
 * Top Book and Infusion Block
 *
 */
$left_book_image_box = get_field('left_book_image_box');
$right_infusion_form_block = get_field('right_infusion_form_block');

/**
 *
 * Meet Cheryl Block
 *
 */
$meet_cheryl_content = get_field('meet_cheryl_content');

/**
 *
 * Black background photo block
 *
 */
$left_large_image = get_field('left_large_image');
$right_quote_block = get_field('right_quote_block');

/**
 *
 * Bottom Book Block
 *
 */
$left_book_image = get_field('left_book_image');
$right_text_and_form_content = get_field('right_text_and_form_content');

?>

<div class="wrap">
<!-- https://youtu.be/4XbHDR4kdBo -->
	<section class="frontpg-top-youtube-block">	
		<div class="container main-content">
			
			<div class="row">
				
			<!-- <iframe src="//www.youtube.com/embed/4XbHDR4kdBo?rel=0&amp;controls=0&amp;showinfo=0" width="840" height="360" frameborder="0"> -->
			<!-- <iframe src="//www.youtube.com/embed/9VsCWrn9p7Q?rel=0&amp;controls=0&amp;showinfo=0" width="840" height="360" frameborder="0"> -->
				
			</iframe>
		
			</div><!--/row-->
			
		</div><!--/container-->
  	</section>	

	<section class="frontpg-header-infusion-block">
		
		<div class="header-book-container container">
			<div class="row">
				<article class="col-xs-12 col-sm-12 col-md-6 header-book-block">

					<?php echo $left_book_image_box; ?>

				</article>
				<article class="col-xs-12 col-sm-12 col-md-6 header-infusion-form-container">
					<!-- HEADER INFUSION FORM CODE -->

					<?php echo $right_infusion_form_block; ?>

				</article>				
			</div>
		</div>
	
	</section>


<style type="text/css" media="screen">
	.frontpg-meet-cheryl-block {
		
		background-image: url("<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/02/about-strategy-bg-block-1.jpg");
	}
</style>

	<section class="frontpg-meet-cheryl-block">

		<div class="row">
			<article class="meet-cheryl-block container">

				<?php echo $meet_cheryl_content; ?>
				
				<?php echo do_shortcode( '[button color="accent-color" hover_text_color_override="#fff" size="medium" url="/about-cheryl-liew-chng/" text="Read More &gt;" color_override=""]' ); ?>

			</article>
		</div>
		
	</section>

	<section class="frontpg-photo-block">
		
		<article class="photo-container container">
			<div class="row">

				<aside class="photos col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<img class="img-responsive" src="<?php echo $left_large_image; ?>" alt="">
				</aside>
				<aside class="photo-text col-xs-12 col-sm-12 col-md-4 col-lg-4">

					<?php echo $right_quote_block; ?>

				</aside>
				
			</div>
		</article>

	</section>

	<section class="frontpg-socials-block">
		
		<div class="row">
		
			<article class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
				<div class="wpb_wrapper social-box">
					<div id="facebook">
						<a href="http://www.facebook.com/brendonburchardfan" target="_blank" class="social_panel"><h3 align="center">Get Daily Motivation</h3>
						<div class="wpb_wrapper">

							<?php if ( is_active_sidebar( 'frontpage-service-widget-1' ) ) : ?>

								<?php dynamic_sidebar( 'frontpage-service-widget-1' ); ?>

							<?php else : ?>

							<!-- This content shows up if there are no widgets defined in the backend. -->
												
							<div class="alert help">
								<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
							</div>

							<?php endif; ?>

					</div>
				</div>
			</article>	

			<article class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="wpb_wrapper social-box">
					<div id="youtube">
						<div class="wpb_wrapper">

							<a href="http://www.facebook.com/brendonburchardfan" target="_blank" class="social_panel"><h3 align="center">Watch Cheryl's Show</h3>

							<?php if ( is_active_sidebar( 'frontpage-service-widget-2' ) ) : ?>

								<?php dynamic_sidebar( 'frontpage-service-widget-2' ); ?>

							<?php else : ?>

							<!-- This content shows up if there are no widgets defined in the backend. -->
												
							<div class="alert help">
								<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
							</div>

							<?php endif; ?>

						</div>
					</div>
				</div>
			</article>	

			<article class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
				<div class="wpb_wrapper social-box">
					<div id="linkedin">
						<div class="wpb_wrapper">
							<a href="http://www.facebook.com/brendonburchardfan" target="_blank" class="social_panel"><h3 align="center">Connect With Cheryl Professionally</h3>

							<?php if ( is_active_sidebar( 'frontpage-service-widget-3' ) ) : ?>

								<?php dynamic_sidebar( 'frontpage-service-widget-3' ); ?>

							<?php else : ?>

							<!-- This content shows up if there are no widgets defined in the backend. -->
												
							<div class="alert help">
								<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
							</div>

							<?php endif; ?>
						</div>
					</div>
				</div>
			</article>							

				

		</div>

	</section>

	<section class="frontpg-vc-recent-post-block">
		
		<div class="container main-content">
		
			<div class="row">
				
				<?php 
				 //buddypress
				 global $bp; 
				 if($bp && !bp_is_blog_page()) echo '<h1>' . get_the_title() . '</h1>'; ?>
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					
					<?php the_content(); ?>
		
				<?php endwhile; endif; ?>
					
		
			</div><!--/row-->
			
		</div><!--/container-->

	</section>


	<section class="frontpg-book-block">
		
		<article class="book-container container">
			<div class="row">

				<aside class="book-photo col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<img class="img-responsive  img-with-animation" data-delay="1" data-animation="fade-in-from-left"  src="<?php echo $left_book_image; ?>" alt="">
				</aside>
				<aside class="book-text col-xs-12 col-sm-8 col-md-8 col-lg-8">

					<?php echo $right_text_and_form_content; ?>

				</aside>
				
			</div>
		</article>

	</section>	

</div> <!-- END OF WRAP -->
<?php get_footer(); ?>