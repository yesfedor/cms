<?php
function appDate() {
    $date = date( "d/m/y" );
    return $date;
}

$addons = [
    '1.0' => $private.'/core/addons/1.0/',
];

$module = [
    '1.0' => $private.'/core/module/1.0/',
];

$module_getIP = $module['1.0'].'getIP.php';
$module_getCountry = $module['1.0'].'getCountry.php';
$module_dateParse = $module['1.0'].'date.parse.php';
$module_textParse = $module['1.0'].'text.parse.php';
$module_getUserAgent = $module['1.0'].'getUserAgent.php';
$module_openGraph = $module['1.0'].'openGraph.php';
$module_userApi = $module['1.0'].'userApi.php';
$module_awayUrl = $module['1.0'].'awayUrl.php';
$module_mail_utf8 = $module['1.0'].'mail_utf8.php';
$module_blockAccount = $module['1.0'].'blockAccount.php';
$module_uc = $module['1.0'].'uc.php';

include_once($module_getIP);
include_once($module_getCountry);
include_once($module_dateParse);
include_once($module_textParse);
include_once($module_getUserAgent);
include_once($module_openGraph);
include_once($module_userApi);
include_once($module_awayUrl);
include_once($module_mail_utf8);
include_once($module_blockAccount);
include_once($module_uc);
?>