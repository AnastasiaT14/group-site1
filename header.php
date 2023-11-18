<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gpj1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&family=Montserrat:ital,wght@0,600;0,700;1,600;1,700&family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gpj1' ); ?></a>

	<header id="masthead" class="site-header">
      <div class="container">
					<div class="header-content">
						<div class="site-branding">
					<?php
					the_custom_logo();
					?>
				</div>

				<nav id="site-navigation" class="main-navigation gpj-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gpj1' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class' => 'header-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
                  <div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/star.svg'; ?>" alt="">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/pf.svg'; ?>" alt="">
				  </div>

			</div>


		</div>

		
	</header><!-- #masthead -->
