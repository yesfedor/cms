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
    $bigData['status'] = 200;
    $search_result = tester_search_test($_POST['query']);
    $cards = '
    <div class="col-12 text-left mt-5">
        <h5 class="h6 text-primary">'.RusEnding($search_result['count'], 'Показан', 'Показано', 'Показано').' '.$search_result['count'].' '.RusEnding($search_result['count'], 'результат', 'результата', 'результатов').'</b></h5>
        <div class="row">'.$search_result['html'].'</div>
    </div>
    <script>
    $("[for=tester-test-search]").removeClass("active").addClass("active")
    </script>
    ';
    $bigData['cards'] = $cards;
} else {
    $bigData['status'] = 403;
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>