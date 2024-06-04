<?php

/**
 * Template name: HOME
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */
get_header(); ?>
<section class="main-slider-top">
	<div class="main-slider">
		<div class="swiper-container mainswiper">
			<div class="swiper-wrapper">
<?php if(have_rows('slider')): while (have_rows('slider')) : the_row(); $image = get_sub_field('image'); $imagelink = get_sub_field('link'); ?>
				<div class="swiper-slide"><a href="<?php echo $imagelink['url']; ?>" target="<?php echo $link_target; ?>"><img src="<?php echo $image['url']; ?>" alt="slider"></a></div>
<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="swiper-button-next -dark"></div>
		<div class="swiper-button-prev -dark"></div>
	</div><!-- /main-slider -->
</section>
<?php echo do_shortcode('[latest_product]'); ?>	

<section class="inquiryform">
	<div class="container">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<h2>Contact Us</h2>
		<?php echo do_shortcode('[gravityform id="5" title="false" description="false" ajax="true"]'); ?>
	</div>
</section>
<?php get_footer(); ?>