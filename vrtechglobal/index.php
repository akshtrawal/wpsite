<?php
/**
 * Index fallback template
 *
 * @package vrtechglobal
 */

get_header(); ?>
<?php
if ( function_exists( 'elementor_theme_do_location' ) ) {
	if ( is_home() && elementor_theme_do_location( 'archive' ) ) {
		// Elementor Archive handles blog.
	} elseif ( ( is_singular() || is_page() ) && elementor_theme_do_location( 'single' ) ) {
		// Elementor Single handles posts/pages.
	} else {
		?>
		<section class="container content-area">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?> data-aos="fade-up">
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry-meta"><?php echo esc_html( get_the_date() ); ?></div>
						<div class="entry-excerpt"><?php the_excerpt(); ?></div>
					</article>
				<?php endwhile; ?>
				<div class="pagination"><?php the_posts_pagination(); ?></div>
			<?php else : ?>
				<p><?php esc_html_e( 'No content found.', 'vrtechglobal' ); ?></p>
			<?php endif; ?>
		</section>
		<?php
	}
} else { ?>
<section class="container content-area">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?> data-aos="fade-up">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-meta"><?php echo esc_html( get_the_date() ); ?></div>
				<div class="entry-excerpt"><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; ?>
		<div class="pagination"><?php the_posts_pagination(); ?></div>
	<?php else : ?>
		<p><?php esc_html_e( 'No content found.', 'vrtechglobal' ); ?></p>
	<?php endif; ?>
</section>
<?php } ?>
<?php get_footer(); ?>