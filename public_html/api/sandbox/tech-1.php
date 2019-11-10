<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Написать процедуру которая считает делителей числа</title>
    </head>
    <style>
    html, body, h1, h2, h3 {
        margin: 0px;
        padding: 0px;
        background-color: whitesmoke;
        color: black;
    }
    main {
        margin-top: 5rem;
    }
    .col {
        display: block;
        margin: 0px;
        padding: 10px 0px;
    }
    .muted {
        color: #555555;
    }
    .moreBox {
        text-align: center;
    }
    .moreContent {
        max-width: 60%;
        padding: 0px 20%;
    }
    </style>
    <body>
        <main align="center" class="warp">
            <div class="col d-one"><h1 class="l-title"></h1></div>
            <div class="col d-two"><span class="l-num muted"></span> <input class="d-num" type="text" /></div>
            <div class="col d-tree"><a class="l-get" onclick="return app.get();" href="#"></a></div>
            <div class="col d-four"><h4 class="l-result"></h4></div>
            <div class="moreBox" style="display: none;">
                <h4 class="l-more" onclick="return app.moreBtn();"></h4>
                <h5 class="moreContent" style="display: none;"></h5>
            </div>
        </main>
        
        <script src="https://iny.su/web/vendor/js/jquery.js"></script>
        <script>
            var app = {
                data: {
                    txt: {
                        'l-title':'Процедура которая считает делители числа',
                        'l-num':'Укажите целое число:',
                        'l-get':'Посчитать',
                        'l-result':'Результат: 0',
                        'l-more':'Подробно'
                    },
                    moreStatus: false
                },
                init () {
                    for(i in app.data.txt) {
                        block = i
                        str = app.data.txt[i]

                        $('.' + block).html(str)
                    }
                },
                get() {
                    num = $('.d-num').val()
                    count = [];

                    $('.moreContent').fadeOut(500)
                    app.data.moreStatus = false

                    for(i = 0; i <= num; i++) {
                        if (num % i == 0) {
                            console.log('B:' ,i, num)
                            count.push(i)
                        }
                    }

                    $('.l-result').html(app.data.txt['l-result'].replace(0, count.length))
                    $('.moreContent').html(()=>{
                        str = '';
                        for(i=0; i < count.length; i++) {
                            str = str + count[i] + ' '
                        }
                        return str
                    })
                    $('.moreBox').fadeIn(500);

                    return false
                },
                moreBtn() {
                    if (app.data.moreStatus) {
                        $('.l-more').html('Подробно')
                        $('.moreBox').fadeOut(500);
                        $('.moreContent').fadeOut(500)
                        app.data.moreStatus = false
                    } else {
                        $('.l-more').html('Скрыть')
                        $('.moreContent').fadeIn(500)
                        app.data.moreStatus = true
                    }

                    return false
                }
            };

            $(()=> {
                app.init()
            })
        </script>
    </body>
</html>