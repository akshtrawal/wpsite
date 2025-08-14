<?php
/**
 * Front Page template
 *
 * @package vrtechglobal
 */

get_header(); ?>
<section class="hero">
	<div class="container">
		<div class="hero-slider" id="heroSlider">
			<?php
			$default_slides = array(
				array( 'title' => 'Digital Transformation', 'desc' => 'Lead your industry with Dynamics 365 and Azure-powered solutions.', 'btn' => 'Explore Services', 'url' => home_url( '/services' ) ),
				array( 'title' => 'ERP for Growth', 'desc' => 'Finance, Operations, and Commerce to scale confidently.', 'btn' => 'Our Expertise', 'url' => home_url( '/about' ) ),
				array( 'title' => 'Actionable Insights', 'desc' => 'Power BI dashboards that turn data into decisions.', 'btn' => 'See Analytics', 'url' => home_url( '/services' ) ),
			);
			$slides_json = get_theme_mod( 'vrtech_hero_slides', '' );
			$slides      = is_string( $slides_json ) && ! empty( $slides_json ) ? json_decode( $slides_json, true ) : $default_slides;
			if ( empty( $slides ) || ! is_array( $slides ) ) { $slides = $default_slides; }
			foreach ( $slides as $slide ) : ?>
				<div class="hero-slide" data-aos="fade">
					<h1><?php echo esc_html( $slide['title'] ?? '' ); ?></h1>
					<p><?php echo esc_html( $slide['desc'] ?? '' ); ?></p>
					<?php if ( ! empty( $slide['url'] ) && ! empty( $slide['btn'] ) ) : ?>
						<a class="button button-primary" href="<?php echo esc_url( $slide['url'] ); ?>"><?php echo esc_html( $slide['btn'] ); ?></a>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="industries section">
	<div class="container">
		<h2 class="section-title" data-aos="fade-up"><?php esc_html_e( 'Industries We Serve', 'vrtechglobal' ); ?></h2>
		<ul class="chips" data-aos="fade-up" data-aos-delay="100">
			<li>Oil and Gas</li>
			<li>Facility Management</li>
			<li>Real Estate</li>
			<li>Trade and Distribution</li>
			<li>Professional Services</li>
		</ul>
	</div>
</section>

<section class="applications section alt">
	<div class="container">
		<h2 class="section-title" data-aos="fade-up"><?php esc_html_e( 'Business Applications', 'vrtechglobal' ); ?></h2>
		<div class="grid grid-4" data-aos="fade-up" data-aos-delay="100">
			<?php
			$applications = array(
				'Finance and Operations',
				'CRM Sales',
				'CRM Field Service',
				'Business Central',
				'Commerce (Retail)',
				'Power BI',
				'Salesforce',
				'Our ISV',
			);
			foreach ( $applications as $app ) : ?>
				<div class="card app-card">
					<h3><?php echo esc_html( $app ); ?></h3>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="services-teaser section">
	<div class="container">
		<h2 class="section-title" data-aos="fade-up"><?php esc_html_e( 'Services', 'vrtechglobal' ); ?></h2>
		<p class="section-subtitle" data-aos="fade-up" data-aos-delay="50"><?php esc_html_e( 'Implementation, Process Re-engineering, Managed Services, Power Automate, Resourcing, Data Warehousing, Analytics, Payroll for GCC, HRMS ISV', 'vrtechglobal' ); ?></p>
		<div class="cta-row" data-aos="zoom-in">
			<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Explore Services', 'vrtechglobal' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button-secondary"><?php esc_html_e( 'Talk to an expert', 'vrtechglobal' ); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>