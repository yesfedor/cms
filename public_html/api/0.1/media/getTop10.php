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
$query_top10 = "SELECT kpid FROM media_views WHERE kpid != :kpid GROUP BY kpid ORDER BY COUNT(*) DESC LIMIT 10";
$var_top10 = [
    ':kpid' => 0
];
$top10 = dbGetAll($query_top10, $var_top10);

if ($top10) {
    $top_kpid_list = [];
    for($i = 0; $i < count($top10); $i++) {
        $top_kpid_list[] = $top10[$i]['kpid'];
    }

    // top10 get all data
    $query_top10_data = "SELECT * FROM media_content WHERE kpid != :kpid and kpid IN (".implode(',', $top_kpid_list).")";
    $var_top10_data = [
        ':kpid' => 0
    ];
    $top10Data = dbGetAll($query_top10_data, $var_top10_data);
    $topData = [];
    for($i = 0; $i < count($top10Data); $i++) {
        $topData[$i] = json_decode($top10Data[$i]['json'], true);
    }
} else $topData = [];

$bigData['topData'] = $topData;
//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>