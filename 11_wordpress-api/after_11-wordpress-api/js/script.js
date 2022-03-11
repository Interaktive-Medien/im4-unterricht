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

    // --- wordpress rest api
    const URL = 'https://558782-7.web1.fh-htwchur.ch/wp-json/wp/v2/projektart';
    const otherParameters = { method: "GET" }
    fetch(URL, otherParameters)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            const CONTAINER = document.querySelector('footer p#skills')
            CONTAINER.innerHTML = ' Spezialist:in für '
            data.forEach(projektart => {
                CONTAINER.innerHTML += `<span>${projektart.name}</span>`
            })
        })

}, false);
