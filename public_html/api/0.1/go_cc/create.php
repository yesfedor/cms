<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

//config
$bigData = [];
$html_use = '0';
$html_id = '0';
$html_code = '0';
$js_use = '0';
$js_code = '0';

//code
function go_cc_hash($num) {
    return base_convert($num, 10, 36);
}
function go_cc_create($url_full, $lastImport = 1, $url_short = false) {
    global $_SESSION;

    $query_last = "SELECT MAX(`id`) FROM `go_cc` WHERE id != :id";
    $var_last = [
        ':id' => 0
    ];
    $last = dbGetOne($query_last, $var_last)['MAX(`id`)'];
    $last = $last + $lastImport;

    if (getUserAccessScore() >= 64) {
        if (!$url_short) $url_short = go_cc_hash($last);
    } else $url_short = go_cc_hash($last);

    // checking id and url_short
    $query_checking = "SELECT * FROM go_cc WHERE id = :last OR url_short = :url_short";
    $var_checking = [
        ':last' => $last,
        ':url_short' => $url_short,
    ];
    $checking_data = dbGetAll($query_checking, $var_checking);
    if (count($checking_data) != 0) go_cc_create($url_full, $lastImport + 1, $url_short);
    else {
        $query_add = "INSERT INTO `go_cc` (`id`, `url_short`, `url_to`, `click`) VALUES (NULL, :url_short, :url_to, '1')";
        $var_add = [
            ':url_short' => $url_short,
            ':url_to' => $url_full
        ];
        if (dbAddOne($query_add, $var_add)) return $url_short;
        else return 'Произошла ошибка';
    }
}

if ($_SESSION['user']['uid']) {
    $url_full = $_POST['url_full'];
    $url_short = $_POST['url_short'];
    $bigData['url_full'] = $url_full;
    $bigData['url_short'] = ($url_full ? go_cc_create($url_full, 1, $url_short):false);
} else die('Auth Error');

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>