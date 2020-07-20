<?php
$ui = false;
$warp = "warp";

$mediaSerialsTop = file_get_contents('https://media.iny.su/api/0.1/media/mediaSerialsTop.json')
?>
<style>
    .h90vhn {
        max-height: 90vh;
    }
</style>
<!-- Welcome Gallery -->
<div id="gallery-intro" class="d-none d-md-block carousel slide carousel-fade z-depth-0" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#gallery-intro" data-slide-to="0" class="active"></li>
        <li data-target="#gallery-intro" data-slide-to="1"></li>
        <li data-target="#gallery-intro" data-slide-to="2"></li>
        <li data-target="#gallery-intro" data-slide-to="3"></li>
        <li data-target="#gallery-intro" data-slide-to="4"></li>
        <li data-target="#gallery-intro" data-slide-to="5"></li>
        <li data-target="#gallery-intro" data-slide-to="6"></li>
    </ol>

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!-- item -->
        <div class="carousel-item h90vhn active">
            <div class="view">
                <img class="d-block w-100" src="https://go.iny.su/uc/cc4ca42/v6f7584/0d3c7dfc/e7ba80c1e8f.jpg" alt="Welcome Gallery">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <a onclick="return nav.go(this);" href="/watch?kpid=1264562">
                    <h3 class="h3-responsive">Внешние отмели</h3>
                    <p class="white-text">Смотреть</p>
                </a>
            </div>
        </div>

        <!-- item -->
        <div class="carousel-item h90vhn">
            <div class="view">
                <img class="d-block w-100" src="https://go.iny.su/uc/cc4ca42/v6f7584/a2fefe48/c439fd2eafb.jpg" alt="Welcome Gallery">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <a onclick="return nav.go(this);" href="/watch?kpid=1040419">
                    <h3 class="h3-responsive">Детство Шелдона</h3>
                    <p class="white-text">Смотреть</p>
                </a>
            </div>
        </div>

        <!-- item -->
        <div class="carousel-item h90vhn">
            <div class="view">
                <img class="d-block w-100" src="https://go.iny.su/uc/cc4ca42/v6f7584/a768db9d/de68b9fe215.jpg" alt="Welcome Gallery">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <a onclick="return nav.go(this);" href="/watch?kpid=893621">
                    <h3 class="h3-responsive">Люцифер</h3>
                    <p class="white-text">Смотреть</p>
                </a>
            </div>
        </div>

        <!-- item -->
        <div class="carousel-item h90vhn">
            <div class="view">
                <img class="d-block w-100" src="https://go.iny.su/uc/cc4ca42/v6f7584/703cb031/9694c859d89.jpg" alt="Welcome Gallery">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <a onclick="return nav.go(this);" href="/watch?kpid=1013917">
                    <h3 class="h3-responsive">Резидент</h3>
                    <p class="white-text">Смотреть</p>
                </a>
            </div>
        </div>

        <!-- item -->
        <div class="carousel-item h90vhn">
            <div class="view">
                <img class="d-block w-100" src="https://go.iny.su/uc/cc4ca42/v6f7584/2ef8dcfb/aa0fef85451.jpg" alt="Welcome Gallery">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <a onclick="return nav.go(this);" href="/watch?kpid=258048">
                    <h3 class="h3-responsive">Побег</h3>
                    <p class="white-text">Смотреть</p>
                </a>
            </div>
        </div>

        <!-- item -->
        <div class="carousel-item h90vhn">
            <div class="view">
                <img class="d-block w-100" src="https://go.iny.su/uc/cc4ca42/v6f7584/c2bbb4f4/3b9172abb13.jpg" alt="Welcome Gallery">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <a onclick="return nav.go(this);" href="/watch?kpid=733493">
                    <h3 class="h3-responsive">Сотня</h3>
                    <p class="white-text">Смотреть</p>
                </a>
            </div>
        </div>

        <!-- item -->
        <div class="carousel-item h90vhn">
            <div class="view">
                <img class="d-block w-100" src="https://go.iny.su/uc/cc4ca42/v6f7584/922812e1/b03486c00eb.jpg" alt="Welcome Gallery">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <a onclick="return nav.go(this);" href="/watch?kpid=741231">
                    <h3 class="h3-responsive">Чёрный список</h3>
                    <p class="white-text">Смотреть</p>
                </a>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#gallery-intro" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#gallery-intro" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Wrapper View -->
<div class="container-fluid">
    <div id="mediaWrapper" class="row">
        <div class="col-12 text-center">
            <h1 class="theme-title my-5">Закрытая медиатека от INY.SU</h1>
        </div>
    </div>
</div>

<script>
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 128)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 8192)

films = <?= $mediaSerialsTop ?>

appMediaRender('mediaWrapper', films, {fill: 'default', type: false})
</script>