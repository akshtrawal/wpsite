<?php
/**
 * Hero Slider Component
 *
 * @package vrtechglobal
 */

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
if ( empty( $slides ) || ! is_array( $slides ) ) { 
    $slides = $default_slides; 
}
?>

<section class="hero">
    <div class="container">
        <div class="hero-slider" id="heroSlider">
            <?php foreach ( $slides as $index => $slide ) : ?>
                <div class="hero-slide <?php echo $index === 0 ? 'active' : ''; ?>" data-aos="fade">
                    <div class="hero-media">
                        <img src="<?php echo esc_url( $slide['image'] ?? 'https://picsum.photos/seed/vrtech/1200/640' ); ?>" 
                             alt="<?php echo esc_attr( $slide['title'] ?? '' ); ?>" 
                             loading="lazy" />
                    </div>
                    <div class="hero-content">
                        <h1><?php echo esc_html( $slide['title'] ?? '' ); ?></h1>
                        <p><?php echo esc_html( $slide['desc'] ?? '' ); ?></p>
                        <?php if ( ! empty( $slide['url'] ) && ! empty( $slide['btn'] ) ) : ?>
                            <a class="button button-primary" href="<?php echo esc_url( $slide['url'] ); ?>">
                                <?php echo esc_html( $slide['btn'] ); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Hero Controls -->
        <div class="hero-controls">
            <?php foreach ( $slides as $index => $slide ) : ?>
                <button class="hero-dot <?php echo $index === 0 ? 'active' : ''; ?>" 
                        data-slide="<?php echo $index; ?>" 
                        aria-label="Go to slide <?php echo $index + 1; ?>">
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>
