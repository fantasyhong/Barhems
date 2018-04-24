<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Barhems Corporation</title>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/imgs/logo.jpg" type="image/x-icon">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/imgs/logo.jpg" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/homepage.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/vendor/owl.theme.default.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!-- <script src="<?php bloginfo('template_url'); ?>/js/home.js"></script> -->
</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
	<div class="wrapper" style="height: 100%">
		<header>
			<div class="nav-extended">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class ="container">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php bloginfo('template_url'); ?>/imgs/footer-logo.png" style="margin-right:6px; width: 40px; height: 40px;">
						<span>BARHEMS</span>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
							<?php 

								$defaults = array(
								 'theme_location'	=> 'primary',
							    'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
								'container'			=> 'div',
								'container_class'	=> 'collapse navbar-collapse',
								'container_id'		=> 'navbarSupportedContent',
								'menu_class'		=> 'navbar-nav ml-auto',
							    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
							    'walker'			=> new WP_Bootstrap_Navwalker()

								);

								wp_nav_menu( $defaults );

							?>
							<!-- <li class="nav-item dropdown " style="cursor: pointer;">
								<div class="nav-link dropdown-toggle" to='/' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Languages
								</div>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a href="<?php bloginfo('template_url'); ?>/barhems_ch/index.html" style="text-decoration: none;">
										<div class="dropdown-item" style="text-align: center;">中文</div>
									</a>
								</div>
							</li> -->
					
					</div>
				</nav>
			</div>
	<div class="banner" style="background-image: url('<?php bloginfo('template_url'); ?>/imgs/BigBanner1.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 50%;
			min-height: 455px;
			background-attachment: fixed !important;
			">	
			<div class="banner-slider">
				<h3><?php echo pll__( 'Professional Commercial Real Estate Management' );?></h3>
				<P class="banner-text">
					<?php echo pll__( 'We have a professional real estate developing and management team, providing our clients with personalized financial services as well as private assets management. We are dedicated to developing an online shopping platform focusing on servicing potential clients in the real estate industry.');?>

				</P>
			</div>
		</div>
	</header>

	<div class="projects-home">
		<div class="projects-home-header">
			<h2><?php echo pll__('Primary Projects');?></h2>
			<p class="intro-text">
				<?php echo pll__("Focusing on real estate and capital investment, Barhems has 3 major projects in prime locations in NYC. We plan to develop a Barhems Mall with the luxury rental on the currently Macy's location in the heart of Flushing. In addition, we have selected an ideal building in the harbor area of Brooklyn to develop a Barhems Market servicing real estate developers who need construction materials as well as furniture and appliances. Meanwhile, we plan to open a grand SPA resort In Flushing, featuring state-of-the-art designs, high-end amenities, private SPA services.");?>
			</p>
			<?php //echo do_shortcode('[contact-form-7 id="160" title="Contact form 1"]');?>
		</div>
		<div class="projects-carousel">
			<div class="owl-carousel owl-theme">
				<div class="item">
					<div class="project-wrapper">
						<img src="<?php bloginfo('template_url'); ?>/imgs/project1.jpg">
						<div class="description">
							<div class="des-wrapper">
								<strong class='des-item'><?php echo pll__('Project Name:');?></strong><span>Barhems City</span><br/>
								<strong class='des-item'><?php echo pll__('Investment Size:');?></strong><span>$84 Million </span>
							</div>
						</div>
						
					</div>
				</div>
				<div class="item">
					<div class="project-wrapper">
						<img src="<?php bloginfo('template_url'); ?>/imgs/project2.jpg">
						<div class="description">
							<div class="des-wrapper">
								<strong class='des-item'><?php echo pll__('Project Name:');?></strong><span>Barhems Mall </span><br/>
								<strong class='des-item'><?php echo pll__('Investment Size:');?></strong><span>$100 Million</span>
							</div>
						</div>
						
					</div>
				</div>
				<div class="item">
					<div class="project-wrapper">
						<img src="<?php bloginfo('template_url'); ?>/imgs/project3.jpg">
						<div class="description">
							<div class="des-wrapper">
								<strong class='des-item'><?php echo pll__('Project Name:');?></strong><span>Spa Hotel</span><br/>
								<strong class='des-item'><?php echo pll__('Investment Size:');?></strong><span>$88 Million</span>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="intro">
		<div class="intro1-container">
			<div class="intro1-description">
				<p><?php echo pll__('Founded in New York, Barhams Corporation has a wide range of resources, providing services for America commercial real estate investment, private equity funding, business development & management and online shopping platform.');?></p>
			</div>
			<div class="intro1-row">
				<div class="row-left">
					<div class="intro1-img" style="background-image: url('<?php bloginfo('template_url'); ?>/imgs/intro1.jpg');"></div>
				</div>
				<div class="row-right">
					<div class="intro1-content">
						<div class="container-icon">
							<img src="<?php bloginfo('template_url'); ?>/imgs/icon1.png">
						</div>
						<div class="container-heading"><?php echo pll__('Commercial Real Estate ');?></div>
						<div class="container-description"><?php echo pll__('If you are looking for a loyal partner in Commercial Real Estate related field, Barhems Corporation will be your best choice.');?></div>
					</div>
				</div>
			</div>
			<div class="intro2-row">
				<div class="row-left">
					<div class="intro2-content">
						<div class="container-icon">
							<img src="<?php bloginfo('template_url'); ?>/imgs/icon2.png">
						</div>
						<div class="container-heading"><?php echo pll__('Shopping with us ');?></div>
						<div class="container-description"><?php echo pll__("Our online shopping platform brings convenience to your daily life, and it's our pleasure to provide anything you are looking for. We guarantee your 100% satisfaction.");?></div>
					</div>
				</div>
				<div class="row-right">
					<div class="intro2-img" style="background-image: url('<?php bloginfo('template_url'); ?>/imgs/intro2.jpg');"></div>
				</div>
			</div>
			<div class="intro3-row">
				<div class="row-left">
					<div class="intro3-img" style="background-image: url('<?php bloginfo('template_url'); ?>/imgs/intro3.jpg');"></div>
				</div>
				<div class="row-right">
					<div class="intro3-content">
						<div class="container-icon">
							<img src="<?php bloginfo('template_url'); ?>/imgs/icon3.png">
						</div>
						<div class="container-heading"><?php echo pll__('Financial Consulting');?></div>
						<div class="container-description"><?php echo pll__("Our financial team will provide you with dedicated financial planning, assets management, and investment portfolio optimization.");?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="team">
		<h2 class="team-head">Our Team</h2>
		<div class="team-container">
			<div class="team-item">
				<div class="member-img">
					<div>
						<img src="<?php bloginfo('template_url'); ?>/imgs/news2.jpg">
					</div>
				</div>
				<div class="member-name">leo chen</div>
				<div class="member-des">

				</div>
			</div>
			<div class="team-item"></div>
			<div class="team-item"></div>
			<div class="team-item"></div>
			<div class="team-item"></div>
			<div class="team-item"></div>
			<div class="team-item"></div>
		</div>
	</div> -->
	
	<?php get_footer(); ?>
	
	</div>
	
</body>
</html>

