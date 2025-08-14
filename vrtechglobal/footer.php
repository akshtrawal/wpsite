<?php
/**
 * Footer template
 *
 * @package vrtechglobal
 */
?>
</main>
<footer class="site-footer">
	<div class="container">
		<div class="cta">
			<h2><?php esc_html_e( 'Ready to accelerate your digital transformation?', 'vrtechglobal' ); ?></h2>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button-primary" data-aos="zoom-in"><?php esc_html_e( 'Contact Us', 'vrtechglobal' ); ?></a>
		</div>
		<div class="footer-widgets">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php endif; ?>
		</div>
		<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer', 'vrtechglobal' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_id'        => 'footerMenu',
					'container'      => false,
				)
			);
			?>
		</nav>
		<p class="copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'vrtechglobal' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>