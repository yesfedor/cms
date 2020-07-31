<?php
$warp = 'app';
?>
<link rel="stylesheet" href="/web/css/landings/yesfedor.css?v=128">

<style>
    .layout-mask {
        background-color: rgba(0,0,0,.5);
    }
</style>

<nav id="header" class="d-none navbar navbar-expand-lg navbar-dark primary-color fixed-top">
    <div class="container">
        <a class="navbar-brand white-text" onclick="return nav.go(this);" href="#">YesFedor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yesfedorHeader" aria-controls="yesfedorHeader" aria-expanded="false" aria-label="">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="yesfedorHeader">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item px-3">
                    <a class="nav-link white-text" onclick="return nav.cc(this);" href="yf_tg">
                        <i class="fab fa-facebook-f white-text mr-2"></i> Telegram
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link white-text" onclick="return nav.cc(this);" href="yf_vk">
                        <i class="fab fa-telegram-plane white-text mr-2"></i> VK
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid jarallax z-depth-0" style="background-image: url('https://go.iny.su/uc/cc4ca42/v6f7584/ee3233b2/6458668ff13.jpg');">
    <div class="row h100vh justify-content-center align-items-center layout-mask">
        <div class="col-10 my-5">
            <div class="row px-lg-3">
                <div class="col-12 col-lg-6 my-5">
                    <h1 class="white-text">Фрилансер<br>Фёдор Гаранин (@yesfedor)</h1>
                </div>
                <div class="col-12 col-lg-6 my-5">
                    <h4 class="white-text">
                        Я открыт к новым проектам и люблю делать что-то сложное и дико красивое, если у вас есть идея, но вы не знаете как ее воплотить в жизнь, буду рад сделать это вместе с вами
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid white">
    <div class="row h100vh">
        <div class="col-12 text-center my-5">
            <h1 class="black-text font-weight-bold">INY Creators - I DO MORE THAN OTHERS</h1>
        </div>
    </div>
</div>
<script>

style.changeHeaderColor({
    block: '#header',
    height: window.innerHeight - $('#header').innerHeight()*2,
    baseColor: '#4285F4',
    plusColor: '#4285F4',
    baseClass: 'd-block z-depth-0'
})

// object-fit polyfill run
objectFitImages();

/* init Jarallax */
jarallax(document.querySelectorAll('.jarallax'));

jarallax(document.querySelectorAll('.jarallax-keep-img'), {
    keepImg: true,
});
</script>
<script src="/web/js/landings/yesfedor.js?v=128"></script>