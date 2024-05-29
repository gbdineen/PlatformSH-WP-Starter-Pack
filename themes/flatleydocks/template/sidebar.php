<?php get_header();

/**

 * Template name: Without sidebar

 *

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 */

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
        
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			
			<?php the_content(); ?>  
					  
		<?php endwhile; else: ?>    
					   
        <?php endif; ?>
        
    </div>
</section>
   

<?php get_footer(); ?>