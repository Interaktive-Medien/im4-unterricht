# Modularisieren `Schritt 02`
> **Um was es geht**: 
> Das Theme wird nun zu ersten Mal Modularisiert, sprich es werden gewisse Teile ausgelagert. 
> Ausserdem wird eine Navigation erstellt, die im Backend befüllt werden kann und der Customizer wird das erste Mal genutzt, um ein Logo hochzuladen.

## 🧠 Theorieinput 
[![Video](https://i3.ytimg.com/vi/2Py3VPbycwE/maxresdefault.jpg)](https://www.youtube.com/watch?v=2Py3VPbycwE)
[`⬇️ Folien als PDF herunterladen ⬇️`](https://drive.google.com/file/d/1C-GMsh-edvqwKY6N-bD80HJngX1a6AqI/view?usp=share_link)

## 🧑‍💻 Arbeitsauftrag

### I. 🍽️ Vorbereitung 
1. Als erstes stylen wir die Webseite. Füge das zur Verfügung gestellte CSS in die Datei `style.css` ein.
Wichtig dabei: Lösche die Theme-Angaben nicht.

<details>
<summary><strong>👉 CSS Kopiervorlage 👈</strong></summary>

```css
/* --- font */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap');

/* --- resets */
*,
*::after,
*::before{
    margin: 0 0;
    padding: 0 0;
    box-sizing: border-box;
    position: relative;
}
*:focus{
    outline: none;
}
a{
    text-decoration: none;
    color: inherit;
}

/* --- variables */
:root {
    /* --- colors */
    --co-light: #ffffff;
    --co-dark: #1f1f1f;
    --co-akzent-dark: #2733ff;
    --co-akzent-light: #ff3eff;
    /* --- gaps */
    --ga-around: 1.8rem;
    --ga-inner: 1.2rem;
    --ga-y-l: 8rem;
    --ga-y-m: 2.5rem;
    /* --- fonts */
    --f-pagetitle: 700 3.8rem/110% inter, sans-serif;
    --f-title: 700 2.5rem/110% inter, sans-serif;
    --f-subtitle: 500 2rem/110% inter, sans-serif;
    --f-text: 300 1rem/120% inter, sans-serif;
    --f-nav: 700 1.2rem/120% inter, sans-serif;
    --f-subnav: 700 0.9rem/120% inter, sans-serif;
    --f-footer: 500 0.8rem/120% inter, sans-serif;
    /* --- grids */
    --gr-2: repeat(2,1fr);
    /* --- misc*/
    --transition: all 0.5s;
    --imageheight-teaser: 17rem;
    --imageheight-full: 34rem;
}

/* --- typography */
p,h1,h2,h3,h4,h5,h6,a,body,html,li{
    font-family: inter,sans-serif;
    color: var(--co-dark);
    letter-spacing: .3px;
}
h1{
    font: var(--f-pagetitle);
}
h2{
    font: var(--f-title);
}
h3{
    font: var(--f-subtitle);
}
p{
    font: var(--f-text);
}
nav li{
    font: var(--f-nav);
}
nav ul.sub-menu li{
    font: var(--f-subnav);
}
footer p{
    font: var(--f-footer);
    color: white;
}

/* --- structure */
main{
    max-width: 1000px;
    margin: 0 auto;
    padding: var(--ga-y-l) var(--ga-around);
}

/* --- header */
header{
    background: var(--co-akzent-dark);
    width: 100%;
    height: auto;
    padding: var(--ga-inner);
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
header>a>img{
    max-height: 50px;
    filter: invert(100%);
    transition: var(--transition);
}
header>nav div{
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
}
/*headernavs allgemein*/
header>nav ul {
    list-style-type: none;
}
header>nav ul li a{
    color: white;
}
/*main headermenu*/
header>nav ul#menu-headermenu>li{
    display: inline;
}
header>nav ul#menu-headermenu>li:not(:first-of-type){
    margin-left: 20px;
}
/*submenu*/
header div ul li ul.sub-menu{
    background: var(--co-akzent-light);
    position: absolute;
    width: 100px;
    padding: 5px;
    right: 0;
    text-align: right;
    z-index: 2;
    margin-top: 10px;
    transition: var(--transition);
}
header div ul li ul.sub-menu li {
    margin: 5px 0 5px 5px;
}

/* --- pages */
body.page h1{
    margin-bottom: var(--ga-y-m);
}
body.page>main>article>*:last-of-type{
    margin-bottom: var(--ga-y-m);
}

/* --- posts */
body.single-post h1{
    text-align: center;
    margin: 10px 0;
}
body.single-post p.single-infos{
    text-align: center;
}
body.single-post p.single-tags{
    text-align: center;
    margin-bottom: var(--ga-y-m);
}
body.single-post main img.attachment-post-thumbnail{
    width: 100%;
    height: var(--imageheight-full);
    object-fit: cover;
    margin-bottom: var(--ga-y-m);
}
body.single-post>main>article>div:last-of-type{
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
}

/* --- block-empfehlung */
div.block-empfehlung{
    max-width: 40rem;
    margin: 2rem 0;
    border-left: 3px solid var(--co-dark);
    padding: 0 var(--ga-inner);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: flex-start;
    gap: 0.4rem;
}
div.block-empfehlung a{
    background: var(--co-dark);
    color: var(--co-light);
    padding: 10px;
    transition: var(--transition);
    font: var(--f-text);
}
/* --- portfolioitems */
body.single-portfolioitem main p.date{
    text-align: center;
}
body.single-portfolioitem main h1{
    text-align: center;
    margin: 10px 0 var(--ga-y-m) 0;
}
body.single-portfolioitem main img{
    width: 100%;
    margin-bottom: var(--ga-y-m);
}
body.single-portfolioitem main a{
    background: var(--co-dark);
    color: var(--co-light);
    padding: 10px;
    top: 1rem;
    transition: var(--transition);
    font: var(--f-text);
}
body.single-portfolioitem main article>div:last-of-type{
    margin-bottom: var(--ga-inner);
}

/* --- archive */
body.archive div.archive_intro{
    text-align: center;
    margin-bottom: var(--ga-y-l);
}

/* --- raster */
body.home main,
section.portfolioitems,
section.archive_content{
    display: grid;
    grid-gap: calc( var(--ga-inner) * 3 );
    grid-template-columns: var(--gr-2);
}
body.home main article img,
section.portfolioitems article img,
section.archive_content article img{
    width: 100%;
    height: var(--imageheight-teaser);
    object-fit: cover;
}
body.home main article h2,
section.portfolioitems article h2,
section.archive_content article h2{
    margin: 1rem 0;
}
body.home main article p,
section.portfolioitems article p,
section.archive_content article p{
    margin: 1rem 0;
}
body.home main article a,
section.portfolioitems article a,
section.archive_content article a{
    background: var(--co-dark);
    color: var(--co-light);
    padding: 10px;
    top: 1rem;
    transition: var(--transition);
    font: var(--f-text);
}

/* --- footer */
footer{
    background: var(--co-akzent-dark);
    width: 100%;
    height: auto;
    padding: 6px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    position: fixed;
    bottom: 0;
    left: 0;
}

/* --- tablet */
@media only screen and (max-width: 1024px) {
    :root {
        /* --- gaps */
        --ga-around: 1.6rem;
        --ga-inner: 1rem;
        --ga-y-l: 7rem;
        --ga-y-m: 2rem;
        /* --- fonts */
        --f-pagetitle: 700 3.5rem/110% inter, sans-serif;
        --f-title: 700 2.2rem/110% inter, sans-serif;
        --f-subtitle: 500 1.8rem/110% inter, sans-serif;
        --f-text: 300 1rem/120% inter, sans-serif;
        --f-nav: 700 1.2rem/120% inter, sans-serif;
        --f-subnav: 700 0.9rem/120% inter, sans-serif;
        --f-footer: 500 0.8rem/120% inter, sans-serif;
        /* --- misc  */
        --imageheight: 15rem;
        --imageheight-full: 29rem;
    }
    body.home main,
    section.portfolioitems,
    section.archive_content{
        grid-gap: calc( var(--ga-inner) * 2 );
    }
}

/* --- mobile */
@media only screen and (max-width: 650px) {
    :root {
        /* --- gaps */
        --ga-around: 1.8rem;
        --ga-inner: 2rem;
        --ga-y-l: 5rem;
        --ga-y-m: 2rem;
        /* --- fonts */
        --f-pagetitle: 700 2.7rem/110% inter, sans-serif;
        --f-title: 700 1.7rem/110% inter, sans-serif;
        --f-subtitle: 500 1.3rem/110% inter, sans-serif;
        --f-text: 300 0.9rem/120% inter, sans-serif;
        --f-nav: 700 1rem/120% inter, sans-serif;
        --f-subnav: 700 0.8rem/120% inter, sans-serif;
        --f-footer: 500 0.8rem/120% inter, sans-serif;
        /* --- grids */
        --gr-2: repeat(1,1fr);
        /* --- misc*/
        --imageheight: 15rem;
        --imageheight-full: 15rem;
    }
    header{
        flex-direction: column;
        justify-content: center;
        gap: var(--ga-inner);
    }
    header>nav ul#menu-headermenu{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 15px;
    }
    header>nav ul#menu-headermenu>li{
        display: unset;
    }
    header>nav ul#menu-headermenu>li:not(:first-of-type){
        margin-left: 0;
    }
    header>nav ul#menu-headermenu>li a{
        white-space: nowrap;
    }
    header div ul li ul.sub-menu{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: right;
        gap: 6px;
        width: 200px;
    }
}
```
</details>

### II. ✂️ Modularisierung
2. Erstelle die Datei `header.php`.
3. Kopiere alles aus `index.php` von zuoberst bis und mit dem öffnenden `main`-Tag in diese Datei.
4. Binde den Header dynamisch ein [^1].
5. Erstelle die Datei `footer.php`.
6. Kopiere alles aus `index.php` vom schliessenden `main`-Tag bis zuunterst in diese Datei.
7. Binde den Footer dynamisch ein [^2].
8. Füge in `index.php` nach dem eingebundenen Header einen Kommentar ein, der zeigt dass hier das `index.php`-File beginnt.
So in dem Stil: 
```html
<!-- START: index.php -->
```
9. Füge auch zuunterst bevor der Footer geladen wird so einen Kommentar ein.
```html
<!-- ENDE: index.php -->
```
> Mit diesen Kommentaren wird während der gesamten Entwicklung des Themens gearbeitet. 
> Sie helfen uns, die Struktur zu verstehen. 
> Passe von hier an die Kommentare immer dem Dateinamen an.
> Das wird in den Arbeitsaufträgen nicht mehr explizit erwähnt.

### III. 🎛️ Navigation
10. Erstelle eine Datei namens `functions.php`. 
11. Registriere in dieser Datei deine Navigation [^3] mit folgendem Code-Snippet:
```php
add_action('after_setup_theme', 'navigation_registrieren');
function navigation_registrieren(){
    register_nav_menu('headernavigation', 'Navigation im Header');
};
```
12. Füge die Navigation mit nachfolgendem Snippet in `header.php` zwischen den `nav`-Tags ein.
```php
<?php wp_nav_menu(array('theme_location' => 'headernavigation')) ;?>
```
13. Erstelle die Navigation im Backend, nenne diese "Headermenu", und befülle sie mit Dummy-Content.

### VI. 🖌️ Logo und Customizer
14. Registriere mit nachfolgendem Snippet einen Logo-Upload in `functions.php`.
```php
add_action( 'after_setup_theme', 'theme_prefix_setup' );
function theme_prefix_setup() {
  add_theme_support( 'custom-logo' );
};
```
15. Gib das Logo mit nachfolgendem Snippet dort in `header.php` aus, wo im Moment der `h1`-Titel ist.
```php
<?php 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' )
?>
<img src="<?php echo $image[0] ;?>" alt="Logo Webseite">
```
16. Lade im Backend beim Customizer ein Logo hoch.
17. Verlinke mithilfe eines `bloginfo`-Tags das Logo im Header mit der Startseite [^4].

[^1]: [Mehr zum Get Header Tag](https://developer.wordpress.org/reference/functions/get_header/)
[^2]: [Mehr zum Get Footer Tag](https://developer.wordpress.org/reference/functions/get_footer/)
[^3]: [Mehr zu Navigationen in Wordpress](https://codex.wordpress.org/Navigation_Menus)
[^4]: [Mehr zum bloginfo-Tag](https://developer.wordpress.org/reference/functions/bloginfo/#possible-values-for-show)

## 💡 Auflösung 
[![Video](https://i3.ytimg.com/vi/VJCpJXhFc4Q/maxresdefault.jpg)](https://www.youtube.com/watch?v=VJCpJXhFc4Q)
[``💻 Zum Code nach Schritt 02 💻``](after_02-modularisieren)

>  🔗 Wenn du fertig bist:
>  [Hier lang geht's weiter zu Schritt 03, Loop](/03_loop)
