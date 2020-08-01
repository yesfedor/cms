    /* Init AOS */
init.css.add('aos', 'domain:https://unpkg.com/aos@2.3.1/dist/aos.css', 1)
init.js.add('aos', 'domain:https://unpkg.com/aos@2.3.1/dist/aos.js', 1)

function resizeDisplayText() {
    if (window.innerWidth < 992) {
       $('.display-1').each((i, el)=>{
           $(el).removeClass('display-1').addClass('h1 h1-resize-d1')
       })
       $('.display-2').each((i, el)=>{
           $(el).removeClass('display-2').addClass('h1 h1-resize-d2')
       })
       $('.display-3').each((i, el)=>{
           $(el).removeClass('display-3').addClass('h1 h1-resize-d3')
       })
       $('.display-4').each((i, el)=>{
           $(el).removeClass('display-4').addClass('h1 h1-resize-d4')
       })
   } else {
       $('.h1-resize-d1').each((i, el) => {
           $(el).removeClass('h1 h1-resize-d1').addClass('display-1')
       })
       $('.h1-resize-d2').each((i, el) => {
           $(el).removeClass('h1 h1-resize-d2').addClass('display-2')
       })
       $('.h1-resize-d3').each((i, el) => {
           $(el).removeClass('h1 h1-resize-d3').addClass('display-3')
       })
       $('.h1-resize-d4').each((i, el) => {
           $(el).removeClass('h1 h1-resize-d4').addClass('display-4')
       })
   }
}

$(window).resize(() => { 
    resizeDisplayText()
});

$(document).ready(function () {
   $('#app').fadeIn(200);
   AOSinterval = setInterval(() => {
       if (typeof AOS == 'object') {
           AOS.init()
           clearInterval(AOSinterval)
       }
   }, 100);
   resizeDisplayText()
});

/* change nav background */
style.changeHeaderColor({
    block: '#header',
    height: window.innerHeight - $('#header').innerHeight()*2,
    baseColor: '#00000066',
    plusColor: '#212121',
    baseClass: 'z-depth-0 py-3'
})

/* init Jarallax */
$('.jarallax').jarallax();