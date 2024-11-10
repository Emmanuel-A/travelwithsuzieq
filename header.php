<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TravelWithSuzieQ
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'travelwithsuzieq' ); ?></a>

	<header id="masthead" class="site-header flex items-stretch items-center">
		<button class="mobile-menu-btn flex items-center justify-center"><img class="w-[30px] h-[21px]" src="<?php echo esc_url( get_parent_theme_file_uri(  'assets/icon-mobile-menu.png'  ) ); ?>"></button>

		<div class="mobile-menu-slideout">
			<nav id="site-navigation" class="main-navigation items-center">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
			</nav><!-- #site-navigation -->

			<div class="social-icons-wrapper">
				<ul class="social-icons-list">
					<li class="social-icons-list-item"><a href="https://www.instagram.com/suzieqxo__" target="_blank"><img src="<?php echo esc_url( get_parent_theme_file_uri(  'assets/icon-instagram.png'  ) ); ?>"></a></li>
					<li class="social-icons-list-item"><a href="https://www.instagram.com/suzieqxo__" target="_blank"><img src="<?php echo esc_url( get_parent_theme_file_uri(  'assets/icon-tiktok.png'  ) ); ?>"></a></li>
					<li class="social-icons-list-item"><a href="https://www.instagram.com/suzieqxo__" target="_blank"><img src="<?php echo esc_url( get_parent_theme_file_uri(  'assets/icon-youtube.png'  ) ); ?>"></a></li>
					<li class="social-icons-list-item"><a href="https://www.instagram.com/suzieqxo__" target="_blank"><img src="<?php echo esc_url( get_parent_theme_file_uri(  'assets/icon-pinterest.png'  ) ); ?>"></a></li>
				</ul>
			</div>
		</div>

		<nav id="site-navigation" class="desktop-navigation main-navigation items-center">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>

			<div class="social-icons-wrapper">
				<ul class="social-icons-list">
					<li class="social-icons-list-item"><a href="https://www.instagram.com/suzieqxo__" target="_blank"><img src="<?php echo esc_url( get_parent_theme_file_uri(  'assets/icon-instagram.png'  ) ); ?>"></a></li>
					<li class="social-icons-list-item"><a href="https://www.instagram.com/suzieqxo__" target="_blank"><img src="<?php echo esc_url( get_parent_theme_file_uri(  'assets/icon-tiktok.png'  ) ); ?>"></a></li>
					<li class="social-icons-list-item"><a href="https://www.instagram.com/suzieqxo__" target="_blank"><img src="<?php echo esc_url( get_parent_theme_file_uri(  'assets/icon-youtube.png'  ) ); ?>"></a></li>
					<li class="social-icons-list-item"><a href="https://www.instagram.com/suzieqxo__" target="_blank"><img src="<?php echo esc_url( get_parent_theme_file_uri(  'assets/icon-pinterest.png'  ) ); ?>"></a></li>
				</ul>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	<div class="overlay"></div>