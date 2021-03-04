<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

function urlError($type, $host=false) {
    $html = '
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {%title%} </title>
        <link rel="stylesheet" href="/web/vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="/web/vendor/css/mdb.min.css">
        <link rel="stylesheet" href="/web/css/common.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-sm-12 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center mt-5">
                            <div class="card border-success z-depth-1">
                                <div class="card-header green lighten-5"><b class="green-text">Внимание</b></div>
                                <div class="card-body text-center text-success">
                                    <h5 class="card-title"> {%title%} </h5>
                                    <p class="card-text"> {%desc%} </p>
                                    <a href="/" rel="noopener noreferrer">Вернуться на главную</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>    
    ';
    $data = [
        'title' => '',
        'desc' => ''
    ];

    switch($type) {
        case 'virus':
            $data['title'] = 'На <b>'.$host.'</b> обнаружены вирусы!';
            $data['desc'] = 'На <b>'.$host.'</b> обнаружены вирусы. Мы на страже Вашей безопасности!';
        break;
        case 'scammer':
            $data['title'] = 'Сайт мошенников!';
            $data['desc'] = 'Ссылка вела на мошеннический сайт. Мы на страже Вашей безопасности!';
        break;
        case 'law':
            $data['title'] = 'Данный ресурс был заблокирован по решению суда.';
            $data['desc'] = ' <b>'.$host.'</b> был заблокирован по решению суда.';
        break;
        case 'hash':
            $data['title'] = 'Чужой URL!';
            $data['desc'] = '<meta http-equiv="refresh" content="5; url=/">Вы пытаетесь перейти по ссылке которая не может быть верифицирована <span class="red-text>":(</span>';
        break;
    }

    $html = textParse($data, $html);

    return $html;
}

if (($_GET['to'] or $_POST['to']) and $_GET['hash']) {
    $hash = $_GET['hash'];
    $hash_true = md5(($_SESSION['user']['uid'] ? $_SESSION['user']['uid'] + $_SESSION['cahe']['random'] : $_SESSION['cahe']['random']));
    if ($hash != $hash_true) {
        $p = urlError('hash', false);
        echo $p;
        exit;
    }

    if ($_GET['to']) $url = $_GET['to'];
    else $url = $_POST['to'];

    $url = urldecode($url);

    if (filter_var($url, FILTER_VALIDATE_URL)) {
        $url_arr = parse_url($url);
        $query = "SELECT * FROM away WHERE domain = :domain; UPDATE away SET `click` = `click` + 1 WHERE domain = :domain";
        $var = [
            ':domain' => $url_arr['host']
        ];
        $data = dbGetOne($query, $var);
        if ($data['id']) {
            switch($data['code']) {
                case 'open':
                    header("Location: $url");
                break;
                case 'virus':
                    $p = urlError('virus', $url_arr['host']);
                break;
                case 'scammer':
                    $p = urlError('scammer', $url_arr['host']);
                break;
                case 'law':
                    $p = urlError('law', $url_arr['host']);
                break;
            }
        } else {
            $query_add = "INSERT INTO `away` (`id`, `domain`, `code`, `click`) VALUES (NULL, :domain, 'open', '1')";
            $var_add = [
                ':domain' => $url_arr['host']
            ];
            dbAddOne($query_add, $var_add);

            header("Location: $url");
        }
    } else die('<meta http-equiv="refresh" content="0; URL=/app.php?page=main">');

} else die('<meta http-equiv="refresh" content="0; URL=/app.php?page=main">');
?>
<?= ($p ? $p : '') ?>