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
if ($_SESSION['user']['uid'] and getUserAccessScore() >= 256) {
    $langJsonPath = $public.'/api/0.1/lang/_json_/';

    $dir = scandir($langJsonPath);
    array_shift($dir);
    array_shift($dir);

    // Локаль: prefix языка -> idstr -> текст
    $devAllLocale = [];
    // Все prefix языка
    $devAllLocales = [];
    // Все idstr, без текста
    $devAllLocaleKeys  = [];

    foreach ($dir as $value) {
        $tmplocale = explode('.', $value)[0];
        $tmplocaletext = file_get_contents($langJsonPath.$value);
        $tmplocaledata = json_decode($tmplocaletext, true);

        
        ksort($tmplocaledata, SORT_NATURAL);
        $tmplocalekeys = array_keys($tmplocaledata);
        $devAllLocale[$tmplocale] = $tmplocaledata;
    }

}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>