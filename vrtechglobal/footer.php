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
		<div class="footer-top grid grid-3">
			<section>
				<h3><?php bloginfo( 'name' ); ?></h3>
				<p><?php esc_html_e( 'Experts in Microsoft Dynamics 365, Business Central, and Power Platform across EMEA.', 'vrtechglobal' ); ?></p>
			</section>
			<section>
				<h3><?php esc_html_e( 'Quick Links', 'vrtechglobal' ); ?></h3>
				<ul class="footer-links">
					<?php wp_list_pages( array( 'title_li' => '', 'include' => implode( ',', array_filter( array( get_option( 'page_on_front' ), get_option( 'page_for_posts' ) ) ) ) ) ); ?>
					<li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Services', 'vrtechglobal' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About', 'vrtechglobal' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'vrtechglobal' ); ?></a></li>
				</ul>
			</section>
			<section>
				<h3><?php esc_html_e( 'Get in touch', 'vrtechglobal' ); ?></h3>
				<p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'vrtech_contact_email', get_option( 'admin_email' ) ) ); ?>"><?php echo esc_html( get_theme_mod( 'vrtech_contact_email', get_option( 'admin_email' ) ) ); ?></a></p>
				<p><a class="button button-secondary" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact Us', 'vrtechglobal' ); ?></a></p>
			</section>
		</div>

		<div class="footer-bottom">
			<div class="socials">
				<a href="#" aria-label="LinkedIn" class="social">in</a>
				<a href="#" aria-label="Twitter" class="social">X</a>
				<a href="#" aria-label="YouTube" class="social">▶</a>
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
		</div>

		<p class="copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'vrtechglobal' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>