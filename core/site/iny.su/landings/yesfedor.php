<?php
$warp = 'app';

$pagesData = [
    '#main' => [
        'title' => 'i\'m .in',
        'tdesc' => 'Фрилансер, выпускающий различные проекты для упрощенного выполнения интересных задач в сфере социальных сетей, и не только.'
    ],
    '#case' => [
        'title' => 'portfolio',
        'tdesc' => 'Фрилансер, выпускающий различные проекты для упрощенного выполнения интересных задач в сфере социальных сетей, и не только.'
    ],
    '#contacts' => [
        'title' => 'contacts',
        'tdesc' => 'Фрилансер, выпускающий различные проекты для упрощенного выполнения интересных задач в сфере социальных сетей, и не только.'
    ]
];

$pageData = [];
switch($_POST['url_hash']) {
    default:
        $pageData = $pagesData['#main'];
        $landingsFileMenu = 'main';
    break;
    case '#case':
        $landingsFileMenu = 'case';
        $pageData = $pagesData['#case'];
    break;
    case '#contacts':
        $landingsFileMenu = 'contacts';
        $pageData = $pagesData['#contacts'];
    break;
}

$landingsInclude = $landingsPath.$landingsFile.'/'.$landingsFileMenu.'.php';

$videos = ['https://www.youtube.com/watch?v=VPIeQpIGNro', 'https://www.youtube.com/watch?v=t9emR6Fex4Y'];
$rand = rand(0, count($videos) - 1);
$video = $videos[$rand];
?>
<link rel="stylesheet" href="/web/css/landings/yesfedor.css?v=67">
<nav id="header" class="navbar fixed-top navbar-expand-xl navbar-dark scrolling-navbar z-depth-0 py-3">
    <div class="container">
        <a class="navbar-brand white-text" href="#"><strong>INY</strong></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#landingHeader" aria-controls="landingHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="landingHeader">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#case">Case</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#contacts">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid m-0 p-0 z-depth-2">
    <div class="jarallax papper" data-jarallax-video="<?= $video ?>">
        <div class="row papper papper-color m-0 p-0">
            <div class="d-flex justify-content-center align-self-end col-12 text-center mt-n5">
                <div class="row">
                    <div data-aos="fade-up" class="col-10 offset-1">
                        <small class="d-block white-text font-weight-light">Фёдор Гаранин (@yesfedor) - Фрилансер</small>
                        <span class="d-block white-text font-weight-light my-3"><?= $pageData['tdesc'] ?></span><br>
                        <h1 id="iamin" class="display-1 white-text text-uppercase font-weight-bold"><?= $pageData['title'] ?></h1>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-self-end col-12 text-center">
                <div class="row">
                    <div class="col-10 offset-1 my-3 animated fadeIn">
                        <a onclick="return nav.scroll(this);" href="#scroll"><i class="fas fa-arrow-down white-text fa-5x animated fadeInDown infinite slower"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
function iaminChange() {
    window.mainText = $('#iamin').html()
    window.bestText = '- Я В ДЕЛЕ'
    $('#iamin').html(window.bestText)
    setTimeout(() => {
        $('#iamin').html(window.mainText)
    }, 800);
}
function iamin() {
    setTimeout(() => {
        iaminChange()
    }, getRandomInt(800, 5000));
}
setInterval(()=>{
    iamin()
}, 5000)

iamin()
</script>
<?php
    include_once ($landingsInclude);
?>
<footer class="d-block page-footer font-small elegant-color-dark pt-4">
    <div class="container-fluid footer-copyright text-center py-3 white-text">
        Copyright © <?= date('Y') ?> INY. All rights reserved.
    </div>
</footer>
<script src="/web/js/landings/yesfedor.js?v=64"></script>
