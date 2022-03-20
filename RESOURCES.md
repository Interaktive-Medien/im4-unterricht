# 🔗 Ressourcen Wordpress
> Diese File bildet eine (unvollständige) Sammlung an Ressourcen ab, 
> die bei der Entwicklung von Wordpress-Themes hilfreich sein könnten. 

## ☝️ Wordpress Internes
- [WP Query](https://developer.wordpress.org/reference/classes/wp_query/)
- [Conditional Tags](https://codex.wordpress.org/Conditional_Tags)
- [Template Tags](https://codex.wordpress.org/Template_Tags)
- [Bloginfo](https://developer.wordpress.org/reference/functions/bloginfo)
- [WP Head](https://developer.wordpress.org/reference/functions/wp_head/)
- [WP Footer](https://developer.wordpress.org/reference/functions/wp_footer/)
- [Body Class](https://developer.wordpress.org/reference/functions/body_class/)
- [Get Header Tag](https://developer.wordpress.org/reference/functions/get_header/)
- [Get Footer Tag](https://developer.wordpress.org/reference/functions/get_footer/)
- [Navigationen](https://codex.wordpress.org/Navigation_Menus)
- [Loop](https://codex.wordpress.org/The_Loop)
- [Get Template Part Tag](https://developer.wordpress.org/reference/functions/get_template_part/)
- [Post Thumbnails](https://codex.wordpress.org/Post_Thumbnails)
- [WP Enqueue Scripts](https://developer.wordpress.org/reference/functions/wp_enqueue_script/)
- [Wordpress REST API Handbook](https://developer.wordpress.org/rest-api/)

## 🧩 Plugins

- [Plugin ACF](https://de.wordpress.org/plugins/advanced-custom-fields/)
- [*Dokumentation* ACF](https://www.advancedcustomfields.com/resources/)
- [Plugin Show Current Template](https://de.wordpress.org/plugins/show-current-template/)
- [Plugin Genesis Custom Blocks](https://de.wordpress.org/plugins/genesis-custom-blocks/)
- [*Dokumentation* Genesis Custom Blocks](https://developer.wpengine.com/genesis-custom-blocks/)
- [Plugin WP All in One Security & Firewall](https://de.wordpress.org/plugins/all-in-one-wp-security-and-firewall/)
- [Plugin Ninja Forms](https://de.wordpress.org/plugins/ninja-forms/)
- [*Dokumentation* Ninja Forms](https://ninjaforms.com/documentation/)
- [Plugin WoCommerce](https://de.wordpress.org/plugins/woocommerce/)
- [Plugin WP Globus](https://de.wordpress.org/plugins/wpglobus/)
- [Plugin Duplicator](https://de.wordpress.org/plugins/duplicator/)
- [Plugin Yoast SEO](https://de.wordpress.org/plugins/wordpress-seo/)
- [Plugin zum Sortieren per Drag & Drop](https://wordpress.org/plugins/post-types-order/)
- [Plugin für Suche in Wordpress](https://wordpress.org/plugins/acf-better-search/)


## 🛠️ Tools
- [generatewp.com](https://generatewp.com/)
- [wpheirarchy.com](https://wphierarchy.com/)

## 🗣️ Tutorials
- [Tutorial erstellen eigenes Wordpress Theme](https://www.youtube.com/watch?v=-h7gOJbIpmo)
- [Eigener Gutenberg Block](https://torquemag.io/2021/04/custom-gutenberg-block/)
- [SVG Upload in Wordpress erlauben](https://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/)

## 🪨 Sonstiges
- [Developer Guide Customizer](https://themefoundation.com/wordpress-theme-customizer/)

## ✂️ Snippets
> Eine kleine und unvollständige Liste mit kleinen SNippets, 
> die in der Wordpress-Theme Entwicklung wichtig sein könnten.

Beitragsbilder in `functions.php` aktivieren
```php
add_theme_support( 'post-thumbnails' );
```
---
CSS in `header.php` verknüpfen
```html
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url') ;?>">
```
---
Kategorien und Tags zu Pages hinzufügen (`functions.php`)
```php
function add_taxonomies_to_pages()
{
    register_taxonomy_for_object_type('post_tag', 'page');
    register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'add_taxonomies_to_pages');
```
---
Komplette Kommentar-Funktionalität aus Wordpress entfernen (`functions.php`)
```php
//Kommentare vom Adminmenue entfernen
function tmdn_remove_admin_menus() {
  remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'tmdn_remove_admin_menus');
 
//Kommentare von Beitraegen und Seiten entfernen
function tmdn_remove_comment_support() {
  remove_post_type_support('post', 'comments');
  remove_post_type_support('page', 'comments');
}
add_action('init', 'tmdn_remove_comment_support', 100);
 
//Kommentare aus der Admin-Leiste entfernen
function tmdn_admin_bar_render() {
  global $wp_admin_bar;
 
  $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'tmdn_admin_bar_render');
```
---
Länge des Excerpts/Auszug anpassen (`functions.php`)
```php
add_filter('excerpt_length', function ($length) {
    return 20;
});
```