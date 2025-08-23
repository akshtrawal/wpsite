<?php
/**
 * Footer template
 *
 * @package vrtechglobal
 */
?>
</main>
<?php if ( ! ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'footer' ) ) ) : ?>
<footer class="site-footer">
	<div class="container">
		<div class="footer-top grid grid-3">
			<section>
				<h3><?php bloginfo( 'name' ); ?></h3>
				<p><?php esc_html_e( 'Experts in Microsoft Dynamics 365, Business Central, and Power Platform across EMEA.', 'vrtechglobal' ); ?></p>
				
				<!-- Social Links -->
				<div class="footer-social">
					<a href="#" aria-label="LinkedIn"><span class="icon-linkedin">in</span></a>
					<a href="#" aria-label="Twitter"><span class="icon-twitter">t</span></a>
					<a href="#" aria-label="Email"><span class="icon-email">@</span></a>
				</div>
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
				
				<!-- Newsletter Signup -->
				<div class="footer-newsletter">
					<h4><?php esc_html_e( 'Stay Updated', 'vrtechglobal' ); ?></h4>
					<form class="newsletter-form" method="post">
						<input type="email" name="newsletter_email" placeholder="<?php esc_attr_e( 'Enter your email', 'vrtechglobal' ); ?>" required>
						<button type="submit"><?php esc_html_e( 'Subscribe', 'vrtechglobal' ); ?></button>
					</form>
				</div>
			</section>
		</div>

		<p class="copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'vrtechglobal' ); ?></p>
	</div>
</footer>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>