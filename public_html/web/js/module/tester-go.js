test = {
    timeoutans: false,
    timeoutanstype: '',
    test_data: {},
    active_question: 0,
    questionCount: {},
    ans: [],
    init() {
        if (typeof testJson.error == 'undefined') {
            this.test_data = testJson
            this.questionCount = testJson.question.length
            this.showInfo()
        } else {
            if (testJson.error == 'testOptRepeated') {
                $('#tester-test-info').hide()
                $('#tester-test-wrapper').hide()
                $('#tester-test-result').hide()
                $('#tester-test-repeated-block').show()
            }
        }
    },
    showInfo() {
        $('#tester-test-info').show()
        $('#tester-test-wrapper').hide()
        $('#tester-test-result').hide()
        $('#tester-test-repeated-block').hide()
    },
    showWrapper() {
        $('#tester-test-info').hide()
        $('#tester-test-wrapper').show()
        $('#tester-test-result').hide()
        $('#tester-test-repeated-block').hide()
        this.active_question = 0
        this.addQuestionWrapper(this.test_data.question[0])
        
        if (this.questionCount == 1) $('#q-board_next').html('Завершить')
        else $('#q-board_next').html('Продолжить')

        $('#q-board_next').removeClass('disabled')
    },
    showResult() {
        $('#tester-test-info').hide()
        $('#tester-test-wrapper').hide()
        $('#tester-test-result').show()
        $('#tester-test-repeated-block').hide()
    },
    board_prev() {
        //fst id #q-board_prev
    },
    board_next() {
        //fst id #q-board_next
        if (this.timeoutans == true) {
            this.timeoutans = false
            this.pushAns()
        }
        if ((test.active_question+1) == this.questionCount) {
            this.testResult()
        } else {
            if ((test.active_question+2) == this.questionCount) {
                $('#q-board_next').html('Завершить')
            }
            this.addQuestionWrapper(this.test_data.question[test.active_question+1])
        }
        
        test.active_question = test.active_question + 1
    },
    pushAns() {
        ansStr = ''
        switch(this.timeoutanstype) {
            case 'text':
                ansStr = $('#q-question__ans').val()
            break;
            case 'option':
                ansStr = $('[name=q-question__ans]:checked').val()
            break;
            case 'multioption':
                ansStr = [];
                $('[name ^= q-question__ans]:checkbox:checked').each((i, el) => {
                    ansStr.push($(el).val())
                })
            break;
        }
        ansObj = {
            id: test.active_question,
            answer: ansStr
        }
        if (ansStr) this.ans.push(ansObj)
    },
    testResult() {
        this.showResult()

        $.ajax({
            type: "POST",
            url: "/api.php?_action=tester/step&v=0.1",
            data: {ans: test.ans, tid: test.test_data.id},
            dataType: "json",
            success: function (data) {
                switch(data.status) {
                    case 200:
                        dataAnsTrue = 0
                        dataAnsFalse = 0
                        data.dataAns.forEach(element => {
                            if (element == 'true') dataAnsTrue = dataAnsTrue + 1
                            else dataAnsFalse = dataAnsFalse + 1
                        })
                        
                        easyText = `
                        <h3 class="black-text mb-3">Ваш результат</h3>
                        <h4 class="black-text">Вы решили верно <b>` + dataAnsTrue + `</b> из <b>` + data.allAns + `</b> вопросов!</h4>
                        `
                        $('#r-info').html(easyText)
                    break;
                    case 400:
                        $('#r-info').html('<h3 class="text-danger">Клиент вернул невалидные данные</h3>')
                    break;
                    case 404:
                        $('#r-info').html('<h3 class="text-danger">Тест не найден в базе, вероятно, он был удален или заблокирован</h3>')
                    break;
                }
            }
        });
    },
    addQuestionWrapper(data) {
        this.timeoutans = true
        this.timeoutanstype = data.type

        block = '#q-question'
        postRender = `
        <div class="col-10 offset-1 my-0">
            <div class="row">
                <div class="col-10 offset-1 text-center mt-0 mb-2">
                    <h3 class="h4 black-text my-0 py-2" style="white-space: pre-wrap;">` + data.title + `</h3>
                </div>
                <div class="col-10 offset-1 text-center mt-0 mb-2">
                    <h5 class="text-50-black" style="white-space: pre-wrap;">` + data.description + `</h5>
                </div>
            </div>
            <div class="row">%option%</div>
        </div>
        `
        question_id = 'q-question__ans'
        
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
                            <input type="radio" class="form-check-input" id="` + id_option + `" name="` + question_id + `" value="`+ (i+1) +`">
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
                            <input type="checkbox" class="form-check-input" id="` + id_option + `" name="` + question_id + `[]" value="`+ (i+1) +`">
                            <label class="form-check-label px-5" for="` + id_option + `">` + value.text + `</label>
                        </div> 
                    `
                })
            break;
        }

        render = postRender.replace('%option%', preRender)
        $(block).html(render)
    }
}

test.init()

testRoot = {
    isRoot: testRootData.isRoot,
    isHashUrl: testRootData.isHashUrl,
    init () {
        if (this.isHashUrl == true) {
            this.showDecisions()
            $('#decisions-data').html(mainTpl.nav.tplLoaderModule)
        }
        else this.hideDecisions()
    },
    deleteTest() {
        tid = testJson.id
        $.ajax({
            type: "POST",
            url: "/api.php?_action=tester/deleted&v=0.1",
            data: {tid: tid},
            dataType: "json",
            success: (data) => {
                if (data.deleted == 'deleted') window.location.href = "/"
            },
            error: () => {
                toastr.info('Произошла ошибка на сервере')
            }
        });
    },
    showDecisions() {
        $('#testRoot_toggle').attr('onclick', 'testRoot.hideDecisions(); return false;')
        $('#testRoot_toggle').html('Скрыть решения')

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
};
testRoot.init();

$('#r-info').html(mainTpl.nav.tplLoaderModule)
$('#decisions-data').html(mainTpl.nav.tplLoaderModule)
init.createModal('tester-test-delete-confirm', {title: 'Удаление теста', content: '<div class="row"><div class="col-12 text-center my-5"><button onclick="return testRoot.deleteTest();" class="btn btn-outline-danger btn-rounded">Удалить</button></div></div>', footer: ''}, 'large', 'var(--bg-color)')