<?php
$ui = false;
$warp = "warp";
?>
<nav id="bheader" class="navbar navbar-expand-lg navbar-dark fixed-top z-depth-0 theme-duration">
   <a onclick="return nav.scroll(this);" class="navbar-brand" href="#page-about">Команда</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicNav" aria-controls="basicNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="basicNav">
       <ul class="navbar-nav mr-auto">
           <li class="nav-item">
               <a onclick="return nav.scroll(this);" class="nav-link" href="#page-about">О Нас</a>
           </li>
           <li class="nav-item">
               <a onclick="return nav.scroll(this);" class="nav-link" href="#page-services">Услуги</a>
           </li>
           <li class="nav-item">
               <a onclick="return nav.scroll(this);" class="nav-link" href="#page-contacts">Контакты</a>
           </li>
       </ul>
       <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <?= url('https://vk.com/team_adm_platform', '<i class="white-text fab fa-vk"></i>', false, 'nav-link waves-effect waves-light pr-3', false) ?>
            </li>
            <li class="nav-item">
                <a href="tg://resolve?domain=yesfedor" class="nav-link waves-effect waves-light"><i class="white-text fab fa-telegram-plane"></i></a>
            </li>
        </ul>
   </div>
</nav>
<div class="container-fluid grey lighten-5">
    <div id="page-about" class="jarallax row h100vh justify-content-center align-items-center" style="background-image: url('https://go.iny.su/uc/cc4ca42/v6f7584/51e3f3cc/c1845e650f0.jpg');">
        <!-- page_about -->
        <div class="col-12 m-0 p-0">
            <div class="row h100vh justify-content-center align-items-center mask rgba-stylish-strong">
                <div class="col-10 col-lg-6 text-center">
                    <h1 id="about-title" class="d-block white-text font-weight-bold mb-5">Команда Администрирования</h1>
                    <h4 class="d-block white-text">Добро пожаловать на сайт нашей команды системного администрирования. Если у вас есть проект на какой-либо интернет-платформе, и вам необходим персонал, который будет администрировать и модерировать ваш проект, то вы по адресу!</h4>
                </div>
            </div>
        </div>
    </div>
    <div id="page-services" class="row h100vh justify-content-center align-items-center">
        <!-- page_services -->
        <div class="col-12 py-3">
            <div class="row">
                <div class="col-12 text-center mt-5 mb-3">
                    <h2 data-aos="fade-up" data-aos-duration="1000" class="black-text font-weight-bold">Наши услуги</h2>
                </div>
                <div class="col-12 text-center mt-3 mb-5">
                    <h3 data-aos="fade-up" data-aos-duration="1000" class="black-text">
                        Тут предоставлены готовые предложения.
                        Вы можете сами выбрать необходимые вам услуги.
                    </h3>
                </div>
                <div data-aos="fade-up" class="container mt-5 pt-5 pb-3 px-5 z-depth-1 white">
                    <section class="text-center mdb-color-text">
                        <div class="row text-center d-flex justify-content-center my-5">
                            <div data-aos="fade-up" data-aos-duration="1000" class="col-lg-3 col-md-6 mb-4">
                                <i class="fas fa-user-cog blue-text fa-3x mb-4"></i>
                                <h5 class="font-weight-normal mb-3">Полная настройка</h5>
                                <p class="text-muted mb-0"><span class="d-block">Подходит для начала проекта.</span> Мы полностью настраиваем ваш проект + набираем персонал + создаем систему персонала + необходимые локальные акты, регулирующие работу персонала.</p>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000" class="col-lg-3 col-md-6 mb-4">
                                <i class="fas fa-microchip blue-text fa-3x mb-4"></i>
                                <h5 class="font-weight-normal mb-3">Техническая настройка</h5>
                                <p class="text-muted mb-0"><span class="d-block">Подходит для проекта с готовым персоналом.</span> Настройка ролей, каналов, иных технических аспектов.</p>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000" class="col-lg-3 col-md-6 mb-4">
                                <i class="fas fa-sitemap blue-text fa-3x mb-4"></i>
                                <h5 class="font-weight-normal mb-3">Организация работы персонала</h5>
                                <p class="text-muted mb-0">Набираем персонал + создаем систему персонала + необходимые локальные акты, регулирующие работу персонала.</p>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000" class="col-lg-3 col-md-6 mb-4">
                                <i class="fas fa-satellite blue-text fa-3x mb-4"></i>
                                <h5 class="font-weight-normal mb-3">Создание сайта</h5>
                                <p class="text-muted mb-0">Креативим, верстаем, публикуем на хостинг, пишем скрипты, наш разработчик <a onclick="return nav.away(this);" href="https://iny.su/landings/yesfedor?from=studio">@yesfedor</a></p>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000" class="col-12 mb-0">
                                <h3 class="mb-0">
                                    <span class="font-weight-bold mr-3">Вы можете сформировать ваш заказ индивидуально</span>
                                    <a onclick="return nav.away(this);" href="https://vk.com/im?media=&sel=-193422646" class="btn btn-outline-blue btn-large btn-rounded z-depth-0">Написать</a>
                                </h3>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
    <div id="page-contacts" class="row h100vh justify-content-center align-items-center">
        <!-- page_contacts -->
        <div class="col-12 text-center py-3">
            <div class="row">
                <div class="col-12 text-center my-5">
                    <h2 data-aos="fade-down" class="black-text font-weight-bold">Почему мы?</h2>
                </div>
                <div class="col-12">
                    <div class="container row mx-auto mb-5">
                        <div data-aos="fade-right" class="col-12 col-lg-4 black-text text-center">
                            <i class="fas fa-check black-text fa-lg mr-3"></i><span class="h4 font-weight-bold">Скорость</span>
                            <p class="d-block text-center">Мы стараемся сделать все максимально <b>быстро</b>!</p>
                        </div>
                        <div data-aos="fade-up" class="col-12 col-lg-4 black-text text-center">
                            <i class="fas fa-check black-text fa-lg mr-3"></i><span class="h4 font-weight-bold">Качество</span>
                            <p class="d-block text-center">Мы уделяем большую часть внимания <b>качеству</b>!</p>
                        </div>
                        <div data-aos="fade-left" class="col-12 col-lg-4 black-text text-center">
                            <i class="fas fa-check black-text fa-lg mr-3"></i><span class="h4 font-weight-bold">Опыт</span>
                            <p class="d-block text-center">Наши сотрудники имеют <b>опыт работы на разных платформах</b>!</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" class="col-12 text-center mt-5 mx-0">
                    <h2 class="h1-responsive black-text mb-5">Если вы действительно чего-то хотите, не ждите — будьте нетерпеливыми.</h2>
                    <h4 class="h2-responsive black-text mt-5"><a onclick="return nav.away(this);" href="https://vk.com/im?media=&sel=-193422646">Напишите нам</a>, и мы вам поможем.</h4>
                    <h4 class="h2-responsive black-text mt-5">vadimnovikov108@gmail.com</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer blue darken-4">
    <div class="footer-copyright white-text text-center py-3">© Команда Администрирования, 2020</div>
</footer>
<script>
let studio = {
    pageAboutTitle() {
        let $title = document.getElementById('about-title')
        if (!fn.isMobile()) $title.classList.add('display-4')
        else $title.classList.add('h3')
    },
    pageAbout() {
        style.changeHeaderColor({
            block: '#bheader',
            height: innerHeight - $('#bheader').innerHeight(),
            baseColor: '#00000000',
            plusColor: '#1976d2',
            baseClass: 'transparent'
        })
        jarallax(document.querySelectorAll('.jarallax'), {
            speed: 0.2
        })
        this.pageAboutTitle()
    },
    animate() {
        init.css.add('aos', 'domain:https://unpkg.com/aos@2.3.1/dist/aos.css', 1)
        init.js.add('aos', 'domain:https://unpkg.com/aos@2.3.1/dist/aos.js', 1)
        setTimeout(() => {
            AOS.init()
        }, 500)
    },
    init() {
        this.animate()
        this.pageAbout()        
    }
}
studio.init()
</script>