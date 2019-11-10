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
function go_cc_create($url_full) {
    $query_last = "SELECT MAX(`id`) FROM `go_cc` WHERE id != :id";
    $var_last = [
        ':id' => 0
    ];
    $last = dbGetOne($query_last, $var_last)['MAX(`id`)'];
    $last++;

    $url_short = go_cc_hash($last);

    $query_add = "INSERT INTO `go_cc` (`id`, `url_short`, `url_to`, `click`) VALUES (NULL, :url_short, :url_to, '1')";
    $var_add = [
        ':url_short' => $url_short,
        ':url_to' => $url_full
    ];
    if (dbAddOne($query_add, $var_add)) return $url_short;
    else return false;
}

if ($_SESSION['user']['uid']) {
    $url_full = $_POST['url_full'];
    $bigData['url_full'] = $url_full;
    $bigData['url_short'] = ($url_full ? go_cc_create($url_full):false);
} else die('Auth Error');

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>