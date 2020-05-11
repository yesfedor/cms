<?php
$warp = 'app';
?>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
<style>#header{transition: all 1s;}.jarallax-img {filter: brightness(0.3);}</style>

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
<div id="page-1" class="container-fluid">
    <div data-jarallax data-speed="0.2" class="jarallax row h100vh justify-content-center align-items-center z-depth-1">
        <img class="jarallax-img" src="https://go.iny.su/uc/cc4ca42/v6f7584/d7a3317b/07f51c93101.jpg" alt="">
        <div class="col-10 col-lg-5 text-center">
            <h1 data-aos="fade-down" class="h1-responsive white-text py-3 mb-3">Команда Администрирования</h1>
            <h4 data-aos="fade-down" data-aos-duration="1500" class="h4-responsive white-text px-md-2 px-lg-5">Добро пожаловать на сайт нашей команды системного администрирования. Если у вас есть проект на какой-либо интернет-платформе, и вам необходим персонал, который будет администрировать и модерировать ваш проект, то вы по адресу!</h4>
        </div>
    </div>
</div>
<div id="page-2" class="container-fluid">
    <div class="row h100vh justify-content-center align-items-center z-depth-1 white">
        <div class="col-10 col-lg-6">
            <div class="row d-flex justify-content-center">
                <div data-aos="fade-down" class="col-12 text-center">
                    <h1 class="mb-3">О наc</h1>
                    <h4 class="mb-5">Быстро, катчественно - наши принципы!</h4>
                </div>
                <div data-aos="fade-down" class="col-md-10">
                <div class="card">
                    <div class="card-body m-3">
                    <div class="row">
                        <div class="col-lg-4 d-flex mb-2 align-items-center">
                        <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center">
                            <img src="https://go.iny.su/uc/cc4ca42/v6f7584/469dc3ce/426e19e5765.jpg" class="rounded-circle img-fluid z-depth-1" alt="avatar">
                        </div>
                        </div>
                        <div class="col-lg-8">
                        <p class="text-muted font-weight-light mb-4">
                        Мы - команда специалистов , которая работает с настройками различных интернет-платформ.
                        Мы создаем индивидуальные системы персонала на этих платформах.
                        Мы делам так, чтобы ваш проект работал,как часы,вместе с системой персонала.
                        Для каждого клиента мы привносим некоторые изменения в наши системы, что дает им индивидуальность.
                        </p>
                        <p class="font-weight-bold lead mb-2"><strong>Вадим Новиков</strong> <i onclick="nav.away(nav.createLink('https://vk.com/wadimeng'));" class="fab fa-vk text-muted ml-lg-2" style="cursor:pointer;"></i></p>
                        <p class="font-weight-bold text-muted mb-0">Администратор</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page-3" class="container-fluid">
    <div class="row h100vh justify-content-center align-items-center blue-grey lighten-5">
        <div data-aos="fade-down" class="col-10 col-lg-6">
            <h1>Услуги</h1>
        </div>
    </div>
</div>
<div id="page-4" class="container-fluid">
    <div class="row h100vh justify-content-center align-items-center white">
        <div data-aos="fade-down" class="d-block col-10 col-lg-12 text-center">
            <h1 class="h1-responsive font-wight-bold black-text mb-3">Если вы действительно чего-то хотите, не ждите — будьте нетерпеливыми.</h1>
            <h4 class="h4-responsive font-wight-bold black-text mb-3">Напишите нам, и мы вам поможем.</h4>
            <button onclick="nav.away(nav.createLink('mailto:vadimnovikov108@gmail.com'));" class="btn btn-outline-black btn-rounded">vadimnovikov108@gmail.com</button>
        </div>
    </div>
</div>
<footer class="page-footer font-small mdb-color">
    <div class="footer-copyright white-text text-center py-3">© 2020 Copyright:
        <a href="https://iny.su"> INY.SU</a>
    </div>
</footer>
<div id="vk_community_messages"></div>
<script>
init.preload.go(500)
init.css.add('aos', 'domain:https://unpkg.com/aos@2.3.1/dist/aos.css', 1)
init.js.add('aos', 'domain:https://unpkg.com/aos@2.3.1/dist/aos.js', 1)
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
    height: window.innerHeight - $('#header').innerHeight()*2,
    baseColor: '#00000000',
    plusColor: '#45526e',
    baseClass: 'z-depth-0 py-3'
})
setTimeout(() => {
    if (!fn.isMobile()) VK.Widgets.CommunityMessages("vk_community_messages", 194836692, {expanded: "1",disableExpandChatSound: "1",disableNewMessagesSound: "1",tooltipButtonText: "Есть вопрос?"})
}, 2000)
</script>