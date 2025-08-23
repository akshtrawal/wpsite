<?php
/**
 * Header template
 *
 * @package vrtechglobal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="scroll-progress" id="scrollProgress"></div>
<?php if ( ! ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'header' ) ) ) : ?>
<header class="site-header">
	<div class="container header-inner">
		<div class="brand">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
				<?php if ( has_custom_logo() ) { the_custom_logo(); } else { ?>
					<span class="site-title"><?php bloginfo( 'name' ); ?></span>
				<?php } ?>
			</a>
		</div>
		<button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="primaryMenu">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'vrtechglobal' ); ?></span>
		</button>
		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary', 'vrtechglobal' ); ?>">
			<?php
			$menu_exists = has_nav_menu( 'primary' );
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primaryMenu',
					'container'      => false,
					'fallback_cb'    => $menu_exists ? false : 'vrtech_menu_fallback',
				)
			);
			?>
		</nav>
		<a class="button button-primary header-cta" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Get a consultation', 'vrtechglobal' ); ?></a>
	</div>
</header>
<?php endif; ?>
<main class="site-main" data-header-offset="true">