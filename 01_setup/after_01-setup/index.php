<!doctype html>
<html lang="<?php bloginfo('language') ?>">

<head>
	<title><?php bloginfo('name') ?></title>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,user-scalable=yes">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url') ;?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<h1><?php bloginfo('name') ?></h1>
	<nav>
		<ul>
			<li>Navigationspunkt A</li>
			<li>Navigationspunkt B</li>
			<li>Navigationspunkt C</li>
		</ul>
	</nav>
</header>
<main>
	<article>
		<p>Hauptinhalt</p>
	</article>
</main>
<footer>
	<p>Footer</p>
</footer>

<?php wp_footer(); ?>
</body>

</html>