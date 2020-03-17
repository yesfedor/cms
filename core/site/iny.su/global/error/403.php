<?php
http_response_code(403);
$_SESSION['page-redirect'] = appGetUrl();
header('Location: /auth');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Error 403</title>
        <link rel="stylesheet" href="/web/vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="/web/vendor/css/mdb.min.css">
        <link rel="stylesheet" href="/web/css/common.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-sm-12 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center mt-5">
                            <div class="card border-warning z-depth-1">
                                <div class="card-header yellow lighten-5">Ошибка</div>
                                <div class="card-body text-warning">
                                    <h5 class="card-title">У Вас недостаточно прав на просмотр данной страницы</h5>
                                    <p class="card-text">Если вы считаете, что ошибка произошла по нашей вине, обратитесь в <b><a class="text-warning" href="/support/new">службу поддержки</a></b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>