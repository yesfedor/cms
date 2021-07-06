<?php http_response_code(404) ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Error 404</title>
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
                            <div class="card border-danger z-depth-1">
                                <div class="card-header red lighten-5">Ошибка</div>
                                <div class="card-body text-danger">
                                    <h5 class="card-title">Страница не найдена</h5>
                                    <p class="card-text">Запрашиваемая страница не найдена, возможно, ее и не существовало, проверьте URL-адрес </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>