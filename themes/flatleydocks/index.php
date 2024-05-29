<?php get_header(); ?>
<section class="main-slider-top">
	<div class="main-slider">
		<div class="owl-carousel owl-theme">
			<?php 
				// check if the repeater field has rows of data
				if( have_rows('slider') ):
					// loop through the rows of data
					while ( have_rows('slider') ) : the_row();
						$image = get_sub_field('image'); ?>    
						<div class="item">
							<img src="<?php echo $image['url']; ?>" alt="Slider one">
						</div> <?php    
					endwhile;
				endif;
			?>
			
		</div>
	</div><!-- /main-slider -->
</section>

<section class="second_banner section">
    <div class="container">
		<h1>NEWS &amp; UPDATES</h1>
		<hr />
        <?php 
            if (have_posts()) : 
                while (have_posts()) : the_post();
				
		?>
			<article class="post">
				<div class="row">
					<div class="col-sm-2">
						<!-- featured img -->
						<?php if(has_post_thumbnail(get_the_ID())) : ?>
							<?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', ['class' => 'img-responsive']); ?>
						<?php endif; ?>
					</div>
					<div class="col-sm-9">
						<!-- date, author, content preview -->
						<h3><?php echo the_title(); ?></h3>
						<span class="author"><?php echo get_the_author(); ?></span><br />
						<span class="post_date"><?php echo the_date(); ?></span><br />
						<div class="post_excerpt">
							<?php echo get_the_excerpt(); ?>
						</div>
						<!-- read more link -->
						<a class="post_link" href="<?php the_permalink(); ?>">Read More...</a>
						
					</div>

					<div class="col-sm-12">
						
						<hr />
					</div>
				
				</div>
			</article>		
		<?php
                endwhile; 
            endif; 
        ?>
    </div>
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