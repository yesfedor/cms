<?php
if ($_SESSION['user']['uid']) {
    $ui = true;
    $warp = "warp-page";
} else {
    $ui = false;
    $warp = "warp-page";
}

if ($p['data']['uid'] == 0) {
    if ($_SESSION['user']['uid']) {
        echo '<script>nav.router(\'/'.($_SESSION['user']['url'] ? $_SESSION['user']['url'] : 'id'.$_SESSION['user']['uid']).'\', true);</script>';
    } else {
        echo '<script>nav.router(\'/main\', true);</script>';
    }
}


?>
<div class="col-12">
    <div class="row">
        <div class="col-12 white border border-primary text-center">
            <h2 class="text-truncate my-1 py-2"><?= $p['data']['name'].' '.$p['data']['surname'] ?></h2>
        </div>
    </div>
</div>