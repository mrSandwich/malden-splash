(function ($, root, undefined) {

	var JAG = JAG || {};



	JAG = {

		init: function() {

			var $sldr = $('.slider');


			$sldr.slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
  				infinite: true,
  				arrows: false
			});

			this.initClickHandlers()

		},
		initClickHandlers: function() {

			$('.cta, .main-cta a').on('click', function(e) {
				var dest = $(".form-area").offset().top;
				e.preventDefault();

				$("html:not(:animated),body:not(:animated)").animate({ scrollTop: dest}, 500 );
			});
		}
	}

	JAG.init();

	$(function () {
	
	'use strict';
	
	// DOM ready, take it away
		
	});
	
})(jQuery, this);
