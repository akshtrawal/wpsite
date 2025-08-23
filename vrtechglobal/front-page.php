<?php
/**
 * Front Page template
 *
 * @package vrtechglobal
 */

get_header(); ?>

<?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) : ?>
	<?php // Elementor Single template will render the page. ?>
<?php else : ?>

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
				<div class="hero-slide">
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

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                <div class="stat-icon" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3 class="stat-value" data-count="100">0</h3>
                    <p class="stat-label">Successful Implementations</p>
                </div>
            </div>
            
            <div class="stat-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                <div class="stat-icon" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3 class="stat-value" data-count="12">0</h3>
                    <p class="stat-label">Industries Served</p>
                </div>
            </div>
            
            <div class="stat-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                <div class="stat-icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 0 1 0-5 2.5 2.5 0 0 1 0 5z"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3 class="stat-value">EMEA</h3>
                    <p class="stat-label">Regional Focus</p>
                </div>
            </div>
            
            <div class="stat-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">
                <div class="stat-icon" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3 class="stat-value">24/7</h3>
                    <p class="stat-label">Managed Services</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="about-grid">
                               <div class="about-content" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                       <div class="section-header" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                           <h2>About VRTechGlobal</h2>
                           <div class="accent-line"></div>
                       </div>
                       <p data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">We are a trusted Microsoft Dynamics 365 and ERP/CRM partner, helping enterprises across EMEA modernize operations, empower decision making, and drive sustainable growth through digital transformation.</p>
                       <p data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">Our team of experienced professionals brings deep industry knowledge and technical expertise to deliver solutions that create tangible business value.</p>
                       <div class="about-features" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600">
                           <div class="feature-item" data-aos="fade-left" data-aos-delay="600" data-aos-duration="400">
                               <span class="feature-icon">✓</span>
                               <span>Microsoft Gold Partner</span>
                           </div>
                           <div class="feature-item" data-aos="fade-left" data-aos-delay="700" data-aos-duration="400">
                               <span class="feature-icon">✓</span>
                               <span>Industry-Specific Solutions</span>
                           </div>
                           <div class="feature-item" data-aos="fade-left" data-aos-delay="800" data-aos-duration="400">
                               <span class="feature-icon">✓</span>
                               <span>End-to-End Implementation</span>
                           </div>
                       </div>
                       <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-primary" data-aos="fade-up" data-aos-delay="900" data-aos-duration="600">Learn More About Us</a>
                   </div>
                   <div class="about-image" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                       <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg" alt="VRTechGlobal Team" loading="lazy"/>
                       <div class="experience-badge" data-aos="zoom-in" data-aos-delay="800" data-aos-duration="600">
                           <span class="years">10+</span>
                           <span class="label">Years of Excellence</span>
                       </div>
                   </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-preview">
    <div class="container">
                       <div class="section-header center" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                   <h2>Our Services</h2>
                   <p>Comprehensive digital transformation solutions</p>
                   <div class="accent-line center"></div>
               </div>
               
               <div class="services-grid">
                   <div class="service-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                       <div class="service-icon" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                               <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                           </svg>
                       </div>
                       <h3>Implementation Services</h3>
                       <p>End-to-end implementation of Microsoft Dynamics 365 solutions tailored to your business needs.</p>
                       <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-link">Learn More →</a>
                   </div>
                   
                   <div class="service-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                       <div class="service-icon" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                               <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                           </svg>
                       </div>
                       <h3>Managed Services</h3>
                       <p>24/7 support and maintenance to keep your business applications running smoothly.</p>
                       <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-link">Learn More →</a>
                   </div>
                   
                   <div class="service-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                       <div class="service-icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                               <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                           </svg>
                       </div>
                       <h3>Business Analytics</h3>
                       <p>Turn your data into actionable insights with Power BI and advanced analytics solutions.</p>
                       <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-link">Learn More →</a>
                   </div>
               </div>
               
               <div class="section-cta" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" data-aos-once="true">
                   <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-secondary">View All Services</a>
               </div>
    </div>
</section>

