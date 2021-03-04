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
$fnTester = $thisSitePath.'main/fn.php';
include_once($fnTester);

function tester_deleted($tid) {
    global $_SESSION;
    global $bigData;
    $uid = $_SESSION['user']['uid'];
    $test_check_uid = tester_test_get_id($tid);
    if ($test_check_uid['author_uid'] == $uid) {
        $d_tester_tests = "DELETE FROM `tester_tests` WHERE id = :id";
        $var = [
            ':id' => $tid
        ];
        dbAddOne($d_tester_tests, $var);

        $d_tester_question = "DELETE FROM `tester_question` WHERE tests_id = :id";
        dbAddOne($d_tester_question, $var);

        $d_tester_option = "DELETE FROM `tester_option` WHERE tests_id = :id";
        dbAddOne($d_tester_option, $var);

        $d_tester_answers = "DELETE FROM `tester_answers` WHERE tests_id = :id";
        dbAddOne($d_tester_answers, $var);

        $bigData['deleted'] = 'deleted';
    } else $bigData['deleted'] = 'Auth Error';
    
    // $bigData['deleted'] = 'deleted';
}

tester_deleted($_POST['tid']);
//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>