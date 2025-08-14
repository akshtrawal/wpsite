<?php
/**
 * Blog home (latest posts) template
 * Shows hero slider + latest posts so the site looks consistent even when
 * Settings > Reading is set to "Your latest posts".
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

<section class="container section" data-aos="fade-up">
	<h2 class="section-title"><?php esc_html_e( 'Latest Posts', 'vrtechglobal' ); ?></h2>
	<?php if ( have_posts() ) : ?>
		<div class="grid grid-3">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> data-aos="fade-up">
					<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="entry-excerpt"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>
		</div>
		<div class="pagination"><?php the_posts_pagination(); ?></div>
	<?php else : ?>
		<p><?php esc_html_e( 'No posts found.', 'vrtechglobal' ); ?></p>
	<?php endif; ?>
</section>
<?php get_footer(); ?>
