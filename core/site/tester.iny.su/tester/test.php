<?php
$warp = 'warp';
$test = $p['data'];
if (!$test['id']) die('404');
$test = getFullTest($test);

if ($test['opt']['showAnswers'] == 'true') $opt_text['showAnswers'] = 'Показ ответов разрешен';
    else $opt_text['showAnswers'] = 'Ответы не показываются';


if ($test['opt']['notifications'] == 'true') $opt_text['notifications'] = 'Уведомления включены';
    else $opt_text['notifications'] = 'Уведомления отключены';

if ($test['opt']['repeated'] == 'true') $opt_text['repeated'] = 'Повторное решение доступно';
    else {
        $opt_text['repeated'] = 'Повторное решение запрещено';
        $testOptRepeated = true;
    }

switch($test['opt']['overTime']) {
    case 0:
        $opt_text['overTime'] = 'Неограниченно';
    break;
}

// проерка на повторное решение
if ($testOptRepeated) {
    $query_testOptRepeated = "SELECT * FROM tester_answers WHERE uid = :uid and tests_id = :tests_id";
    $var_testOptRepeated = [
        ':uid' => $_SESSION['user']['uid'],
        ':tests_id' => $test['id']
    ];

    $data_testOptRepeated = dbGetAll($query_testOptRepeated, $var_testOptRepeated);
    if ($data_testOptRepeated[0]['uid'] == $_SESSION['user']['uid'] and $data_testOptRepeated[0]['tests_id'] == $test['id'] and $test['author_uid'] != $_SESSION['user']['uid']) {
        $test = ['error' => 'testOptRepeated'];
        $block_testOptRepeated = '<script>$("#tester-test-repeated-block").show();</script>';
    }
}

$testRoot = 'false';
$isHashUrl = 'false';
if ($test['author_uid'] == $_SESSION['user']['uid']) {
    $testRoot = 'true';
    if ($url_p1 == 'decisions') $isHashUrl = 'true';
}

?>
<div class="container my-3 px-3">
    <!-- tester-test-info -->
    <div id="tester-test-info" class="row white border border-primary rounded py-2 my-3">
        <div class="col-12 col-md-10 offset-md-1 text-center">
            <ul class="nav md-pills nav-justified pills-rounded pills-primary">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tester-test-info--base" role="tab">Основное</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tester-test-info--settings" role="tab">Настройки</a>
                </li>
                <li class="nav-item <?= ($testRoot == 'true' ? 'd-block' : 'd-none') ?>">
                    <a class="nav-link" data-toggle="tab" href="#tester-test-info--do" role="tab">Действия</a>
                </li>
            </ul>
            <div class="col-12 my-2 px-0"><hr class="w-100 border-primary my-3"></div>
            <div class="tab-content my-0 py-0">
                <div class="tab-pane fade in show active" id="tester-test-info--base" role="tabpanel">
                    <div class="row">
                        <div class="col-12 my-2 px-0 text-center">
                            <h3 class="black-text my-0 py-2">Название теста</h3>
                            <span class="h5 text-muted my-0 py-2"><?= $test['title'] ?></span>
                        </div>
                        <div class="col-12 my-2 px-0"><hr class="w-50 border my-3"></div>
                        <div class="col-12 text-center">
                            <h3 class="black-text my-0 py-2">Описание теста</h3>
                            <span class="h5 text-muted my-0 py-2"><?= ($test['description'] ? textLink($test['description']) : 'Описание отсутствует') ?></span>
                        </div>
                        <div class="col-12 my-2 px-0"><hr class="w-50 border my-3"></div>
                        <div class="col-12 text-center">
                            <h3 class="black-text my-0 py-2">Что нужно для решения</h3>
                            <span class="h5 text-muted my-0 py-2"><?= ($test['explanation'] ? textLink($test['explanation']) : 'Автор не указал необходимых материалов') ?></span>
                        </div>
                        <div class="col-12 mt-2 mb-0 px-0"><hr class="w-50 border-primary my-2"></div>
                        <div class="col-12 my-2 px-0 text-center">
                            <button onclick="test.showWrapper();" type="button" role="button" class="btn btn-rounded btn-outline-primary z-depth-0 waves-effect waves-light">Приступить к решению</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tester-test-info--settings" role="tabpanel">
                    <div class="row">
                        <div class="col-12 my-2 text-center">
                            <span class="h3 text-muted my-0 py-2">Настройки теста</span>
                            <h5 class="black-text my-0 py-2">
                                <span class="d-none text-black my-1">Время на выполнение теста: <?= $opt_text['overTime'] ?></span>
                                <span class="d-block text-black my-1"><?= $opt_text['repeated'] ?></span>
                                <span class="d-block text-black my-1"><?= $opt_text['showAnswers'] ?></span>
                                <span class="d-block text-black my-1"><?= $opt_text['notifications'] ?></span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tester-test-info--do" role="tabpanel">
                    <div class="row">
                        <div class="col-12 my-2 px-0 text-center">
                            <h5><a id="testRoot_toggle" onclick="testRoot.showDecisions(); return false;" class="theme-link" href="#">Показать решения теста</a></h5>
                            <h5><a id="testRoot_toggle" onclick="$('#tester-test-delete-confirm').modal('show'); return false;" class="theme-link" href="#">Удалить тест</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tester-test-wrapper -->
    <div id="tester-test-wrapper" class="row white border border-primary rounded py-2 my-3">
        <div id="q-tabs" class="col-12 text-center py-2"><h3 class="my-0">Всего вопросов: <?= count($test['question']) ?></h3></div>
        <div class="col-12 my-1 px-0"><hr class="w-100 border-primary my-2"></div>
        <div class="col-12 text-center py-2">
            <div id="q-question" class="row"></div>
        </div>
        <div class="col-12 my-1 px-0"><hr class="w-100 border-primary my-2"></div>
        <div id="q-board" class="col-12 text-center py-2">
            <div class="row">
                <div class="col text-center text-md-right"><button id="q-board_prev" onclick="test.board_prev();" class="btn btn-rounded waves-effect waves-light disabled">Предыдущий вопрос</button></div>
                <div class="col text-center text-md-left"><button id="q-board_next" onclick="test.board_next();" class="btn btn-rounded waves-effect waves-light disabled">Следующий вопрос</button></div>
            </div>
        </div>
    </div>

    <!-- tester-test-result -->
    <div id="tester-test-result" class="row white border border-primary rounded py-2 my-3">
        <div id="r-info" class="col-12 text-center py-2">Loading..</div>
    </div>

    <!-- tester-test-decisions -->
    <div id="tester-test-decisions" class="row white border border-primary rounded py-2 my-3">
        <div class="col-12 text-center">
            <div id="decisions-data" class="row"></div>
        </div>
    </div>

    <!-- tester-test-repeated-block -->
    <div id="tester-test-repeated-block" class="row white border border-primary rounded py-2 my-3">
        <div class="alert alert-danger" role="alert">
            Вы уже решили данный тест<br> Повторное решение недоступно
        </div>
    </div>
</div>
<script>
nav.onunload = () => {
    test = false
    testJson = false
    testRoot = false

    $('#app-js-tester-go').remove()
    init.data.js['tester-go'] = false
}

testJson = <?= json_encode($test, JSON_UNESCAPED_UNICODE + JSON_UNESCAPED_SLASHES) ?>;
testRootData = {
    isRoot: <?= $testRoot ?>,
    isHashUrl: <?= $isHashUrl ?>
}
init.js.add('tester-go', 'module/tester-go.js', 95)
</script>
<?= ($_GET['json'] ? debug($test) : false) ?>