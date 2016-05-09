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
		<button class="main-nav-button">
			<p>MENU</p>
			<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 93.91 24.4"><title>arrow-thin</title><path d="M51.15,52.83L51,52.89,50.77,53A1.76,1.76,0,0,0,51.15,52.83Z" transform="translate(-3.08 -28.63)"/><path d="M95.54,33.29L51.15,52.83,51,52.89,50.77,53,50.6,53c-0.06,0-.13,0-0.2,0a1.83,1.83,0,0,1-.33,0H50a1.83,1.83,0,0,1-.33,0l-0.2,0-0.17,0-0.24-.08-0.14-.06L4.54,33.29a2.43,2.43,0,1,1,2-4.45L50,48,93.58,28.84A2.43,2.43,0,1,1,95.54,33.29Z" transform="translate(-3.08 -28.63)"/><path d="M48.93,52.83a1.76,1.76,0,0,0,.38.15l-0.24-.09Z" transform="translate(-3.08 -28.63)"/></svg>
		</button>
		<?php
			$defaults = array(
				'container' => false,
				'theme_location' => 'primary-menu'
			);

			wp_nav_menu($defaults);

		?>
	</nav>
</header>
