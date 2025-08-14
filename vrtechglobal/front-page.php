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
				array(
					'title' => 'Digital Transformation',
					'desc'  => 'Lead your industry with Dynamics 365 and Azure-powered solutions.',
					'btn'   => 'Explore Services',
					'url'   => home_url( '/services' ),
					'image' => 'https://picsum.photos/seed/vrtech-transform/1200/640',
				),
				array(
					'title' => 'ERP for Growth',
					'desc'  => 'Finance, Operations, and Commerce to scale confidently.',
					'btn'   => 'Our Expertise',
					'url'   => home_url( '/about' ),
					'image' => 'https://picsum.photos/seed/vrtech-erp/1200/640',
				),
				array(
					'title' => 'Actionable Insights',
					'desc'  => 'Power BI dashboards that turn data into decisions.',
					'btn'   => 'See Analytics',
					'url'   => home_url( '/services' ),
					'image' => 'https://picsum.photos/seed/vrtech-analytics/1200/640',
				),
			);
			$slides_json = get_theme_mod( 'vrtech_hero_slides', '' );
			$slides      = is_string( $slides_json ) && ! empty( $slides_json ) ? json_decode( $slides_json, true ) : $default_slides;
			if ( empty( $slides ) || ! is_array( $slides ) ) { $slides = $default_slides; }
			foreach ( $slides as $slide ) : ?>
				<div class="hero-slide" data-aos="fade">
					<div class="hero-media">
						<img src="<?php echo esc_url( $slide['image'] ?? 'https://picsum.photos/seed/vrtech/1200/640' ); ?>" alt="<?php echo esc_attr( $slide['title'] ?? '' ); ?>" loading="lazy" />
					</div>
					<div class="hero-content">
						<h1><?php echo esc_html( $slide['title'] ?? '' ); ?></h1>
						<p><?php echo esc_html( $slide['desc'] ?? '' ); ?></p>
						<?php if ( ! empty( $slide['url'] ) && ! empty( $slide['btn'] ) ) : ?>
							<a class="button button-primary" href="<?php echo esc_url( $slide['url'] ); ?>"><?php echo esc_html( $slide['btn'] ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="logos section">
	<div class="container">
		<p class="section-subtitle" data-aos="fade-up"><?php esc_html_e( 'Trusted by teams across EMEA', 'vrtechglobal' ); ?></p>
		<ul class="logo-row" data-aos="fade-up" data-aos-delay="50">
			<li><img src="https://dummyimage.com/120x36/2b3647/ffffff&text=LOGO+1" alt="Logo 1" /></li>
			<li><img src="https://dummyimage.com/120x36/2b3647/ffffff&text=LOGO+2" alt="Logo 2" /></li>
			<li><img src="https://dummyimage.com/120x36/2b3647/ffffff&text=LOGO+3" alt="Logo 3" /></li>
			<li><img src="https://dummyimage.com/120x36/2b3647/ffffff&text=LOGO+4" alt="Logo 4" /></li>
			<li><img src="https://dummyimage.com/120x36/2b3647/ffffff&text=LOGO+5" alt="Logo 5" /></li>
		</ul>
	</div>
</section>

<section class="metrics section alt">
	<div class="container">
		<div class="grid grid-4" data-aos="fade-up">
			<div class="metric"><div class="metric-value">100+</div><div class="metric-label"><?php esc_html_e( 'Implementations', 'vrtechglobal' ); ?></div></div>
			<div class="metric"><div class="metric-value">10+</div><div class="metric-label"><?php esc_html_e( 'Industries', 'vrtechglobal' ); ?></div></div>
			<div class="metric"><div class="metric-value">EMEA</div><div class="metric-label"><?php esc_html_e( 'Regional Focus', 'vrtechglobal' ); ?></div></div>
			<div class="metric"><div class="metric-value">24/7</div><div class="metric-label"><?php esc_html_e( 'Managed Services', 'vrtechglobal' ); ?></div></div>
		</div>
	</div>
</section>

<section class="process section">
	<div class="container">
		<h2 class="section-title" data-aos="fade-up"><?php esc_html_e( 'How we engage', 'vrtechglobal' ); ?></h2>
		<div class="grid grid-4" data-aos="fade-up" data-aos-delay="50">
			<div class="card step"><span class="step-num">1</span><h3><?php esc_html_e( 'Discovery', 'vrtechglobal' ); ?></h3><p><?php esc_html_e( 'Understand goals and constraints', 'vrtechglobal' ); ?></p></div>
			<div class="card step"><span class="step-num">2</span><h3><?php esc_html_e( 'Process Study', 'vrtechglobal' ); ?></h3><p><?php esc_html_e( 'Map current vs target state', 'vrtechglobal' ); ?></p></div>
			<div class="card step"><span class="step-num">3</span><h3><?php esc_html_e( 'Implementation', 'vrtechglobal' ); ?></h3><p><?php esc_html_e( 'Iterative, value-first delivery', 'vrtechglobal' ); ?></p></div>
			<div class="card step"><span class="step-num">4</span><h3><?php esc_html_e( 'Support', 'vrtechglobal' ); ?></h3><p><?php esc_html_e( 'Scale with managed services', 'vrtechglobal' ); ?></p></div>
		</div>
	</div>
</section>

<section class="section alt">
	<div class="container">
		<h2 class="section-title" data-aos="fade-up"><?php esc_html_e( 'Recent Case Studies', 'vrtechglobal' ); ?></h2>
		<?php
		$cases = new WP_Query( array( 'post_type' => 'case_study', 'posts_per_page' => 3 ) );
		if ( $cases->have_posts() ) : ?>
			<div class="grid grid-3" data-aos="fade-up" data-aos-delay="50">
				<?php while ( $cases->have_posts() ) : $cases->the_post(); ?>
					<article class="card">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="thumb"><?php the_post_thumbnail( 'card-thumb' ); ?></div>
						<?php endif; ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="entry-excerpt"><?php the_excerpt(); ?></div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		<?php else : ?>
			<p data-aos="fade-up"><?php esc_html_e( 'Case studies coming soon.', 'vrtechglobal' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<section class="testimonials section">
	<div class="container">
		<h2 class="section-title" data-aos="fade-up"><?php esc_html_e( 'What our clients say', 'vrtechglobal' ); ?></h2>
		<div class="grid grid-3" data-aos="fade-up" data-aos-delay="50">
			<div class="card quote"><p>“VRTech helped us streamline operations with Business Central. The impact was immediate.”</p><span class="author">COO, Trading Company</span></div>
			<div class="card quote"><p>“Their Dynamics 365 expertise and managed services are top-notch.”</p><span class="author">IT Director, Facilities Management</span></div>
			<div class="card quote"><p>“Power BI dashboards from VRTech changed how our leadership makes decisions.”</p><span class="author">CFO, Real Estate Group</span></div>
		</div>
	</div>
</section>

<section class="final-cta section alt">
	<div class="container">
		<div class="cta-box" data-aos="zoom-in">
			<h2><?php esc_html_e( 'Ready to accelerate your digital transformation?', 'vrtechglobal' ); ?></h2>
			<p class="section-subtitle"><?php esc_html_e( 'Let’s discuss your ERP/CRM goals and get you a clear roadmap.', 'vrtechglobal' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Book a consultation', 'vrtechglobal' ); ?></a>
		</div>
	</div>
</section>

<section class="section">
	<div class="container page-builder" data-aos="fade-up">
		<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
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
				array( 'title' => 'Finance and Operations', 'image' => 'https://picsum.photos/seed/finance-ops/400/240' ),
				array( 'title' => 'CRM Sales', 'image' => 'https://picsum.photos/seed/crm-sales/400/240' ),
				array( 'title' => 'CRM Field Service', 'image' => 'https://picsum.photos/seed/field-service/400/240' ),
				array( 'title' => 'Business Central', 'image' => 'https://picsum.photos/seed/business-central/400/240' ),
				array( 'title' => 'Commerce (Retail)', 'image' => 'https://picsum.photos/seed/retail/400/240' ),
				array( 'title' => 'Power BI', 'image' => 'https://picsum.photos/seed/power-bi/400/240' ),
				array( 'title' => 'Salesforce', 'image' => 'https://picsum.photos/seed/salesforce/400/240' ),
				array( 'title' => 'Our ISV', 'image' => 'https://picsum.photos/seed/isv/400/240' ),
			);
			foreach ( $applications as $app ) : ?>
				<div class="card app-card">
					<img class="app-thumb" src="<?php echo esc_url( $app['image'] ); ?>" alt="<?php echo esc_attr( $app['title'] ); ?>" loading="lazy" />
					<h3><?php echo esc_html( $app['title'] ); ?></h3>
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