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
  				arrows: false,
  				// autoplay: true,
  				autoplaySpeed: 5000
			});

			this.initEventHandlers();

		},
		initEventHandlers: function() {
			var _this 	 = this,
				$forms   = $('form');

			$('.cta, .main-cta a').on('click', function(e) {
				var dest = $(".form-area").offset().top;
				e.preventDefault();

				$("html:not(:animated),body:not(:animated)").animate({ scrollTop: dest - 50}, 500 );
			});

			$forms.on('change', function() {


				_this.revealHiddenField(this);

			});

			this.switchForms();

		}, 
		revealHiddenField: function(ctx) {

			var select = ctx.querySelectorAll('select')[0],
				hidden = ctx.getElementsByClassName('hidden-field')[0];

			
				if (select.value === "Social Media" || select.value === "Referral" || select.value === "Other") {
					hidden.style.display = 'block';
				} else {
					hidden.style.display = 'none';
				}
		},
		switchForms: function() {
			var radio = $('input[type=radio]'),
				targ = '',
				$formParent = $('.form-container');

			$(radio).on('click', function(e) {

				e.preventDefault();

				targ  = '.' + $(this).val().toLowerCase();

				$formParent.addClass('hidden-form');

				if ( $(targ).hasClass('hidden-form')) {
					$(targ).removeClass('hidden-form');
				}

			});
		}
	}

	JAG.init();


	
})(jQuery, this);
