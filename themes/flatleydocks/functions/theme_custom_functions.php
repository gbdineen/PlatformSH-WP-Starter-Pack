<?php 

    /*Include google map function*/

    include ("theme_custom_functions/my_map.php");

    /*end of Include google map function*/





// Latest post shortcode function start here

function latest_product($atts, $content = null) {



  extract(shortcode_atts(array(

      'title'   => '',

      'post_type'   => '',

      'image' => ''

  ), $atts));



  $args=array('post_type'=> 'product','order'=> 'Asc', 'orderby' => 'order', 'parent' => 0, 'posts_per_page'=> 8);
     $query=new WP_Query($args);
      if( $query->have_posts()): ?>
        <section class="products section">
			<div class="container">
			  <div class="row no-gutters">
				  <div class="col-lg-12">
					  <div class="title">
						  <h2>Products</h2>
					  </div>
					  <div class="product-list">
						  <div class="row custom-transfrom">

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
						<div class="col-12 col-sm-6 col-md-4 col-lg-3 inner-area">
						  <a href="<?php echo $cat_link; ?>">
							<img src="<?php echo wp_get_attachment_url( $thumbnail_id ); ?>" alt="Product">
							<h3><?php echo $name; ?></h3>
							<button class="product-learn-more">VIEW DETAILS</button>
						  </a>
					  </div>
					  <?php 
					  }
					  $j++;
					}
				  ?>

				  </div>

					  </div>

				  </div>
			  </div>
		  </div>
	</section>	
		<?php
	        endif;
	    wp_reset_query();    

}
// Latest post	 shortcode function end here

add_shortcode('latest_product', 'latest_product');


// Latest gallery shortcode function start here

function showcase_gallery($atts, $content = null) {
  extract(shortcode_atts(array(
      'title'   => '',
      'cat_slug'   => '',
  ), $atts));
?>
<section class="products section gallery_main_section">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-12">
						<div class="title">
							<h4><?php echo $title; ?>
							</h4>
						</div>
						<div class="product-list">
							<ul class="list-unstyled row">
								<?php
									$cat_pagination = str_replace('-', '', $cat_slug); // Replaces all spaces with hyphens.
									$pagenumber = $cat_pagination;
									$paged1 = isset( $_GET[$cat_pagination] ) ? (int) $_GET[$cat_pagination] : 1;
									
									$args = array(
										'post_type'=> 'product',
										'paged'          => $paged1,
										'posts_per_page' => 8,
										'product_cat' => $cat_slug,
										'orderby' => 'title',
									);
									$the_query = new WP_Query( $args );
									while ( $the_query->have_posts() ) {
										$the_query->the_post();
										//echo '' . get_the_title() . '<br /><br />';
										?>
										<li class="col-12 col-sm-6 col-md-4 col-lg-3">

											<a href="<?php echo get_permalink(); ?>">
												<?php 
													if(has_post_thumbnail()){ ?>
														<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Product">
													<?php }else{ ?>
														<img src="http://192.249.121.94/~projectdemoserve/flatleydocks/wp-content/uploads/woocommerce-placeholder-600x600.png" alt="Product">
													<?php }
												?>
												
											
											</a>

										</li>

									<?php
									}
								wp_reset_postdata();
								?>							
							</ul>
						</div>
					</div>
				</div>
				<div class="row no-gutters">
					<div class="col-12">
						<div class="pagination-box">	
							<?php
							$pag_args1 = array(
								'format'  => '?'.$pagenumber.'=%#%',
								'current' => $paged1,
								'total'   => $the_query->max_num_pages,
								'prev_next'       => True,
								'prev_text'       => __('Previous'),
								'next_text'       => __('Next'),
								'type'            => 'list',
								'add_args'        => false,
								'add_fragment'    => ''
							);
							echo '<nav aria-label="Page navigation example">';
							echo paginate_links( $pag_args1 );
							echo '</nav>';

							?>

						</div>

					</div>

				</div>							

			</div>

			

		</section>
							<?php

}
// Latest post	 shortcode function end here

add_shortcode('showcase_gallery', 'showcase_gallery');


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );



add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 4 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 60 );





add_action( 'woocommerce_single_product_summary', 'bbloomer_product_thumbnails_wrapper_start', 49 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_thumbnails', 50 );

add_action( 'woocommerce_single_product_summary', 'bbloomer_product_thumbnails_wrapper_end', 51 );

 

function bbloomer_product_thumbnails_wrapper_start() {

echo '<div class="custom_thumbnail_images">';

}

 

function bbloomer_product_thumbnails_wrapper_end() {

echo '</div>';

}





// widget create here

function wpb_widgets_init() {

register_sidebar( array(

    'name' => __( 'Guarantee Section', 'wpb' ),

    'id' => 'guarantee-section',

    'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),

    'before_widget' => '<aside id="%1$s" class="widget %2$s">',

    'after_widget' => '</aside>',

    'before_title' => '<h3 class="widget-title">',

    'after_title' => '</h3>',

) );

register_sidebar( array(

    'name' =>__( 'Product Section', 'wpb'),

    'id' => 'product-section',

    'description' => __( 'Appears on the static front page template', 'wpb' ),

    'before_widget' => '<aside id="%1$s" class="widget %2$s">',

    'after_widget' => '</aside>',

    'before_title' => '<h3 class="widget-title">',

    'after_title' => '</h3>',

) );

}

add_action( 'widgets_init', 'wpb_widgets_init' );



function comment_validation_init() {

    if(is_single() && comments_open() ) { ?>        

    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

    <script type="text/javascript">

    jQuery(document).ready(function($) {

    $('#commentform').validate({



    rules: {

      author: {

        required: true,

        minlength: 2

      },

	  rating: {

		required: true,  

	  },	

      email: {

        required: true,

        email: true

      },



      comment: {

        required: true,

        minlength: 2

      }

    },



    messages: {

	  rating: "Please select rating field", 	

      author: "Please fill the required field",

      email: "Please fill the required field",

      comment: "Please fill the required field"

    },



    errorElement: "div",

    errorPlacement: function(error, element) {

      element.after(error);

    }



    });

    });

    </script>

    <?php

  }

}

//add_action('wp_footer', 'comment_validation_init');

add_action( 'set_comment_cookies', function( $comment, $user ) {

    setcookie( 'ta_comment_wait_approval', '1', time() + 15 );

}, 10, 2 );



add_action( 'init', function() {

    if( $_COOKIE['ta_comment_wait_approval'] === '1' ) {

        setcookie( 'ta_comment_wait_approval', null, time() - 3600, '/' );

        add_action( 'comment_form_before', function() {

            echo "<p id='wait_approval' style='padding-top: 40px; '><strong style='color:green;'>Your comment has been sent successfully.</strong></p>";

        });

    }

});



	

	function exclude_product_cat_children($wp_query) {

	if ( isset ( $wp_query->query_vars['product_cat'] ) && $wp_query->is_main_query() && !is_admin()) {

		$wp_query->set('tax_query', array( 

				array (

					'taxonomy' => 'product_cat',

					'field' => 'slug',

					'terms' => $wp_query->query_vars['product_cat'],

					'include_children' => false

				) 

			 )

		);

	  }

	}  

	add_filter('pre_get_posts', 'exclude_product_cat_children');	

?>