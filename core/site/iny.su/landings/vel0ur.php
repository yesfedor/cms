<?php
$warp = 'app';
?>
<style>
@keyframes textPulseLogo {
    50% {
        color: white;
    }
}
.textPulseLogo {
    color: #9e9e9e !important;
    animation: textPulseLogo 2s infinite;
}

@keyframes borderPulse {
    50% {
        border-color: #ffffff;
    }
}
.borderPulse {
    border-color: #2E2E2E !important;
    animation: borderPulse 6s infinite;
    border-width: 8px !important;
}
#screen1 {
    min-height: calc(100vh - 44px);
}
</style>
<img class="d-none" src="https://iny.su/web/file/images/main/landings/vel0ur/bg1.jpg">
<nav id="navbar" class="d-none navbar navbar-expand-lg navbar-dark fixed-top elegant-color-dark py-1">
    <div class="container">
        <a href="#" class="navbar-brand waves-effect waves-light"><b class="white-text">Photographer</b></a>
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <?= url('https://vk.com/id316405174', '<i class="fab fa-vk"></i>', false, 'nav-link waves-effect waves-light', false) ?>
            </li>
            <li class="nav-item">
                <?= url('https://www.instagram.com/velour_ph', '<i class="fab fa-instagram"></i>', false, 'nav-link waves-effect waves-light', false) ?>
            </li>
            <li class="nav-item">
                <a href="tg://resolve?domain=vel0ur" class="nav-link waves-effect waves-light"><i class="fab fa-telegram-plane"></i></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid m-0 p-0" style="margin-top:44px !important;">
    <div class="jarallax z-depth-1-half">
        <div id="screen1" class="row align-items-center justify-content-center">
            <div class="col-12 col-md-10 text-center px-3">
                <div class="row">
                    <div id="animatedLogoWrapper" class="col-12"><h1 id="animatedLogo" class="my-0">@vel0ur</h1></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-0 py-0">
    <div id="screen2" class="row justify-content-center h100vh mb-1">
        <div class="col-12 col-md-10 z-depth-3 elegant-color rounded border-top borderPulse py-5 mt-n5">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="textPulseLogo mb-3 px-2">About Me</h3>
                    <h5 class="white-text my-0 px-2">тут чисто базовая инфа там что делашеь где сколько почему мотивация и тд</h5>
                    <h3 class="textPulseLogo mt-5 mb-3 px-2">Photo Collection</h3>
                    <h5 class="white-text my-0 px-2">Тут 1-2 видоса крутых с вк у тебя в аудиозаписях</h5>
                    <h3 class="textPulseLogo mt-5 mb-3 px-2">Video Collection</h3>
                    <h5 class="white-text my-0 px-2">Тут 2-3 крутыыые фотки с эфектами крутилками вертелками все оформлю что бы красиво да</h5>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
</script>