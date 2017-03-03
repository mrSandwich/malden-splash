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
				<li>New city offices</li>
				<li>Garage parking</li>
				<li>Steps to T station</li>
			</ul>
			
			<p>
				<em>Located to make life easier</em><br>
				Malden Center out the front door, the MBTA Orange Line and commuter rail across the street, and direct access to downtown Boston &mdash; enjoy!
				 <br>
				 <br>
				<span>190 Pleasant St. Malden, MA 02148</span>
			</p>
			</div>
			<div class="form-area">

				<div class="form-container residential">
				
					<?php echo do_shortcode( '[contact-form-7 id="6" title="Residential Form"]' ); ?>

				</div>
				<div class="form-container hidden-form retail">
				
					<?php echo do_shortcode( '[contact-form-7 id="7" title="Retail Form"]' ); ?>

				</div>
			</div>
		</section>
		<section class="map-container">
			<a target="_blank" href="https://www.google.com/maps/place/190+Pleasant+St,+Malden,+MA+02148/@42.4271992,-71.074046,17z/data=!3m1!4b1!4m5!3m4!1s0x89e37160ead3c269:0xd92217e88ccf4a7e!8m2!3d42.4271992!4d-71.071852">
				<div id="map">
					<img src="<?php echo get_template_directory_uri(); ?>/img/slides/map.jpg"> 
				</div>
			</a>
			
		</section>
	</main>


<?php get_footer(); ?>
