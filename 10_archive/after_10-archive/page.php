<?php get_header() ?>
	<!-- START: page.php -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article><?php get_template_part('content/content-page') ?></article>
    <section class="portfolioitems">
        <?php if(is_page('portfolio')){
        $query = new WP_Query(array('post_type' => 'portfolioitem'));
        if($query->have_posts()):while($query->have_posts()):$query->the_post(); ?>
        <article><?php get_template_part('teaser/teaser-portfolioitem'); ?></article>
        <?php endwhile;wp_reset_postdata();else: ?>
        <article><?php get_template_part("content/content-error"); ?></article>
        <?php endif; } ?>
    </section>
<?php endwhile; else : ?>
	<article><?php get_template_part('content/content-error') ?></article>
<?php endif; ?>
	<!-- ENDE: page.php -->
<?php get_footer() ?>