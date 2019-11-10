var test = {
    timeoutans: false,
    timeoutanstype: '',
    test_data: testJson,
    active_question: 0,
    questionCount: testJson.question.length,
    ans: [],
    init() {
        this.showInfo()
    },
    showInfo() {
        $('#tester-test-info').show()
        $('#tester-test-wrapper').hide()
        $('#tester-test-result').hide()
    },
    showWrapper() {
        $('#tester-test-info').hide()
        $('#tester-test-wrapper').show()
        $('#tester-test-result').hide()
        this.active_question = 0
        this.addQuestionWrapper(this.test_data.question[0])
        
        if (this.questionCount = 1) {
            $('#q-board_next').html('Завершить')
        }

        $('#q-board_next').removeClass('disabled')
    },
    showResult() {
        $('#tester-test-info').hide()
        $('#tester-test-wrapper').hide()
        $('#tester-test-result').show()
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

        if ((test.active_question+1) == test.questionCount) {
            this.testResult()
        }
        if ((test.active_question+1) < test.questionCount) {
            this.addQuestionWrapper(this.test_data.question[test.active_question+1])
        }

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
                ansStr = $('[name=q-question__ans]:checkbox:checked').val()
            break;
        }
        ansObj = {
            id: test.active_question,
            answer: ansStr
        }
        if (ansStr) this.ans.push(ansObj)
    },
    testResult() {
        toastr.error('EpicError: Fatal error callback: not hash error')
    },
    addQuestionWrapper(data) {
        this.timeoutans = true
        this.timeoutanstype = data.type

        block = '#q-question'
        postRender = `
        <div class="col-10 offset-1 my-0">
            <div class="row">
                <div class="col-10 offset-1 text-center mt-0 mb-2">
                    <h3 class="h3 black-text my-0 py-2">` + data.title + `</h3>
                </div>
                <div class="col-10 offset-1 text-center mt-0 mb-2">
                    <h5 class="text-50-black">` + data.description + `</h5>
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