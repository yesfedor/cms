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
function getDistinctHistoryByUid($uid, $offset=0, $limit=10) {
  $query = "SELECT DISTINCT kpid FROM media_views WHERE uid = :uid ORDER BY id DESC LIMIT $limit OFFSET $offset";
  $var = [
    ':uid' => $uid
  ];
  $histories = dbGetAll($query, $var);

  $historiesData = [];
  if ($histories[0]) {
    $kpids = [];
    for($i = 0; $i < count($histories); $i++) {
        $kpids[] = $histories[$i]['kpid'];
    }
    $kpids = implode(',', $kpids);

    $query_select = "SELECT json FROM media_content WHERE kpid IN ($kpids) and kpid != :kpid ORDER BY FIELD(kpid, $kpids)";
    $var_select = [
        ':kpid' => 0
    ];
    $select = dbGetAll($query_select, $var_select);

    for($i = 0; $i < count($select); $i++) {
      $historiesData[] = json_decode($select[$i]['json'], true);
    }
  }
  return $historiesData;
}

$offset = (int) $_GET['offset'];
if (!$offset) $offset = 0;
$limit = 1000;

$jwt = $_GET['jwt'];
if (jwt_is_valid($jwt)) {
    $jwt = jwt_decode($jwt);
    $user_uid = $jwt['data']['uid'];
} else die('{"error":"404"}');

$bigData['viewed'] = getDistinctHistoryByUid($user_uid, $offset, $limit);

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>