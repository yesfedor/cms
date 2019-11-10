<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);
//code
if ($_GET['uid']) {
    $query = "SELECT uid, url, name, surname, gender, date_create FROM user WHERE uid = :uid";
    $var = [
        ':uid' => $_GET['uid']
    ];

    $data = dbGetOne($query, $var);
}
if ($_GET['domain']) {
    $query = "SELECT uid, url, name, surname, gender, date_create FROM user WHERE url = :url";
    $var = [
        ':url' => $_GET['domain']
    ];

    $data = dbGetOne($query, $var);
}

if (!$data['uid']) $data = ['error'=> '404'];
else $data['error'] = 200;

//return
header('Content-Type: application/json');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>