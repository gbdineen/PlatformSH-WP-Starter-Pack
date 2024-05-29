<?php

/**
 * Template name: Contact
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>


<script>

	const showAsImage = true;


	function init_contactFinder(){
		
		$(function(){
			
			renderCountryList();
			detectCountryChangeHandler();
			initBusinessCardRollover();
		});
	}

	/**
	* JSON Contact list. Key of each entry is the name of the individual
	*/
	const contacts = {
		
		"Rich Cargnelli" : {
			"phone" : "604-312-2075",
			"email" : "rich.cargnelli@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2020/07/Rich-Cargnelli-Nordock-Business-Card2.jpg"
		},
		"Colin Flanagan" : {
			"phone" : "905-429-8068",
			"email" : "colin.flanagan@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2020/07/Colin-Flanagan-Nordock-Business-Card.jpg"
		},
		"Marty Schilcher" : {
			"phone" : "414-704-9346",
			"email" : "marty.schilcher@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2021/06/Marty-Schilcher.jpg"
		},
		"Sean Telish" : {
			"phone" : "909-285-7345",
			"email" : "sean.telish@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2021/03/Sean-Telish.jpg"
		},
		"Charles Duncan" : {
			"phone" : "864-238-9290",
			"email" : "charles.duncan@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2020/07/Charles-Duncan-Nordock-Business-Card.jpg"
		},
		"Ron Mainous" : {
			"phone" : "972-623-0707",
			"email" : "ron.mainous@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2020/07/Ron-Mainous-Nordock-Business-Card.jpg"
		},
		"Mike Rivizzigno" : {
			"phone" : "315-766-8667",
			"email" : "mike.rivizzigno@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2020/07/Michael-Rivizzigno-Nordock-Business-Card.jpg"
		},
		"Daisy Ramirez" : {
			"phone" : "817-546-8558",
			"email" : "daisy.ramirez@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2021/03/Daisy-Ramirez.jpg"
		},
		"Clay Buhler" : {
			"phone" : "843-441-2226",
			"email" : "clay.buhler@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2021/03/Clay-Buhler.jpg"
		},
		"Adam Timon" : {
			"phone" : "859-206-3414",
			"email" : "adam.timon@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2021/03/adam-timon.jpg"
		},
		"Jim Flatley" : {
			"phone" : "414-234-8742",
			"email" : "jim.flatley@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2021/03/jim-flatley.jpg"
		},
		"Jay Bodnar" : {
			"phone" : "315-766-8667",
			"email" : "jay.bodnar@iwsolutions.com",
			"card"  : "https://nordockinc.com/wp-content/uploads/2021/06/jay-bodnar.jpg"
		}
	};
	
	
	/**
	* JSON Country list
	*/
	const countries = {
		
		"Canada" : {
			"regions" : {
				"Alberta" : "Rich Cargnelli",
				"British Columbia" : "Rich Cargnelli",
				"Manitoba" : "Rich Cargnelli",
				"New Brunswick" : "Colin Flanagan",
				"Newfoundland Labrador" : "Colin Flanagan",
				"Nova Scotia" : "Colin Flanagan",
				"Ontario" : "Colin Flanagan",
				"Prince Edward Island" : "Colin Flanagan",
				"Québec" : "Colin Flanagan",
				"Saskatchewan" : "Rich Cargnelli",
				"Northwest Territories " : "Rich Cargnelli",
				"Nunavut" : "Rich Cargnelli",
				"Yukon Territory" : "Rich Cargnelli",
			},
			"contact" : 0
		},
		"United States of America" : {
			"regions" : {
				"Alabama" : "Clay Buhler",
				"Alaska" : "Rich Cargnelli",
				"Arizona" : "Ron Mainous",
				"Arkansas" : "Ron Mainous",
				"California" : "Sean Telish",
				"Colorado" : "Ron Mainous",
				"Connecticut" : "Jay Bodnar",
				"Delaware" : "Jay Bodnar",
				"Florida" : "Clay Buhler",
				"Georgia" : "Clay Buhler",
				"Hawaii" : "Sean Telish",
				"Idaho" : "Rich Cargnelli",
				"Illinois" : "Marty Schilcher",
				"Indiana" : "Marty Schilcher",
				"Iowa" : "Marty Schilcher",
				"Kansas" : "Marty Schilcher",
				"Kentucky" : "Adam Timon",
				"Louisiana" : "Ron Mainous",
				"Maine" : "Jay Bodnar",
				"Maryland" : "Jay Bodnar",
				"Massachusetts" : "Jay Bodnar",
				"Michigan" : "Marty Schilcher",
				"Minnesota" : "Marty Schilcher",
				"Mississippi" : "Adam Timon",
				"Missouri" : "Marty Schilcher",
				"Montana" : "Rich Cargnelli",
				"Nebraska" : "Marty Schilcher",
				"Nevada" : "Sean Telish",
				"New Hampshire" : "Jay Bodnar",
				"New Jersey" : "Jay Bodnar",
				"New Mexico" : "Ron Mainous",
				"New York" : "Jay Bodnar",
				"North Carolina" : "Clay Buhler",
				"North Dakota" : "Marty Schilcher",
				"Ohio" : "Adam Timon",
				"Oklahoma" : "Ron Mainous",
				"Oregon" : "Rich Cargnelli",
				"Pennsylvania" : "Jay Bodnar",
				"Rhode Island" : "Marty Schilcher",
				"South Carolina" : "Clay Buhler",
				"South Dakota" : "Marty Schilcher",
				"Tennessee" : "Adam Timon",
				"Texas" : "Ron Mainous",
				"Utah" : "Ron Mainous",
				"Vermont" : "Jay Bodnar",
				"Virginia" : "Jay Bodnar",
				"Washington" : "Rich Cargnelli",
				"West Virginia" : "Jay Bodnar",
				"Wisconsin" : "Marty Schilcher",
				"Wyoming" : "Rich Cargnelli",
			},
			"contact" : 0
		},
		"Mexico" : {
			"regions" : {
				"Aguascalientes": "Daisy Ramirez",
				"Baja California": "Daisy Ramirez",
				"Baja California Sur": "Daisy Ramirez",
				"Campeche": "Daisy Ramirez",
				"Coahuila": "Daisy Ramirez",
				"Colima": "Daisy Ramirez",
				"Chiapas": "Daisy Ramirez",
				"Chihuahua": "Daisy Ramirez",
				"Durango": "Daisy Ramirez",
				"Mexico City": "Daisy Ramirez",
				"Guanajuato": "Daisy Ramirez",
				"Guerrero": "Daisy Ramirez",
				"Hidalgo": "Daisy Ramirez",
				"Jalisco": "Daisy Ramirez",
				"Mexico": "Daisy Ramirez",
				"Michoacan": "Daisy Ramirez",
				"Morelos": "Daisy Ramirez",
				"Nayarit": "Daisy Ramirez",
				"Nuevo León": "Daisy Ramirez",
				"Oaxaca": "Daisy Ramirez",
				"Puebla": "Daisy Ramirez",
				"Queretaro": "Daisy Ramirez",
				"Quintana Roo": "Daisy Ramirez",
				"San Luis Potosi": "Daisy Ramirez",
				"Sinaloa": "Daisy Ramirez",
				"Sonora": "Daisy Ramirez",
				"Tabasco": "Daisy Ramirez",
				"Tamaulipas": "Daisy Ramirez",
				"Tlaxcala": "Daisy Ramirez",
				"Veracruz": "Daisy Ramirez",
				"Yucatán": "Daisy Ramirez",
				"Zacatecas": "Daisy Ramirez"
			},
			"contact" : 0
		},
		"Central/South America" : {
			"regions" : 0,
			"contact" : "Daisy Ramirez"
		},
		"Asia-Pacific/Europe/Middle East & Africa" : {
			"regions" : 0,
			"contact" : "Rich Cargnelli"
		}
	};
	
	
	
	
	function detectCountryChangeHandler(elt = "select[name='countries']"){
		
		console.log("#countryWrapper "+elt);
		
		$("#countryWrapper "+elt).change(function(){
			
			renderContactDetails("");
			
			let countryName = $(elt+" > option:selected").val();
			
			console.log("Name: "+countryName);
			
			if(!renderRegionList(countryName)) renderContactDetails(countries[countryName]["contact"]);
		});
	}
	
	
	
	
	function detectRegionChangeHandler(elt = "select[name='regions']", countryElt = "select[name='countries']"){
		
		console.log("#regionWrapper "+elt);
		
		$("#regionWrapper "+elt).change(function(){
			
			//renderContactDetails("");
			
			let regionName = $(elt+" > option:selected").val();
			let countryName = $(countryElt+" > option:selected").val();
			
			console.log("Name: "+regionName);
			
			renderContactDetails(countries[countryName]["regions"][regionName]);
		});
	}
	
	
	
	
	
	function renderCountryList(eltID = "countryWrapper"){
		
		$("#"+eltID).empty();
		$("#"+eltID).append($.parseHTML(getCountrySelectHTML()));
		
		return false;
	}
	
	
	
	function renderRegionList(countryName, eltID = "regionWrapper"){
		
		let regionList = getRegionSelectHTML(countryName)
		
		$("#"+eltID).empty();
		$("#"+eltID).append($.parseHTML(regionList));
		
		detectRegionChangeHandler();
		
		if(regionList) return true;
		return false;
	}
	
	
	
	function renderContactDetails(contactName, eltID = "contact-details"){
		
		
		
		
		let contactNames = contactName.split(",");
		//console.log(contactNames);
		
		$("#"+eltID).empty();
		
		$.each(contactNames, function(i, e){
			if(showAsImage) $("#"+eltID).append($.parseHTML(getContactDetailIMG(e) + "<br />"));
			else $("#"+eltID).append($.parseHTML(getContactDetailHTML(e) + "<br />"));
		
		});
		
		return false;
	}
	
	
	
	//HTML select element containing all countries
	function getCountrySelectHTML(){
		
		
		let html = "<option value='0'>--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--</option>";
		
		$.each(countries, function(i, e){
			
			html += "<option value='"+i+"'>"+i+"</option>";
			//console.log(i);
		});
		
		return "<select name='countries' style='padding:6px 2px; background-color:#EEE; min-width:300px;'>"+html+"</select>";
	}
	
	
	
	//HTML select element containing all regiong for the currently selected country (empty if no regions)
	function getRegionSelectHTML(countryName){
		
		let html = "";
		
		if(!countries.hasOwnProperty(countryName)) return html;
		if(!countries[countryName]["regions"])     return html;
		
		html = "<option value='0'>--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--</option>";
		
		$.each(countries[countryName]["regions"], function(i, e){
			
			html += "<option value='"+i+"'>"+i+"</option>";
		});
		
		return "<select name='regions' style='padding:6px 2px; background-color:#EEE; min-width:300px;'>"+html+"</select>";
	
	}
	
	
	
	function getContactDetailHTML(contactName){
		
		let html = "";
		
		if(!contacts.hasOwnProperty(contactName)) return html;
		
		let phone = contacts[contactName]["phone"];
		let email = contacts[contactName]["email"];
		
		
		html += "<p><strong>"+contactName+"</strong></p>";
		html += "<p>Cell: <a href='tel:"+phone+"'>"+phone+"</a></p>";
		html += "<p>Email: <a href='mailto:"+email+"'>"+email+"</a></p>";
		
		return html;
		
	}
	
	
	function getContactDetailIMG(contactName){
		
		let html = "";
		
		if(!contacts.hasOwnProperty(contactName)) return html;
		
		let img = contacts[contactName]["card"];

		console.log(html);
		
		html += "<img src='"+img+"' alt='' style='width:100%; height:auto;' />";
		
		return html;
		
	}
	
	
	
	
	function initBusinessCardRollover(showTrigger = "p.b-name", showTarget = "img.b-card", context = "div.b-wrap"){
		
		$(showTrigger).on("mouseenter", function(){ $(this).closest(context).find(showTarget).show(); });
		
		$(showTarget).on("mouseleave", function(){ $(this).hide(); });
	}
	
	
	
	
	
	/**
	*
	* Call the Contact Finder to start on page load
	*
	*/
	init_contactFinder();


