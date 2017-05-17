'use strict';
$(function() {
	//reviews
	$('._cib__owl').owlCarousel({
		navText: ['<svg class="icon-svg icon-arrow-prev" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svg/sprite.svg#arrows-prev"></use></svg>', '<svg class="icon-svg icon-arrow-next" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svg/sprite.svg#arrows-next"></use></svg>'],
		nav: true,
		dots: false,
		smartSpeed: 500,
		loop: true,
		//mouseDrag: false,
		responsive : {
			0 : {
				items:1,
				margin: 0,
			},
			768 : {
				items:2
			},
			900 : {
				//margin: 70,
				autoWidth:true,
				items:5
			}
		}
	});	
	/*
	$('._iacb__owl').owlCarousel({
		margin: 0,
		navText: ['<svg class="icon-svg" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/azbnbasetheme/img/svg/sprite.svg#back"></use></svg>', '<svg class="icon-svg" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/azbnbasetheme/img/svg/sprite.svg#next"></use></svg>'],
		
		center: true,
		dots: true,
		items:1,
		smartSpeed: 700,
		animateOut: 'fadeOut',
		loop: true,
		//loop: true,
		mouseDrag: false,
		responsive : {
			0 : {
				nav: false,
			},
			768 : {
				nav: true,
			},			
		}
	});	*/
});