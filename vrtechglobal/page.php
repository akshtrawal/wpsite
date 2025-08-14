<?php
/**
 * Default page template
 *
 * @package vrtechglobal
 */

get_header(); ?>
<section class="page-hero small"><div class="container"><h1><?php the_title(); ?></h1></div></section>
<section class="container section">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="rich-text" data-aos="fade-up"><?php the_content(); ?></div>
	<?php endwhile; ?>
</section>
<?php get_footer(); ?>