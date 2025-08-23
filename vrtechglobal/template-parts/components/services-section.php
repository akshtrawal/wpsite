<?php
/**
 * Services Section Component
 *
 * @package vrtechglobal
 */
?>

<section class="services-preview">
    <div class="container">
        <div class="section-header center" data-aos="fade-up">
            <h2>Our Services</h2>
            <p>Comprehensive digital transformation solutions</p>
            <div class="accent-line center"></div>
        </div>
        
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                    </svg>
                </div>
                <h3>Implementation Services</h3>
                <p>End-to-end implementation of Microsoft Dynamics 365 solutions tailored to your business needs.</p>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-link">Learn More →</a>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                    </svg>
                </div>
                <h3>Managed Services</h3>
                <p>24/7 support and maintenance to keep your business applications running smoothly.</p>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-link">Learn More →</a>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                    </svg>
                </div>
                <h3>Business Analytics</h3>
                <p>Turn your data into actionable insights with Power BI and advanced analytics solutions.</p>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-link">Learn More →</a>
            </div>
        </div>
        
        <div class="section-cta" data-aos="fade-up">
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-secondary">View All Services</a>
        </div>
    </div>
</section>
