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
    else $opt_text['repeated'] = 'Повторное решение запрещено';

switch($test['opt']['overTime']) {
    case 0:
        $opt_text['overTime'] = 'Неограниченно';
    break;
}

if ($test['explanation']) $test_text_explanation = '<h5><span class="d-block text-muted">Что нужно для решения: </span>'.textLink($test['explanation']).'</h5>';
else $test_text_explanation = '';

$testRoot = 'false';
$isHashUrl = 'false';
if ($test['author_uid'] == $_SESSION['user']['uid']) {
    $testRoot = 'true';
    if ($url_p1 == 'decisions') $isHashUrl = 'true';
}

?>
<div class="container my-2 my-md-5 px-3 px-md-5">
    <div id="tester-test-info" class="row white border border-primary rounded py-2">
        <div class="col-12 text-center py-2">
            <h2 class="text-primary my-0"><small class="black-text">Название теста:</small> <?= $test['title'] ?></h2>
        </div>
        <div class="col-12 text-center py-2">
            <?= $test['description'] ? '<h3 class="h4 text-50-black my-0"><small class="black-text">Описание теста:</small> '.textLink($test['description']).'</h3>':'' ?> 
        </div>
        <div class="col-12 my-1 px-0"><hr class="w-100 border-primary mt-1 mb-3"></div>

        <!-- Info -->
        <div class="col-12 col-md-6 text-center">
            <h4 class="h4 text-primary">Инфо</h4>
            <h5>Автор: <a onclick="return nav.away(this);" href="https://iny.su/id<?= $test['author_uid'] ?>"><?= tetser_get_author($test['author_uid']) ?></a></h5>
            <?= ($testRoot == 'true' ? '<h5><a id="testRoot_toggle" onclick="testRoot.showDecisions(); return false;" href="#">Показать решения</a></h5>':'') ?>
            <?= $test_text_explanation ?>
        </div>
        <div class="col-12 col-md-6 text-center">
            <h4 class="h4 text-primary">Настройки теста</h3>
            <h5>
                <span class="d-block text-black my-1">Время на выполнение теста: <?= $opt_text['overTime'] ?></span>
                <span class="d-block text-black my-1"><?= $opt_text['repeated'] ?></span>
                <span class="d-block text-black my-1"><?= $opt_text['showAnswers'] ?></span>
                <span class="d-none text-black my-1"><?= $opt_text['notifications'] ?></span>
            </h5>
        </div>
        <div class="col-12 mt-3 text-center">
            <button onclick="test.showWrapper();" type="button" role="button" class="btn btn-rounded btn-outline-primary">Приступить к решению</button>
        </div>

    </div>
    <div id="tester-test-wrapper" class="row white border border-primary rounded py-2">
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
    <div id="tester-test-result" class="row white border border-primary rounded py-2">
        <div id="r-info" class="col-12 text-center py-2">loading..</div>
    </div>
    <div id="tester-test-decisions" class="row white border border-primary rounded py-2 my-3">
        <div class="col-12 text-center py-2">
            <div class="col-12"><div id="decisions-data" class="row"></div></div>
        </div>
    </div>
</div>

<script>
let testJson = <?= json_encode($test, JSON_UNESCAPED_UNICODE + JSON_UNESCAPED_SLASHES) ?>

init.js.remove('tester-go')
init.js.add('tester-go', 'module/tester-go.js', 81)
$('#r-info').html(mainTpl.nav.tplLoaderModule)
$('#decisions-data').html(mainTpl.nav.tplLoaderModule)

let testRoot = {
    isRoot: <?= $testRoot ?>,
    isHashUrl: <?= $isHashUrl ?>,
    init () {
        if (this.isHashUrl == true) {
            this.showDecisions()
            $('#decisions-data').html(mainTpl.nav.tplLoaderModule)
        }
        else this.hideDecisions()
    },
    showDecisions() {
        $('#testRoot_toggle').attr('onclick', 'testRoot.hideDecisions(); return false;')
        $('#testRoot_toggle').html('Скрыть решение')

        $('#tester-test-decisions').show()
        this.reloadDecisions()
    },
    hideDecisions() {
        $('#testRoot_toggle').attr('onclick', 'testRoot.showDecisions(); return false;')
        $('#testRoot_toggle').html('Показать решения')

        $('#tester-test-decisions').hide()
    },
    reloadDecisions() {
        $.ajax({
            type: "POST",
            url: "/api.php?_action=tester/decisions&v=0.1",
            data: {tid: testJson.id},
            dataType: "json",
            success: function (data) {
                setTimeout(() => {
                    if (data.status == '403') $('#decisions-data').html('<div class="col-10 offset-1"><b class="h4 black-text">Решений пока нет</b></div>')
                    else testRoot.renderDecisions(data.decisions)
                }, 1000);
            },
            error: () => {
                toastr.info('Ошибка при загрузке решений, повторите запрос позже')
            }
        })
    },
    renderDecisions(decisions) {
        let el = '#decisions-data'
        let output = ``
        output += `<div class="col-10 offset-1 mb-3"><h3 class="black-text">Всего решений: ` + decisions.count + `<b></b></h3></div>`
        for(let i= 0; i < decisions.count;) {
            output = output + testRoot.renderCard(decisions.answers[i])
            i++
        }
        $(el).html(output)
    },
    renderCard(data) {
        // data.code data.user
        let box = `
        <div class="col-12 border rounded py-3 mb-3 text-center">
            <h4 class="mb-2"><b class="black-text"><a class="theme-link" onclick="return nav.away(this);" href="https://iny.su/id` + data.uid + `">` + data.user + `</a></b> <small class="black-text">(` + data.date + `)</small></h4>
            <div class="row">
                ` + testRoot.renderTable(data.code) + `
            </div>
        </div>
        `

        return box
    },
    renderTable(data) {
        let card_title = ``
        let card_tpl = ``
        let qCountAll = testJson.question.length
        let qTrueCount = 0
        let qFalseCount = 0
        for(let i = 0; i < qCountAll;) {
            if (typeof data.dataAns[i] != 'undefined') {
                if (data.dataAns[i] == 'true') {
                    card_tpl += '#' + (i + 1) + ' - Верно'
                    qTrueCount++
                } else {
                    card_tpl += '#' + (i + 1) + ' - Неверно'
                }
            }
            i++
        }

        qFalseCount = qCountAll - qTrueCount
        card_title = `<div class="col-12 text-center"><h5 class="black-text">Решено правильно <b>` + qTrueCount + `</b> из <b>` + qCountAll + `</b></h5></div>`

        return card_title
    }
}
testRoot.init()
</script>
<?= ($_GET['json'] ? debug($test) : false) ?>