</script>
<?php /*
<section class="second_banner section">
    <div class="container" style="font-size:16px;">
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
								<p><?php echo get_field('contact_details'); ?></p>
							   
							</div>
						</div>
					</div> 
			<?php } ?>
        <?php 
            if (have_posts()) : 
                while (have_posts()) : the_post(); 
					//echo the_content();
                    //the_field('products');
                endwhile; 
            endif; 
        ?>
		<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
        <?php
			
			$company_details = get_field('company_details');	

			if( $company_details ): ?>
				<div class="contact-details">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<h3><?php echo $company_details['email_title'] ?></h3>
							<span><?php echo $company_details['email_details'] ?></span>
							<br />
						</div><!-- /col-12 col-sm-12 col-md-12 col-lg-6 -->
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<h3><?php echo $company_details['address_title'] ?></h3>
							<address>
								<?php echo $company_details['address_details'] ?>
							</address>
						</div><!-- /col-12 col-sm-12 col-md-12 col-lg-6 -->
						
					</div><!-- /row -->
				</div><!-- /contact-details -->
				<div class="map-section">
					<?php echo $company_details['map'] ?>
				</div><!-- /map-section -->
		<?php endif; ?>
		
		<?php
			
			$company_details_2 = get_field('company_details_2');	

			if( $company_details_2 ): ?>
				<div class="map-info-two">
					<?php /*
					<div class="row">
						<div class="col-12">
							<div class="title-region">
								<h2>New Region Served</h2>
							</div><!-- /title-region -->
						</div><!-- /col-12 -->
					</div><!-- /row -->
					*/ ?>
					
					<?php /*
					<div class="contact-details">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-6">
								<h3><?php echo $company_details_2['address_title'] ?></h3>
								<address>
									<?php echo $company_details_2['address_details'] ?>
								</address>
							</div><!-- /col-12 col-sm-12 col-md-12 col-lg-6 -->
							<div class="col-12 col-sm-12 col-md-12 col-lg-6">
								<h3><?php echo $company_details_2['email_title'] ?></h3>
								<span><?php echo $company_details_2['email_details'] ?></span>
							</div><!-- /col-12 col-sm-12 col-md-12 col-lg-6 -->
						</div><!-- /row -->
					</div><!-- /contact-details -->
					<div class="map-section">
						<?php echo $company_details_2['map'] ?>
					</div><!-- /map-section -->
				</div><!-- /map-info-two -->
		<?php endif; ?>
    </div><!-- /col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
        <ul class="list-unstyled all-images">
            <?php

				// check if the repeater field has rows of data
				if( have_rows('sidebar_image') ):

					// loop through the rows of data
					while ( have_rows('sidebar_image') ) : the_row();
					$image = get_sub_field('image')
					?>
					<li>
						<figure>
							<img class="img-fluid w-100" src="<?php echo $image['url']; ?>" alt="">
						</figure>
					</li>
					<?php
						// display a sub field value
						

					endwhile;

				else :

					// no rows found

				endif;
			?>
			
            
        </ul>
    </div><!-- /col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 -->
</div>
		
    </div>
</section>
<section class="cover-form">
        <div class="container">
			<div class="row">
                <div class="col-12 text-center">
                    <h2>Get in Touch</h2>
					<h5 style="color:#fff; ">Thank you for your interest in NORDOCK<span class='copyright'>®</span>. Please complete the form below and a NORDOCK<span class='copyright'>®</span> Sales Representative will contact you.</h5>
                </div><!-- /col-12 -->
            </div><!-- /row -->
            <div class="row">
                <div class="col-12">
                        <?php echo do_shortcode('[gravityform id=4 title=false]');?>
                </div><!-- /col-12 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
<?php echo do_shortcode('[latest_product]'); ?>	
<section class="section box-menu">
	<div class="container">
		<?php dynamic_sidebar( 'product-section' ); ?>
		<?php //dynamic_sidebar( 'guarantee-section' ); ?>
	</div>
</section>

*/ ?>




