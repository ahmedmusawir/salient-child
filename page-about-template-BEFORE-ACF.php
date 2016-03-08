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
		<img class="pull-left hidden-xs img-with-animation" data-delay="1" data-animation="fade-in-from-right"   src="/wp-content/uploads/2016/02/cheryl-triangle-jpeg-perfect.jpg" alt="">
		<img class="visible-xs" src="http://cheryl.local/wp-content/uploads/2016/02/cheryl-triangle-jpg-color-overlay-perfect.jpg" alt="">
		<!-- <img class="img-responsive pull-left" src="http://cheryl.local/wp-content/uploads/2016/02/cheryl-triangle-jpg.jpg" alt=""> -->
			
		<div class="container">
			<div class="col-xs-12 col-sm-10 col-md-8 ">			
				<article class="about-content">

					<h1>About Cheryl Liew-Chng</h1>

					<p class="about-text">
					Cheryl Liew-Chng  is an in-demand international speaker, trainer, coach, and CEO/Founder of LifeWorkz—an Asian-based firm whose mission is to guide individuals in more effectively creating, redesigning, and transitioning to “lives most excellent.” Having served in leadership positions and navigated several career transitions in many industries—while also attending graduate school and raising three boys—Cheryl experienced challenges and eventually uncovered the secrets to a life of abundance and vibrancy. 

					</p>
					
				</article>

			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->


	</section>
	<section class="aboutpg-second-block">
	
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 ">			
				<article class="impact-content">

					<h1>The Impact</h1>

					<p class="about-text">
			
					Today, as a global thought leader and entrepreneur, Cheryl guides high-level executives, entrepreneurs, professionals, and stay-at-home moms in activating their potential—inspiring them to greater personal and professional fulfillment. Her clients include individuals and corporations such as the Singapore Government, BP Lubricants Asia Pacific, Maybank, Royal Plaza on Scotts, Deutsche Bank, Bloomberg, and the Estee Lauder Group. In 2011, she was honored with the distinguished Global HR Excellence Award by the World HRD Congress. Learn more about Cheryl’s programs, or join her online community at The24HourWoman.com.

					</p>
					<p>
						For immediate response to all media inquiries, please <a class="btn btn-primary" href="http://cheryl.local/contact/" title="">Contact</a>
					</p>
					
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

					<h1>About The 24-Hour Woman</h1>

					<p class="about-text">
			
					The 24-Hour Woman was founded on the belief that women who know who they are and what they want can engage in the joys and vibrancy of life. The24HourWoman.com platform is designed to help women all across the globe to consciously design and transform the way they live and work so they thrive in life—whether as women leaders or those seeking a healthier work-life balance.
					Headquartered in Singapore (Asia), The24HourWoman.com platform is uniquely positioned to reach and engage women in both the East and West with leadership seminars and support.Recent demographic, social, and economic trends have created amazing new career and business opportunities for women. While this is wonderful for women, it also presents significant challenges for individuals, businesses, families, and communities.					

					</p>
					<p>
						<!-- For immediate response to all media inquiries, please <a class="btn btn-primary" href="http://cheryl.local/contact/" title="">Contact</a> -->
					</p>
					
				</article>

			</div> <!-- END COLS SIZES -->
		</div> <!-- END CONTAINER -->

	</section>

	<section class="aboutpg-fourth-block">
	
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 ">			
				<article class="strategy-content">

					<h1>The Strategy</h1>

					<p class="about-text">
			
					Empowering women for greater success in work, business, family and personal effectiveness…. in areas that matters.
The only way women can thrive amidst these changes is by tuning into their authentic selves. The 24-Hour Woman inspires women to embrace a vision of excellent living wherein they win both in career and life arenas.Our programs include a variety of live and virtual events, products, mentoring, and community-building activities amongst like-minded individuals who also desire vibrant and fulfilling lives.Our approach and programs are built for you to THRIVE as women in business and life. We offer:

					</p>

					<ul class="about-list">
						<li>Time-tested success principles to increase personal effectiveness</li>
						<li>a Hands on approach</li>
						<li>guidance in finding your Reasons to achieve</li>
						<li>Inspiration for a vibrant and joyous life</li>
						<li>coaching to create your life Vision</li>
						<li>help in Evolving your plans towards your destination</li>
					</ul>


					<p class="about-text">
						Now is the time for you to StepUp and lead. The opportunities are unprecedented so THRIVE.
Claim your success.Join the The24HourWoman community through our programs and events—including leadership training for women. I look forward to working with you. It is my desire to see you influence and impact your world.
					</p>
					
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