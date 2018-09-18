<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Barhems Corporation</title>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/imgs/logo.jpg" type="image/x-icon">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/imgs/logo.jpg" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/homepage.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/vendor/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/home.js"></script>
</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
	<div class="wrapper" style="height: 100%">
		<header>
			<div class="nav-extended">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class ="container">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php bloginfo('template_url'); ?>/imgs/footer-logo.png" style="margin-right:6px; width: 40px; height: 40px;" alt="footer-logo">
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
					</div>
				</nav>
			</div>
	<div class="banner" style="background-image: url('https://i1.wp.com/www.barhems.com/wp-content/uploads/2018/07/BigBanner1.jpg?resize=2560%2C1023&ssl=1');
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
				<?php echo pll__("Focusing on real estate and capital investment, Barhems has 2 major projects in prime locations in NYC. We plan to develop a Barhems Mall with the luxury rental on the currently Macy's location in the heart of Flushing. In addition, we have selected an ideal building in the harbor area of Brooklyn to develop a Barhems Market servicing real estate developers who need construction materials as well as furniture and appliances.");?>
			</p>
		</div>
		<div class="projects-carousel">
			<div class="owl-carousel owl-theme">
				<div class="item">
					<div class="project-wrapper">
						<img src="<?php bloginfo('template_url'); ?>/imgs/project1.jpg" alt="project1">
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
						<img src="<?php bloginfo('template_url'); ?>/imgs/project2.jpg" alt="project2">
						<div class="description">
							<div class="des-wrapper">
								<strong class='des-item'><?php echo pll__('Project Name:');?></strong><span>Barhems Mall </span><br/>
								<strong class='des-item'><?php echo pll__('Investment Size:');?></strong><span>$100 Million</span>
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
				<p><?php echo pll__('Founded in New York, Barhems Corporation has a wide range of resources, providing services for America commercial real estate investment, private equity funding, business development & management and online shopping platform.');?></p>
			</div>
			<div class="intro1-row">
				<div class="row-left">
					<div class="intro1-img lazy" data-src="https://i1.wp.com/www.barhems.com/wp-content/uploads/2018/07/intro1.jpg?resize=736%2C919&ssl=1"></div>
				</div>
				<div class="row-right">
					<div class="intro1-content">
						<div class="container-icon">
							<img class="lazy" data-src="<?php bloginfo('template_url'); ?>/imgs/icon1.png" alt="icon1">
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
							<img class="lazy" data-src="<?php bloginfo('template_url'); ?>/imgs/icon2.png" alt="icon2">
						</div>
						<div class="container-heading"><?php echo pll__('Shopping with us ');?></div>
						<div class="container-description"><?php echo pll__("Our online shopping platform brings convenience to your daily life, and it's our pleasure to provide anything you are looking for. We guarantee your 100% satisfaction.");?></div>
					</div>
				</div>
				<div class="row-right">
					<div class="intro2-img lazy" data-src="<?php bloginfo('template_url'); ?>/imgs/intro2.jpg"></div>
				</div>
			</div>
			<div class="intro3-row">
				<div class="row-left">
					<div class="intro3-img lazy" data-src="<?php bloginfo('template_url'); ?>/imgs/intro3.jpg"></div>
				</div>
				<div class="row-right">
					<div class="intro3-content">
						<div class="container-icon">
							<img class="lazy" data-src="<?php bloginfo('template_url'); ?>/imgs/icon3.png" alt="icon3">
						</div>
						<div class="container-heading"><?php echo pll__('Financial Consulting');?></div>
						<div class="container-description"><?php echo pll__("Our financial team will provide you with dedicated financial planning, assets management, and investment portfolio optimization.");?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php get_footer(); ?>
	
	</div>
	
</body>
</html>

