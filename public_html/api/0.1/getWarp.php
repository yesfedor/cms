<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$moduleMode = true;
$bigData = [];

//over
    $url_pathname = $_POST['url_pathname'];
        $url_pathname = preg_replace('/(\/){2,}/', '$1', $url_pathname);
        if (iconv_substr($url_pathname, 0, 1) != '/') $url_pathname = '/'.$url_pathname;
        $url_pathname = explode('/', $url_pathname);
    $url_query = $_POST['url_query'];
        parse_str(parse_url($url_query, PHP_URL_QUERY), $url_query);
    $url_hash = $_POST['url_hash'];

    $_GET['page'] = $url_pathname[1];
    $_GET['parameterOne'] = $url_pathname[2];
    $_GET['parameterTwo'] = $url_pathname[3];
    $_GET['parameterThree'] = $url_pathname[4];
    $_GET['parameterFour'] = $url_pathname[5];
    $_GET['parameterFive'] = $url_pathname[6];

    $_GET = array_merge($url_query, $_GET);

//over

ob_start();
    include_once($engine_build);
    $pageData = ob_get_contents();
ob_end_clean();

$bigData['title'] = $title;
$bigData['redirect'] = ($redirect ? $redirect : false);
$bigData['header-app-theme-color'] = ($p['page']['theme-color'] ? $p['page']['theme-color'] : '#ffffff');
if (!$bigData['html']['warp-page-helper']) $bigData['html']['warp-page-helper'] = false;
if (!$bigData['warp-page-helper']) $bigData['warp-page-helper'] = false;
if ($warp) $bigData['html'][$warp] = $pageData;
else $bigData['html']['warp'] = $pageData;

if ($ui and ( ($p['page']['ui_view'] == 'all' or !$p['page']['ui_view']) or ($p['page']['ui_view'] == 'auth_true' and $_SESSION['user']['uid']) or ($p['page']['ui_view'] == 'auth_false' and !$_SESSION['user']['uid']) )) $bigData['ui_json'] = $p['page']['ui_json'];


//sleep(2);

echo json_encode($bigData, JSON_UNESCAPED_UNICODE);
?>