<?php

/**
 * Template name: Home Page (TEST)
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo get_bloginfo('name'); ?></title>
       <link rel="shortcut icon" href="<?php echo get_option('my_favicon_icon'); ?>">
       <!-- Google font -->
       <link href="https://fonts.googleapis.com/css?family=Oswald:wght@400;500&display=swap||Lato:300,400,700&display=swap" rel="stylesheet">
       <!-- fontawesome -->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
       integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
       <?php wp_head(); ?>
   </head>


<body class="newlayout">
<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false)); ?>
</div>
<span onclick="openNav()" class="trigram">&#9776;</span>
<section class="headerv2">
	<div class="container">
		<div class="logoimage">
			<a href="<?php echo get_site_url(); ?>"><img src="/wp-content/uploads/2021/02/nordock-logo.png" alt="NORDOCK Inc."></a>
		</div>
		<div class="iwslogo">
			<a href="https://www.iwsolutions.com" target="_blank"><img src="/wp-content/themes/flatleydocks/images/iws-logo.png" alt="Integrated Warehouse Solutions"></a>
		</div>
		<div class="phones">
			OFFICE NUMBER:<br/><a href="tel:+19056974276">905-697-4276</a>
		</div>
		<div class="phones">
			TOLL-FREE:<br/><a href="tel:+18668854276">1-866-885-4276</a>
		</div>
		<div class="clear"></div>
		<ul id="headermenu">
			<li><a href="">Partners</a></li>
			<li><a href="">Document Library</a></li>
			<li><a href="">Contact Us</a></li>
			<li><a href="">About Us</a></li>
			<li><a href="">Home</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</section>
<section class="mainmenu" id="mainnav">
	<div class="container">
		<ul>
			<li><a href="/product-category/dock-levelers/">Dock Levelers</a></li>
			<li><a href="/product-category/safety-products/vehicle-restraints/">VEHICLE RESTRAINTS</a></li>
			<li><a href="/product-category/docks-seals-shelters/">Seals & Shelters</a></li>
			<li><a href="/product-category/lift-products/">Lifts & Specialty</a></li>
			<li><a href="/product-category/safety-products/">Safety</a></li>
			<li><a href="/product-category/accessories-parts/">Accessories & Parts</a></li>
			<li style="display:none;">
				<div class="search-bar">
					<div class="search"><i class="fas fa-search"></i></div>
					<div class="search-bar-full" style="display: none;">
						<form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_site_url(); ?>">
							<div class="input-group mb-0">
								<input class="form-control" type="text" value="" name="s" id="s" />
								<div class="input-group-prepend">
									<button type="submit" class="input-group-text" id="searchsubmit" value="search"><i class="fa fa-search" aria-hidden="true"></i></button>
									<button type="button" class="input-group-text close_search" id="close_search"><i class="fa fa-times" aria-hidden="true"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul>
		<div class="clear"></div>
	</div>
</section>
<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7694378.js"></script>
<!-- End of HubSpot Embed Code -->
<section class="main-slider-top">
	<div class="main-slider">
		<div class="owl-carousel owl-theme">
			<?php
				// check if the repeater field has rows of data
				if( have_rows('slider') ):
					// loop through the rows of data
					while ( have_rows('slider') ) : the_row();
						$image = get_sub_field('image'); 
						$imagelink = get_sub_field('link');
						$link_target = $imagelink['target'] ? $imagelink['target'] : '_self';	
						?>    
						<div class="item">
							<a href="<?php echo $imagelink['url']; ?>" target="<?php echo $link_target; ?>"><img src="<?php echo $image['url']; ?>" alt="slider"></a>
						</div> <?php    
					endwhile;
				endif;
			?>
		</div>
	</div><!-- /main-slider -->
</section>
<?php echo do_shortcode('[latest_product]'); ?>	

<section class="inquiryform">
	<div class="container">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<h2>Inquiry Form</h2>
		<?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]'); ?>
	</div>
</section>
<?php get_footer(); ?>