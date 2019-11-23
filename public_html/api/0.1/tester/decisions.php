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
    
    if ($_POST['tid']) {
        $tid = $_POST['tid'];
        $results = tester_test_decisions($tid);
        $html = '';
        for($i=0;$i<count($results);) {
            $uid = $results[$i]['uid'];
            $code = json_decode($results[$i]['code_json'], true);
            $date = $results[$i]['date'];
            $ansAll = $code['allAns'];
            $ansTrue = 0;
            $html .= '
            <div class="col-12 border-bottom text-center">
                <h4 class="text-primary my-2">Пользователь: '.url('https://iny.su/id'.$uid, tetser_get_author($uid), false).'</h4>
            
            ';
            $phtml = '';
            for($j=0;$j<count($code['dataAns']);) {
                if ($code['dataAns'][$j] == 'true') $ansTrue = $ansTrue + 1;
                $phtml .= '
                <h5 class="my-2">
                    '.($j+1).' вопрос - '.($code['dataAns'][$j] == 'true' ? 'Верно':'Неверно').'
                </h5>
                ';

                $j++;
            }
            $html .= '<h4>Верно '.$ansTrue.' из '.$ansAll.'</h4>'.$phtml.'</div>';
            $i++;
        }

    } else $bigData['status'] = 404;

    $bigData['html'] = $html;
} else $bigData['status'] = 403;

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>