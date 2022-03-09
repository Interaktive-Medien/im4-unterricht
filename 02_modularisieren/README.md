# Modularisieren `Schritt 02`
> **Um was es geht**: 
> Das Theme wird nun zu ersten Mal Modularisiert, sprich es werden gewisse Teile ausgelagert. 
> Ausserdem wird eine Navigation erstellt, die im Backend befüllt werden kann und der Customizer wird das erste Mal genutzt, um ein Logo hochzuladen.

## 🧠 Theorieinput 
[![Video](https://i3.ytimg.com/vi/z1XVoRSLTjw/maxresdefault.jpg)](https://www.youtube.com/watch?v=z1XVoRSLTjw)
[`⬇️ Folien als PDF herunterladen ⬇️`]()

## 🧑‍💻 Arbeitsauftrag

### I. 🍽️ Vorbereitung 
1. Als erstes stylen wir die Webseite. Füge das zur Verfügung gestellte CSS in die Datei `style.css` ein.
Wichtig dabei: Lösche die Theme-Angaben nicht. [**todo**: korrektes stylesheet einfügen]

<details>
<summary><strong>👉 CSS Kopiervorlage 👈</strong></summary>

```css
*{
    margin-bottom: 10px;
}
```
</details>

### II. ✂️ Modularisierung
2. Erstelle die Datei `header.php`.
3. Kopiere alles aus `index.php` von zuoberst bis und mit dem öffnenden `main`-Tag in diese Datei.
4. Binde den Header dynamisch ein [^1].
5. Erstelle die Datei `footer.php`.
6. Kopiere alles aus `index.php` vom schliessenden `main`-Tag bis zuunterst in diese Datei.
7. Binde den Footer dynamisch ein [^2].
8. Füge in `index.php` nach dem eingebundenen Header einen Kommentar ein, der zeigt dass hier das `index.php`-File beginnt.
So in dem Stil: 
```html
<!-- START: index.php -->
```
9. Füge auch zuunterst bevor der Footer geladen wird so einen Kommentar ein.
```html
<!-- ENDE: index.php -->
```
> Mit diesen Kommentaren wird während der gesamten Entwicklung des Themens gearbeitet. 
> Sie helfen uns, die Struktur zu verstehen. 
> Passe von hier an die Kommentare immer dem Dateinamen an.
> Das wird in den Arbeitsaufträgen nicht mehr explizit erwähnt.

### III. 🎛️ Navigation
10. Erstelle eine Datei namens `functions.php`. 
11. Registriere in dieser Datei deine Navigation [^3] mit folgendem Code-Snippet:
```php
add_action('after_setup_theme', 'navigation_registrieren');
function navigation_registrieren(){
    register_nav_menu('headernavigation', 'Navigation im Header');
};
```
12. Füge die Navigation mit nachfolgendem Snippet in `header.php` zwischen den `nav`-Tags ein.
```php
<?php wp_nav_menu(array('theme_location' => 'headernavigation')) ;?>
```
13. Erstelle die Navigation im Backend und befülle sie mit Dummy-Content.

### VI. 🖌️ Logo und Customizer
14. Registriere mit nachfolgendem Snippet einen Logo-Upload in `functions.php`.
```php
add_action( 'after_setup_theme', 'theme_prefix_setup' );
function theme_prefix_setup() {
  add_theme_support( 'custom-logo' );
};
```
15. Gib das Logo mit nachfolgendem Snippet dort in `header.php` aus, wo im Moment der `h1`-Titel ist.
```php
<?php 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' )
?>
<img src="<?php echo $image[0] ;?>" alt="Logo Webseite">
```
16. Lade im Backend beim Customizer ein Logo hoch.
17. Verlinke mithilfe eines `bloginfo`-Tags das Logo im Header mit der Startseite [^4].

[^1]: [Mehr zum Get Header Tag](https://developer.wordpress.org/reference/functions/get_header/)
[^2]: [Mehr zum Get Footer Tag](https://developer.wordpress.org/reference/functions/get_footer/)
[^3]: [Mehr zu Navigationen in Wordpress](https://codex.wordpress.org/Navigation_Menus)
[^4]: [Mehr zum bloginfo-Tag](https://developer.wordpress.org/reference/functions/bloginfo/#possible-values-for-show)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/z1XVoRSLTjw/maxresdefault.jpg)](https://www.youtube.com/watch?v=z1XVoRSLTjw)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's weiter zu Schritt 03, Loop](/03_loop)