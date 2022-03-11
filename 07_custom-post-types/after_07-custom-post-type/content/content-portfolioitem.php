<!-- START: content-portfolioitem.php -->
<p class="date"><?php the_field('projektdatum') ?></p>
<h1><?php the_title() ?></h1>
<img src="<?php the_field('bild') ?>" alt="Projektbild <?php the_title() ?>" />
<div><?php the_field('projektbeschrieb') ?></div>
<?php if(get_field('projektlink_hinzufugen')){ ?>
    <a href="<?php the_field('projektlink') ?>">Mehr zum Projekt</a>
<?php } ?>
<!-- ENDE: content-portfolioitem.php -->
