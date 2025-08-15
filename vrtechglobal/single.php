<?php
/**
 * Single post template
 *
 * @package vrtechglobal
 */

get_header(); ?>
<?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) : ?>
	<?php // Elementor Single template will render the post. ?>
<?php else : ?>
<section class="page-hero small"><div class="container"><h1><?php the_title(); ?></h1></div></section>
<section class="container section">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class( 'post-content' ); ?> data-aos="fade-up">
			<div class="entry-meta"><?php echo esc_html( get_the_date() ); ?></div>
			<div class="rich-text"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</section>
<?php endif; ?>
<?php get_footer(); ?>