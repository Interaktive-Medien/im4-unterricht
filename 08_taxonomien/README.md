# Taxonomien `Schritt 08`
> **Um was es geht**: 
> Um die Portfolioeinträge strukturieren zu können, beginnen wir mit Taxonomien zu arbeiten. 
> Wir erstellen eine eigene Taxonomie uns setzen diese nachher ein.

## 🧠 Theorieinput 
[![Video](https://i3.ytimg.com/vi/5yeKG6h5m3s/maxresdefault.jpg)](https://www.youtube.com/watch?v=5yeKG6h5m3s)
[`⬇️ Folien als PDF herunterladen ⬇️`](https://drive.google.com/file/d/1pyG_IJ8cSefqORxiIje76xW6Ti42yGOa/view?usp=share_link)

## 🧑‍💻 Arbeitsauftrag

### I. 🪄 Taxonomie generieren
1. Mithilfe der Webseite generatewp.com [^1] generieren wir unsere Taxonomie. Halte beim Generieren folgende Vorgaben ein.
- `General / Function Name` ➡️ projektart
- `Taxonomy / Taxonomy Key` ➡️ projektart
- `Taxonomy / Links to Post Type(s)` ➡️ portfolioitem
- `Taxonomy / Hierarchial` ➡️ Yes (like categories)
- `Labels` ➡️ Alle bis und mit "View Item" ausfüllen
- `Rest API / Show in Rest` ➡️ Yes
2. Füge den generierten Code in `functions.php` ein.
3. Damit die Verknüpfung von der Taxonomie `projektart` mit dem Post Type `portfolioitem` korrekt funktioniert, muss im Code des Post Types diese Zeile unterhalb von `supports` eingefügt werden.
```php
'taxonomies'=> array( 'projektart' ),
```

### II. 🗄️ Taxonomie anwenden
4. Im Backend erscheint nun bei den Portfolioitems ein neuer Unterpunkt der "Projektart" heisst. Füge dort drei beliebige Projektarten hinzu (z.B. Grafik, Web, Video). Fülle jeweils Name und Beschreibung aus.
5. Verknüpfe nun die Portfolioitems mit den Projektarten (füge zum Testen jedem Portfolioitem zwei Projektarten hinzu; so, dass jede Projektart zweimal verwendet wurde).

[^1]: [Taxonomie-Generator von generatewp.com](https://generatewp.com/taxonomy/)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/958lWbiQEU8/maxresdefault.jpg)](https://www.youtube.com/watch?v=958lWbiQEU8)
[``💻 Zum Code nach Schritt 08 💻``](after_08-taxonomies)

>  🔗 Wenn du fertig bist:
> [Hier lang geht's weiter zu Schritt 09, Conditional Tags](/09_conditional-tags)
