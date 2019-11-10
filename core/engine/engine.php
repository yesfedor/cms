<?php
if ($_GET['site'] == 'test') {
    ini_set('error_reporting', E_ALL); 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}

$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$engineApi = $enginePath.'api.php';
$engineConfig = $enginePath.'config.php';
$engineDb = $enginePath.'db.php';
$engineDomain = $enginePath.'domain.php';
$engineRoute = $enginePath.'route.php';
$engineSession = $enginePath.'session.php'; 
$enginePageMeta = $enginePath.'page_meta.php';

include_once($engineConfig);
include_once($engineDb);
include_once($engineDomain);

session_name('client_id');
date_default_timezone_set('UTC');
session_set_cookie_params(864000, '/', '.'.$domainBase['main']);
session_start([
    'cookie_lifetime' => 864000,
]);

function debug($bug) {
    if ($bug === false) $bug = '<b>False</b>';
    echo '<h6><pre>';
    print_r($bug);
    echo '</pre></h6>';
}

function getUserAccessScore($access='') {
    global $_SESSION;

    if (!$access) $access = $_SESSION['user']['access'];
    if (!$access) $access = 'none';

    $rule = [
        'author' => 1024,
        'developer-verfy' => 512,
        'developer-pool' => 256,
        'co-author' => 128,
        'administrator' => 64,
        'tester-verfy' => 32,
        'tester-default' => 16,
        'moderator' => 8,
        'user-verfy' => 4,
        'user-default' => 2,
        'none' => 0,
    ];
    
    $score = $rule[$access];
    return $score;
}

include_once($engineSession);
include_once($engineApi);

$templatePath = $private.'/core/template/';
$sitePath = $private.'/core/site/';
$thisSitePath = $private.'/core/site/'.appGetDomain().'/';
$sitePrepareFile = $private.'/core/site/'.appGetDomain().'/global/prepare.php';
$objectPath = $private.'/core/object/';

$err403 = $thisSitePath.'global/error/403.php';
$err404 = $thisSitePath.'global/error/404.php';
$err403mod = $thisSitePath.'global/error/403mod.php';
$err404mod = $thisSitePath.'global/error/404mod.php';

if (!$fastMode) {
    include_once($engineRoute);
}
//JSON_UNESCAPED_UNICODE
?>