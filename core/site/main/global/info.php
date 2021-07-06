<?php
$warp = "warp";

$serverTime = appDateGetInt(appDateGetStr());
?>

<div class="container">
    <div class="row border border-primary rounded my-5">
        <div class="col-12 text-center">
            <h2 class="theme-title my-1">Base Data</h2>
        </div>
        <div class="col-12 text-center">
            <h3 class="theme-title my-1">Time</h3>
            <h4 class="theme-text my-1">Время на сервере: <span data-time="<?= $serverTime ?>"></span></h4>
            <h4 class="theme-text my-1">Время клиента: <span data-ctime="<?= $serverTime ?>"></span></h4>
        </div>
        <div class="col-12 text-center">
            <h3 class="theme-title my-1">Client_id</h3>
            <h4 class="theme-text my-1"><?= $_COOKIE['client_id'] ?></h4>
        </div>
    </div>
</div>