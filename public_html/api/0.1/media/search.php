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
$bigData['code'] = 0;
$query = $_POST['query'];
if ($query and mb_strlen($query) > 2) {
    $ch = curl_init();
    $headers = array('accept: application/json', 'x-api-key: 91d00358-6586-40e6-9d4e-9d9070547812');

    curl_setopt($ch, CURLOPT_URL, 'https://kinopoiskapiunofficial.tech/api/v2.1/films/search-by-keyword?page=1&keyword='.urlencode($query)); # URL to post to
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); # return into a variable
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); # custom headers, see above
    $data = curl_exec($ch); # run!
    curl_close($ch);
    $content = json_decode($data, true);
    if ($content['searchFilmsCountResult'] > 0) {
        $bigData['code'] = 200;
        $bigData['content'] = $content['films'];
    } else $bigData['code'] = 404;
} else {
    $bigData['code'] = 404;
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>