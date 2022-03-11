<?php get_header() ?>
    <!-- START: index.php -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article><?php get_template_part('content/content-index') ?></article>
    <?php endwhile; else : ?>
	    <article><?php get_template_part('content/content-error') ?></article>
    <?php endif; ?>
    <!-- ENDE: index.php -->
<?php get_footer() ?>