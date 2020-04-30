<?php
echo 'Hi world';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Управление ботом</title>
        <link rel="stylesheet" href="https://iny.su/web/vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://iny.su/web/vendor/css/mdb.min.css">
        <style>
            html,
            body {
                background-color: #c5cae9;
                color: black;
                width: 100%;
            }
            .h100vh {
                min-height: 100vh;
            }
            .h70vh {
                min-height: 70vh;
            }
            .list-group-item.active {
                z-index: 2;
                color: #fff;
                background-color: #3f51b5!important;
                border-color: #3f51b5!important;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-dark indigo fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">@ensqd</a>
            </div>
        </nav>
        <main id="warp" class="container my-5 py-5 h100vh">
            <div class="row">
                <div class="col-4">
                    <div class="list-group my-3 py-0 z-depth-1" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="app-profile-list" data-toggle="list" href="#app-profile" role="tab">Ваш профиль</a>
                        <a class="list-group-item list-group-item-action" id="app-setting-list" data-toggle="list" href="#app-setting" role="tab">Настройки бесед</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content my-3 py-0 rounded h70vh indigo lighten-5 z-depth-1" id="nav-tabContent">
                        <div class="row tab-pane py-3 fade show active" id="app-profile" role="tabpanel">
                            <div class="col-12 text-center mb-4">
                                <h3 class="my-0">Ваш профиль</h3>
                            </div>
                            <div class="col-12 text-center mb-4">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <h5 class="black-text mb-1">Ваше имя и фамлия</h5>
                                        <h6 id="user-name" class="text-muted my-0">текст</h6>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <h5 id="user-verified" class="black-text mb-1">текст</h5>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <h5 class="black-text mb-1">Ваш ник</h5>
                                        <h6 id="user-tag" class="text-muted my-0">текст</h6>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <h5 class="black-text mb-1">Игровой баланс</h5>
                                        <h6 id="user-balance" class="text-muted my-0">текст</h6>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <h5 class="black-text mb-1">Дата регистрации</h5>
                                        <h6 id="user-regDate" class="text-muted my-0">текст</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row tab-pane py-3 fade" id="app-setting" role="tabpanel">
                            <div class="col-12 text-center">
                                <h3 class="my-0">Настройки бесед</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer font-small indigo">
            <div class="footer-copyright text-center white-text py-3">© 2020 Copyright:
                <a class="white-text" target="_blank" href="https://go.iny.su/ПолинаШатохина"> Полина Шатохина</a>
            </div>
        </footer>
        <script src="https://iny.su/web/vendor/js/jquery.js"></script>
        <script src="https://iny.su/web/vendor/js/popper.min.js"></script>
        <script src="https://iny.su/web/vendor/js/bootstrap.min.js"></script>
        <script src="https://iny.su/web/vendor/js/mdb.min.js"></script>
        <script src="https://iny.su/web/vendor/js/icon.js"></script>
        <script>
            let app = {
                getUserInfo() {
                    let api = 'https://api.ensqd.ru/method/dev.profile'
                    $.ajax({
                        type: "GET",
                        url: api,
                        data: "",
                        dataType: "json",
                        success: function (response) {
                            let data = response.response
                            console.log(data)
                            let date = new Date(data.regDate)
                            let dateStr = date.toLocaleDateString() + ' ' + date.toTimeString()

                            $('#user-name').html(data.name)
                            if (data.verified == 1) $('#user-verified').html('Подтверждено')
                            else $('#user-verified').html('Не подтверждено')
                            $('#user-tag').html(data.tag)
                            $('#user-balance').html(data.balance)
                            $('#user-regDate').html(dateStr)
                        }
                    })
                }
            }
            app.getUserInfo()
        </script>
    </body>
</html>