<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);
//code
if ($_GET['id'] and is_numeric($_GET['id'])) {
    if (userApiNoticeStatus($_GET['id'], 'delete')) {
        $data['error'] = 200;
    } else {
    $data['error'] = 404;
}
} else {
    $data['error'] = 404;
}

//return
header('Content-Type: application/json');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>