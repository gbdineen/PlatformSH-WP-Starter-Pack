<?php

/**
 * Template name: Custom Solutions Page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>

<section class="second_banner section">
    <div class="container">
		<?php 

				$title = get_field('page_title');
				$sub_title = get_field('page_sub_title');
				
				if (!empty($title) || !empty($sub_title)) {
					?>
					<div class="row "><div class="col-12">
						
							<div class="writen-conten">
								<?php if (!empty($title)) { ?>
									<h1 class="title-top"><?php echo get_field('page_title'); ?></h1>
								<?php } ?>
								<?php if (!empty($sub_title)) { ?>
									<em class="sub-title-top"><?php echo get_field('page_sub_title'); ?></em>
							   <?php } ?>    
								<p><?php echo get_field('contact_details'); ?></p>
							   
							</div>
						</div>
					</div> 
			<?php } ?>
        
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
			<div class="fluid-content">
				<?php 
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
							echo the_content();
							//the_field('products');
						endwhile; 
					endif; 
				?>
			
			</div>
			</div>
			<!-- / of col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 -->
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<ul class="list-unstyled all-images">
				<?php

				// check if the repeater field has rows of data
				if( have_rows('sidebar_image') ):

					// loop through the rows of data
					while ( have_rows('sidebar_image') ) : the_row();
					$image = get_sub_field('image');
					//print_r($image);
					?>
					<li>
						<figure>
							<img class="img-fluid w-100" src="<?php echo $image['url']; ?>" alt="">
						</figure>
					</li>
					<?php
						// display a sub field value
						

					endwhile;

				else :

					// no rows found

				endif;
			?>
			</ul>
			</div>
			<!-- / of col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 -->

		</div>
		
		
    </div>
</section>
<section class="cover-form">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Get in Touch</h2>
				<h5 style="color:#fff; ">Thank you for your interest in NORDOCK<span class='copyright'>®</span>. Please complete the form below and a NORDOCK<span class='copyright'>®</span> Sales Representative will contact you.</h5>
			</div><!-- /col-12 -->
		</div><!-- /row -->
		<div class="row">
			<div class="col-12">
					<?php echo do_shortcode('[gravityform id=4 title=false]');?>
			</div><!-- /col-12 -->
		</div><!-- /row -->
	</div><!-- /container -->
</section>

<?php echo do_shortcode('[latest_product]'); ?>	
<section class="section box-menu">
	<div class="container">
		<?php dynamic_sidebar( 'product-section' ); ?>
		<?php //dynamic_sidebar( 'guarantee-section' ); ?>
	</div>
</section>
<?php               
get_footer();

?>  