<?php
/**
 * Template Name: Services
 *
 * @package vrtechglobal
 */

get_header(); ?>
<section class="services-hero">
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <h1><?php the_title(); ?></h1>
            <p class="hero-subtitle">Comprehensive digital transformation solutions for your business</p>
        </div>
        <div class="hero-graphic" data-aos="fade-left">
            <div class="services-visual">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z"/>
                    </svg>
                </div>
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                    </svg>
                </div>
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rest of the services page code remains the same as previous version -->
<section class="services-intro section">
    <div class="container">
        <div class="section-header center" data-aos="fade-up">
            <h2>Our Service Offerings</h2>
            <p class="section-subtitle">End-to-end solutions for your digital transformation journey</p>
            <div class="accent-line center"></div>
        </div>
        <div class="rich-text center" data-aos="fade-up" data-aos-delay="100">
            <p>VR Technologies provides comprehensive digital transformation services built on Microsoft technologies. With expertise across multiple industries and a team of experienced professionals, we help organizations navigate their digital evolution efficiently and effectively.</p>
        </div>
    </div>
</section>

<section class="services-grid-section section alt">
    <div class="container">
        <div class="services-filter" data-aos="fade-up">
            <button class="filter-btn active" data-filter="all">All Services</button>
            <button class="filter-btn" data-filter="implementation">Implementation</button>
            <button class="filter-btn" data-filter="consulting">Consulting</button>
            <button class="filter-btn" data-filter="solutions">Solutions</button>
            <button class="filter-btn" data-filter="resources">Resources</button>
        </div>
        
        <div class="services-grid">
            <!-- Implementation Services -->
            <div class="service-card" data-aos="fade-up" data-category="implementation">
                <div class="service-card-inner">
                    <div class="service-image">
                        <img src="https://picsum.photos/seed/impl/600/360" alt="Implementation services" loading="lazy" />
                    </div>
                    <div class="service-content">
                        <h3>Implementation Services</h3>
                        <p>With a core team of experienced professionals who have been part of 100+ implementations, we assist organizations in their digital transformation journey using Microsoft.</p>
                        <ul class="service-features">
                            <li>Dynamics 365 Finance and Operations</li>
                            <li>Business Central</li>
                            <li>CRM Implementations</li>
                            <li>Multi-industry expertise</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Business Process Re-engineering -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100" data-category="consulting">
                <div class="service-card-inner">
                    <div class="service-image">
                        <img src="https://picsum.photos/seed/bpr/600/360" alt="Business process study and re-engineering" loading="lazy" />
                    </div>
                    <div class="service-content">
                        <h3>Business Process Study & Re-engineering</h3>
                        <p>The founding block of a good digital transformation process is to ensure organization's business processes are aligned with the changed digital transformation landscape.</p>
                        <ul class="service-features">
                            <li>Process analysis</li>
                            <li>Re-engineering</li>
                            <li>Documentation</li>
                            <li>Roadmap development</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Managed Services -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200" data-category="solutions">
                <div class="service-card-inner">
                    <div class="service-image">
                        <img src="https://picsum.photos/seed/ms/600/360" alt="Managed services" loading="lazy" />
                    </div>
                    <div class="service-content">
                        <h3>Managed Services (Support)</h3>
                        <p>It is important that company's business applications help it respond to ever-changing business landscape quickly and efficiently.</p>
                        <ul class="service-features">
                            <li>Application lifecycle management</li>
                            <li>Upgrades and testing</li>
                            <li>Enhancements</li>
                            <li>Infrastructure management</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Power Automate Solutions -->
            <div class="service-card" data-aos="fade-up" data-category="solutions">
                <div class="service-card-inner">
                    <div class="service-image">
                        <img src="https://picsum.photos/seed/pa/600/360" alt="Power automate solutions" loading="lazy" />
                    </div>
                    <div class="service-content">
                        <h3>Power Automate Solutions</h3>
                        <p>Power automate solutions built on Microsoft stack helps organizations meet their integration, customization, automation requirements in a cost-effective mode.</p>
                        <ul class="service-features">
                            <li>Integration solutions</li>
                            <li>Customization</li>
                            <li>Automation workflows</li>
                            <li>Cloud-based solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Manpower Resourcing -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100" data-category="resources">
                <div class="service-card-inner">
                    <div class="service-image">
                        <img src="https://picsum.photos/seed/mr/600/360" alt="Manpower Resourcing" loading="lazy" />
                    </div>
                    <div class="service-content">
                        <h3>Manpower Resourcing</h3>
                        <p>Flexible resourcing solutions for Dynamics and Power Platform projects across EMEA.</p>
                        <ul class="service-features">
                            <li>Dynamics experts</li>
                            <li>Power Platform specialists</li>
                            <li>Flexible engagement models</li>
                            <li>EMEA coverage</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Data Warehousing -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200" data-category="solutions">
                <div class="service-card-inner">
                    <div class="service-image">
                        <img src="https://picsum.photos/seed/dwh/600/360" alt="Data warehousing" loading="lazy" />
                    </div>
                    <div class="service-content">
                        <h3>Data Warehousing</h3>
                        <p>For most organizations, modern system architecture includes multiple applications to address diverse needs of business users.</p>
                        <ul class="service-features">
                            <li>Single data repository</li>
                            <li>Multi-application integration</li>
                            <li>Data preservation</li>
                            <li>Best-in-class solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Business Analytics -->
            <div class="service-card" data-aos="fade-up" data-category="solutions">
                <div class="service-card-inner">
                    <div class="service-image">
                        <img src="https://picsum.photos/seed/ba/600/360" alt="Business analytics" loading="lazy" />
                    </div>
                    <div class="service-content">
                        <h3>Business Analytics</h3>
                        <p>Providing right information at right time to decision makers within an organization is a key competitive advantage in today's world.</p>
                        <ul class="service-features">
                            <li>Decision support systems</li>
                            <li>Information delivery</li>
                            <li>Efficient reporting</li>
                            <li>Custom analytics solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Payroll for GCC -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100" data-category="solutions">
                <div class="service-card-inner">
                    <div class="service-image">
                        <img src="https://picsum.photos/seed/payroll/600/360" alt="Payroll for GCC" loading="lazy" />
                    </div>
                    <div class="service-content">
                        <h3>Payroll for GCC</h3>
                        <p>Many organizations today are benefitting from our payroll specifically designed to meet the needs of GCC compliance and local practices.</p>
                        <ul class="service-features">
                            <li>GCC compliance</li>
                            <li>Multi-industry support</li>
                            <li>Flexible implementation</li>
                            <li>Built on Dynamics 365</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- HRMS ISV -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200" data-category="solutions">
                <div class="service-card-inner">
                    <div class="service-image">
                        <img src="https://picsum.photos/seed/hrms/600/360" alt="HRMS ISV" loading="lazy" />
                    </div>
                    <div class="service-content">
                        <h3>HRMS ISV</h3>
                        <p>Modern HRMS solutions to empower your workforce lifecycle on the Microsoft stack.</p>
                        <ul class="service-features">
                            <li>Workforce lifecycle management</li>
                            <li>Microsoft stack integration</li>
                            <li>Modern HR solutions</li>
                            <li>Employee empowerment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-cta section">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <div class="cta-text">
                <h2>Ready to transform your business?</h2>
                <p>Contact us today to discuss how our services can help your organization achieve its digital transformation goals.</p>
            </div>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Get in Touch</a>
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-secondary">Learn About Us</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<style>
/* CSS Variables - Match Site Theme */
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

