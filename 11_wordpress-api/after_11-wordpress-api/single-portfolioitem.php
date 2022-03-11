<?php get_header() ?>
	<!-- START: single-portfolioitem.php -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article><?php get_template_part('content/content-portfolioitem') ?></article>
<?php endwhile; else : ?>
	<article><?php get_template_part('content/content-error') ?></article>
<?php endif; ?>
	<!-- ENDE: single-portfolioitem.php -->
<?php get_footer() ?>