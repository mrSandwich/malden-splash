			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/jag_white.svg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/ADA.svg" class="compliance">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/EHO.svg" class="compliance">

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
             
                    zoom: 13,
                    zoomControl: false,
                    scaleControl: false,
                    gestureHandling: "none",
                    scrollwheel: false,
                    disableDefaultUI: true,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(42.4075117,-71.1076312),

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [
							    {
							        "featureType": "all",
							        "elementType": "labels.text.fill",
							        "stylers": [
										            {
										                "saturation": 36
										            },
										            {
										                "color": "#333333"
										            },
										            {
										                "lightness": 40
										            }
										        ]
										    },
										    {
										        "featureType": "all",
										        "elementType": "labels.text.stroke",
										        "stylers": [
										            {
										                "visibility": "on"
										            },
										            {
										                "color": "#ffffff"
										            },
										            {
										                "lightness": 16
										            }
										        ]
										    },
										    {
										        "featureType": "all",
										        "elementType": "labels.icon",
										        "stylers": [
										            {
										                "visibility": "off"
										            }
										        ]
										    },
										    {
										        "featureType": "administrative",
										        "elementType": "geometry.fill",
										        "stylers": [
										            {
										                "lightness": 20
										            },
										            {
										                "hue": "#ff0000"
										            }
										        ]
										    },
										    {
										        "featureType": "administrative",
										        "elementType": "geometry.stroke",
										        "stylers": [
										            {
										                "color": "#fefefe"
										            },
										            {
										                "lightness": 17
										            },
										            {
										                "weight": 1.2
										            }
										        ]
										    },
										    {
										        "featureType": "administrative",
										        "elementType": "labels.text",
										        "stylers": [
										            {
										                "visibility": "on"
										            }
										        ]
										    },
										    {
										        "featureType": "landscape",
										        "elementType": "geometry",
										        "stylers": [
										            {
										                "color": "#efefef"
										            },
										            {
										                "lightness": 20
										            }
										        ]
										    },
										    {
										        "featureType": "landscape",
										        "elementType": "labels.text",
										        "stylers": [
										            {
										                "visibility": "off"
										            }
										        ]
										    },
										    {
										        "featureType": "poi",
										        "elementType": "geometry",
										        "stylers": [
										            {
										                "color": "#f5f5f5"
										            },
										            {
										                "lightness": 21
										            }
										        ]
										    },
										    {
										        "featureType": "poi",
										        "elementType": "labels.text",
										        "stylers": [
										            {
										                "visibility": "off"
										            }
										        ]
										    },
										    {
										        "featureType": "poi.park",
										        "elementType": "geometry",
										        "stylers": [
										            {
										                "color": "#dedede"
										            },
										            {
										                "lightness": 21
										            }
										        ]
										    },
										    {
										        "featureType": "road.highway",
										        "elementType": "geometry.fill",
										        "stylers": [
										            {
										                "color": "#ffffff"
										            },
										            {
										                "lightness": 17
										            }
										        ]
										    },
										    {
										        "featureType": "road.highway",
										        "elementType": "geometry.stroke",
										        "stylers": [
										            {
										                "color": "#ffffff"
										            },
										            {
										                "lightness": 29
										            },
										            {
										                "weight": 0.2
										            }
										        ]
										    },
										    {
										        "featureType": "road.arterial",
										        "elementType": "all",
										        "stylers": [
										            {
										                "visibility": "simplified"
										            }
										        ]
										    },
										    {
										        "featureType": "road.arterial",
										        "elementType": "geometry",
										        "stylers": [
										            {
										                "color": "#d0d0d0"
										            },
										            {
										                "lightness": 18
										            }
										        ]
										    },
										    {
										        "featureType": "road.arterial",
										        "elementType": "labels.text",
										        "stylers": [
										            {
										                "visibility": "off"
										            }
										        ]
										    },
										    {
										        "featureType": "road.local",
										        "elementType": "geometry",
										        "stylers": [
										            {
										                "color": "#ffffff"
										            },
										            {
										                "lightness": 16
										            }
										        ]
										    },
										    {
										        "featureType": "road.local",
										        "elementType": "labels.text",
										        "stylers": [
										            {
										                "visibility": "off"
										            }
										        ]
										    },
										    {
										        "featureType": "transit",
										        "elementType": "geometry",
										        "stylers": [
										            {
										                "color": "#f2f2f2"
										            },
										            {
										                "lightness": 19
										            }
										        ]
										    },
										    {
										        "featureType": "transit.line",
										        "elementType": "geometry.fill",
										        "stylers": [
										            {
										                "color": "#000000"
										            },
										            {
										                "visibility": "on"
										            },
										            {
										                "saturation": "7"
										            }
										        ]
										    },
										    {
										        "featureType": "transit.line",
										        "elementType": "geometry.stroke",
										        "stylers": [
										            {
										                "visibility": "off"
										            },
										            {
										                "color": "#ff0000"
										            },
										            {
										                "weight": "2.40"
										            }
										        ]
										    },
										    {
										        "featureType": "transit.station.rail",
										        "elementType": "labels",
										        "stylers": [
										            {
										                "visibility": "simplified"
										            },
										            {
										                "weight": "2.81"
										            }
										        ]
										    },
										    {
										        "featureType": "water",
										        "elementType": "geometry",
										        "stylers": [
										            {
										                "color": "#e9e9e9"
										            },
										            {
										                "lightness": 17
										            }
										        ]
										    }
										]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(42.4271992,-71.074046),
                    map: map,
           			icon: "<?php echo get_template_directory_uri(); ?>/img/elements/mapmarker_sm.svg"
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
