# Wordpress API `Schritt 11`
> **Um was es geht**: 
> Um unser Theme dynamischer zu machen nutzen wir die Wordpress REST API. 
> So machen wir unseren Footer etwas spannender.

## 🧠 Theorieinput 
[![Video](https://i3.ytimg.com/vi/Heotr1pI11M/maxresdefault.jpg)](https://www.youtube.com/watch?v=Heotr1pI11M)
[`⬇️ Folien als PDF herunterladen ⬇️`](https://drive.google.com/file/d/1GnE4ODjbLWm1lqh_05QlOlug8Z-Eifk4/view?usp=sharing)

## 🧑‍💻 Arbeitsauftrag

1. Füge in `script.js` folgendes Snippet ein.
```javascript
const URL = '';
    const otherParameters = { method: "GET" }
    fetch(URL, otherParameters)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            console.log(data)
        })
```
2. Füge die URL zur REST API von Wordpress ein. Den Inhalt den wir haben wollen, sind alle Projektarten (Taxonomie) [^1].
3. Wenn du in der Konsole deines Browsers deine drei Projektarten siehst die zurückgegeben werden, hast du alles richtig gemacht🍾.
4. Gehe nun in die Datei `footer.php`. Lösche dort den Inhalt aus dem `p`-Tag raus und gib diesem Tag die id `skills`. Diesen befüllen wir nachher mit Inhalten aus der API-Response.
5. Zurück in JS kannst du dieses Snippet anstelle des `console.log()` einfügen. Das macht, dass im `p`-Tag im Footer nachher steht, in welchen Bereichen du Spezialistin bist. Das, anhand der Projektarten auf deinem Portfolio.
```js
const CONTAINER = document.querySelector('footer p#skills')
CONTAINER.innerHTML = ' Spezialist:in für '
data.forEach(projektart => {
    CONTAINER.innerHTML += `<span>${projektart.name}</span>`
})
```
6. Damit das ganze auch vom Styling her gut aussieht, kannst du im CSS dieses Snippet ergänzen.
```css
footer p#skills span:not(:last-of-type,:nth-last-of-type(2))::after{
    content: ', ';
}
footer p#skills span:nth-last-child(2)::after{
    content: ' und ';
}
```

[^1]: [API Handbuch zu Categories](https://developer.wordpress.org/rest-api/reference/categories/#example-request)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/ESltRDiJ7i0/maxresdefault.jpg)](https://www.youtube.com/watch?v=ESltRDiJ7i0)
[``💻 Zum Code nach Schritt 11 💻``](after_11-wordpress-api)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's weiter zu Schritt 12, Plugins](/12_plugins)