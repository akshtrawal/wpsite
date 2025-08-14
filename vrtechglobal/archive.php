<?php
/**
 * Archive template
 *
 * @package vrtechglobal
 */

get_header(); ?>
<section class="page-hero small"><div class="container"><h1><?php the_archive_title(); ?></h1></div></section>
<section class="container section">
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