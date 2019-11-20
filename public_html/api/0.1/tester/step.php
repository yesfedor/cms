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

if ($_SESSION['user']['uid']) {
    $ans = $_POST['ans'];
    $tid = $_POST['tid'];
    if ($ans and $tid) {
        $testApi = tester_test_get_id($tid);
        if ($testApi['id']) {
            $question = $testApi['question'];
            $ansOrder = [];
            for($i=0;$i<count($ans);) {
                $ask = $ans[$i];
                $tmp_id = $ask['id'];
                $tmp_answer = $ask['answer'];
                $ansOrder[$tmp_id] = $tmp_answer;

                $i++;
            }

            $dataAns = [];
            $allAns = count($question);
            for($i=0;$i<$allAns;) {
                $questionType = $question[$i]['type'];
                $testAns = $question[$i]['answer'];
                $userAns = $ansOrder[$i];
                switch($questionType) {
                    case 'text':
                        if (mb_strtolower($testAns) == mb_strtolower($userAns)) $dataAns[$i] = 'true';
                        else $dataAns[$i] = 'false';
                    break;
                    case 'option':
                        if (mb_strtolower($testAns) == mb_strtolower($userAns)) $dataAns[$i] = 'true';
                        else $dataAns[$i] = 'false';
                    break;
                    case 'multioption':

                        if ($testAns == implode(' ', $userAns)) $dataAns[$i] = 'true';
                        else $dataAns[$i] = 'false';
                    break;
                }

                $i++;
            }

            $code_json['allAns'] = $allAns;
            $code_json['dataAns'] = $dataAns;
            /* Save DB */
            // INSERT INTO `tester_answers` (`id`, `tests_id`, `code_json`, `uid`, `date`, `time`) VALUES (NULL, '', '', '', '', '')
            $saveResultQuery = "INSERT INTO `tester_answers` (`id`, `tests_id`, `code_json`, `uid`, `date`, `time`) VALUES (NULL, :tests_id, :code_json, :uid, :date, :time)";
            $saveResultVar = [
                ':tests_id' => $tid,
                ':code_json' => json_encode($code_json),
                ':uid' => $_SESSION['user']['uid'],
                ':date' => appDate(),
                ':time' => '0'
            ];
            dbAddOne($saveResultQuery, $saveResultVar);

            $bigData['allAns'] = $allAns;
            $bigData['dataAns'] = $dataAns;
            $bigData['status'] = 200;
        } else {
            $bigData['status'] = 404;
        }
    } else {
        $bigData['status'] = 400;
    }
    
} else {
    $bigData['status'] = 403;
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>