<!-- Industries Section -->
<section class="industries-section">
    <div class="container">
                       <div class="section-header center" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                   <h2>Industries We Serve</h2>
                   <p>Tailored solutions for diverse industry needs</p>
                   <div class="accent-line center"></div>
               </div>
               
               <div class="industries-grid">
                   <div class="industry-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                       <div class="industry-image" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                           <img src="https://images.pexels.com/photos/326598/pexels-photo-326598.jpeg" alt="Oil and Gas" loading="lazy"/>
                       </div>
                       <div class="industry-content">
                           <h3>Oil and Gas</h3>
                           <p>ERP & CRM solutions tailored for complex supply chains and operations.</p>
                       </div>
                   </div>
                   
                   <div class="industry-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                       <div class="industry-image" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
                           <img src="https://images.pexels.com/photos/3680959/pexels-photo-3680959.jpeg" alt="Facility Management" loading="lazy"/>
                       </div>
                       <div class="industry-content">
                           <h3>Facility Management</h3>
                           <p>Optimize workforce scheduling, maintenance, and service delivery.</p>
                       </div>
                   </div>
                   
                   <div class="industry-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                       <div class="industry-image" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500">
                           <img src="https://images.pexels.com/photos/259098/pexels-photo-259098.jpeg" alt="Real Estate" loading="lazy"/>
                       </div>
                       <div class="industry-content">
                           <h3>Real Estate</h3>
                           <p>Manage projects, leasing, and customer engagement efficiently.</p>
                       </div>
                   </div>
                   
                   <div class="industry-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">
                       <div class="industry-image" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
                           <img src="https://images.pexels.com/photos/4483610/pexels-photo-4483610.jpeg" alt="Trade and Distribution" loading="lazy"/>
                       </div>
                       <div class="industry-content">
                           <h3>Trade and Distribution</h3>
                           <p>Streamline inventory, logistics, and multi-channel commerce.</p>
                       </div>
                   </div>
               </div>
    </div>
</section>

<!-- Applications Section -->
<section class="applications-section">
    <div class="container">
                       <div class="section-header center" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                   <h2>Business Applications</h2>
                   <p>Comprehensive Microsoft solutions for your business needs</p>
                   <div class="accent-line center"></div>
               </div>
               
               <div class="applications-grid">
                   <?php
                   $applications = array(
                       array( 'title' => 'Finance and Operations', 'image' => 'https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg' ),
                       array( 'title' => 'CRM Sales', 'image' => 'https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg' ),
                       array( 'title' => 'CRM Field Service', 'image' => 'https://images.pexels.com/photos/3184302/pexels-photo-3184302.jpeg' ),
                       array( 'title' => 'Business Central', 'image' => 'https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg' ),
                       array( 'title' => 'Commerce (Retail)', 'image' => 'https://images.pexels.com/photos/4482900/pexels-photo-4482900.jpeg' ),
                       array( 'title' => 'Power BI', 'image' => 'https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg' ),
                       array( 'title' => 'Salesforce', 'image' => 'https://images.pexels/photos/3184465/pexels-photo-3184465.jpeg' ),
                       array( 'title' => 'Our ISV Solutions', 'image' => 'https://images.pexels.com/photos/3184436/pexels-photo-3184436.jpeg' ),
                   );
                   foreach ( $applications as $index => $app ) : ?>
                       <div class="app-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?php echo ($index % 4) * 100; ?>" data-aos-once="true">
                           <div class="app-image" data-aos="zoom-in" data-aos-delay="<?php echo ($index % 4) * 100 + 100; ?>" data-aos-duration="500">
                               <img src="<?php echo esc_url( $app['image'] ); ?>" alt="<?php echo esc_attr( $app['title'] ); ?>" loading="lazy" />
                           </div>
                           <h3><?php echo esc_html( $app['title'] ); ?></h3>
                       </div>
                   <?php endforeach; ?>
               </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <h2 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">Ready to accelerate your digital transformation?</h2>
            <p data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">Let's discuss your ERP/CRM goals and create a clear roadmap for your business success.</p>
            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button-primary">Book a Consultation</a>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="button button-secondary">Explore Our Services</a>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>

<style>
/* CSS Variables */
:root {
    --bg: #0b0e11;
    --bg-alt: #11151a;
    --card: #151a21;
    --text: #e6f1ff;
    --muted: #9fb0c3;
    --primary: #2dd4bf;
    --primary-700: #14b8a6;
    --accent: #60a5fa;
    --danger: #ef4444;
}

/* Hero Section */
.hero {
    background: radial-gradient(1200px 400px at 10% -10%, rgba(96, 165, 250, 0.25), transparent),
                radial-gradient(1200px 400px at 90% -10%, rgba(45, 212, 191, 0.25), transparent);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

.hero-slider {
    position: relative;
    overflow: hidden;
}

.hero-slide {
    padding: 20px 0 10px;
    max-width: 720px;
    display: none;
    animation: fadeIn 0.8s ease-in-out;
}

.hero-slide.active {
    display: block;
}

.hero-media {
    margin-bottom: 30px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.hero-media img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
}

.hero-slide:hover .hero-media img {
    transform: scale(1.05);
}

.hero-content {
    text-align: center;
}

.hero h1 {
    font-size: 3rem;
    margin: 0 0 20px;
    color: var(--text);
    font-weight: 700;
    line-height: 1.2;
}

.hero p {
    color: var(--muted);
    margin: 0 0 30px;
    font-size: 1.2rem;
    line-height: 1.6;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.hero .button {
    font-size: 1.1rem;
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
}

.hero .button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(45, 212, 191, 0.3);
}

/* Stats Section */
.stats-section {
    padding: 80px 0;
    background: var(--bg-alt);
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.stat-item {
    background: var(--card);
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    display: flex;
    align-items: center;
    gap: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.stat-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary), var(--accent));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.stat-icon svg {
    width: 30px;
    height: 30px;
    color: white;
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 5px;
}

.stat-label {
    color: var(--muted);
    font-weight: 500;
}

/* About Section */
.about-section {
    padding: 100px 0;
}

.about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.about-content .section-header {
    margin-bottom: 30px;
}

.about-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: var(--muted);
}

