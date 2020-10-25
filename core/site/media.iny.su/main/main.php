<?php
function galleryIntroRender($data) {
    $active_class = '';
    $slides_score = 0;
    $indicators = '';
    $slides = '';
    $result;
    foreach($data as $kpid => $content) {
        if ($slides_score == 0) $active_class = 'active';
        else $active_class = '';

        $indicators .= '<li data-target="#gallery-intro" data-slide-to="'.$slides_score.'" class="'.$active_class.'"></li>';
        $slides .= '
        <div class="carousel-item h87vhn '.$active_class.'">
            <div class="view">
                <img class="d-block w-100" src="'.$content['img_src'].'" alt="Gallery Item">
                <div class="mask carousel-mask"></div>
            </div>
            <div class="carousel-caption">
                <a onclick="return nav.go(this);" href="/watch?kpid='.$kpid.'">
                    <h3 class="h3-responsive">'.$content['title'].'</h3>
                    <p class="white-text">Смотреть</p>
                </a>
            </div>
        </div>
        ';

        $slides_score++;
    }
    $result['indicators'] = $indicators;
    $result['slides'] = $slides;
    return $result;
}

$ui = false;
$warp = "warp";

$mediaMainList = file_get_contents('https://media.iny.su/api/0.1/media/mediaMainList.json');

$galleryIntroData = [
    '1231016' => [
        'title' => 'Воспитанные волками',
        'img_src' => 'https://go.iny.su/uc/cc4ca42/v6f7584/061c60f5/0b387a36eb5.jpg'
    ],
    '673871' => [
        'title' => 'Защищая Джейкоба',
        'img_src' => 'https://go.iny.su/uc/cc4ca42/v6f7584/ade51ff9/9b63f12b8f5.jpg'
    ],
    '1254433' => [
        'title' => 'Я никогда не…',
        'img_src' => 'https://go.iny.su/uc/cc4ca42/v6f7584/932f3e9e/d791a6b60f0.jpg'
    ]
];

$galleryIntroContent = galleryIntroRender($galleryIntroData);
?>
<style>
    .h87vhn {
        max-height: 87vh;
    }
    .carousel-mask {
        background-color: rgb(24, 24, 24, 0.6) !important;
    }
</style>
<div id="gallery-intro" class="carousel slide carousel-fade z-depth-0 animated fadeIn" data-ride="carousel">
    <ol class="carousel-indicators"><?= $galleryIntroContent['indicators'] ?></ol>
    <div class="carousel-inner" role="listbox"><?= $galleryIntroContent['slides'] ?></div>
    <a class="carousel-control-prev" href="#gallery-intro" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Назад</span>
    </a>
    <a class="carousel-control-next" href="#gallery-intro" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Вперед</span>
    </a>
</div>
<div class="container animated fadeIn">
    <div class="row">
        <div class="col-12 theme-panel rounded text-center my-3 py-5">
            <h1 class="theme-title mb-1">INY Media -  <small>Полная коллекция впечатлений, эмоций и ощущений</small></h1>
        </div>
    </div>
</div>
<div class="container-fluid animated fadeIn">
    <div id="mediaWrapper" class="row align-items-center justify-content-center"></div>
</div>

<script>
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 512)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 16384)

mediaMainList = <?= $mediaMainList ?>

appMediaRender('mediaWrapper', mediaMainList, {fill: 'default', type: false})
</script>