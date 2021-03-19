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

//code getDialogToView($dialog, $currentUserUid)
if (!$_SESSION['user']['uid']) die('{"error":"401"}');

$dialogs_generated = [];
$dialogs = getDialogsByUid($_SESSION['user']['uid']);
for ($i = 0; $i < count($dialogs); $i++) {
    $dialogs_generated[$i] = getDialogToView($dialogs[$i], $_SESSION['user']['uid']);
}

$bigData['dialogs'] = $dialogs_generated;
$bigData['count'] = count($bigData['dialogs']);
 
//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>