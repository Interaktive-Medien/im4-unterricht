# Loop `Schritt 03`
> **Um was es geht**: 
> Jetzt geht's an die Inhalte: Wir geben diese mit dem Loop und Template Tags aus.
> Aussderem Modulariseren wir unser Theme weiter.

## 🧠 Theorieinput 
[![Video](https://i3.ytimg.com/vi/z1XVoRSLTjw/maxresdefault.jpg)](https://www.youtube.com/watch?v=z1XVoRSLTjw)
[`⬇️ Folien als PDF herunterladen ⬇️`]()

## 🧑‍💻 Arbeitsauftrag

### I. 🍽️ Vorbereitung 
1. Damit wir auch Inhalte haben, mit denen wir arbeiten können, müssen wir diese zuerst erfassen. Erstelle folgende Inhalte und befülle die Seiten mit Dummy-Content.
- `page` ➡️ Portfolio
- `page` ➡️ Über mich
- `page` ➡️ Kontakt
- `post` ➡️ 3 Blogposts, egal mit welchem Titel.
2. Füge die drei `pages` die du erstellt hast in die Navigation ein.
3. Stelle in den Einstellungen die Permalink-Struktur um. So, dass die Beitragsnamen als URL-Anhang angezeigt werden. 

### II. 🫀 Loop
4. Öffne die Datei `index.php`.
5. Lösche alles was zwischen den Kommentaren steht (das sollten ein `article`-Tag und ein `p`-Tag sein).
6. Füge an diese Stelle nun den Loop [^1] ein.
```php
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; else : ?>
<?php endif; ?>
```
7. Dieser Loop funktioniert zwar schon, aber es wird noch nichts ausgegeben. Nach der Zeile des Loops mit dem `if` folgendes ein.
```html
<mark>Inhalt</mark>
```
8. Füge nach der Zeile des Loops mit dem `else` auch einen `mark`-Tag ein, der aber das Wort "Fehler" ausgibt.

### III. 🚦 Testen
Wenn alle diese Tests erfüllt sind, funktioniert den Loop soweit🎉: 
- [ ] Wenn du den aktuellen Stand speicherst und auf deine Webseite gehst, solltest auf der Startseite **drei** mal gelb markiert "Inhalt stehen".
- [ ] Auf den anderen `Pages` sollte das jeweils einmal stehen.
- [ ] Wenn du eine URL eingibst, die falsch ist (z.B. deineurl.ch/blub) sollte gelb markiert "Fehler" stehen.

### IV. 📃 Inhalt und Struktur
9. Anstelle des `mark`-Tags sollten nun deine Inhalte angezeigt werden. Gib dazu in nachfolgender Struktur mit Template Tags [^2] Titel und Inhalt aus. **Wichtig**: Verändere die vorgebene HTML-Struktur nicht, sonst verhaut es das Styling 😉.
```html
<article>
    <h1><!-- Titel --></h1>
    <div><!-- Inhalt --></div>
</article>
```
10. Benutze für die Fehlermeldung **genau die gleiche** Struktur, gib als Titel einfach manuell "404" ein und anstatt dem `div`-Tag folgendes:
```html
<div><p>Diese Seite gibt es nicht.</p></div>
```
12. Erstelle jetzt im Hauptverzeichnis deines Themes einen neuen Ordner namens `content`.
13. Erstelle dort zwei neue Dateien, einmal `content-index.php` und einmal `content-error.php`.
14. Jetzt kannst du den Inhalt aus `index.php` in `content-index.php` auslagern. Bzw. Alles zwischen den `article`-Tags. 
15. Lade jetzt in `index.php` im root-Verzeichnis mit einem `get_template_part()` [^3] die Datei `content-index.php` zwischen die `article`-Tags.
16. Mache für die Fehlermeldung genau das gleiche.
17. Füge auch in diese zwei Dateien Kommentare ein (wie in `index.php`). In diesem Stil:
```html
<!-- START: content-index.php -->
<!-- ENDE: content-index.php -->
```

[^1]: [Mehr zum Loop](https://codex.wordpress.org/The_Loop)
[^2]: [Mehr zu den Template Tags](https://codex.wordpress.org/Template_Tags)
[^3]: [Mehr zu get_template_part](https://developer.wordpress.org/reference/functions/get_template_part/)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/z1XVoRSLTjw/maxresdefault.jpg)](https://www.youtube.com/watch?v=z1XVoRSLTjw)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's weiter zu Schritt 04, Themestruktur](/04_themestruktur)