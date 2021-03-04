<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);
//code
$is_found = false;

if($_GET['user']) {
    $_GET['uid'] = $_GET['user'];
    $_GET['domain'] = $_GET['user'];
}
if ($_GET['uid'] and !$is_found) {
    $query = "SELECT uid, url, name, surname, gender, date_create FROM user WHERE uid = :uid";
    $var = [
        ':uid' => $_GET['uid']
    ];

    $data = dbGetOne($query, $var);
    if ($data['uid']) $is_found = true;
}
if ($_GET['domain'] and !$is_found) {
    $query = "SELECT uid, url, name, surname, gender, date_create FROM user WHERE url = :url";
    $var = [
        ':url' => $_GET['domain']
    ];

    $data = dbGetOne($query, $var);
    if ($data['uid']) $is_found = true;
}

if (!$data['uid']) $data = ['error'=> 404];
else $data['error'] = 200;

//return
header('Content-Type: application/json');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>