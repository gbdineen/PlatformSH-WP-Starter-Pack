<?php get_header();?>
<div class="subpage_title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<div class="wrapper">
    	<div class="blog-left">
        	
            <h2 style="padding-bottom:15px;font-size:26px;">
			<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: %s', 'mytheme' ), '<i>' . get_the_date() . '</i>' ); ?>
            <?php elseif ( is_month() ) : ?>
                <?php printf( __( 'Monthly Archives: %s', 'mytheme' ), '<i>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'mytheme' ) ) . '</i>' ); ?>
            <?php elseif ( is_year() ) : ?>
                <?php printf( __( 'Yearly Archives: %s', 'mytheme' ), '<i>' . get_the_date( _x( 'Y', 'yearly archives date format', 'mytheme' ) ) . '</i>' ); ?>
            <?php elseif(is_tag()) : ?>                
                <?php 	printf( __( 'Tag Archives: %s', 'mytheme' ), '<i>' . single_tag_title( '', false ) . '</i>' ); ?>
            <?php elseif(is_category()) : ?>                
                <?php	printf( __( 'Category Archives: %s', 'mytheme' ), '<i>' . single_cat_title( '', false ) . '</i>' ); ?>
            <?php else : ?>	        
                <?php _e( 'Blog Archives', 'mytheme' ); ?>
            <?php endif; ?></h2>
               
        	<?php if (have_posts()) : ?>            
            	
            	<?php while (have_posts()) : the_post(); ?>
                    
                    <div class="card-body">
						<div class="content-acc">
				
							
							<h2 class="title-accordion"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
							<div class="bunch-details">
								<p class="byline">Written by: <span><?php echo get_the_author_link(); ?></span> on <span><?php the_time(get_option('date_format')); ?></span></p>
							  
								<?php echo get_the_excerpt(); ?>  
							
								<div class="post-meta"><?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments')); ?></div>
							</div>	
						</div>
					</div>	
                          
            	<?php endwhile; ?>  
                
                	<div class="pager">
					<?php
                       
                        global $wp_query;
                
                        $big = 999999999; // need an unlikely integer
                        
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages
                        ) );
                         wp_reset_query();
                    ?>
                    </div>               
                 	<div class="clear"></div>
                    
            <?php else: ?>    
                    
				<div class="error"><?php _e('Not found.'); ?></div> 
                           
			<?php endif; ?>
               
            
        </div>
        
    </div>
</div><!-- EOF : content ID -->

<?php get_footer(); ?>