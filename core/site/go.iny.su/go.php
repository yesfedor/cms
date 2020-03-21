<?php
$warp = "warp";

$u_id = $p['data']['id'];
$u_url_short = 'https://'.appGetDomain().'/'.$p['data']['url_short'];
$u_url_to = $p['data']['url_to'];
$u_click = $p['data']['click'];
?>
<div class="container my-5">
    <div class="row">
        <div class="col-10 offset-1 text-center my-2">
            <h1 class="black-text my-0 ">Информация о ссылке</h1>
        </div>
        <div class="col-10 offset-1 text-center my-2">
            <h3 class="black-text my-2">Сокращенная версия: <a href="<?= $u_url_short ?>" target="_blank" rel="noopener noreferrer"><?= $u_url_short ?></a></h3>
            <h3 class="black-text my-2">Полная версия: <a href="<?= $u_url_to ?>" target="_blank" rel="noopener noreferrer"><?= $u_url_to ?></a></h3>
            <h3 id="link" class="black-text my-2">Переходов: <a href="#link"><?= $u_click ?></a></h3>
        </div>
    </div>
</div>