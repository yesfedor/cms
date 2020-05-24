<?php
$warp = 'app';
?>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
<style>
:root {--theme-background: #2e2e2e;}
#header{transition: all 1s;}
.jarallax-img {filter: brightness(0.3);}
</style>

<nav id="header" class="navbar navbar-expand-lg navbar-dark fixed-top z-depth-0 py-3">
    <div class="container text-center">
        <a onclick="return nav.scroll(this);" class="navbar-brand" href="#page-1">Команда Администрирования</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerBar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="headerBar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a onclick="return nav.scroll(this);" class="nav-link" href="#page-2">О нас</a>
                </li>
                <li class="nav-item">
                    <a onclick="return nav.scroll(this);" class="nav-link" href="#page-3">Услуги</a>
                </li>
                <li class="nav-item">
                    <a onclick="return nav.scroll(this);" class="nav-link" href="#page-4">Контакты</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a onclick="return nav.away(this);" class="nav-link" href="https://vk.com/team_adm_platform"><i class="fab fa-vk white-text"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section id="intro" class="display-wrapper text-center">
    <h1 class="display-logo display-2 text-center">Команда Администрирования</h1>
</section>
<div id="page-1" class="container-fluid">
    <div data-jarallax data-speed="0.5" class="jarallax row h100vh justify-content-center align-items-center">
        <img class="jarallax-img" src="https://go.iny.su/uc/cc4ca42/v6f7584/d7a3317b/07f51c93101.jpg" alt="">
        <div class="col-10 col-lg-5 text-center">
            <h4 class="h4-responsive white-text px-md-2 px-lg-5">Добро пожаловать на сайт нашей команды системного администрирования. Если у вас есть проект на какой-либо интернет-платформе, и вам необходим персонал, который будет администрировать и модерировать ваш проект, то вы по адресу!</h4>
        </div>
    </div>
</div>
<div id="page-2" class="container">
    <div class="row h100vh justify-content-center align-items-center elegant-color">
        <div class="col-12 col-lg-6 text-center">
            <h1 data-aos="fade-down" class="h1-responsive white-text font-weight-bold">О нас</h1>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center">

                </div>
            </div>
        </div>
    </div>
</div>
<div id="page-3" class="container">
    <div class="row h100vh justify-content-center align-items-center elegant-color">
        <div class="col-12 col-lg-6 text-center">
            <h1 data-aos="fade-down" class="h1-responsive white-text font-weight-bold">Услуги</h1>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page-4" class="container">
    <div class="row h100vh justify-content-center align-items-center elegant-color">
        <div class="col-12 col-lg-6 text-center">
            <h1 data-aos="fade-down" class="h1-responsive white-text font-weight-bold">Контакты</h1>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small elegant-color-dark">
    <div class="footer-copyright white-text text-center py-3">© 2020 Copyright:
        <a href="https://iny.su"> INY.SU</a>
    </div>
</footer>
<div id="vk_community_messages"></div>
<script>
init.preload.go(500)
init.css.add('aos', 'domain:https://unpkg.com/aos@2.3.1/dist/aos.css', 1)
init.js.add('aos', 'domain:https://unpkg.com/aos@2.3.1/dist/aos.js', 1)

init.css.add('animationTextDisplay', 'sandbox/animationTextDisplay.css', 7)
init.js.add('animationTextDisplay', 'sandbox/animationTextDisplay.js', 7)
animationTextDisplay.init(200, ()=>{
    setTimeout(() => {
        nav.scroll(nav.createLink('#page-1'))
        if (!fn.isMobile()) VK.Widgets.CommunityMessages("vk_community_messages", 194836692, {expanded: "1",disableExpandChatSound: "1",disableNewMessagesSound: "1",tooltipButtonText: "Есть вопрос?"})
    }, 200)
})

AOSinterval = setInterval(() => {
       if (typeof AOS == 'object') {
           AOS.init()
           clearInterval(AOSinterval)
       }
   }, 100);

objectFitImages();
jarallax(document.querySelectorAll('.jarallax'));
jarallax(document.querySelectorAll('.jarallax-keep-img'), {
    keepImg: true
});

style.changeHeaderColor({
    block: '#header',
    height: window.innerHeight - $('#header').innerHeight()*4,
    baseColor: '#00000000',
    plusColor: '#212121',
    baseClass: 'py-3'
})
</script>