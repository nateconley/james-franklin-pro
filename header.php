<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php echo get_bloginfo( 'title' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body>

<header>
	<nav class="main-nav">
	<?php
		$defaults = array(
			'container' => false,
			'theme_location' => 'primary-menu'
		);

		wp_nav_menu($defaults);

	?>
	</nav>
</header>
