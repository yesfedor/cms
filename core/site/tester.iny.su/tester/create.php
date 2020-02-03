<?php
$warp = 'warp';
?>
<section id="tester-create-display-1" class="container my-5">
    <div class="row mb-3">
        <div class="col-12 text-center">
            <h2 class="text-primary my-0 py-2">Основная информация</h2>
        </div>
    </div>
    <div class="row white border border-primary rounded my-3 py-2 px-3">
        <div id="tester-create-display-1--base" class="col-12 text-center">
            <div class="row py-2">
                <div class="col-10 offset-1 md-form md-bg mt-0 mb-3">
                    <input type="text" id="tester-data--test-title" class="form-control">
                    <label for="tester-data--test-title" class="pl-4">Название теста</label>
                </div>
                <div class="col-10 offset-1 md-form mt-0 mb-3">
                    <textarea id="tester-data--test-description" class="md-textarea form-control" rows="4"></textarea>
                    <label for="tester-data--test-description" class="pl-4">Описание теста</label>
                </div>
                <div class="col-10 offset-1 md-form mt-0 mb-3">
                    <textarea id="tester-data--test-explanation" class="md-textarea form-control" rows="4"></textarea>
                    <label for="tester-data--test-explanation" class="pl-4">Что нужно для выполнения теста</label>
                </div>
                <?= tester_create_get_select_types() ?>
                <?= tester_create_get_select_poster() ?>

                <div class="col-12 text-center">
                    <button onclick="testerCreate.validate('1');" type="button" role="button" class="btn btn-outline-primary btn-rounded waves-effect">Продолжить</button>
                </div>
            </div>
        </div>
        <div id="tester-create-display-1--setting" class="col-12 text-center">
            <div class="row py-2">
                <select id="tester-data--test-opt-showAnswers" class="mdb-select md-form col-10 offset-1 colorful-select dropdown-primary">
                    <option value="true" disabled selected>Показывать ответы после решения?</option>
                    <option value="true">Показывать</option>
                    <option value="false">Скрывать</option>
                </select>
                <select id="tester-data--test-opt-notifications" class="mdb-select md-form col-10 offset-1 colorful-select dropdown-primary">
                    <option value="false" disabled selected>Получать уведомления о новых решениях?</option>
                    <option value="true">Получать</option>
                    <option value="false">Не получать</option>
                </select>
                <select id="tester-data--test-opt-repeated" class="mdb-select md-form col-10 offset-1 colorful-select dropdown-primary">
                    <option value="true" disabled selected>Доступно ли повторное решение?</option>
                    <option value="true">Разрешить</option>
                    <option value="false">Запретить</option>
                </select>
                <select id="tester-data--test-opt-overTime" class="d-none mdb-select md-form col-10 offset-1 colorful-select dropdown-primary">
                    <option value="0" disabled selected>Время на выполнение теста</option>
                    <option value="0">Без ограничений по времени</option>
                    <option value="300">5 минут</option>
                    <option value="900">15 минут</option>
                    <option value="1800">30 минут</option>
                    <option value="2700">45 минут</option>
                    <option value="3600">Час</option>
                </select>
                
                <div class="col-12 text-center">
                    <button onclick="testerCreate.displayManager('#tester-create-display-1', '#tester-create-display-1--base');" type="button" role="button" class="btn btn-outline-primary btn-rounded waves-effect">Назад</button>
                    <button onclick="testerCreate.validate('2');" type="button" role="button" class="btn btn-outline-primary btn-rounded waves-effect">Продолжить</button>
                </div>
            </div>
        </div>
        <div id="tester-create-display-1--preview" class="col-12 text-center">
            <div class="row py-2">
                <div class="col-12">
                    <div id="card-preview" class="row mb-2"></div>
                </div>
                <div class="col-12 text-center">
                    <button onclick="testerCreate.displayManager('#tester-create-display-1', '#tester-create-display-1--setting');" type="button" role="button" class="btn btn-outline-primary btn-rounded waves-effect">Назад</button>
                    <button onclick="testerCreate.validate('3');" type="button" role="button" class="btn btn-outline-primary btn-rounded waves-effect">Продолжить</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tester-create-display-2" class="container my-5">
    <div class="row mb-3">
        <div class="col-12 text-center">
            <h2 class="text-primary my-0 py-2">Добавьте вопросы</h2>
        </div>
    </div>
    <div class="row my-3 py-2 px-3">
        <div class="col-12 text-center">
           <div id="tester-create-display-2--questions" class="row my-2"></div>
        </div>
        <div class="col-12 text-center">
           <button onclick="$('#tester-create-modal--add-question').modal('show');" type="button" role="button" class="btn btn-outline-primary btn-rounded waves-effect">Добавить вопрос</button>
        </div>
        <div class="col-12 text-center">
           <div class="row py-2 mt-3">
                <div class="col-12 text-center">
                    <button onclick="testerCreate.displayManager('#tester-create-display-1', '#tester-create-display-1--preview');" type="button" role="button" class="btn btn-outline-primary btn-rounded waves-effect">Назад</button>
                    <button id="tester-create-save" onclick="testerCreate.validate('4');" type="button" role="button" class="btn btn-outline-success btn-rounded waves-effect">Опубликовать тест</button>
                </div>
           </div>
        </div>
    </div>
</section>

<section id="tester-create-display-3" class="container my-5">
    <div class="row mb-3">
        <div class="col-12 text-center">
            <h2 class="text-primary my-0 py-2">Завершение</h2>
        </div>
    </div>
    <div class="row my-3 py-2 px-3">
        <div class="col-12 text-center">
            <h4 id="tester-test-publish--callback" class="my-0 py-2">Callback</h4>
        </div>
        <div class="col-12 text-center">
            <button onclick="nav.go(nav.createLink('/review'));" type="button" role="button" class="btn btn-outline-primary btn-rounded waves-effect">На главную</button>
        </div>
    </div>
</section>

<script>
testerCreateData = {
    gradients: <?= json_encode(tester_poster_gradient(), JSON_UNESCAPED_UNICODE) ?>,
    testTypes: <?= json_encode(tester_get_types(), JSON_UNESCAPED_UNICODE) ?>
}

$(document).ready(function() {
    $('.mdb-select').materialSelect()
    init.js.remove('tester-create')
    init.js.add('tester-create', 'module/tester-create.js', 79)
});
</script>