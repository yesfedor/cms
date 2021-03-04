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
if ($_GET['hash'] == $hash['logout']) {
    if ($_SESSION['user']['id_ns_check_last']) {
        $query_select = "SELECT * FROM user_ns_check WHERE id = :id and uid = :uid";
        $var_select = [
            ':id' => $_SESSION['user']['id_ns_check_last'],
            ':uid' => $_SESSION['user']['uid'],
        ];
        $user_ns_check = dbGetOne($query_select, $var_select);

        if ($user_ns_check['status'] == 'wait') {
            $query = "UPDATE user_ns_check SET status = :status WHERE id = :id and uid = :uid";
            $var = [
                ':id' => $_SESSION['user']['id_ns_check_last'],
                ':uid' => $_SESSION['user']['uid'],
                ':status' => 'disapprove'
            ];
            dbAddOne($query, $var);

            $query_update = "UPDATE user SET id_ns_check_last = :id_ns_check_last WHERE uid = :uid";
            $var_update = [
                ':id_ns_check_last' => NULL,
                ':uid' => $_SESSION['user']['uid'],
            ];
            dbAddOne($query_update, $var_update);
            $_SESSION['user']['id_ns_check_last'] = NULL;
        }

        if ($user_ns_check['status'] == 'approved') {
            $_SESSION['user']['ns_check'][$user_ns_check['id']]['approved'] = true;
        }
        if ($user_ns_check['status'] == 'disapprove') {
            $_SESSION['user']['ns_check'][$user_ns_check['id']]['disapprove'] = true;
        }

        $bigData['text'] = 'ok';
    }
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>