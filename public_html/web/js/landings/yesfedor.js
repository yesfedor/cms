    /* Init AOS */
init.css.add('aos', 'domain:https://unpkg.com/aos@2.3.1/dist/aos.css', 1)
init.js.add('aos', 'domain:https://unpkg.com/aos@2.3.1/dist/aos.js', 1)

style.changeHeaderColor({
    block: '#header',
    height: window.innerHeight - $('#header').innerHeight()*2,
    baseColor: '#4285F4',
    plusColor: '#4285F4',
    baseClass: 'd-block z-depth-0 py-3'
})