/* Global Theme Colors */
body {
    background: var(--bg);
    color: var(--text);
}

/* Services Hero */
.services-hero {
    background: linear-gradient(135deg, var(--primary), var(--accent));
    color: #00110e;
    padding: 100px 0 80px;
    position: relative;
    overflow: hidden;
}

.services-hero .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.hero-content {
    flex: 1;
    max-width: 600px;
}

.hero-subtitle {
    font-size: 1.5rem;
    margin-top: 15px;
    opacity: 0.9;
}

.hero-graphic {
    flex: 1;
    display: flex;
    justify-content: flex-end;
}

.services-visual {
    display: flex;
    gap: 20px;
}

.service-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.service-icon svg {
    width: 40px;
    height: 40px;
    fill: white;
}

/* Services Intro */
.services-intro {
    padding: 80px 0;
    background: var(--bg);
}

.section-header {
    text-align: center;
    margin-bottom: 40px;
}

.section-header h2 {
    color: var(--text);
    font-size: 2.5rem;
    margin-bottom: 15px;
    font-weight: 700;
}

.section-subtitle {
    color: var(--muted);
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.accent-line {
    height: 4px;
    width: 60px;
    background: linear-gradient(to right, var(--primary), var(--accent));
    border-radius: 2px;
    margin: 0 auto;
}

.rich-text {
    text-align: center;
}

.rich-text p {
    color: var(--muted);
    font-size: 1.1rem;
    line-height: 1.7;
    max-width: 800px;
    margin: 0 auto;
}

/* Services Filter */
.services-filter {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 50px;
    padding: 20px;
    background: var(--card);
    border-radius: 16px;
    border: 1px solid rgba(45, 212, 191, 0.1);
}

.filter-btn {
    padding: 12px 24px;
    background: var(--card);
    color: var(--text);
    border: 2px solid rgba(45, 212, 191, 0.2);
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.filter-btn:hover, .filter-btn.active {
    background: var(--primary);
    color: #00110e;
    border-color: var(--primary);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(45, 212, 191, 0.3);
}

/* Services Grid */
.services-grid-section {
    padding: 80px 0;
    background: var(--bg-alt);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
}

.service-card {
    background: var(--card);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    transition: all 0.4s ease;
    border: 1px solid rgba(45, 212, 191, 0.1);
}

.service-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 25px 60px rgba(45, 212, 191, 0.15);
    border-color: rgba(45, 212, 191, 0.3);
}

.service-card-inner {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.service-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.service-card:hover .service-image img {
    transform: scale(1.05);
}

/* Service image hover effect */
.service-card:hover .service-image img {
    transform: scale(1.05);
}

.service-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.service-content h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
    color: var(--text);
    font-weight: 700;
}

.service-content p {
    color: var(--muted);
    margin-bottom: 20px;
    line-height: 1.6;
}

.service-features {
    margin-top: auto;
    list-style: none;
    padding: 0;
}

.service-features li {
    padding: 8px 0;
    border-bottom: 1px solid rgba(45, 212, 191, 0.1);
    position: relative;
    padding-left: 20px;
    color: var(--muted);
    transition: color 0.3s ease;
}

.service-features li:hover {
    color: var(--text);
}

.service-features li:before {
    content: "✓";
    color: var(--primary);
    font-weight: bold;
    position: absolute;
    left: 0;
}

.service-features li:last-child {
    border-bottom: none;
}

/* Services CTA */
.services-cta {
    padding: 80px 0;
    background: var(--bg);
}

.cta-content {
    background: linear-gradient(135deg, var(--primary), var(--accent));
    border-radius: 16px;
    padding: 60px;
    color: #00110e;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border: 1px solid rgba(45, 212, 191, 0.2);
    box-shadow: 0 20px 60px rgba(45, 212, 191, 0.15);
}

.cta-text h2 {
    font-size: 2.2rem;
    margin-bottom: 15px;
    color: #00110e;
}

.cta-text p {
    font-size: 1.1rem;
    opacity: 0.9;
    max-width: 500px;
    color: #00110e;
}

.cta-buttons {
    display: flex;
    gap: 15px;
}

.btn {
    padding: 15px 30px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
}

.btn-primary {
    background: white;
    color: var(--primary);
    border: 2px solid white;
}

.btn-primary:hover {
    background: var(--accent);
    color: #00110e;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.btn-secondary:hover {
    background: white;
    color: var(--primary);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

/* Responsive Design */
@media (max-width: 992px) {
    .services-hero .container {
        flex-direction: column;
        text-align: center;
    }
    
    .hero-content {
        margin-bottom: 50px;
    }
    
    .services-visual {
        justify-content: center;
    }
    
    .cta-content {
        flex-direction: column;
        text-align: center;
        gap: 30px;
    }
    
    .cta-buttons {
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .services-filter {
        flex-direction: column;
        align-items: center;
    }
    
    .filter-btn {
        width: 200px;
    }
    
    .cta-content {
        padding: 40px 30px;
    }
    
    .cta-buttons {
        flex-direction: column;
        width: 100%;
    }
    
    .btn {
        text-align: center;
    }
}

@media (max-width: 576px) {
    .services-hero {
        padding: 80px 0 60px;
    }
    
    .hero-subtitle {
        font-size: 1.2rem;
    }
    
    .services-visual {
        flex-direction: column;
        align-items: center;
    }
    
    .service-card {
        margin-bottom: 30px;
    }
}
</style>

<script>
// Services filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const serviceCards = document.querySelectorAll('.service-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            // Show/hide services based on filter
            serviceCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>