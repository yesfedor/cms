<?php
if ($_SESSION['user']['uid']) {
    $ui = true;
    $warp = "warp-page";
} else {
    $ui = true;
    $warp = "warp-page";
}

if ($p['data']['uid'] == 0) {
    if ($_SESSION['user']['uid']) {
        echo '<script>nav.router(\'/'.($_SESSION['user']['url'] ? $_SESSION['user']['url'] : 'id'.$_SESSION['user']['uid']).'\', true , \'go\');</script>';
    } else {
        echo '<script>nav.router(\'/main\', true, \'go\')</script>';
    }
}

$onlineInfo = userApiGetOnlineStatus($p['data']['uid']);
?>
<div class="col-12">
    <div class="row">
        <div class="col-12 theme-panel border border-primary rounded text-center">
            <h2 class="theme-title my-1 py-2"><?= $p['data']['name'].' '.$p['data']['surname'] ?> <?= ($onlineInfo['status'] == 'online' ? '<small class="text-success">В сети</small>' : '<br><small>Был в сети: </small><small class="theme-text" data-format="d/m/?y h:m" data-ctime="'.$onlineInfo['date'].'">'.$onlineInfo['date'].'</small>' ) ?></h2>
        </div>
    </div>
</div>