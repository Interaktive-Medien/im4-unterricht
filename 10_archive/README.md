# Archive `Schritt 10`
> **Um was es geht**: 
> Das Grundgerüst des Portfolios steht.
> Wir wollen jetzt Unterseiten, die uns nur Portfolioitems einer Projektart anzeigen.
> Dafür arbeiten wir mit Archiven.

## 🧠 Theorieinput 
[![Video](https://i3.ytimg.com/vi/mct2aRNIkD4/maxresdefault.jpg)](https://www.youtube.com/watch?v=mct2aRNIkD4)
[`⬇️ Folien als PDF herunterladen ⬇️`](https://drive.google.com/file/d/1y-40UTx93lzDJsQsqe_WfKrkoCWzmhsg/view?usp=share_link)

## 🧑‍💻 Arbeitsauftrag

### I. 🧮 Struktur
1. Erstelle die Datei `archive.php` und befülle diese mit dem Inhalt von `single.php`.
2. Anstatt `content-single.php` soll jedoch `teaser-portfolioitem.php` geladen werden.
3. Geh im Backend in die Einstellungen zu den Permalinks und speichere ohne etwas zu verändern. So verhindern wir Wordpress-Fehler.

### II. 🚦 Testen
4. Geh im Backend zu den Portfolioitems und dort zu den Projektarten. 
5. Klicke bei einer der Projektarten auf "anschauen". 
- [ ] Als Template sollte `archive.php` geladen werden.
- [ ] Es sollten jeweils zwei Portfolioitems angezeigt werden.

### III. 🎛️ Menu
6. Diese Archive sollen nun im Menu ersichtlich werden. Geh dazu im Backend auf den Punkt "Menus".
7. In der Leiste links solltest du den Punkt "Projektarten" sehen. Geh dort hin, wähle alle an und klicke auf "Zum Menu hinzufügen".
8. Rücke die Menupunkte per Drag & Drop nun so ein, dass sie Unterpunkte sind.

### IV. 🗃️ Archiv-Template
9. Füge in `archive.php` um den Loop einen `section`-Tag mit der class `archive_content`.
10. Füge darüber dieses Code-Snippet ein und ersetze die Kommentare durch die Korrekten Inhalte [^1] [^2].
```html
<div class="archive_intro">
    <h1><!-- Titel des Archivs --></h1>
    <p><!-- Archivbeschreibung --></p>
</div>
```


[^1]: [Mehr zu single_term_title](https://developer.wordpress.org/reference/functions/single_term_title/)
[^2]: [Mehr zu the_archive_description](https://developer.wordpress.org/reference/functions/the_archive_description/)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/WBLcG1xD0gg/maxresdefault.jpg)](https://www.youtube.com/watch?v=WBLcG1xD0gg)
[``💻 Zum Code nach Schritt 10 💻``](after_10-archive)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's weiter zu Schritt 11, Wordpress API](/11_wordpress-api)
