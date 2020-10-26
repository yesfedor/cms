<?php
$query_top10 = "SELECT kpid FROM media_views WHERE kpid != :kpid GROUP BY kpid ORDER BY COUNT(*) DESC LIMIT 10";
$var_top10 = [
    ':kpid' => 0
];
$top10 = dbGetAll($query_top10, $var_top10);

$top_kpid_list = [];
for($i = 0; $i < count($top10); $i++) {
    $top_kpid_list[] = $top10[$i]['kpid'];
}

// top10 get all data
$query_top10_data = "SELECT * FROM media_content WHERE kpid != :kpid and kpid IN (".implode(',', $top_kpid_list).")";
$var_top10_data = [
    ':kpid' => 0
];
$top10Data = dbGetAll($query_top10_data, $var_top10_data);

$topData = [];
for($i = 0; $i < count($top10Data); $i++) {
    $topData[] = json_decode($top10Data[$i]['json'], true);
}
?>
<div class="container-fluid my-5">
    <div class="row animated fadeIn">
        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center py-3 mb-5">
            <h1 class="theme-title my-0">Топ 10 <small class="d-block theme-text">самых просматриваемых фильмов и сериалов</small></h1>
        </div>
        <div id="topIsNull" class="col-12 col-lg-6 offset-lg-3 text-center theme-panel py-3 rounded" style="display: none;">
            <h3 class="theme-title mb-3">Как-то здесь пусто…</h3>
            <a onclick="return nav.go(this);" href="/search" class="btn btn-large btn-outline-white btn-rounded">Найти любимые сериалы</a>
        </div>
    </div>
    <div id="mediaWrapper" class="d-flex row align-items-center justify-content-center"></div>
</div>
<script>
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 512)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 16384)
if (!fn.isMobile()) init.css.add('media-watch', 'media.watch.css', 7)

topData = <?= json_encode($topData, JSON_UNESCAPED_UNICODE) ?>

if (topData.length >= 1) appMediaRender('mediaWrapper', topData, {fill: 'default', type: false})
else $('#topIsNull').show()
</script>