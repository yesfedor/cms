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
$act = $_POST['act'];
$kpid = $_POST['kpid'];
if (($act == 'subscribe' or $act == 'unsubscribe') and $_SESSION['user']['uid'] and $kpid) {
    $query_select = "SELECT * FROM media_subs WHERE uid = :uid and kpid = :kpid";
    $var_select = [
        ':uid' => $_SESSION['user']['uid'],
        ':kpid' => $kpid
    ];
    $select = dbGetOne($query_select, $var_select);
    if ($select['id']) {
        //update
        $query = "UPDATE media_subs SET status = :status WHERE id = :id and uid = :uid and kpid = :kpid";
        $var_select = [
            ':uid' => $_SESSION['user']['uid'],
            ':kpid' => $kpid,
            ':status' => $act,
            ':id' => $select['id']
        ];
        dbAddOne($query, $var_select);
    } else {
        // insert
        $query = "INSERT INTO `media_subs`(`id`, `uid`, `kpid`, `status`) VALUES (NULL, :uid, :kpid, :status)";
        $var_select = [
            ':uid' => $_SESSION['user']['uid'],
            ':kpid' => $kpid,
            ':status' => $act
        ];
        dbAddOne($query, $var_select);
    }
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>