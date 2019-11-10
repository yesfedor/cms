<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bad Browser</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <link rel="stylesheet" href="/web/vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="/web/vendor/css/mdb.min.css">
        <link rel="stylesheet" href="/web/css/common.css">
    </head>
    <body>
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-sm-12 mt-md-5">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center mt-md-5">
                            <div class="card border-primary z-depth-1">
                                <div class="card-header primary-color lighten-5 text-left"><h4 class="my-0 py-0"><a class="white-text" href="https://iny.su/"><b>INY</b></a></h4></div>
                                <div class="card-body text-primary">
                                    <h5 class="card-title">Ваш браузер устарел</h5>
                                    <p class="card-text">
                                        Для работы с сайтом необходима поддержка JavaScript и Cookies. <br>
                                        Чтобы использовать все возможности сайта, загрузите и установите один из этих браузеров:<br>
                                    </p>
                                    <div class="row mt-2 mb-1">
                                        <hr class="w-100">
                                        <div class="col-12 col-md-6 col-lg-3 hoverable my-0 py-2">
                                            <a href="/url.php?hash=<?= md5(($_SESSION['user']['uid'] ? $_SESSION['user']['uid'] + $_SESSION['cahe']['random'] : $_SESSION['cahe']['random']))?>&to=https://opera.com/ru" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-opera fa-5x text-primary"></i><br>
                                                <span class="text-muted pt-2">Opera</span>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 hoverable my-0 py-2">
                                            <a href="/url.php?hash=<?= md5(($_SESSION['user']['uid'] ? $_SESSION['user']['uid'] + $_SESSION['cahe']['random'] : $_SESSION['cahe']['random']))?>&to=https://www.mozilla.org/ru/" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-firefox fa-5x text-primary"></i><br>
                                                <span class="text-muted pt-2">Firefox</span>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 hoverable my-0 py-2">
                                            <a href="/url.php?hash=<?= md5(($_SESSION['user']['uid'] ? $_SESSION['user']['uid'] + $_SESSION['cahe']['random'] : $_SESSION['cahe']['random']))?>&to=https://browser.yandex.ru/" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-yandex fa-5x text-primary"></i><br>
                                                <span class="text-muted pt-2">Яндекс</span>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 hoverable my-0 py-2">
                                            <a href="/url.php?hash=<?= md5(($_SESSION['user']['uid'] ? $_SESSION['user']['uid'] + $_SESSION['cahe']['random'] : $_SESSION['cahe']['random']))?>&to=https://www.google.com/chrome/" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-chrome fa-5x text-primary"></i><br>
                                                <span class="text-muted pt-2">Chrome</span>
                                            </a>
                                        </div>
                                        <hr class="w-100">
                                        <div class="col-12 mt-1 text-center"><a href="/" class="text-primary">Вернуться на главную</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>