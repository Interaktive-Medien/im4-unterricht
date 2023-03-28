# Blogposts `Schritt 05`
> **Um was es geht**: 
> Im letzten Schritt haben wir Template-Dateien für die verschiedenen Inhaltstypen erstellt.
> Diese Inhalte wollen wir jetzt pro Inhaltstyp optimieren. 
> Ausserdem ergänzen wir unser Theme um einige neue Funktionalitäten.

## 🧠 Theorieinput 
[![Video](https://i3.ytimg.com/vi/ulzYzegRkJo/maxresdefault.jpg)](https://www.youtube.com/watch?v=ulzYzegRkJo)
[`⬇️ Folien als PDF herunterladen ⬇️`](https://drive.google.com/file/d/1aIarOis1eRWEo5qYLjAwWkA37HLWbpXG/view?usp=share_link)

## 🧑‍💻 Arbeitsauftrag

### I. ⚙️ Einstellungen
1. Um anschliessend den Namen des/der Autor:in korrekt anzeigen zu können, müssen wir unseren Benutzer updaten. Gehe dazu im Backend auf `Benutzer` und klicke auf "bearbeiten". Ergänze dort Vor- und Nachname und stelle den Öffentlichen Namen um.

### II. 🎛️ functions.php
2. Aktiviere mit folgendem Snippet welches in `functions.php` eingefügt wird die Funktionalität, Beitragsbilder hochladen zu können [^1]:
```php
// --- beitragsbilder aktivieren
add_theme_support( 'post-thumbnails' );
```
3. Mit diesem zweiten Snippet fügst du deinem Theme die Funktionalität hinzu, dass man Bilder im SVG-Format hochladen kann [^2]. Füge das Snippet in `functions.php` hinzu.
```php
// --- svg upload erlauben
function cc_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
```
4. Erstelle nun einen neuen Ordner namens `js` und füge dort eine Datei `script.js` hinzu.
5. In `functions.php` kannst du nun dieses Snippet ergänzen, welches dieses JavaScript-File mit deinem Theme verknüpft [^3].
```php
// --- javascript-file verknüpfen
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );
function additional_custom_styles() {
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js' );
};
```
6. Um zu testen ob das klappt, kannst du in die Datei `script.js` nachfolgenden Code einfügen. Wenn die Datei richtig verknüpft ist, kannst du nun mit der Tastenkombination <kbd>⇧↑</kbd> (Shift & Arrow Up) und <kbd>⇧↓</kbd> (Shift & Arrow Down) die Bilder auf deiner Webseite drehen.

<details>
<summary><strong>👉 Testscript JavaScript 👈</strong></summary>

```javascript
document.addEventListener('DOMContentLoaded', function () {

    // --- beispielfunktion - rotate images on keycombo
    const IMAGES = document.querySelectorAll('main img')
    IMAGES.forEach(img => { img.style.transition = '0.5s' })
    document.onkeydown = keydown;
    function keydown (evt) {
        if (!evt) evt = event;
        if(evt.shiftKey && evt.keyCode === 38) {
            IMAGES.forEach(img => { img.style.transform = 'rotate(180deg)'; })
        }else if(evt.shiftKey && evt.keyCode === 40){
            IMAGES.forEach(img => { img.style.transform = 'rotate(0deg)'; })
        }
    }

}, false);
```
</details>

### III. 📃 Content ergänzen
7. Füge jedem Beitrag ein Beitragsbild hinzu.
8. Füge jedem Beitrag drei oder mehr Schlagwörter (`tags`) hinzu.

### IV. ⚒️ Content-Files umbauen
9. Als erstes kümmern wir uns um die Startseite. Füge nachfolgende Struktur in `content-front-page.php` ein und füge die korrekten Template Tags [^4] hinzu.
```html
<?php // Beitragsbild ?>
<h2><!-- Titel --></h2>
<?php // auszug ?>
<a href="<?php // Link zum Beitrag ?>">mehr lesen</a>
```
10. Auch die Beiträge selber sollen umgebaut werden. Füge nachfolgende Struktur in `content-single.php` ein und füge die korrekten Template Tags hinzu. [^5]
```html
<p class="single-infos">Veröffentlicht am <!-- Datum im Format Tag. Monat Jahr --> von <!-- Autor:in --></p>
<h1><!-- Titel --></h1>
<?php // Beitragsbild ?>
<div><!-- Inhalt --></div>
```
11. Die von uns hinzugefügten Schlagwörter wollen wir auch noch ausgeben. Der eigentlich korrekte Template Tag `get_tags()` zeigt die Schlagwörter sehr unschön an. Füge deshalb dieses Snippet nach dem Titel ein. Das stellt die Schlagwörter schönder dar.
```php
<p class="single-tags"><?php echo strip_tags(get_the_tag_list('<span>',',&nbsp;','</span>')); ?></p>
```

[^1]: [Mehr zu Beitragsbildern](https://codex.wordpress.org/Post_Thumbnails)
[^2]: [Mehr zu SVG in Wordpress](https://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/)
[^3]: [Mehr zur Funktion wp_enqueue_scripts](https://developer.wordpress.org/reference/functions/wp_enqueue_script/)
[^4]: [Mehr zu Template Tags](https://codex.wordpress.org/Template_Tags)
[^5]: [Mehr zum Formatieren eines Datums](https://www.php.net/manual/de/function.date.php)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/PCitrA3pIjI/maxresdefault.jpg)](https://www.youtube.com/watch?v=PCitrA3pIjI)
[``💻 Zum Code nach Schritt 05 💻``](after_05-blogposts)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's weiter zu Schritt 06, Blocks](/06_blocks)
