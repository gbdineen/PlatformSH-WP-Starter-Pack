<?php get_header();?>

<?php if (have_posts()) : ?>            
<?php while (have_posts()) : the_post(); ?>
        <section class="news_detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="img_tag">
							<br />
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="middle_in" style="font-size:16px; padding-top:1rem;">
                            <h2><?php the_title(); ?></h2>
                            <p class="byline">Written by: <span><?php the_author_link(); ?></span> on <span><?php the_time(get_option('date_format')); ?></span></p>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php echo do_shortcode('[latest_product]'); ?>
			
        <section class="section box-menu">
            <div class="container">
                <?php dynamic_sidebar( 'product-section' ); ?>
				<?php //dynamic_sidebar( 'guarantee-section' ); ?>
            </div>
        </section>
<?php endwhile; ?>                 
<?php endif; ?>


<?php get_footer(); ?>