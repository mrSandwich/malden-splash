<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="main-cta">
			<a href="">
				Keep Me Updated!
			</a>
		</div>
		<section class="content-container">
			<div class="copy">
			<ul class="features">
				<li>320 deluxe apartments</li>
				<li>Ground floor retail</li>
				<li>New City offices</li>
				<li>Garage parking</li>
				<li>Steps to T station</li>
			</ul>
			
			<p>
				<em>Located to make life easier</em><br>
				Malden Center out the front door, the MBTA Orange Line and commuter rail across the street, and direct access to downtown Boston-enjoy!
			</p>
			</div>
			<div class="form-area">
				
				<?php echo do_shortcode( '[contact-form-7 id="6" title="Residential Form"]' ); ?>


			</div>
		</section>
		<section class="map-container">
			<a target="_blank" href="https://www.google.com/maps/place/200+Pleasant+St,+Malden,+MA+02148/@42.4269923,-71.0744369,17z/data=!3m1!4b1!4m5!3m4!1s0x89e37160bab040cb:0x2be2982b3a3c30f0!8m2!3d42.4269923!4d-71.0722482">
				<div id="map">
					
				</div>
			</a>
			
		</section>
	</main>


<?php get_footer(); ?>
