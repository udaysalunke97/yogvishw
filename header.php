<!DOCTYPE html>
<html lang="en">

<head>
	<title>Yogvishws</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class='sticky'>
		<div class='unsticky'>
			<div class='logo'>
				<a href="<?php echo site_url();?>"><?php the_custom_logo(); ?></a>
			</div>
			<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'menu-box')); ?>
		</div>
		<div class='sticky-header'>
			<div class='container'>
				<div class='row align-items-center'>
					<div class='col-8 col-md-2'>
						<div class='logo'>
							<a href="<?php echo home_url();?>"><img src='<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png' /></a>
						</div>
					</div>
					<div class='col-4 col-md-10'>
						<button class='toggle-menu ml-auto'>Menu</button>
						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'menu-box')); ?>
					</div>
				</div>
			</div>
		</div>
	</header>