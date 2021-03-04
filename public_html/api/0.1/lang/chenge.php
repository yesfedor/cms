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
$language = $_GET['language'];
$_json_ = $public.'/api/0.1/lang/_json_/';

switch($language) {
    case 'ru':
        $langname = 'ru';
    break;
    case 'en':
        $langname = 'en';
    break;
    default: 
        $langname = 'en';
    break;
}

$_SESSION['lang'] = $langname;
$file = $_json_.$langname.'.json';
$bigData['locale'] = json_decode(file_get_contents($file), JSON_UNESCAPED_UNICODE);

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>