<?php get_header();?>
<section class="content-about">
    <div class="container">
            <h2 style="padding-bottom:15px;font-size:26px;">Search Results for '<i><?php echo $_GET['s'];?></i>'</h2>
               
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
                
                	<div class="row no-gutters">
						<div class="col-12">
							<div class="pagination-box">
								<?php
								   
									global $wp_query;
							
									$big = 999999999; // need an unlikely integer
									
									
									echo '<nav aria-label="Page navigation example">';
									echo paginate_links( array(
										'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format' => '?paged=%#%',
										'current' => max( 1, get_query_var('paged') ),
										'total' => $wp_query->max_num_pages,
										'type'            => 'list',
										'add_args'        => false,
										'add_fragment'    => '',
										'prev_next'       => True,
										'prev_text'       => __('Previous'),
										'next_text'       => __('Next'),
									) );
									echo '</nav>';
									 wp_reset_query();
								?>
							</div>
						</div>
					</div>		
                 	
                    
            <?php else: ?>    
                    
				<div class="error"><?php _e('Not found.'); ?></div> 
                           
			<?php endif; wp_reset_query(); ?>
               
            
    </div>
</section>

<?php get_footer(); ?>