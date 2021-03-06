<?php
/**
 * The header for our theme.
 *
 * @package inhabitent_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="header-bar container">
					<div class="site-branding">
						<div class="tent-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1 class="site-title">Inhabitent</h1></a>
						</div>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<i class="fa fa-search"></i>
						<div class="nav-search">
							<?php get_search_form(); ?>
						</div>
					</nav><!-- #site-navigation -->

				</div><!-- .header-bar -->
			</header><!-- #masthead -->

	<div id="content" class="site-content">
