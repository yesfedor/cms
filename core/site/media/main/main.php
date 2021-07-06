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
                <img class="d-block w-100" src="'.$content['img_src'].'" loading="lazy" alt="Gallery Item">
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
    '1312668' => [
        'title' => 'Облака (2020)',
        'img_src' => 'https://go.iny.su/uc/cc4ca42/v6f7584/6533dc52/7ba28039fd9.jpg'
    ],
    '306084' => [
        'title' => 'Теория Большого Взрыва',
        'img_src' => 'https://go.iny.su/uc/cc4ca42/v6f7584/0349a97a/37e1c5d5743.jpg'
    ],
    '741231' => [
        'title' => 'Чёрный список',
        'img_src' => 'https://go.iny.su/uc/cc4ca42/v6f7584/7881d5e4/bd3b5d06e0d.jpg'
    ],
    '893621' => [
        'title' => 'Люцифер',
        'img_src' => 'https://go.iny.su/uc/cc4ca42/v6f7584/ac2f241b/31a5d9fd655.jpg'
    ],
    '1231016' => [
        'title' => 'Воспитанные волками',
        'img_src' => 'https://go.iny.su/uc/cc4ca42/v6f7584/061c60f5/0b387a36eb5.jpg'
    ],
    '716587' => [
        'title' => 'Острые козырьки',
        'img_src' => 'https://go.iny.su/uc/cc4ca42/v6f7584/51506a19/dc162113bd0.jpg'
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
<div class="container-fluid animated fadeIn">
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3 theme-panel rounded text-center my-3 py-5">
            <h1 class="h4 theme-title mb-1 px-1 px-lg-4 font-weight-lighter">
            Вы уже написали в гугле «сериал смотреть онлайн» и листаете большой перечень ресурсов, где между волнующего момента возлюбленного телесериала вам нежданно-негаданно предложат сделать ставку или узнать о волшебном средстве, 
            которое вылечит от всех болезней. Дальше лучше не листать, вы на 
            верном пути: на INY Media возможно законно смотреть знаменитые телесериалы онлайн, не 
            отрываясь на рекламу и прочую суету.
            </h1>
        </div>
    </div>
</div>
<div class="container-fluid animated fadeIn">
    <div id="mediaWrapper" class="row align-items-center justify-content-center"></div>
</div>

<script>
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 512)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 32768)
if (!fn.isMobile()) init.css.add('media-watch', 'media.watch.css', 32)

mediaMainList = <?= $mediaMainList ?>

appMediaRender('mediaWrapper', mediaMainList, {fill: 'default', type: false})
</script>