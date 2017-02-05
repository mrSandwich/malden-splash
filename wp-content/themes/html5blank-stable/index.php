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
				<form id="user-form">
					
					<ul>
						<li>
							What are you interested in?
							<fieldset>
								<label><input type="radio" checked="checked" name="interest" value="residentail">Residential</label>
								<label><input type="radio" name="interest" value="reyail">Retail</label> 
							</fieldset>
						</li>
						<li>
							<input type="text" name="firstname"  placeholder="First Name">
						</li>
						<li>
							<input type="text" name="lastname" placeholder="Last Name">
						</li>
						<li>
							<input type="email" name="email" placeholder="Email Address">
						</li>
						<li class="select-item">
							<label for="select">How did you hear about us?</label>
							<select name="select" style="background-color:#000;" >
								<option value="null" selected></option> 
							  	<option value="drive/walk by">Drove/walked/biked by the site</option>
							  	<option value="word of mouth">Word of mouth</option>
							  	<option value="social media">Social Media</option>
							  	<option value="referral">Referral</option>
							  	<option value="online search">Online search</option>
							  	<option value="news article">News Article</option>
							  	<option value="other">Other</option>
							</select>
						</li>
						<li class="hidden-field">
							<input type="text" name="specify" placeholder="Please specify">
						</li>

						<li>
							<input type="submit" name="form-submit" value="submit">
							<div class="form-branding">
								<span>A project of: </span>
								<img src="<?php echo get_template_directory_uri(); ?>/img/logos/jag_white.svg">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logos/nwm_white.svg">
							</div>
						</li>
					</ul>

				</form>
				
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
