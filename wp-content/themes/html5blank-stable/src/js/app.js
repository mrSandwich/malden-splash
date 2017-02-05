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

			this.initClickHandlers();
			this.revealHiddenField();

		},
		initClickHandlers: function() {

			$('.cta, .main-cta a').on('click', function(e) {
				var dest = $(".form-area").offset().top;
				e.preventDefault();

				$("html:not(:animated),body:not(:animated)").animate({ scrollTop: dest}, 500 );
			});

		}, 
		revealHiddenField: function() {

			var form = document.getElementById("user-form"),
				select = form.querySelectorAll('select')[0],
				hidden = document.getElementsByClassName('hidden-field')[0];

			$(form).on('change', function() {
				if (select.value === "social media" || select.value === "referral" || select.value === "other") {
					hidden.style.display = 'block';
				} else {
					hidden.style.display = 'none';
				}
			});
		}
	}

	JAG.init();

	$(function () {
	
	'use strict';
	
	// DOM ready, take it away
		
	});
	
})(jQuery, this);
