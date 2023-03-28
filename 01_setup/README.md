# Setup `Schritt 01`
> **Um was es geht**: 
> Wir bauen das eigene Wordpress-Theme auf. 
> Es werden die Grundlegenden Dateien erstellt, wichtige Angaben gemacht und alles so verknüpft, dass wir gut weiterarbeiten können. 
> Es handelt sich hierbei vor allem um eine Repetition aus der Unterrichtsvorbereitung.

## 🧠 Theorieinput
[![Video](https://i3.ytimg.com/vi/ipk_X_YTVIs/maxresdefault.jpg)](https://www.youtube.com/watch?v=ipk_X_YTVIs)
[`⬇️ Folien als PDF herunterladen ⬇️`](https://drive.google.com/file/d/1ekn-2pJMvt-Dn9RriWo-AawQADayxu-7/view?usp=share_link)

## 🧑‍💻 Arbeitsauftrag 
### I. 📃 Erstellen der Grunddateien 
1. Erstelle eine Datei `index.php` und fülle diese mit dem nachfolgenden HTML-Grundaufbau.

<details>
<summary><strong>👉 HTML Grundstruktur 👈</strong></summary>

```html
<!doctype html>
<html lang="de">

<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,user-scalable=yes">
</head>

<body>
<header>
    <h1>Portfolio</h1>
    <nav>
        <ul>
            <li>Navigationspunkt A</li>
            <li>Navigationspunkt B</li>
            <li>Navigationspunkt C</li>
        </ul>
    </nav>
</header>
<main>
    <article>
        <p>Hauptinhalt</p>
    </article>
</main>
<footer>
    <p>Footer</p>
</footer>
</body>

</html>
```
</details>

2. Erstelle die Datei `style.css` und  nimm die wichtigsten Beschreibungen des Themes vor [^1].
- Name des Themes
- Autor:in des Themes
- Beschreibung
- Version
3. Lade ein Theme-Vorschaubild (einfach irgend ein Bild) ins Hauptverzeichnis. Folgende Spezifikationen soll es erfüllen: 
- Dateiname: screenshot.png
- Masse: 1200px x 900px
- Dateiformat: PNG
4. Lade die Datei `screenshot.png` auf den Server (Rechtklick auf `screenshot.png` und dann `sync local -> remote`). Schau auch, dass die anderen Dateien hochgeladen wurden.

### II. 👯 Dynamik 
5. Gib in `index.php` den `charset` im `head` dynamisch mit einem `bloginfo`-Tag aus [^2]. 
6. Gib in `index.php` die `language` im `head` dynamisch mit einem `bloginfo`-Tag aus. 
7. Gib in `index.php` den Titel deines Portfolios dynamisch mit `bloginfo` aus (bei `<title></title>` und `<h1></h1>`)
8. Verknüpfe die Datei `style.css` im `head` von `index.php` richtig. Nutze dafür einen `bloginfo`-Tag. Teste mit einem Befehl in `style.css` ob das Verknüpfen geklappt hat.
9. Füge die `body`-Class am richgtigen Ort ein [^3].
10. Füge den WP Footer Tag  am richtigen Ort ein [^4].
11. Füge den WP Head Tag am richtigen Ort ein [^5].

### III. 🚦 Testing 
11. Wenn du folgende Tests mit **JA** beantworten kannst, hat alles geklappt:
- [ ] Du konntest das Theme im Backend aktivieren
- [ ] Das Bild, welches du als screenshot.png hochgeladen hast wird angezeigt
- [ ] Du siehst, wenn du die Webseite offen hast, oben die Wordpress- Bearbeitungsleiste
- [ ] Wenn du dir den Quellcode der Seite ansiehst (Rechtsklick im Browser/Seitenquelltext anschauen), hat hat der `body`-tag u.a. folgende Klassen (`home`, `blog`, `logged-in`, `admin-bar`)

[^1]: [Mehr zum Haupt-Stylesheet](https://developer.wordpress.org/themes/basics/main-stylesheet-style-%20css/#example)
[^2]: [Liste mit Werten die mit dem bloginfo-Tag ausgegeben werden können](https://developer.wordpress.org/reference/functions/bloginfo/#possible-values-for-show)
[^3]: [Mehr zur Body-Class](https://developer.wordpress.org/reference/functions/body_class/)
[^4]: [Mehr zum wp-footer](https://developer.wordpress.org/reference/functions/wp_footer/#user-%20contributed-notes)
[^5]: [Mehr zum wp-head](https://developer.wordpress.org/reference/functions/wp_head/#user-%20contributed-notes)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/5N-qPFHKpVw/maxresdefault.jpg)](https://www.youtube.com/watch?v=5N-qPFHKpVw)
[``💻 Zum Code nach Schritt 01 💻``](after_01-setup)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's zu Schritt 02, Modularisieren](/02_modularisieren)
