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
$jwt = $_GET['jwt'];
if (jwt_is_valid($jwt)) {
    $jwt = jwt_decode($jwt);
    $user_uid = $jwt['data']['uid'];
} else die('{"error":"404"}');

$query_select_ids = "SELECT kpid FROM media_subs WHERE uid = :uid and status = :status";
$var_select_ids = [
    ':uid' => $user_uid,
    ':status' => 'subscribe'
];
$select_ids = dbGetAll($query_select_ids, $var_select_ids);

$subsData = [];
if ($select_ids[0]) {
    $kpids = [];
    for($i = 0; $i < count($select_ids); $i++) {
        $kpids[] = $select_ids[$i]['kpid'];
    }
    $kpids = implode(',', $kpids);
    $query_select = "SELECT json FROM media_content WHERE kpid IN ($kpids) and kpid != :kpid";
    $var_select = [
        ':kpid' => 0
    ];
    $select = dbGetAll($query_select, $var_select);

    for($i = 0; $i < count($select); $i++) {
        $subsData[] = json_decode($select[$i]['json'], true);
    }
}
$bigData['subsData'] = $subsData;
//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>