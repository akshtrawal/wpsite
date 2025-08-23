<?php
/**
 * Applications Section Component
 *
 * @package vrtechglobal
 */

$applications = array(
    array( 'title' => 'Finance and Operations', 'image' => 'https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg' ),
    array( 'title' => 'CRM Sales', 'image' => 'https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg' ),
    array( 'title' => 'CRM Field Service', 'image' => 'https://images.pexels.com/photos/3184302/pexels-photo-3184302.jpeg' ),
    array( 'title' => 'Business Central', 'image' => 'https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg' ),
    array( 'title' => 'Commerce (Retail)', 'image' => 'https://images.pexels.com/photos/4482900/pexels-photo-4482900.jpeg' ),
    array( 'title' => 'Power BI', 'image' => 'https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg' ),
    array( 'title' => 'Salesforce', 'image' => 'https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg' ),
    array( 'title' => 'Our ISV Solutions', 'image' => 'https://images.pexels.com/photos/3184436/pexels-photo-3184436.jpeg' ),
);
?>

<section class="applications-section">
    <div class="container">
        <div class="section-header center" data-aos="fade-up">
            <h2>Business Applications</h2>
            <p>Comprehensive Microsoft solutions for your business needs</p>
            <div class="accent-line center"></div>
        </div>
        
        <div class="applications-grid">
            <?php foreach ( $applications as $index => $app ) : ?>
                <div class="app-card" data-aos="fade-up" data-aos-delay="<?php echo ($index % 4) * 100; ?>">
                    <div class="app-image">
                        <img src="<?php echo esc_url( $app['image'] ); ?>" alt="<?php echo esc_attr( $app['title'] ); ?>" loading="lazy" />
                    </div>
                    <h3><?php echo esc_html( $app['title'] ); ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
