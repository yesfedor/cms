$('.carousel').carousel({
    touch: true,
    interval: 3000,
    wrap: true,
    pause: false
})
vel0ur = {
    init() {
        style.setHeaderAppThemeColor('#3E4551')
        style.flashing({
            colorTo: '#4B515D',
            colorFrom: '#4B515D',
            animationDuration: 0.1
        })
        nav.onunload = () => {
            document.location.href = document.location.href
        }
        this.animatedLogo()
        // object-fit polyfill run
        objectFitImages();

        /* init Jarallax */
        $('#navbar').removeClass('d-none')
        $('.jarallax').attr('style', 'background-image: url(\'https://iny.su/web/file/images/main/landings/vel0ur/bg1.jpg\');')
        jarallax(document.querySelectorAll('.jarallax'));
    },
    animatedLogo() {
        let wrapper = document.querySelector("#animatedLogoWrapper");
        let text = document.querySelector("#animatedLogo");
        let textCont = text.textContent;
        text.style.display = "none";
        for (let i = 0; i < textCont.length; i++) {
            (function(i) {
                setTimeout(function() {
                // Created textNode to append
                let texts = document.createTextNode(textCont[i])
                let span = document.createElement('span');
                span.appendChild(texts);

                span.classList.add("textPulseLogo");
                let textClassSize = (fn.isMobile() ? 'h1':'display-1') 
                span.classList.add(textClassSize);
                span.classList.add("font-weight-bold");
                wrapper.appendChild(span);

                }, 200 * i);
            }(i));
        }
        setTimeout(() => {
            $('#screen2').fadeIn(500)
            style.flashing({
                colorTo: '#212121',
                colorFrom: '#4B515D',
                animationDuration: 1
            })
        }, 200 * textCont.length);
    }
}

vel0ur.init()