<div class="container new-contact">

	<div class="row">
	
		<div class="col-md-12">
			<br />
			<h1 class="title-top">Contact Us</h1>
			<br />
		</div>
	
		<div class="col-md-6">
		
			
			<h4>FIND A SALES REP</h4>
			<br />
			
			<p style="font-size:16px;"><strong>Choose Your Area</strong></p>
			<br />
		
			<form id="region-finder" action="?" method="POST">
				<div id="countryWrapper"></div>
				<br />
				<div id="regionWrapper"></div>
				<br />
			</form>
		</div>
		
		<div class="col-md-6">
		
			
			<div id="contact-details" style="font-size:18px;">
			
			
			</div>
			<br />
		</div>
		
	</div>
	
	
	<div class="row">
	
		<div class="col-md-12" style="text-align:center;">
			<hr />
			
			<h4 style="text-align:center;">Representative Map</h4>
			<br />
			
			<iframe src="https://createaclickablemap.com/map.php?id=92236&maplocation=uscanada&online=true" width="950" height="554" style="border: none;"></iframe>
			<script>if (window.addEventListener){ window.addEventListener("message", function(event) { if(event.data.length >= 22) { if( event.data.substr(0, 22) == "__MM-LOCATION.REDIRECT") location = event.data.substr(22); } }, false); } else if (window.attachEvent){ window.attachEvent("message", function(event) { if( event.data.length >= 22) { if ( event.data.substr(0, 22) == "__MM-LOCATION.REDIRECT") location = event.data.substr(22); } }, false); } </script>




		</div>
		
	</div>
	
	
	<div class="row">
	
		<div class="col-md-12">
			<hr />
			<h4>NATIONAL ACCOUNTS/SALES MANAGER</h4>
			<br />
			
			
		</div>
		
		<div class="col-md-6 b-wrap" style="font-size:18px; posititon:relative; max-height:350px;">
			<img class="b-card" src="https://nordockinc.com/wp-content/uploads/2020/07/Dan-St.-Martin-Nordock-Business-Card-2.jpg" alt="Dan St. Martin Business Card" style="display:none; position: absolute; height:100%; width:auto;" />
			<div style="padding:60px 0;">
				<p class="b-name"><strong>Dan St. Martin</strong></p>
				<p>NORDOCK CORPORATION &amp; NATIONAL ACCOUNTS</p>
				<p>Cell: <a href="tel:2623898874">262-389-8874</a></p>
				<p>Email: <a href="mailto:dan.stmartin@iwsolutions.com">dan.stmartin@iwsolutions.com</a></p>
				<br />
			</div>
		</div>
		<div class="col-md-6 b-wrap" style="font-size:18px; posititon:relative; max-height:350px;">
			<img class="b-card" src="https://nordockinc.com/wp-content/uploads/2021/03/jim-flatley.jpg" alt="Jim Flatley Business Card" style="display:none; position: absolute; height:100%; width:auto;" />
			<div style="padding:60px 0;">
				<p class="b-name"><strong>Jim Flatley</strong></p>
				<p>NATIONAL SALES MANAGER</p>
				<p>Cell: <a href="tel:4142348742">414-234-8742</a></p>
				<p>Email: <a href="mailto:jim.flatley@iwsolutions.com">jim.flatley@iwsolutions.com</a></p>
				<br />
			</div>
		</div>
		
		<div class="col-md-12" style="font-size:18px;">
			<p><strong>CALL TOLL-FREE: <a href="tel:18668854276">1-866-885-4276</a></strong></p>
			<p><strong>OFFICE NUMBER: <a href="tel:19056974276">1-905-697-4276 </a></strong></p>
			<p><strong>PARTS &amp; SERVICE: <a href="tel:18668854276">1-866-885-4276</a></strong></p>
			<p><strong>EMAIL: <a href="mailto:customerservice-nordock@iwsolutions.com">customerservice-nordock@iwsolutions.com</a></strong></p>
			<br/><br/><br/>
		</div>
		
		<div class="col-12">
			<ul class="list-inline" style="display:flex; justify-content:center;">
				<li class="list-inline-item"><a href="https://www.facebook.com/pg/NordockInc/posts/" target="_blank"><img class="alignnone size-medium wp-image-1930" src="https://nordockinc.com/wp-content/uploads/2020/04/Contact_Us_Social_Media_Icons_2-Facebook.png" alt="" width="115" height="115" /></a></li>
				<li class="list-inline-item"><a href="https://twitter.com/NORDOCKINC" target="_blank"><img class="alignnone size-medium wp-image-1932" src="https://nordockinc.com/wp-content/uploads/2020/04/Contact_Us_Social_Media_Icons_4-Twitter.png" alt="" width="115" height="115" /></a></li>
				<li class="list-inline-item"><a href="https://www.instagram.com/nordockinc/" target="_blank"><img class="alignnone size-full wp-image-1929" src="https://nordockinc.com/wp-content/uploads/2020/04/Contact_Us_Social_Media_Icons_1-Instagram.png" alt="" width="115" height="115" /></a></li>
				<li class="list-inline-item"><a href="https://www.linkedin.com/company/nordock-inc-" target="_blank"><img class="alignnone size-medium wp-image-1931" src="https://nordockinc.com/wp-content/uploads/2020/04/Contact_Us_Social_Media_Icons_3-LinkedIn.png" alt="" width="115" height="115" /></a></li>
				<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCvDRIs9qCmldqCeKm-BDNyw/" target="_blank"><img class="alignnone size-medium wp-image-1933" src="https://nordockinc.com/wp-content/uploads/2020/04/Contact_Us_Social_Media_Icons_5-YouTube.png" alt="" width="114" height="115" /></a></li>
			</ul>
			<br />
			<br />
		</div>
		
	</div>

</div>
<section class="inquiryform">
	<div class="container">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<h2>Contact Us</h2>
		<?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="false"]'); ?>
	</div>
</section>

<?php               
get_footer();

?>  