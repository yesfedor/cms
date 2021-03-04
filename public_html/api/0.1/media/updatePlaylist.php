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
function updatePlaylist($playlist) {
    global $bigData;
    global $public;

    switch($playlist) {
        default:
            $bigData['code'] = 'playlist 404';
            break;
        case 'mainList':

            break;
        case 'watchRecoms':

            break;
        case 'test':
            $fileName = 'test.json';
            $fileData = ['fileName' => 'test.json', 123 => 321];
            break;
    }

    $filePath = $public.'/api/0.1/media/'.$fileName;
    $fileData = json_encode($fileData, JSON_UNESCAPED_UNICODE);

    file_put_contents($filePath, $fileData);

    echo $filePath;
}

if ($_SESSION['user']['uid'] and $_GET['playlist']) {
    // updatePlaylist
    updatePlaylist($_GET['playlist']);

} else $bigData['code'] = 403;

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>