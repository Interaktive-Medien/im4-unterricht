<!-- START: content-single.php -->
<p class="single-infos">Veröffentlicht am <?php the_time('j. F Y') ?> von <?php the_author() ?></p>
<h1><?php the_title() ?></h1>
<p class="single-tags"><?php echo strip_tags(get_the_tag_list('<span>',',&nbsp;','</span>')); ?></p>
<?php the_post_thumbnail() ?>
<div><?php the_content() ?></div>
<!-- ENDE: content-single.php -->