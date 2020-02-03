testerCreate = {
    data: {
        TEST: {
            title: '',
            description: '',
        	explanation: '',
            type: 0,
            opt: {
                showAnswers: 'true',
                notifications: 'false',
                repeated: 'true',
                overTime: 0
            },
            poster: 0,
            question: []
        },
        addOptionCount: 0,
        previewCount: 0,
        gradients: testerCreateData.gradients,
        testTypes: testerCreateData.testTypes,
        questionCount: 0,
        modalAddQuestion: {
            id: 'tester-create-modal--add-question',
            html: {
                title: 'Добавить вопрос к тесту',
                content: `
<div class="row my-3 px-3">
    <div id="tester-create-modal--add-question__select-type" class="col-12 text-center">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="black-text">Выберите тип вопроса</h4>
            </div>
            <div class="col-12 text-center">
                <button type="button" role="button" onclick="testerCreate.addQuestion('text');" class="btn btn-link btn-rounded waves-effect">Вопрос с кратким ответом в виде текста</button>
            </div>
            <div class="col-12 text-center">
                <button type="button" role="button" onclick="testerCreate.addQuestion('option');" class="btn btn-link btn-rounded waves-effect">Вопрос с выбором варианта ответа</button>
            </div>
            <div class="col-12 text-center">
                <button type="button" role="button" onclick="testerCreate.addQuestion('multioption');" class="btn btn-link btn-rounded waves-effect">Вопрос с выбором нескольких вариантов ответов</button>
            </div>
        </div>
    </div>
    <div class="col-12 text-center">
        <div id="tester-create-modal--add-question__warp-question" class="row"></div>
    </div>
</div>
                `,
                footer: `
<div class="col-12 text-center">
    <div class="row py-2">
        <div class="col my-0 py-0 text-center">
            <button onclick="testerCreate.addQuestionCancel();" type="button" role="button" id="tester-create-modal--add-question__action-cancel" class="btn btn-outline-danger btn-rounded waves-effect">Отменить</button>
        </div>
        <div class="col my-0 py-0 text-center">
            <button onclick="testerCreate.addQuestionAdd();" type="button" role="button" id="tester-create-modal--add-question__action-add" class="btn btn-outline-success btn-rounded waves-effect">Добавить</button>
        </div>
    </div>
</div>
                `
            },
            size: 'lg',
            bg: 'var(--bg-color)'
        }
    },
    displayManagerData: {
        section: '',
        block: ''
    },
    displayManager(section='#tester-create-display-1', block='#tester-create-display-1--base') {
        sections = ['#tester-create-display-1', '#tester-create-display-2', '#tester-create-display-3']
        blocks = {
            0: ['#tester-create-display-1--base', '#tester-create-display-1--setting', '#tester-create-display-1--preview']
        }

        sections.forEach((value, index)=>{
            if (section == value) {
                this.displayManagerData.section = section
                $(value).show(500)
                if (typeof blocks[index] != "undefined") {
                    blocks[index].forEach((value)=>{
                        if (value == block) {
                            this.displayManagerData.block = block
                            $(value).show(500)
                        } else {
                            $(value).hide()   
                        }
                    })
                }
            } else {
                $(value).hide()
            }
        })
    },
    errorManager(id) {
        type = 'info'
        switch(id) {
            case 1:
                type = 'warning'
                msg = 'Введите название теста'
            break;
            default:
                type = 'info'
                msg = 'Неизвестная ошибка. Код ошибки: ' + id
            break;
        }

        if (type == 'info') toastr.info(msg)
        if (type == 'success') toastr.success(msg)
        if (type == 'error') toastr.error(msg)
        if (type == 'warning') toastr.warning(msg)
        if (type == 'info' || type == 'success' || type == 'error' || type == 'warning') console.log(msg)
    },
    addQuestionCancel() {
        this.data.addOptionCount = 0;
        $('#tester-create-modal--add-question').modal('hide');
        $('#tester-create-modal--add-question__select-type').show()
        $('#tester-create-modal--add-question__warp-question').hide().html('')
        $('#tester-create-modal--add-question__action-add').show()
    },
    addQuestionAdd() {
        add_question = {
            title: '',
            description: '',
            explanation: '',
            answer: '',
            type: '',
            option: []
        }

        add_question.title = $('#addQuestion-title').val()
        add_question.description = $('#addQuestion-description').val()
        add_question.explanation = $('#addQuestion-explanation').val()
        add_question.answer = $('#addQuestion-addOption--answer').val()
        add_question.type = $('#addQuestion-addOption--type').val()

        switch(add_question.type) {
            case 'text':
                add_option = {
                    text: $('#addQuestion-addOption--text').val()
                }
                add_question.option.push(add_option)
            break;
            case 'option':
            case 'multioption':
                $('[data-add-option]').each((el, val) => {
                    value = $(val).val()
                    add_option = {
                        text: value
                    }
                    add_question.option.push(add_option)
                })
            break;            
        }

        // добавить вопрос Wrapper
        this.addQuestionWrapper(add_question)

        //кнопка для сохранения теста
        $('#tester-create-save').fadeIn(800)

        this.data.TEST.question.push(add_question)
        this.addQuestionCancel()
    },
    addQuestionWrapper(data) {
        block = '#tester-create-display-2--questions'
        this.data.previewCount++
        question_id = 'addQuestionWrapper-q' + this.data.previewCount

        render = ``
        switch(data.type) {
            case 'text':
                option = data.option
                preRender = `
                <div class="col-10 offset-1 md-form md-bg mt-0 mb-3">
                    <input type="text" id="` + question_id + `" name="` + question_id + `" class="form-control">
                    <label for="` + question_id + `" class="pl-4">` + option[0].text + `</label>
                </div>
                `
            break;
            case 'option':
                preRender = ``
                option = data.option.forEach((value, i)=>{
                    id_option = question_id + '-id' + i
                    preRender = preRender + `
                        <div class="w-100 px-3 px-lg-5 mt-0 mb-2 form-check">
                            <input type="radio" class="form-check-input" id="` + id_option + `" name="` + question_id + `">
                            <label class="form-check-label px-5" for="` + id_option + `">` + value.text + `</label>
                        </div> 
                    `
                })
            break;
            case 'multioption':
                preRender = ``
                option = data.option.forEach((value, i)=>{
                    id_option = question_id + '-id' + i
                    preRender = preRender + `
                        <div class="w-100 px-3 px-lg-5 mt-0 mb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="` + id_option + `" name="` + question_id + `[]">
                            <label class="form-check-label px-5" for="` + id_option + `">` + value.text + `</label>
                        </div> 
                    `
                })
            break;
        }
        postRender = `
        <div class="col-10 offset-1 white z-depth-1 rounded mt-0 mb-3 py-2">
            <div class="row">
                <div class="col-10 offset-1 text-center mt-0 mb-2">
                    <h3 class="h3 black-text my-0 py-2" style="white-space: pre-wrap;">` + data.title + `</h3>
                </div>
                <div class="col-10 offset-1 text-center mt-0 mb-2">
                    <h5 class="text-50-black" style="white-space: pre-wrap;">` + data.description + `</h5>
                </div>
            </div>
            <div class="row">%option%</div>
        </div>
        `
        render = postRender.replace('%option%', preRender)
        $(block).append(render)
    },
    addQuestion(type) {
        $('#tester-create-modal--add-question__select-type').hide()
        block = '#tester-create-modal--add-question__warp-question'
        questionCount = this.data.questionCount
        this.data.questionCount++

        $(block).hide().html('')

        switch(type) {
            case 'text':
                preRender = `
                <input type="hidden" id="addQuestion-addOption--type" value="text">
                <div class="col-10 offset-1 md-form md-bg mt-0 mb-3">
                    <input type="text" id="addQuestion-addOption--text" class="form-control">
                    <label for="addQuestion-addOption--text" class="pl-4">Подсказка к вопросу</label>
                </div>
                <div class="col-10 offset-1 md-form md-bg mt-0 mb-3">
                    <input type="text" id="addQuestion-addOption--answer" class="form-control">
                    <label for="addQuestion-addOption--answer" class="pl-4">Ответ</label>
                </div>
                `
            break;
            case 'option':
                preRender = `
                <input type="hidden" id="addQuestion-addOption--type" value="option">
                <div class="col-10 offset-1 mt-0 mb-3">
                    <div id="addQuestion-addOption" class="row"></div>
                </div>
                <div class="col-10 offset-1 mt-0 mb-3">
                    <button onclick="testerCreate.addOption('option');" type="button" role="button" class="btn btn-outline-primary btn-rounded waves-effect">Добавить вариант ответа</button>
                </div>
                <div class="col-10 offset-1 md-form md-bg mt-0 mb-3">
                    <input type="number" id="addQuestion-addOption--answer" class="form-control">
                    <label for="addQuestion-addOption--answer" class="pl-4">Правильный вариант ответа</label>
                </div>
                `
                $('#tester-create-modal--add-question__action-add').hide()
            break;
            case 'multioption':
                preRender = `
                <input type="hidden" id="addQuestion-addOption--type" value="multioption">
                <div class="col-10 offset-1 mt-0 mb-3">
                    <div id="addQuestion-addOption" class="row"></div>
                </div>
                <div class="col-10 offset-1 mt-0 mb-3">
                    <button onclick="testerCreate.addOption('multioption');" type="button" role="button" class="btn btn-outline-primary btn-rounded waves-effect">Добавить вариант ответа</button>
                </div>
                <div class="col-10 offset-1 md-form md-bg mt-0 mb-3">
                    <input type="text" id="addQuestion-addOption--answer" class="form-control">
                    <label for="addQuestion-addOption--answer" class="pl-4">Номер(а) ответов через пробел: <span class="text-primary">1 2 3</span></label>
                </div>
                `

            break;
        }
        postRender = `
        <div class="col-10 offset-1 md-form md-bg mt-0 mb-3">
            <input type="text" id="addQuestion-title" class="form-control">
            <label for="addQuestion-title" class="pl-4">Заголовок вопроса</label>
        </div>
        <div class="col-10 offset-1 md-form mt-0 mb-3">
            <textarea id="addQuestion-description" class="md-textarea form-control" rows="4"></textarea>
            <label for="tesaddQuestion-description" class="pl-4">Пояснение вопроса</label>
        </div>
        <div class="col-10 offset-1 md-form mt-0 mb-3">
            <textarea id="addQuestion-explanation" class="md-textarea form-control" rows="4"></textarea>
            <label for="tesaddQuestion-explanation" class="pl-4">Объяснение вопроса (решение)</label>
        </div>
        <div class="col-10 offset-1 mt-0 mb-3">
            <div class="row">%input%</div>
        </div>
        `

        render = postRender.replace('%input%', preRender)

        $(block).show().html(render)
    },
    addOption(type) {
        this.data.addOptionCount++
        optionCount = this.data.addOptionCount
        id = 'addQuestion-' + type + optionCount
        // data-add-option
        block = '#addQuestion-addOption'

        render = `
        <div class="col-10 offset-1 md-form md-bg mt-0 mb-3">
            <input data-add-option="true" type="text" id="` + id + `" class="form-control">
            <label for="` + id + `" class="pl-4">#` + optionCount + ` Текст варианта ответа</label>
        </div>
        `

        $('#tester-create-modal--add-question__action-add').show()
        $('#addQuestion-addOption').append(render)
    },
    preview() {
        card_tpl = `
        <div class="card col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4 pt-2 px-2 mb-3">
            <div class="view overlay">
                <img class="card-img-top rounded" src="/uc/f5d1278e8109edd94e1e4197e04873b9/5dd2199a.png" alt="Card image test">
                <div class="mask %poster% rounded" style="opacity: 1;">
                    <div class="row h-100">
                        <div class="col-12 d-flex justify-content-center align-self-center mt-n2">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h5 class="mb-2 white-text">Author</h5>
                                    <h4 class="my-3 white-text">%type%</h4>
                                    <h6 class="text-white-50 mt-2 h6">Date</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-2">
                <h5 class="card-title text-truncate">%title%</h5>
                <p class="card-text">%description%</p>
                <a href="#" class="btn btn-rounded btn-primary">Пройти тест</a>
            </div>
        </div>
        `
        title = this.data.TEST.title
        description = this.data.TEST.description

        type = testerCreate.data.testTypes[this.data.TEST.type].ru
        poster = testerCreate.data.gradients[this.data.TEST.poster]

        $('#card-preview').html(card_tpl.replace('%poster%', poster).replace('%type%', type).replace('%title%', title).replace('%description%', description))
    },
    validate(id) {
        status = false
        switch(id) {
            case '1':
                // tester-create-display-1--base - 1
                status = this.validateDisplay1Base()
                if (status) this.displayManager('#tester-create-display-1', '#tester-create-display-1--setting')
            break;
            case '2':
                // tester-create-display-1--setting - 2
                status = this.validateDisplay1Setting()
                this.preview()
                if (status) this.displayManager('#tester-create-display-1', '#tester-create-display-1--preview')
            break;
            case '3':
                // tester-create-display-2 - 3
                status = this.validateDisplay2()
                if (status) this.displayManager('#tester-create-display-2', '#tester-create-display-1--base')
            break;
            case '4':
                // tester-create-display-3 - 4
                status = this.validateDisplay3()
                if (status) this.displayManager('#tester-create-display-3', '#tester-create-display-1--base')
            break;
        }

        if (status) return true
        else return this.errorManager(0)
    },
    validateDisplay1Base() {
        // tester-create-display-1--base
        data = {
            title: '',
            description: '',
        	explanation: '',
            type: '',
            poster: ''
        }

        data.title = $('#tester-data--test-title').val()
        if (data.title.length == 0) {
            this.errorManager(1)
            this.displayManager('#tester-create-display-1', '#tester-create-display-1--base')
            return false
        }
        data.description = $('#tester-data--test-title').val()
        data.explanation = $('#tester-data--test-explanation').val()
        data.type = $('#tester-data--test-type').val()
        if (data.type === false) data.type = "0"
        data.poster = $('#tester-data--test-poster').val()
        if (data.poster === false) data.poster = "0"

        this.data.TEST.title = data.title
        this.data.TEST.description = data.description
        this.data.TEST.explanation = data.explanation
        this.data.TEST.type = data.type
        this.data.TEST.poster = data.poster

        return true
    },
    validateDisplay1Setting() {
        // tester-create-display-1--setting
        data = {
            showAnswers: 'true',
            notifications: 'false',
            repeated: 'true',
            overTime: 0
        }

        data.showAnswers = $('#tester-data--test-opt-showAnswers').val()
        if (data.showAnswers != 'true' || data.showAnswers != 'false') {
            data.showAnswers = 'true'
        }
        data.notifications = $('#tester-data--test-opt-notifications').val()
        if (data.notifications != 'true' || data.notifications != 'false') {
            data.notifications = 'false'
        }
        data.repeated = $('#tester-data--test-opt-repeated').val()
        if (data.repeated != 'true' || data.repeated != 'false') {
            data.repeated = 'true'
        }
        data.overTime = $('#tester-data--test-opt-overTime').val()

        this.data.TEST.opt = data
        return true
    },
    validateDisplay2() {
        // tester-create-display-2 Проверка вопросов
        return true
    },
    validateDisplay3() {
        // tester-create-display-2 Проверка вопросов
        apiPath = servers.api + '/api.php?_action=tester/create&v=0.1'
        $.ajax({
            type: "POST",
            url: apiPath,
            data: {test: this.data.TEST},
            dataType: "json",
            success: function (data) {
                block = '#tester-test-publish--callback'
                msg = ''
                switch(data.test_status) {
                    case 'auth':
                        toastr.info('Вы не авторизованны')
                    break;
                    case 1:
                        msg = 'Укажите валидное название теста.'
                        testerCreate.displayManager()
                    break;
                    case 4:
                        msg = 'Укажите валидный тип теста.'
                        testerCreate.displayManager()
                    break;
                    case 6:
                    case 7:
                    case 8:
                    case 9:
                        msg = 'Установите валидные настройки для теста'
                        testerCreate.displayManager('#tester-create-display-1', '#tester-create-display-1--setting')
                    break;
                    case 10:
                        msg = 'Вопросы теста сброшены. Добавьте валидные вопросы.'
                        $('#tester-create-display-2--questions').html('')
                        testerCreate.data.TEST.question = []
                        testerCreate.displayManager('#tester-create-display-2', '#tester-create-display-1--base')
                    break;
                    case 1024:
                        msg = '<span class="text-success">Тест успешно создан и сохранен</span>'
                    break;
                }

                $(block).html(msg)
                toastr.info(msg)
            },
            error(data) {
                toastr.error('API Error, Текст ошибки: ')
            }
        });

        return true
    },
    init() {
        /* displayManager init */
        this.displayManager()

        $('#tester-create-save').hide()

        /* Modal Wrapper */
        init.createModal(this.data.modalAddQuestion.id, this.data.modalAddQuestion.html, this.data.modalAddQuestion.size, this.data.modalAddQuestion.bg)
    }
}

// init module
$(document).ready(() => {
    testerCreate.init()
})