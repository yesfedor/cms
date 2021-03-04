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
function go_cc_info($url_short) {
    $query = "SELECT * FROM go_cc WHERE url_short = :url_short";
    $var = [
        ':url_short' => $url_short
    ];
    return dbGetOne($query, $var);
}

$url_short = ($_POST['url_short'] ? $_POST['url_short']:$_GET['url_short']);
$bigData['info'] = go_cc_info($url_short);

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>