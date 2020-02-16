<?php
$warp = 'app';

$dataGalleryVideo = [
    0 => [
        'type' => 'video',
        'link' => 'BzWNG-BFk4U',
        'text' => 'Example of work #1',
        'imgurl' => 'https://iny.su/web/file/videos/main/landings/vel0ur/exvid1.mp4'
    ]
];
$dataGalleryPhoto = [
    0 => [
        'type' => 'photo',
        'link' => 'B8UmEoDhAu4',
        'text' => 'It\'s me',
        'imgurl' => 'https://iny.su/web/file/images/main/landings/vel0ur/vel0ur.jpg'
    ],
    1 => [
        'type' => 'photo',
        'link' => 'B30AOS2hak5',
        'text' => 'Example of work #1',
        'imgurl' => 'https://iny.su/web/file/images/main/landings/vel0ur/ex1.jpg'
    ],
    2 => [
        'type' => 'photo',
        'link' => 'BzLwTWvIlAp',
        'text' => 'Example of work #2',
        'imgurl' => 'https://iny.su/web/file/images/main/landings/vel0ur/ex2.jpg'
    ],
    3 => [
        'type' => 'photo',
        'link' => 'B37eA5VBndg',
        'text' => 'Example of work #3',
        'imgurl' => 'https://iny.su/web/file/images/main/landings/vel0ur/ex3.jpg'
    ],
    4 => [
        'type' => 'photo',
        'link' => 'BzLwTWvIlAp',
        'text' => 'Example of work #4',
        'imgurl' => 'https://iny.su/web/file/images/main/landings/vel0ur/ex4.jpg'
    ]
];
function getGallery($dataGallery, $id) {
    $indicators = '';
    for($i=0;$i<count($dataGallery);) {
        $indicators .= '<li data-target="#'.$id.'" data-slide-to="'.$i.'" class="'.($i < 1 ? 'active':'').'"></li>';
        $i++;
    }

    $items = '';
    for($i=0;$i<count($dataGallery);) {
        if ($dataGallery[$i]['type'] == 'photo') $itemsContent = '<img class="w-100 d-block" src="'.$dataGallery[$i]['imgurl'].'">';
        if ($dataGallery[$i]['type'] == 'video')  $itemsContent =  '<video class="video-fluid" autoplay loop muted><source src="'.$dataGallery[$i]['imgurl'].'" type="video/mp4" /></video>';

        $items .= '
        <div class="carousel-item '.($i < 1 ? 'active':'').'">
            <a onclick="return nav.away(this);" href="https://www.instagram.com/p/'.$dataGallery[$i]['link'].'/">
            <div class="view">
                '.$itemsContent.'
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <div class="animated fadeInDown">
                    <h3 class="h3-responsive white-text">'.$dataGallery[$i]['text'].'</h3>
                </div>
            </div>
            </a>
        </div>
        ';
        $i++;
    }

    $html = '
    <div id="'.$id.'" class="carousel slide carousel-fade col-10 offset-1 col-lg-8 offset-lg-2 my-2 px-0 z-depth-1-half" data-ride="carousel">
        <ol class="carousel-indicators">'.$indicators.'</ol>
        <div class="carousel-inner">'.$items.'</div>
    </div>
    ';
    
    return $html;
}
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
        <a href="#" class="navbar-brand waves-effect waves-light"><b class="white-text">Anastasia Liegostaieva</b></a>
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
                    <h4 class="h4-responsive white-text my-0 px-2">
                        Anastasia Liegostaieva-Photographer from Lutsk, Ukraine.<br />
                        Write to any social networks for more information
                    </h4>
                    <h3 class="textPulseLogo mt-5 mb-3 px-2">Photo Collection - Example of work</h3>
                    <div class="row">
                        <?= getGallery($dataGalleryPhoto, 'WorkPhoto') ?>
                    </div>
                    <h3 class="textPulseLogo mt-5 mb-3 px-2">Video Collection</h3>
                    <div class="row">
                        <?= getGallery($dataGalleryVideo, 'WorkVideo') ?>
                    </div>
                    <h3 class="textPulseLogo mt-5 mb-3 px-2">Contact Me (Click!!!)</h3>
                    <h5 class="d-block">
                        <a onclick="return nav.away(this);" href="https://www.instagram.com/velour_ph" class="btn btn-outline-white btn-rounded white-text z-depth-0">Instagram</a>
                        <a onclick="return nav.away(this);" href="tg://resolve?domain=vel0ur" class="btn btn-outline-white btn-rounded white-text z-depth-0">Telegram</a>
                        <a onclick="return nav.away(this);" href="https://vk.com/id316405174" class="btn btn-outline-white btn-rounded white-text z-depth-0">VK</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/web/js/landings/vel0ur.js?v=2"></script>