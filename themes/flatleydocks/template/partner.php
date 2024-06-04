<?php

/**
 * Template name: Partner Page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>
<section class="content-about">	
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
							</div>
						</div>
					</div> 
			<?php } ?>
		<div class="row">
			<div class="col-12">
				<div class="writen-conten">
					
					<?php echo the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
	<section class="products section">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-12">
				
					<div class="partners-list">
						<ul class="list-unstyled row">
							<?php

							// check if the repeater field has rows of data
							if( have_rows('partner') ):

								// loop through the rows of data
								while ( have_rows('partner') ) : the_row();

									// display a sub field value
									$image = get_sub_field('image');
									$image_link = get_sub_field('link');
									$link_target = $image_link['target'] ? $image_link['target'] : '_self';
								?>
									<li class="col-12 col-sm-6 col-md-4">
										<a href="<?php echo $image_link['url']; ?>" target="<?php echo $link_target; ?>"><img src="<?php echo $image['url']; ?>" alt="Product"></a>
									</li>
								<?php		
								endwhile;

							else :

								// no rows found

							endif;

							?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="section box-menu">
		<div class="container">
			<?php dynamic_sidebar( 'product-section' ); ?>
			<?php //dynamic_sidebar( 'guarantee-section' ); ?>
		</div>
	</section>
	
<?php               
get_footer();

?>  