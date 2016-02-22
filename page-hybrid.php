<?php 
/**
 *
 * Template Name: Hybrid Test Page
 *
 */

?>

<?php get_header(); ?>

<?php nectar_page_header($post->ID); ?>

<div class="container-wrap">
	
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
	

	<section class="frontpg-socials-block">
		
		<div class="row">
		
			<article class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="wpb_wrapper social-box">
					<div class="wpb_text_column wpb_content_element  social-callout">
						<div class="wpb_wrapper">
							<a href="http://www.facebook.com/brendonburchardfan" target="_blank" class="social_panel"><h3 align="center">Get Daily Motivation</h3>
				  <div style="width:200px;height:50px;margin:0 auto;"><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FBrendon-Burchard-Live-Love-Matter%2F141502009216768&amp;layout=standard&amp;show_faces=false&amp;width=200&amp;action=like&amp;colorscheme=light&amp;height=30" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:30px;" allowtransparency="true"></iframe></div></a>

						</div>
					</div>
				</div>
			</article>	

			<article class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="wpb_wrapper social-box">
					<div class="wpb_text_column wpb_content_element  social-callout">
						<div class="wpb_wrapper">
							<a href="http://www.facebook.com/brendonburchardfan" target="_blank" class="social_panel"><h3 align="center">Get Daily Motivation</h3>
				  <div style="width:200px;height:50px;margin:0 auto;"><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FBrendon-Burchard-Live-Love-Matter%2F141502009216768&amp;layout=standard&amp;show_faces=false&amp;width=200&amp;action=like&amp;colorscheme=light&amp;height=30" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:30px;" allowtransparency="true"></iframe></div></a>

						</div>
					</div>
				</div>
			</article>	

			<article class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="wpb_wrapper social-box">
					<div class="wpb_text_column wpb_content_element  social-callout">
						<div class="wpb_wrapper">
							<a href="http://www.facebook.com/brendonburchardfan" target="_blank" class="social_panel"><h3 align="center">Get Daily Motivation</h3>
				  <div style="width:200px;height:50px;margin:0 auto;"><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FBrendon-Burchard-Live-Love-Matter%2F141502009216768&amp;layout=standard&amp;show_faces=false&amp;width=200&amp;action=like&amp;colorscheme=light&amp;height=30" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:30px;" allowtransparency="true"></iframe></div></a>

						</div>
					</div>
				</div>
			</article>							

				

		</div>

	</section>
	


</div>
<?php get_footer(); ?>