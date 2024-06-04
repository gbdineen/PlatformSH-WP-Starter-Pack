<?php
/**
 * Template Name: Category Temeplate
 *
 */

get_header(); 

// check if the repeater field has rows of data
if( have_rows('gallery') ):

 	// loop through the rows of data
    while ( have_rows('gallery') ) : the_row();

        // display a sub field value
        $title = get_sub_field('title');
		$shortocode = get_sub_field('shortocode');
		$title_id = strtolower(str_replace(' ', '', $title));
		?>
			<section id="<?php echo $title_id;  ?>" class="products section gallery_main_section">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-lg-12">
							<div class="title">
								<h4><?php echo $title; ?></h4>
							</div>
							<div class="product-list">
								<?php  echo do_shortcode(''.$shortocode.''); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php
    endwhile;
else :
endif;
?>
<script type="text/javascript">
	jQuery('.page-numbers a').each(function(){
	  pid = $(this).parents('.gallery_main_section').attr('id');
		 this.href = this.href+'#'+pid;
	});
	jQuery( window ).load(function() {
	   if(window.location.hash) {
		  var hash = window.location.hash;
		  jQuery('html, body').animate({
			scrollTop: jQuery(hash).offset().top-100
		  }, 500, 'swing');
		}
	});
</script>
<?php
get_footer(); ?>