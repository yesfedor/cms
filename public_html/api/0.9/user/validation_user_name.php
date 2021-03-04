<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

if (getUserAccessScore() < 8) die('Access Error');

//config
$bigData = [];
$html_use = '0';
$html_id = '0';
$html_code = '0';
$js_use = '0';
$js_code = '0';

//code
function user_ns_check_load() {
    $output = [];
    $uids = [];

    $limit = 10;

    $query_select_ns = "SELECT * FROM user_ns_check WHERE status = :status ORDER BY id ASC LIMIT ".$limit;
    $var_select_ns = [
        ':status' => 'wait'
    ];
    $ns = dbGetAll($query_select_ns, $var_select_ns);

    for ($i=0;$i<count($ns);) {
        $n = $ns[$i]['uid'];
        $output[$n]['id'] = $ns[$i]['id'];
        $output[$n]['uid'] = $ns[$i]['uid'];
        $output[$n]['new_name'] = $ns[$i]['name'];
        $output[$n]['new_surname'] = $ns[$i]['surname'];
        $output[$n]['date'] = $ns[$i]['date'];

        $uids[] = $ns[$i]['uid'];

        $i++;
    }

    $query_user = "SELECT uid, name, surname, gender FROM user WHERE uid IN (".implode(',', $uids).") and block != :block";
    $var_user = [
        ':block' => 1
    ];
    $user = dbGetAll($query_user, $var_user);

    for ($i=0;$i<count($user);) {
        $n = $user[$i]['uid'];
        $output[$n]['name'] = $user[$i]['name'];
        $output[$n]['surname'] = $user[$i]['surname'];
        $output[$n]['gender'] = $user[$i]['gender'];

        $i++;
    }

    return $output;
}

function user_ns_check_act($act, $id, $uid) {
    $query_update_ns = "UPDATE user_ns_check SET status = :status WHERE id = :id and uid = :uid";
    $var_update_ns = [
        ':status' => $act,
        ':id' => $id,
        ':uid' => $uid,
    ];
    dbAddOne($query_update_ns, $var_update_ns);
    
    if ($act == 'approved') {
        $query_select_ns = "SELECT * FROM user_ns_check WHERE id = :id and uid = :uid";
        $var_select_ns = [
            ':id' => $id,
            ':uid' => $uid,
        ];
        $ns = dbGetOne($query_select_ns, $var_select_ns);

        $query_update_user = "UPDATE user SET name = :name, surname = :surname WHERE uid = :uid";
        $var_update_user = [
            ':name' => $ns['name'],
            ':surname' => $ns['surname'],
            ':uid' => $uid,
        ];
        dbAddOne($query_update_user, $var_update_user);
    }

    return 'ok';
}

$act = $_POST['act'];
switch($act) {
    case 'load':
        $bigData['user'] = user_ns_check_load();
    break;
    case 'approved':
        if ($_POST['id'] and $_POST['uid']) {
            $id = $_POST['id'];
            $uid = $_POST['uid'];

            $bigData['text'] = user_ns_check_act('approved', $id, $uid);
        }
    break;
    case 'disapprove':
        if ($_POST['id'] and $_POST['uid']) {
            $id = $_POST['id'];
            $uid = $_POST['uid'];

            $bigData['text'] = user_ns_check_act('disapprove', $id, $uid);
        }
    break;
    default:
        die('Data Error');
    break;
}

//return
$json_v1 = $public.'/api/0.9/json.v1.php';
include_once($json_v1);
?>