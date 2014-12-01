<html>
<head>
	<title>Test Theme</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Raleway:800,400,300' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="js/jquery.galleriffic.js"></script>

</head>
<body>
	<div id="wrapper">
		<div id="header" class="menu">
			
			<a class="glow" href="#hero">HOME</a>
			<a class="glow" href="#contact">CONTACT</a>
			<a class="glow" href="http://localhost:8888/pages/about.php">ABOUT</a>
			<a class="glow" href="#work">WORK</a>
			<nav id="site-navigation" class="navigation main-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Menu', 'TestTheme' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'TestTheme' ); ?>"><?php _e( 'Skip to content', 'TestTheme' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				<?php get_search_form(); ?>
			</nav>
			
			<!--
			<nav id="site-navigation" class="main-navigation clear" role="navigation">
                    <h1 class="menu-toggle"><a href="#"><?php _e( 'Menu', 'TestTheme' ); ?></a></h1>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			</nav>
			-->
		</div>

