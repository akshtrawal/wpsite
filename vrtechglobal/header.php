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
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primaryMenu',
					'container'      => false,
				)
			);
			?>
		</nav>
	</div>
</header>
<main class="site-main">