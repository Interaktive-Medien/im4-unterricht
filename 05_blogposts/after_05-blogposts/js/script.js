document.addEventListener('DOMContentLoaded', function () {

    // --- beispielfunktion - rotate images on keycombo
    const IMAGES = document.querySelectorAll('main img')
    IMAGES.forEach(img => { img.style.transition = '0.5s' })
    document.onkeydown = keydown;
    function keydown (evt) {
        if (!evt) evt = event;
        if(evt.shiftKey && evt.keyCode === 38) {
            IMAGES.forEach(img => { img.style.transform = 'rotate(180deg)'; })
        }else if(evt.shiftKey && evt.keyCode === 40){
            IMAGES.forEach(img => { img.style.transform = 'rotate(0deg)'; })
        }
    }

}, false);
