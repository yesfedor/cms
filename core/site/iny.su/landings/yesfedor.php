<?php
$warp = 'app';

$pagesData = [
    '#main' => [
        'title' => 'Web Developer',
        'tdesc' => 'Фрилансер, выпускающий различные проекты для упрощенного выполнения интересных задач в сфере социальных сетей, и не только.'
    ],
    '#case' => [
        'title' => 'Portfolio',
        'tdesc' => 'Фрилансер, выпускающий различные проекты для упрощенного выполнения интересных задач в сфере социальных сетей, и не только.'
    ],
    '#contacts' => [
        'title' => 'Contacts',
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
<style>
html, body {
    background: white!important;
}
span {
    color: black!important;
}
</style>
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
                <!--<li class="nav-item">
                    <a class="nav-link text-uppercase" href="#case">Case</a>
                </li>-->
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
                        <span class="d-block white-text font-weight-light">Фёдор Гаранин (@yesfedor)</span>
                        <span class="d-block white-text font-weight-light my-3"><?= $pageData['tdesc'] ?></span><br>
                        <h1 id="imhere" class="display-3 white-text text-uppercase font-weight-bold"><?= $pageData['title'] ?></h1>
                        <button onclick="nav.go(nav.createLink('#contacts'));" class="btn btn-rounded btn-large btn-outline-white mt-4">Оставить заявку</button>
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
function returnToMainPage(el) {
    $(init.data.appDefaultEl).html(init.data.appDefaultContent)
    init.header()
    init.footer()
    return nav.go(el)
}
</script>
<?php
    include_once ($landingsInclude);
?>
<footer class="d-block page-footer font-small elegant-color-dark pt-2 text-center">
        <a onclick="return returnToMainPage(this);" href="/main" data-lang="text_return_to_main_page" class="d-block white-text my-0 pb-2"></a>
    <div class="container-fluid footer-copyright text-center py-3 white-text">
        Copyright © <?= date('Y') ?> INY. All rights reserved.
    </div>
</footer>
<script src="/web/js/landings/yesfedor.js?v=128"></script>
