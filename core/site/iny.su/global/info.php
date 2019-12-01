<?php
$warp = "warp";

$serverTime = appDateGetInt(appDateGetStr());
?>

<div class="container">
    <div class="row border border-primary rounded my-5">
        <div class="col-12 text-center">
            <h3 class="text-primary my-1">Base Data</h3>
        </div>
        <div class="col-12 text-center">
            <h4 class="text-primary my-1">Time</h4>
            <h5 class="my-1">Время на сервере: <span data-time="<?= $serverTime ?>"></span></h5>
            <h5 class="my-1">Время клиента: <span data-ctime="<?= $serverTime ?>"></span></h5>
        </div>
    </div>
</div>