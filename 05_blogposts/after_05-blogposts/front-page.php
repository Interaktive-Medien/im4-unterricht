<?php get_header() ?>
	<!-- START: front-page.php -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article><?php get_template_part('content/content-front-page') ?></article>
<?php endwhile; else : ?>
	<article><?php get_template_part('content/content-error') ?></article>
<?php endif; ?>
	<!-- ENDE: front-page.php -->
<?php get_footer() ?>