(function ($) {

	$('.owl-carousel-testimonial').owlCarousel({
		loop:true,
		lazyLoad:true,
		margin:15,
		autoplay:false,
		autoplayTimeout:10000,
		smartSpeed: 1000,		
		slideSpeed : 10000,
		touchDrag  : true,
		mouseDrag  : true,
		dots: true,
		nav: false,
		responsiveClass:true,
		responsive:{
			1366:{
				items:3,
			},
			1024:{
				items:3,
			},
			1020:{
				items:2,
			},
			640:{
				items:1,
			},
			480:{
				items:1,
			},
			0:{
				items:1,
			}
		}
	})


	
})(jQuery);