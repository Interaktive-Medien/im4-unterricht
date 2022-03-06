# `01` Schritt 1
> **Um was es geht**: 
> Wir bauen das eigene Wordpress-Theme auf. 
> Es werden die Grundlegenden Dateien erstellt, wichtige Angaben gemacht und alles so verknüpft, dass wir gut weiterarbeiten können. 
> Es handelt sich hierbei vor allem um eine Repetition aus der Unterrichtsvorbereitung.

## `1` Theorieinput 🧠
[![Video](https://i3.ytimg.com/vi/z1XVoRSLTjw/maxresdefault.jpg)](https://www.youtube.com/watch?v=z1XVoRSLTjw)
[`⬇️ Folien als PDF herunterladen ⬇️`](https://www.emojicopy.com/)
## `2` Arbeitsauftrag 🧑‍💻
### `a` Erstellen der Grunddateien 📃
1. Erstelle eine Datei `index.php` und fülle diese mit dem nachfolgenden HTML-Grundaufbau.
<details>
<summary><strong>HTML Grundstruktur</strong></summary>

```html
<html></html>
```
</details>

2. Erstelle die Datei `style.css` und  nimm die wichtigsten Beschreibungen des Themes vor.
- Name des Themes
- Autor:in des Themes
- Beschreibung
- Version
3. Lade ein Theme-Vorschaubild (einfach irgend ein Bild) ins Hauptverzeichnis. Folgende Spezifikationen soll es erfüllen: 
- Dateiname: screenshot.png
- Masse: 1200px x 900px
- Dateiformat: PNG
4. Lade die Datei `screenshot.png` auf den Server (Rechtklick auf `screenshot.png` und dann `sync local -> remote`). Schau auch, dass die anderen Dateien hochgeladen wurden.

### `b` Dynamik 👯
5. Füge folgende Metatags dynamisch mit `bloginfo` in `index.php` ein:
- Die Definition des Zeichensatzes im `head` bei `meta` `charset` «UFT-8» durch einen `bloginfo`-Tag ersetzen.
```php
<?php bloginfo('charset') ?>
```
- Bei der Definition der Sprache im `html`-Tag auf Zeile 2 «de-CH» durch einen `bloginfo`-Tag ersetzen.
```php
<?php bloginfo('language') ?>
```
6. Gebe den Titel deines Portfolios dynamisch mit `bloginfo` aus (bei `<title></title>` und `<h1></h1>`)
7. Verknüpfe die Datei `style.css` im `head` von `index.php` richtig. Nutze dafür einen `bloginfo`-Tag. Teste mit einem Befehl in `style.css` ob das Verknüpfen geklappt hat.
8. Füge die `body`-Class am richgtigen Ort ein.
9. Füge den WP Footer Tag [^1] am richtigen Ort ein.
10. Füge den WP Header Tag am richtigen Ort ein.

### `c` Testing 🚦
11. Wenn du folgende Tests mit **JA** beantworten kannst, hat alles geklappt:
- [ ] Du konntest das Theme im Backend aktivieren
- [ ] Das Bild, welches du als screenshot.png hochgeladen hast wird angezeigt
- [ ] Du siehst, wenn du die Webseite offen hast, oben die Wordpress- Bearbeitungsleiste
- [ ] Wenn du dir den Quellcode der Seite ansiehst (Rechtsklick im Browser/Seitenquelltext anschauen), hat hat der `body`-tag u.a. folgende Klassen (`home`, `blog`, `logged-in`, `admin-bar`)

[^1]: [Mehr zur Body-Class](https://developer.wordpress.org/reference/functions/body_class/)

> ### 🔗 Verwendete Links
> - [Link 1]()
> - [Link 2]()

## `3` Auflösung 💡
[![Video](https://i3.ytimg.com/vi/z1XVoRSLTjw/maxresdefault.jpg)](https://www.youtube.com/watch?v=z1XVoRSLTjw)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's zu Schritt 2](/02_schritt02)