<?php
/* Востановление подписок */
function restoreMediaSubs() {
    $q_restore = "SELECT kpid FROM media_subs WHERE status = :status";
    $v_restore = [
        ':status' => 'subscribe'
    ];
    $restore = dbGetAll($q_restore, $v_restore);
    foreach($restore as $key) {
        $kpid = $key['kpid'];
        echo '<script>window.open(\'https://media.iny.su/watch?kpid='.$kpid.'\')</script>';
    }
}
#restoreMediaSubs();
// достать подписки
$query_select_ids = "SELECT kpid FROM media_subs WHERE uid = :uid and status = :status";
$var_select_ids = [
    ':uid' => $_SESSION['user']['uid'],
    ':status' => 'subscribe'
];
$select_ids = dbGetAll($query_select_ids, $var_select_ids);

$subsData = [];
if ($select_ids[0]) {
    $kpids = [];
    for($i = 0; $i < count($select_ids); $i++) {
        $kpids[] = $select_ids[$i]['kpid'];
    }
    $kpids = implode(',', $kpids);
    $query_select = "SELECT json FROM media_content WHERE kpid IN ($kpids) and kpid != :kpid";
    $var_select = [
        ':kpid' => 0
    ];
    $select = dbGetAll($query_select, $var_select);

    for($i = 0; $i < count($select); $i++) {
        $subsData[] = json_decode($select[$i]['json'], true);
    }
}

?>
<div class="container-fluid my-5">
    <div class="row animated fadeIn">
        <div class="col-12 text-center py-3 mb-5">
            <h1 class="theme-title my-0">Мои подписки</h1>
        </div>
        <div id="subscriptionsIsNull" class="col-12 col-lg-6 offset-lg-3 text-center theme-panel py-3 rounded" style="display: none;">
            <h3 class="theme-title mb-3">Как-то здесь пусто…</h3>
            <a onclick="return nav.go(this);" href="/search" class="btn btn-large btn-outline-white btn-rounded">Найти любимые сериалы</a>
        </div>
    </div>
    <div id="mediaWrapper" class="d-flex row align-items-center justify-content-center"></div>
</div>
<script>
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 512)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 32768)
if (!fn.isMobile()) init.css.add('media-watch', 'media.watch.css', 7)

subsData = <?= json_encode($subsData, JSON_UNESCAPED_UNICODE) ?>

if (subsData.length >= 1) appMediaRender('mediaWrapper', subsData, {fill: 'default', type: false})
else $('#subscriptionsIsNull').show()
</script>