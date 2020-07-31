<?php
$query_top10 = "SELECT * FROM media_content WHERE kpid != :kpid ORDER BY views DESC LIMIT 12";
$var_top10 = [
    ':kpid' => 0
];
$top10 = dbGetAll($query_top10, $var_top10);
$topData = [];
for($i = 0; $i < count($top10); $i++) {
    $topData[] = json_decode($top10[$i]['json'], true);
}
?>
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center py-3 mb-5">
            <h1 class="theme-title my-0">Топ 10 <small class="d-block theme-text">самых просматриваемых фильмов и сериалов</small></h1>
        </div>
    </div>
    <div id="mediaWrapper" class="d-flex row align-items-center"></div>
</div>
<script>
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 256)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 8192)

topData = <?= json_encode($topData, JSON_UNESCAPED_UNICODE) ?>

if (topData.length >= 1) appMediaRender('mediaWrapper', topData, {fill: 'default', type: false})
else $('#subscriptionsIsNull').show()
</script>