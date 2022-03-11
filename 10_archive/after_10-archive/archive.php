<?php get_header() ?>
	<!-- START: archive.php -->
<div class="archive_intro">
    <h1><?php single_term_title() ?></h1>
    <p><?php the_archive_description() ?></p>
</div>
<section class="archive_content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article><?php get_template_part('teaser/teaser-portfolioitem') ?></article>
    <?php endwhile; else : ?>
        <article><?php get_template_part('content/content-error') ?></article>
    <?php endif; ?>
</section>
	<!-- ENDE: archive.php -->
<?php get_footer() ?>