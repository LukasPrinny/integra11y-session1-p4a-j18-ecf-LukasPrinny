

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('assets/images/favicon.ico'); ?>">
	

	<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/normalize.css'); ?>" />
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/style.css'); ?>" />

	<?php
	wp_head();
	?>

</head>

<body>
	<header role="banner">
		<div class="top">
			<a href="#main-content">Aller au contenu</a>
			<button type="button" class="button switch-theme">Thème sombre</button>
		</div>

		<h1 class="logo"><?php bloginfo('name'); ?></h1>
		<!-- <nav role="navigation" aria-label="Menu de navigation principal">
			<ul>
				<li><a href="" aria-current="current">Accueil</a></li>
				<li><a href="">Catégorie 1</a></li>
				<li><a href="">Catégorie 2</a></li>
				<li><a href="">Catégorie 3</a></li>
				<li><a href="">Catégorie 4</a></li>
			</ul>
		</nav> -->
		<nav role="navigation" aria-label="Menu de navigation principal">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'main-menu', 
				'container'      => false,
				'menu_class'     => 'class-du-menu' 
			)
		);
		?>
		</nav>
	</header>