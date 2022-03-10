# Blocks `Schritt 06`
> **Um was es geht**: 
> Wir optimieren unseren Gutenberg-Editor, indem wir einen eigenen Block hinzufügen.

## 🧠 Theorieinput 
[![Video](https://i3.ytimg.com/vi/z1XVoRSLTjw/maxresdefault.jpg)](https://www.youtube.com/watch?v=z1XVoRSLTjw)
[`⬇️ Folien als PDF herunterladen ⬇️`]()

## 🧑‍💻 Arbeitsauftrag

### I. 🔧 Backend 
1. Im Backend bei Menupunkt "Plugins/Installieren" installieren und aktivieren wir das Plugin `Genesis Custom Blocks` [^1].
2. Es erscheint ein neuer Menupunkt der "Custom Blocks" heisst. Dort fügen wir mit "add new" einen neuen Block hinzu.
3. Als erstes benennen wir den Block "Empfehlung" (Der Slug muss `empfelung` heissen).
4. Rechts in der Einstellungsleiste unter "Block" wählen wir ein Icon aus. 
5. Mit dem Plus fügen wir nun folgende Felder zum Block hinzu.
- **Beschrieb** ➡️ Slug `beschrieb` und Field Type `Textarea`
- **Link** ➡️ Slug `link` und Field Type `URL`
6. Dann veröffentlichen wir unseren neu erstellten Block.
7. In einem Beitrag deiner Wahl fügst du den eben erstellten Block ein und Befüllst die Felder mit Dummy-Content.  

### II. 📦 Block
8. Zurück im Code wird ein Ordner namens `blocks` erstellt.
9. In diesem Ordner wird die Template-Datei für den Custom Block erstellt. Diese Datei muss `block-empfehlung.php` heissen.
10. Kopiere nun folgende Struktur in diese Datei und ersetze die Kommentare mit den Inhalten aus dem Custom Block (mit dem Befehl `block_field('slug')`) [^2]
```html
<div class="block-empfehlung">
	<h3>Ich empfehle...</h3>
	<p><!-- beschrieb --></p>
	<a href="<?php // url ?>">Link</a>
</div>
```
11. Teste nun auf der Webseite, ob der Block korrekt angezeigt wird.

[^1]: [Mehr zu Genesis Custom Blocks](https://wordpress.org/plugins/genesis-blocks/)
[^2]: [Mehr zu block_field()](https://developer.wpengine.com/genesis-custom-blocks/functions/block_field/)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/z1XVoRSLTjw/maxresdefault.jpg)](https://www.youtube.com/watch?v=z1XVoRSLTjw)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's weiter zu Schritt 07, Custom Post Types](/07_custom-post-types)