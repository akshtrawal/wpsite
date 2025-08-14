<?php
/**
 * Template Name: Blog
 *
 * @package vrtechglobal
 */

get_header(); ?>
<section class="page-hero small"><div class="container"><h1><?php the_title(); ?></h1></div></section>
<section class="container section" data-aos="fade-up">
	<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$query = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged ) );
	if ( $query->have_posts() ) : ?>
		<div class="grid grid-3">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> data-aos="fade-up">
					<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="entry-excerpt"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>
		</div>
		<div class="pagination"><?php echo paginate_links( array( 'total' => $query->max_num_pages ) ); ?></div>
	<?php else : ?>
		<p><?php esc_html_e( 'No posts yet. Coming soon.', 'vrtechglobal' ); ?></p>
	<?php endif; wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>