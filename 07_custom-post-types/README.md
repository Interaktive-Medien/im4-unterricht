# Custom Post Types `Schritt 07`
> **Um was es geht**: 
> Jetzt kommen wir zum fast wichtigsten Teil, wir bauen das eigentliche Portfolio auf. 
> Dazu werden wir zuerst einen Custom Post Type erstellen und diese Inhalte dann auf der Portfoliounterseite anzeigen lassen. 
> Ausserdem schauen wir uns das Plugin ACF an.

## 🧠 Theorieinput 
[![Video](https://i3.ytimg.com/vi/5O2a-DKUfNQ/maxresdefault.jpg)](https://www.youtube.com/watch?v=5O2a-DKUfNQ)
[`⬇️ Folien als PDF herunterladen ⬇️`](https://drive.google.com/file/d/1huj7LQW8WaBexbQDrP57YefjX31Vfbf-/view?usp=sharing)

## 🧑‍💻 Arbeitsauftrag

### I. 🪄 Custom Post Type 
1. Mithilfe der Webseite generatewp.com [^1] generieren wir unseren Custom Post Type für unsere Portfolioitems. Halte beim generieren folgende Vorgaben ein:
- `General / Function Name` ➡️ portfolioitem
- `Post Type / Post Type Key` ➡️ portfolioitem
- `Post Type / Link To Taxonomies` ➡️ alles rauslöschen
- `Post Type / Hierarchial` ➡️ yes (like Pages)
- `Labels` ➡️ Fülle alle bis und mit "Search Item" aus
- `Options/Supports` ➡️ Aktiviere folgende
  - Title
  - Content
  - Custom Fields
  - Page Attributes
- `Admin Side Bar Icon` ➡️ wähle eins aus dass du passend findest
- `Show in REST` ➡️ yes

2. Füge das generierte Snippet in `functions.php` ein.
3. Geh im Backend zu den Einstellungen und dort zu Permalinks. Speichere ohne etwas zu verändern neu.
> Dieser Schritt mag komisch erscheinen, ist aber exterm wichtig. 
> Wordpress macht manchmal Probleme mit Custom Post Types, so kann man das verhindern.

### II. 🗂️ Advanced Custom Fields
4. Mit ACF [^2] wird der Aufbau der Portfolioitems einheitlicht definiert. Klicke im Backend auf den Bereich "Custom Fields".
5. Mit "Erstellen" kannst du nun eine neue Feldgruppe erstellen. Nenne diese "Portfolio".
6. Erstelle nun Felder mit nachfolgenden Spezifikaltionen:

| Label                   | Type           | Sonstiges                                                                         |
|-------------------------|----------------|-----------------------------------------------------------------------------------|
| Bild                    | Image          | `Return Format` ➡️ Image URL                                                      |
| Auszug                  | Textarea       | -                                                                                 |
| Projektbeschrieb        | Wysiwyg Editor | `Toolbar` ➡️ Basic                                                                |
| Projektlink hinzufügen? | True / False   | -                                                                                 |
| Projektlink             | Url            | `Conditional Logic` ➡️ Feld nur anzeigen, wenn Projektlink hinzufügen checked ist |
| Projektdatum            | Date Picker    | `Display Format` & `Return Format` ➡️ Custom mit Wert `F Y` wählen                |

7. Definiere, dass die Feldgruppe nur angezeigt wird, wenn der Inhaltstyp "Portfolioitem" ist.
8. Aktiviere bei den Settings die Funktion "Show in REST API".
9. Wähle bei den Settings unter "Hide on Screen" die Option "Toggle all".
10. Veröffentliche die Feldgruppe.
11. Erstelle nun drei Portfolioitem und befülle sie mit Dummy-Content.

### III. 📃 Ausgabe des Inhalts
12. Erstelle eine neue Template-Datei für deinen neuen Post Type. Diese Datei muss `single-portfolioitem.php` heissen.
13. Befülle diese Datei provisorisch mit dem Inhalt von `single.php`.
14. Erstelle im Ordner `content` eine Datei `content-portfolioitem.php`.
15. Befülle diese Datei provisorisch mit dem Inhalt von `content-page.php`.
16. Verknüpfe in `single-portfolioitem.php` die korrekte Template-Datei. 
17. Füge diese Struktur in `content-portfolioite.php` ein und gib die richtigen Inhalte aus [^3].
```html
<p class="date"><!-- projektdatum --></p>
<h1><!-- titel --></h1>
<img src="<?php // bild ?>" alt="Projektbild" />
<div><!-- projektbeschrieb --></div>
```
18. Was nun noch fehlt, ist der Projektlink. Dieser soll jedoch nur gezeigt werden, wenn das Feld `projektlink_hinzufugen` `true` ist. Mithilfe dieser Dokumentation[^4] findest du heraus, wie das geht. So soll der Projektlink schlussendlich ausgegeben werden: 
```html
<a href="<?php the_field('projektlink') ?>">Mehr zum Projekt</a>
```


[^1]: [Post Type Generator auf generatewp.com](https://generatewp.com/post-type/)
[^2]: [Mehr zu Advanced Custom Fields](https://www.advancedcustomfields.com/)
[^3]: [Mehr zu the_field()](https://www.advancedcustomfields.com/resources/the_field/)
[^4]: [Mehr zum Feldtyp True / False](https://www.advancedcustomfields.com/resources/true-false/)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/9nccoova_ik/maxresdefault.jpg)](https://www.youtube.com/watch?v=9nccoova_ik)
[``💻 Zum Code nach Schritt 07 💻``](after_07-custom-post-type)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's weiter zu Schritt 08, Taxonomien](/08_taxonomien)
