<!doctype html>
<html lang="<?php bloginfo( 'language' ) ?>">

<head>
    <title><?php bloginfo( 'name' ) ?></title>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,user-scalable=yes">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
	?>
    <a href="<?php bloginfo('url') ?>">
        <img src="<?php echo $image[0]; ?>" alt="Logo Webseite">
    </a>
    <nav>
		<?php wp_nav_menu( array( 'theme_location' => 'headernavigation' ) ); ?>
    </nav>
</header>
<main>