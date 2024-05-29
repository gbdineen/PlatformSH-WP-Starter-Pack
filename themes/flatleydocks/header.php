<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="shortcut icon" href="<?php echo get_option('my_favicon_icon'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Oswald:wght@400;500&display=swap||Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <?php wp_head(); ?>
 <!-- Google Tag Manager -->
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
   new Date().getTime(),event:'gtm.js'});var
   f=d.getElementsByTagName(s)[0],
   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
   'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
   })(window,document,'script','dataLayer','GTM-W32V9Z9');</script>
   <!-- End Google Tag Manager -->
	<script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
</head>
<body class="newlayout">
<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W32V9Z9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false)); ?>
</div>
<span onclick="openNav()" class="trigram">&#9776;</span>
<div class="topbar">
	<div class="container">
		<div class="ourbrands">
			<h5>OUR BRANDS</h5>
			<div class="brandlogos">
				<div><a href="https://www.bluffmanufacturing.com/" target="_blank"><img src="/wp-content/uploads/2021/09/brands-bluff.jpg" alt=""/></a></div>
				<div><a href="https://www.nordockinc.com/" target="_blank"><img src="/wp-content/uploads/2021/09/brands-nordock.jpg" alt=""/></a></div>
				<div><a href="https://www.wescomfg.com/" target="_blank"><img src="/wp-content/uploads/2021/09/brands-wesco.jpg" alt=""/></a></div>
			</div>
		</div>
		<div class="covid">Flatley Dock’s COVID-19 Status</div>
		<ul id="headermenu">
			<li class="socialitem">
				<a href="https://www.facebook.com/flatleydock/" target="_blank"><i class="fab fa-facebook-f" title="Facebook"></i></a>
				<a href="https://www.linkedin.com/company/flatleydockssystemsinc/" target="_blank"><i class="fab fa-linkedin-in" title="LinkedIn"></i></a>
			</li>
			<li><a href="/partners/">Partners & Associates</a></li>
			<li><a href="/programs/">Programs</a></li>
			<li><a href="/document-library/">Document Library</a></li>
			<li><a href="/products/">Products</a></li>
			<li><a href="/contact-us/">Contact</a></li>
			<li><a href="/about-flatley-dock-systems/">About</a></li>
			<li><a href="/">Home</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>
<section class="headerv2">
	<div class="container">
		<div class="logoimage">
			<a href="<?php echo get_site_url(); ?>"><img src="/wp-content/uploads/2019/07/slider-logo.png" alt="FLATLEY DOCK SYSTEM, INC."></a>
		</div>
		<div class="phones">
			WISCONSIN OFFICE:<br/><a href="tel:+12623353625">262-335-DOCK (3625)</a>
		</div>
		<div class="clear"></div>
	</div>
</section>
<section class="mainmenu" id="mainnav">
	<div class="container">
		<ul>
			<li><a href="/product-category/dock-levelers/">Dock Levelers</a></li>
			<li><a href="/product-category/restraints/">VEHICLE RESTRAINTS</a></li>
			<li><a href="/product-category/docks-seals-shelters/">Seals & Shelters</a></li>
			<li><a href="/product-category/lift-products/">Lifts & Specialty</a></li>
			<li><a href="/product-category/safety-products/">Safety</a></li>
			<li><a href="/product-category/green-products/">Green Products</a></li>
			<li><a href="/product-category/commercial-doors/">Commercial Doors</a></li>
			<li><a href="/product-category/aftermarket-products-services/">Aftermarket</a></li>
			<li class="searchitem">
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