.about-features {
    margin: 30px 0;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 12px;
}

.feature-icon {
    width: 24px;
    height: 24px;
    background: var(--primary);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
}

.about-image {
    position: relative;
}

.about-image img {
    width: 100%;
    border-radius: 12px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.experience-badge {
    position: absolute;
    bottom: -20px;
    right: -20px;
    background: linear-gradient(135deg, var(--primary), var(--accent));
    color: white;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.experience-badge .years {
    display: block;
    font-size: 2rem;
    font-weight: 700;
}

.experience-badge .label {
    font-size: 0.9rem;
}

/* Services Preview */
.services-preview {
    padding: 100px 0;
    background: var(--bg-alt);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin: 50px 0;
}

.service-card {
    background: var(--card);
    padding: 40px 30px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.service-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    background: linear-gradient(135deg, var(--primary), var(--accent));
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.service-icon svg {
    width: 30px;
    height: 30px;
    color: white;
}

.service-card h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
    color: var(--text);
}

.service-card p {
    color: var(--muted);
    margin-bottom: 20px;
    line-height: 1.6;
}

.service-link {
    color: var(--primary);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.service-link:hover {
    color: var(--accent);
}

.section-cta {
    text-align: center;
    margin-top: 40px;
}

/* Industries Section */
.industries-section {
    padding: 100px 0;
}

.industries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.industry-card {
    background: var(--card);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.industry-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.industry-image {
    height: 200px;
    overflow: hidden;
}

.industry-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.industry-card:hover .industry-image img {
    transform: scale(1.05);
}

.industry-content {
    padding: 25px;
}

.industry-content h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
    color: var(--text);
}

.industry-content p {
    color: var(--muted);
    line-height: 1.6;
}

/* Applications Section */
.applications-section {
    padding: 100px 0;
    background: var(--bg-alt);
}

.applications-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.app-card {
    background: var(--card);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
}

.app-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.app-image {
    height: 160px;
    overflow: hidden;
}

.app-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.app-card h3 {
    padding: 20px;
    font-size: 1.1rem;
    color: var(--text);
    margin: 0;
}

/* CTA Section */
.cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, var(--primary), var(--accent));
    color: white;
    text-align: center;
}

.cta-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.cta-content p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.cta-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

/* Section Header */
.section-header h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
    color: var(--text);
}

.section-header p {
    font-size: 1.2rem;
    color: var(--muted);
    margin-bottom: 20px;
}

.accent-line {
    height: 4px;
    width: 60px;
    background: linear-gradient(to right, var(--primary), var(--accent));
    border-radius: 2px;
}

.accent-line.center {
    margin: 0 auto;
}

/* Buttons */
.button {
    display: inline-block;
    padding: 12px 18px;
    border-radius: 10px;
    border: 0;
    cursor: pointer;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.button-primary {
    background: linear-gradient(135deg, var(--primary), var(--primary-700));
    color: #00110e;
}

.button-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(45, 212, 191, 0.3);
}

.button-secondary {
    background: #1f2733;
    color: var(--text);
    border: 1px solid #2b3647;
}

.button-secondary:hover {
    background: #253144;
    transform: translateY(-2px);
}

/* Hero Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 992px) {
    .about-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .experience-badge {
        position: relative;
        bottom: 0;
        right: 0;
        margin-top: 20px;
        max-width: 200px;
    }
}

@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .services-grid,
    .industries-grid,
    .applications-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .hero h1 {
        font-size: 2.5rem;
    }
    
    .hero p {
        font-size: 1.1rem;
    }
}

@media (max-width: 576px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .stat-item {
        flex-direction: column;
        text-align: center;
    }
    
    .section-header h2 {
        font-size: 1.8rem;
    }
    
    .hero h1 {
        font-size: 2rem;
    }
    
    .hero p {
        font-size: 1rem;
    }
}
</style>
