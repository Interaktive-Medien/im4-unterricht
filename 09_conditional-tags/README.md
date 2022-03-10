# Conditional Tags `Schritt 09`
> **Um was es geht**: 
> Wir erstellen eine Übersichtsseite über unsere Portfolioitems. 
> Das passiert auf der Unterseite "Portfolio".
> Dazu brauchen wir Conditional Tags und ein Custom Query.

## 🧠 Theorieinput 
[![Video](https://i3.ytimg.com/vi/z1XVoRSLTjw/maxresdefault.jpg)](https://www.youtube.com/watch?v=z1XVoRSLTjw)
[`⬇️ Folien als PDF herunterladen ⬇️`]()

## 🧑‍💻 Arbeitsauftrag

### I. 📚 Dateistruktur
1. Erstelle zuerst eine neuen Ordner namens `teaser`. Dieser Ordner soll für Teaser, also Anrisse von Inhalten die dann einen Link zum eigentlichen Inhalt haben, da sein.
2. Dort drin erstellst du eine neue Datei die `teaser-portfolioitem.php` heisst.
3. Kopiere dir dort den Inhalt aus `content-portfolioitem.php` rein. 
4. Das ganze soll jetzt in eine etwas andere Form gebracht werden. Übernehme diese HTML-Struktur und gib die richtigen Inhalte aus.
```html
<img src="<?php // projektbild ?>" alt="Projektbild" />
<h2><!-- titel --></h2>
<p><!-- auszug --></p>
<a href="<?php // permalink ?>">mehr lesen</a>
```
5. Damit unsere Theme-Struktur konsistent ist, müssen wir jetzt die Teaser auf die Blogbeitrage auf der Strartseite etwas umstellen. Dafür verschieben wir die Datei `content-frontpage.php` in den Ordner `teaser`.
6. Wir benennen die Datei jetzt in `teaser-post.php` um und ändern die Verknüpfung in `front-page.php`.

### II. 🎮 Condition
7. Die Teaser auf unsere Portfolioitems soll später auf der Unterseite "Portfolio" erscheinen. Diese Seite benutzt das Template `page.php`. Schreibe in diesem Template unterhalb des `article`-Tags um den Inhalt (ca. Zeile 5) einen Conditional Tag [^1], der nur auf der Unterseite Portfolio etwas anzeigt.
8. Wenn die Condition true ist, soll folgendes ausgegeben werden:
```html
<mark>Hier kommen die Portfolioitems</mark>
```
9. Teste auf deinem Portfolio nun, ob das klappt.

### III. 🔭 Custom Query
10. Zwischen diesen Conditional Tag der eben geschrieben wurde, soll das Custom Query [^2] platziert werden. Für eine bessere HTML-Struktur, fügst du um den Conditional Tag einen `section`-Container mit der class `portfolioitems`. 
11. Der Code in diesem `section`-Abschnitt (inkl. Conditional Tag) wie nachfolgend dargestellt aus. Ergänze das WP-Query so, dass alle Portfolioitems dargestellt werden.
```php
<?php if(is_page('portfolio')){
    $query = new WP_Query(array('post_type' => ''));
    if($query->have_posts()):while($query->have_posts()):$query->the_post(); ?>
        <article><mark>Teaser</mark></article>
    <?php endwhile;wp_reset_postdata();else: ?>
        <article><mark>Fehler</mark></article>
<?php endif; } ?>
```
12. Wenn auf deiner Portfolio-Seite nun drei mal gelb Markiert "Teaser" angezeigt wird, funktioniert dein Query 💃🕺. 
13. Füge nun an der Stelle wo der `mark`-Tag mit "Teaser" steht mit `get_template_part()` [^3] den Teaser `teser-portfolioitem.php` ein.
14. Mache das selbe mit der Fehlermeldung.

[^1]: [Mehr zu Conditional Tags](https://codex.wordpress.org/Conditional_Tags)
[^2]: [Mehr zum WP Query](https://developer.wordpress.org/reference/classes/wp_query/)
[^3]: [Mehr zum get_template_part](https://developer.wordpress.org/reference/functions/get_template_part/)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/z1XVoRSLTjw/maxresdefault.jpg)](https://www.youtube.com/watch?v=z1XVoRSLTjw)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's weiter zu Schritt 10, Archive](/10_archive)