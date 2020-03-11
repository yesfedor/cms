<?php
$ui = true;
$warp = "warp-page";
?>
<!-- Welcome Preview -->
<div class="col-10 offset-1 text-center">
    <h3 class="h3 theme-title py-0 mt-0 mb-3">Закрытая медиатека от INY.SU</h3>
    <h5 class="theme-text py-0 mt-3 mb-0">Здесь вы найдете фильмы и сериалы на любой вкус и цвет в хорошем качестве</h5>
</div>

<!-- Scene -->
<div id="scene_box" class="col-10 offset-1 rounded text-center my-3" style="display:none;">
    <div class="row py-2">
        <div class="col-12 embed-responsive embed-responsive-16by9">
            <iframe id="scene_player" class="embed-responsive-item" src="/" allowfullscreen></iframe>
        </div>
        <div class="col-12 text-left">
            <h4 class="my-0 py-2"><span id="scene_type"></span> <span id="scene_title"></span>, <small id="scene_year"></small></h4>
        </div>
    </div>
</div>

<!-- KPID Search -->
<div class="col-10 offset-1 md-form my-3">
    <input type="text" id="kpid_search" class="form-control">
    <label for="kpid_search">Kinopoisk id</label>
</div>

<!-- Text Search -->
<div class="col-10 offset-1 md-form my-3">
    <input type="text" id="test_search" class="form-control">
    <label for="test_search">Search</label>
</div>

<!-- Text Search Result -->
<div id="testSearchResult" class="col-10 offset-1 border border-primary rounded text-center my-3" style="display:none;">
    <div class="row py-2">
        <div class="col-12 text-center py-2">
            <h4 class="theme-text py-0 mt-3 mb-0">Результаты поиска</h4>
            <h5>Cтраница: <span id="testSearchResultPage">0</span></h5>
            <hr class="w-100">
        </div>
        <div class="col-12 text-center py-2">
            <div id="testSearchResultBox" class="row"></div>
            <hr class="w-100">
            <a id="testSearchResult_prev" class="btn btn-outline-primary btn-rounded" onclick="return mediaIntro.search.prev();" href="#">Предыдущая страница</a>
            <a id="testSearchResult_next" class="btn btn-outline-primary btn-rounded" onclick="return mediaIntro.search.next();" href="#">Следующая страница</a>
        </div>
    </div>
</div>

<!-- NewBlockMovie -->
<div class="col-10 offset-1 border border-primary rounded text-center my-3">
    <div class="row py-2">
        <div class="col-12 text-center py-2">
            <h4 class="theme-text py-0 mt-3 mb-0">Новые фильмы</h4>
            <h5>Cтраница: <span id="mediaNewMoviePage">0</span></h5>
            <hr class="w-100">
        </div>
        <div class="col-12 text-center py-2">
            <div id="mediaNewMovie" class="row"></div>
            <hr class="w-100">
            <a id="mediaNewMovie_prev" class="btn btn-outline-primary btn-rounded" onclick="return mediaIntro.movie.prev();" href="#">Предыдущая страница</a>
            <a id="mediaNewMovie_next" class="btn btn-outline-primary btn-rounded" onclick="return mediaIntro.movie.next();" href="#">Следующая страница</a>
        </div>
    </div>
</div>

<!-- NewBlockSerial -->
<div class="col-10 offset-1 border border-primary rounded text-center my-3">
    <div class="row py-2">
        <div class="col-12 text-center py-2">
            <h4 class="theme-text py-0 mt-3 mb-0">Новые сериалы</h4>
            <h5>Cтраница: <span id="mediaNewSerialPage">0</span></h5>
            <hr class="w-100">
        </div>
        <div class="col-12 text-center py-2">
            <div id="mediaNewSerial" class="row"></div>
            <hr class="w-100">
            <a id="mediaNewMovie_prev" class="btn btn-outline-primary btn-rounded" onclick="return mediaIntro.serial.prev();" href="#">Предыдущая страница</a>
            <a id="mediaNewMovie_next" class="btn btn-outline-primary btn-rounded" onclick="return mediaIntro.serial.next();" href="#">Следующая страница</a>
        </div>
    </div>
</div>

<script>
init.js.add('wc-AppMediaCard', 'wc:AppMediaCard', 27)
setTimeout(() => {
    mediaIntro.init()
}, 500);
</script>