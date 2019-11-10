<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

//config
$notice = userApiNoticeCount();

$bigData = [
    'auth' => ($_SESSION['user']['uid'] ? true:false),
    'notice' => ($notice ? $notice : false),
    'msg' => false
];

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>