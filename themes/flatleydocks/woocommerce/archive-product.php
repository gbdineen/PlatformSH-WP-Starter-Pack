<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<section class="content-about product-main-page">
    <div class="container custom_category_temp">
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

<section class="products section custom_product_category product-main-page">
    <div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
				<div class="title">
					<?php 
						$category = get_queried_object();
						$current_cat_id = $category->term_id;
						$current_cat_name = str_replace('®', '<span class="copyright">®</span>', $category->name);
					?>
					<h2 class="mb-3"><?php echo $current_cat_name; ?></h2>
					<p><?php echo category_description(); ?></p>
				</div>
				<div class="product-list_product">
					<div class="list-unstyled row">
					<?php
						
									
						$childrens = get_categories( array ('taxonomy' => 'product_cat', 'parent' => $current_cat_id, 'orderby' => 'order' ));
						
						
						//print_r($childrens[3]);
								
							foreach($childrens as $children) :							 
								$cat_id   = $children->term_id;
								$name   = str_replace('®', '<span class="copyright">®</span>', $children->name);//$children->get_the_title(); //
								$slug   = $children->slug;
								$count   = $children->count;
								$cat_link = get_category_link( $cat_id );
								$thumbnail_id = get_woocommerce_term_meta( $cat_id, 'thumbnail_id', true );
								$image = wp_get_attachment_url( $thumbnail_id );

								?>
								<div class="col-12 col-sm-6 col-md-4 child_category">
									<div class="only-product-page" style=" text-align:center;">
										<a href="<?php echo $cat_link; ?>">
											<span class="bg-main-background">
												<?php 
													if(isset($image) && !empty($image)){ ?>
														<img src="<?php echo $image; ?>" alt="Product">
													<?php }else{ ?>
														<img src="http://192.249.121.94/~projectdemoserve/flatleydocks/wp-content/uploads/woocommerce-placeholder-600x600.png" alt="Product">
													<?php }
												?>
											</span>
											
											<h3><?php echo $name; ?></h3>
											<button class="product-learn-more" style="margin-top:-20px; margin-bottom:1.5rem;">VIEW DETAILS</button>
										</a>
									</div>	
								</div>
								<?php							  
							endforeach;	
									
						
						$args=array('post_type'=> 'product','order'=> 'Asc', 'posts_per_page'=> -1);

						$query=new WP_Query($args);

						if( have_posts()): ?>
							<?php 
									
								while( have_posts()):the_post();
							?>
					
								<div class="col-12 col-sm-6 col-md-4">
									<div class="only-product-page" style=" text-align:center;">
										<a href="<?php echo get_the_permalink(get_the_ID()); ?>">
											<span class="bg-main-background">
												<?php 
													if(has_post_thumbnail()){ ?>
														<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Product">
													<?php }else{ ?>
														<img src="http://192.249.121.94/~projectdemoserve/flatleydocks/wp-content/uploads/woocommerce-placeholder-600x600.png" alt="Product">
													<?php }
												?>
													
											</span>
											
											<h3><?php echo get_the_title(get_the_ID()); ?></h3>
											<button class="product-learn-more" style="margin-top:-20px; margin-bottom:1.5rem;">VIEW DETAILS</button>
										</a>
									</div>	
								</div>
							<?php 
								endwhile; 
						
						endif;
						wp_reset_query(); 
					?>
						
					</div>
				</div>
			</div>
			<?php
				
				$args=array('post_type'=> 'product','order'=> 'Asc', 'orderby' => 'order', 'parent' => 0, 'posts_per_page'=> 8);
				$query=new WP_Query($args);
					if( $query->have_posts()): ?>
						<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
							<div class="folder-section">
								<h3 class="folder-title">Product Categories</h3>
								<ul class="list-unstyled row">

									  <?php

										$get_featured_cats = array(
										  'taxonomy'     => 'product_cat',
										  'parent' => 0,
										  'hide_empty'   => '0',
										  'include'      => $cat_array
										);
										$all_categories = get_categories( $get_featured_cats );
										//print_r($all_categories);

										$j = 1;
										foreach ($all_categories as $cat) {
										  $cat_id   = $cat->term_id;
										  $name   = $cat->name;
										  $slug   = $cat->slug;
										  $count   = $cat->count;
										  $cat_link = get_category_link( $cat_id );
										  $thumbnail_id = get_woocommerce_term_meta( $cat_id, 'thumbnail_id', true );
										  $image = wp_get_attachment_url( $thumbnail_id );
										  if(!empty($image)){
										  ?>
											<li class="col-12">
												<a href="<?php echo $cat_link; ?>">
													<span><?php echo $name; ?></span>
												</a>
											</li>
										  <?php 
										  }
										  $j++;
										}
									  ?>

									  </ul>
							</div><!-- /folder-section -->
						</div><!--col-md-4-->
				
					<?php
				endif;
				wp_reset_query();
			?>
		</div>
		<?php
			do_action( 'woocommerce_after_main_content' );
		?>
	</div>
</section>

<?php


get_footer( 'shop' );
