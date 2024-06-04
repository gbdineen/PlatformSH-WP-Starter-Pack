    <footer>
        <section class="section footer-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <?php dynamic_sidebar( 'footer-sidebar-column-one' ); ?>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <?php dynamic_sidebar( 'footer-sidebar-column-two' ); ?>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <?php dynamic_sidebar( 'footer-sidebar-column-three' ); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bottom_block">
            <div class="container">
                <div class="row navigation-bunch">
                    <div class="col-lg-12">
                        
                        <?php 
                            wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class'=> 'list-unstyled' ) );
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="creadit-title"><?php echo get_option('my_footer_text'); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    </section>
    
    <?php wp_footer(); ?>

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false">//<![CDATA[
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KZL38QC');//]]>
</script>
<!-- End Google Tag Manager -->

<?php if(is_page_template('template/home-new.php')) { ?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
	var swiper = new Swiper('.mainswiper', {
		navigation: {
	        nextEl: '.main-slider .swiper-button-next',
	        prevEl: '.main-slider .swiper-button-prev',
	    },
    	loop: false,
	    spaceBetween: 0,
        effect: 'slide',
		autoHeight: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: true,
		},
    });
</script>
<?php } ?>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("mainnav");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>