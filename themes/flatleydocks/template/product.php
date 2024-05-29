<?php



/**

 * Template name: Product Page

 *

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 */







get_header(); 

?>

	

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