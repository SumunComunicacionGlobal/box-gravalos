<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sumun
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site container-fluid">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sumun' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<div class="site-branding">
			<?php
			if ( has_custom_logo() ) :
				the_custom_logo();
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			?>
			
		</div><!-- .site-branding -->

		<div class="menu-container">     
			<button class="menu-button btn btn--primary"><?php _e('Menu','fundacion-botin'); ?></button>
			<div id="site-header-menu" class="site-header-menu">
				<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'fundacion-botin'); ?>">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'depth'          => 4,
						'container'      => false,
						'has_dropdown'   => true,
						));
					?>
				</nav>
			</div>
		</div><!-- #site-navigation -->
	</header><!-- #masthead -->
