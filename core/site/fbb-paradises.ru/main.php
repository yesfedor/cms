<?php
$warp = 'warp';
?>
<style>
.wrapper-bg {
    -webkit-filter: brightness(50%);
    filter: brightness(50%);
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top rgba-black-strong">
    <div class="container">
        <a onclick="nav.scroll(this); return false;" class="navbar-brand" href="#server-main">FBB Paradise</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a onclick="nav.scroll(this); return false;" class="nav-link white-text" href="#server-main">О сервере</a>
                </li>
                <li class="nav-item">
                    <a onclick="nav.scroll(this); return false;" class="nav-link white-text" href="#server-donate">Поддержать</a>
                </li>
                <li class="nav-item">
                    <a onclick="nav.away(this); return false;" class="nav-link white-text" href="https://go.iny.su/fbb-paradise-rules">Правила</a>
                </li>
                <li class="nav-item">
                    <a onclick="nav.away(this); return false;" class="nav-link white-text" href="https://vk.com/fbb_paradise">Группа ВК</a>
                </li>
                <li class="nav-item">
                    <a onclick="nav.away(this); return false;" class="nav-link white-text" href="https://vk.com/tenebray">Автор</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row h100vh white z-depth-3">
        <!-- server-main -->
        <div id="server-main" class="col-12 h100vh jarallax">
            <img class="jarallax-img wrapper-bg" src="https://go.iny.su/uc/cc4ca42/v6f7584/b37cc030/34d2afa82fa.jpg" alt="FBB Paradise Background">
            <div class="row h100vh justify-content-center align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 card text-center my-5 rgba-black-light z-depth-0 py-3 py-lg-5">
                            <h1 class="h1 white-text">О сервере</h1>
                            <div class="card-body">
                                <p class="white-text">
                                    FBB Paradise - это ванильный сервер с элементами хардкора! <br>
                                    Усложнённые крафты, сильные мобы, изменённая генерация руд, отсутствие приватов и отсутствие гриферов и воров - всё это есть у нас. <br>
                                    Администрация тщательно следит за соблюдением игроками правил и карает нарушителей. <br>
                                    Ждём вас!
                                </p>
                            </div>
                        </div>
                        <div class="col-12 text-center mb-5">
                            <button onclick="copy('fbb-paradises.ru', 'Удачной игры!');" type="button" class="btn btn-outline-white btn-rounded waves-effect">Скопировать IP</button>
                        </div>
                        <div class="col-12 text-center">
                            <h4 class="white-text my-0"><a class="white-text" onclick="nav.away(this); return false;" href="https://vk.com/tenebray">Остались вопросы? Пиши сюда</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row h100vh justify-content-center align-items-center elegant-color-dark z-depth-3">
        <!-- server-donate -->
        <div id="server-donate" class="col-12 h100vh jarallax">
            <div class="row justify-content-center align-items-center">
                <img class="jarallax-img wrapper-bg" src="https://go.iny.su/uc/cc4ca42/v6f7584/fd0d61c0/8d8a18e906b.jpg" alt="FBB Paradise Background">
                <div class="row h100vh justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center">
                                <h1 class="h1 white-text mb-3">Поддержать проект</h1> 
                            </div>
                            <div class="col-12 col-lg-8 text-center">
                                <div class="list-group w-auto">
                                    <a href="#" class="list-group-item list-group-item-action secondary-color-dark white-text">Поддержать проект можно по этим реквизитам</a>
                                    <a href="#" class="list-group-item list-group-item-action elegant-color-dark white-text" onclick="copy('+79257616375', 'Скопировано!'); return false;">QIWI-кошелёк: +79257616375</a>
                                    <a href="#" class="list-group-item list-group-item-action elegant-color-dark white-text" onclick="copy('5469380075636075', 'Скопировано!'); return false;">Сбербанк: 5469380075636075</a>
                                    <a href="#" class="list-group-item list-group-item-action elegant-color-dark text-muted" onclick="return false;">Онлайн: скоро</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<div class="footer-copyright text-center py-2 elegant-color">
    <span class="white-text">© <?= $domainInfo[$domain]['logo'] ?>, <?= date('Y') ?>. All rights reserved. Created by <a onclick="return nav.away(this);" class="white-text" href="//go.iny.su/yesfedor">@yesfedor</a></span>
</div>

<script>
// object-fit polyfill run
objectFitImages()

/* init Jarallax */
jarallax(document.querySelectorAll('.jarallax'))

function copy(str, msg) {
    let tmp = document.createElement('INPUT'),
        focus = document.activeElement
    tmp.value = str
    document.body.appendChild(tmp)
    tmp.select()
    document.execCommand('copy')
    document.body.removeChild(tmp)
    focus.focus()
    toastr.info(msg)
}
</script>