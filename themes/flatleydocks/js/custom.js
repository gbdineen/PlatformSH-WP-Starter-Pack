jQuery(document).ready(function () {
    
    // Slider Js start here...
	jQuery('.main-slider .owl-carousel').owlCarousel({
		loop: true,
		nav: false,
		navText: ['<i class="icon-left-small"></i>', '<i class="icon-right-small"></i>'],
  		navContainer: '#lgi__slider',
  		navClass: [ 'lgi__btn lgi__btn--prev', 'lgi__btn lgi__btn--next' ],
		autoplay:true,
		//autoplayTimeout:10000, // Slider interval time
		autoplayHoverPause:true,
		slideSpeed : 10000,
		responsive: {
			0: {
				items: 1
			},
			320: {
				items: 1
			},
			639: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	// Slider Js end here...
	
	jQuery('#toggle').click(function () {
		jQuery(this).toggleClass('active');
		jQuery('#overlay').toggleClass('open');
		jQuery("body").toggleClass('ov-h');
		jQuery(".duplicate-sticky").toggleClass('dp-none');
	});



	jQuery("#menu-main-menu .menu-item-has-children ").click(function () {
			/*
			commented by Ricky on sub menu issue 
			*/
			//jQuery(this).next().toggleClass('opensubmenu').slideToggle();

		});

		// search toggle
		jQuery(".search-bar .search").click(function () {
			jQuery(".search-bar-full").fadeIn();
			//jQuery(".search-bar-full").addClass('active');
		});
		jQuery("#close_search").click(function () {
			jQuery(".search-bar-full").fadeOut();
			//jQuery(".search-bar-full").removeClass('active');
			
		});
		// 
		// var stickyTop = jQuery('.sticky').offset().top;

		var header = jQuery(".clearHeader");
		var headerbody = jQuery("body");
		jQuery(window).scroll(function() {    
			var scroll = jQuery(window).scrollTop();

			if (scroll >= 10) {
				header.removeClass('clearHeader').addClass("darkHeader");
				headerbody.addClass("bodyscroll");
			} else {
				header.removeClass("darkHeader").addClass('clearHeader');
				headerbody.removeClass("bodyscroll");
			}
		});
		// 
		// var isIE = window.navigator.msPointerEnabled;
		// if (isIE) {
		// 	var stickyTop = jQuery('.sticky').offset().top;

		// 	jQuery(window).scroll(function() {
		// 		var windowTop = jQuery(window).scrollTop();
		// 		if (stickyTop < windowTop && jQuery(".wrapper").height() + jQuery(".wrapper").offset().top - jQuery(".sticky").height() > windowTop) {
		// 			jQuery('.sticky').css('position', 'fixed');
		// 		} else {
		// 			jQuery('.sticky').css('position', 'relative');
		// 		}
		// 	});
		// }
		// $(function () {
			var shrinkHeader = 100;
			$(window).scroll(function () {
				var scroll = getCurrentScroll();
				if (scroll >= shrinkHeader) {
					$('.main-sticky').addClass('sticky');
				} else {
					$('.main-sticky').removeClass('sticky');
				}
			});
			function getCurrentScroll() {
				return window.pageYOffset || document.documentElement.scrollTop;
			}
		// });

		
		// $(window).scroll(function() { 

		// 	var scroll = $(window).scrollTop();
		// 	// var banner_height = $('.cover-top.duplicate-sticky').height();
		// 	// var Mobile_scroll = $('.mobile-scroll-modal').offset();
		// 	if (scroll >= 180 ) {
		// 		$('.home .duplicate-sticky').addClass('dup-removed');
		// 	} else {
		// 		$('.home .duplicate-sticky').removeClass('dup-removed');
		// 	}
		// });
		/*
	jQuery('.container .card .card-link').click(function() {
		jQuery( '.container .card .card-link' ).addClass('collapsed');
		jQuery(this).toggleClass('collapsed');
	});	*/
	$("#menu-main-menu .menu-item-has-children").append('<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>');
	$('#menu-main-menu .menu-item-has-children > span').click(function () {
		$('#menu-main-menu .sub-menu').slideToggle();
	});
});

/* accordian collapse */
$(document).ready(function(){
	$('.collapse').on('show.bs.collapse', function (e) {
		$('.collapse').collapse("hide")
	})
	$( ".comment-form-email input" ).removeClass( "error" );
});