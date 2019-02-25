jQuery(document).ready(function () {
	

	$(".owl-carousel").owlCarousel({
		loop:true,
		margin:45,
		autoHeight: true,
		mouseDrag: false,
		touchDrag: false,
		nav: true,
		responsiveClass:true,
		navText: [
		'<i class=" material-icons">chevron_left</i>',
		'<i class=" material-icons">chevron_right</i>'
		],
		responsive:{
			0:{
				items:1,
				nav:true,
				mouseDrag: true,
				touchDrag: true,

			},
			600:{
				items:1,
				nav:true,
				mouseDrag: true,
				touchDrag: true,
			},
			769:{
				items:2,
				nav:true
			},
			1199:{
				items:2,
				nav:true,
				loop:true,
				margin:40,

			}
		}
	});

});// end Jquery
