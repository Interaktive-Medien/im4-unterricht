<?php get_header() ?>
	<!-- START: page.php -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article><?php get_template_part('content/content-page') ?></article>
<?php endwhile; else : ?>
	<article><?php get_template_part('content/content-error') ?></article>
<?php endif; ?>
	<!-- ENDE: page.php -->
<?php get_footer() ?>