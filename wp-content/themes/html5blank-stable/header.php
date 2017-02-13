<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico?v=2" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png?v=2" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="slider">

					<div class="slide-item first-slide">

						<div class="branding-hero dark-bg">

							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logos/jag_white.svg" alt="Logo" class="logo-img"> -->
								</a>
							</div>
							<!-- /logo -->
							<span>Arriving 2019</span>
							<h2>Malden Center's<br> Next Destination</h2>
							<p>Big city amenities.</p>
							<p>Neighborhood vibe.</p>
							<a class="cta" href="">Stay In Touch</a>

						</div>
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/slides/mask.jpg"> -->
					</div>
					<div class="slide-item second-slide">

						<div class="branding-hero dark-bg">

							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logos/jag_white.svg" alt="Logo" class="logo-img"> -->
								</a>
							</div>
							<!-- /logo -->
							<span>Arriving 2019</span>
							<h2>Live Easy<br> Commute Easier</h2>
							<p>100 steps to the T.</p>
							<p>15 minutes to Boston.</p>
							<a class="cta" href="">Stay In Touch</a>

						</div>
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/slides/train.jpg"> -->
					</div>
					<div class="slide-item third-slide">

						<div class="branding-hero light-bg">

							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logos/jag_white.svg" alt="Logo" class="logo-img"> -->
								</a>
							</div>
							<!-- /logo -->
							<span>Arriving 2019</span>
							<h2>A new center <br>of gravity</h2>
							<p>Making Pleasant Street more pleasant.</p>
							<a class="cta" href="">Stay In Touch</a>
							<p class="hidden-p">hidden</p>

						</div>
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/slides/render.jpg"> -->
					</div>
					<div class="slide-item fourth-slide">

						<div class="branding-hero light-bg">

							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logos/jag_white.svg" alt="Logo" class="logo-img"> -->
								</a>
							</div>
							<!-- /logo -->
							<span>Arriving 2019</span>
							<h2>More Happy<br> Time</h2>
							<p>All of the amenities.</p>
							<p>None of the attitude.</p>
							<a class="cta" href="">Stay In Touch</a>

						</div>
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/slides/pool.jpg"> -->
					</div>
					<div class="slide-item fifth-slide">

						<div class="branding-hero light-bg">

							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logos/jag_white.svg" alt="Logo" class="logo-img"> -->
								</a>
							</div>
							<!-- /logo -->
							<span>Arriving 2019</span>
							<h2>Space to <br>stretch</h2>
							<p>3,000 Square feet of custom amenities.</p>
							<p>None of the attitude.</p>
							<a class="cta" href="">Stay In Touch</a>

						</div>
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/slides/stretch.jpg"> -->
					</div>
				</div> <!-- slider -->

					<!-- nav -->
					<!-- <nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav> -->
					<!-- /nav -->

			</header>
			<!-- /header -->
