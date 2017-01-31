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

		},
	}

	JAG.init();

	$(function () {
	
	'use strict';
	
	// DOM ready, take it away
		
	});
	
})(jQuery, this);
