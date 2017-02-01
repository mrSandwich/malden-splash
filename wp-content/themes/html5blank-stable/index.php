<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="main-cta">
			<a href="">
				Keep Me Updated!
			</a>
		</div>
		<div class="content-container">
			<section class="copy">
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
			</section>
			<section class="form-area">
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
							<select name="select">
								<option value="null" selected></option> 
							  	<option value="value2">Value 2</option>
							  	<option value="value3">Value 3</option>
							</select>
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
				
			</section>
			<!-- /section -->
		</div>
	</main>


<?php get_footer(); ?>
