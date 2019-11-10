<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);

$server = $private.'/core/server.php';
include_once($server);
?>

<div id="form" class="row my-5">
    <div class="col-6 offset-3 text-center">
        <h3>Загрузить файл на сервер. Формат: JPG, Макимум 15мб</h3>
        <form class="row" method="post" enctype="multipart/form-data">
            <input hidden type="file" name="uc-image-upload" accept=".jpg" class="col-12 w-100 md-form">
            <button type="button" onclick="$('[name=uc-image-upload]').click();" class="col-12 w-100 md-form btn btn-primary w-100">Выбрать фото</button>
            <button type="submit" class="col-12 w-100 md-form btn btn-primary w-100">Загрузить</button>
        </form>
    </div>
    <div class="col-6 offset-3 text-center">
        <?php
            if (count($_FILES['uc-image-upload']) != 0) {
                $result = ucSaveImage($_FILES['uc-image-upload']);
                $html = '
                <h4>Ссылка на файл</h4>
                <h5>
                    <span class="d-block">Q 100%: '.$result['q100'].' </span>
                    <span class="d-block">Q 10%: '.$result['q10'].' </span>
                    <span class="d-block">Q 100%, Min: '.$result['qmin'].' </span>
                </h5>
                ';
                echo textLink($html);
            }
        ?>
    </div>
</div>

<script>
$form = setInterval(() => {
    if ($('main').is('main')) {
        setTimeout(() => {
            $('main').html( $('#form').html() )
            $('#form').remove()
        }, 500);
        clearInterval($form)
    }
}, 500);

</script>