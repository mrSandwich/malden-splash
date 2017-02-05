			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<span>A project of: </span>
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/jag_white.svg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/nwm_white.svg">

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/lib/slick.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/src/js/app.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQD_HmqlHbNPNFAxAg4FRRvQ-zR1TVADQ&callback=init"
    async defer></script>
		<script>
			// google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
             
                    zoom: 14,
                    zoomControl: false,
                    scaleControl: false,
                    gestureHandling: "none",
                    scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(42.4269923,-71.0744369),

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"poi.attraction","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.attraction","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.school","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.sports_complex","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"off"},{"saturation":"-56"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"on"},{"lightness":"100"},{"gamma":"4.41"},{"weight":"1.22"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"saturation":"-11"},{"lightness":"36"},{"gamma":"0.89"},{"weight":"0.55"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"off"},{"lightness":"6"},{"gamma":"0.00"},{"weight":"0.01"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"saturation":"-1"},{"visibility":"on"},{"lightness":"55"},{"gamma":"1.21"},{"weight":"0.58"}]},{"featureType":"water","elementType":"geometry.stroke","stylers":[{"saturation":"-8"},{"lightness":"9"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":"-53"},{"saturation":-100},{"gamma":"1.40"},{"weight":"1.67"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(42.4269923,-71.0744369),
                    map: map,
           			icon: "<?php echo get_template_directory_uri(); ?>/img/elements/mapmarker.svg"
                });
            }
		</script>
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
