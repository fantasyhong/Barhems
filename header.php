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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/projects.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/news.css">
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
	<div class="wrapper d-flex flex-column" style="height: 100%">
		<header>
			<div class="nav-extended">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class ="container">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php bloginfo('template_url'); ?>/imgs/footer-logo.png" style="margin-right:6px; width: 40px; height: 40px;" alt="logo">
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
		</header>