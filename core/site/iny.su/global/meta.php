<?php
$title = $p['meta']['title_'.$_SESSION['lang']];
$description = $p['meta']['description_'.$_SESSION['lang']];
$keywords = $p['meta']['keywords_'.$_SESSION['lang']];
$og_type = $p['meta']['og_type'];
$og_image = $p['meta']['og_image'];

if ($p['data']['uid']) {
    $title = textParse(['name' => $p['data']['name'], 'surname' => $p['data']['surname']], $p['meta']['title_'.$_SESSION['lang']]);
    $description = textParse(['name' => $p['data']['name']], $p['meta']['description_'.$_SESSION['lang']]);
}

if ($url_page == 'landings') {
    $landingsMetaPath = $thisSitePath.'landings/a-meta.php';
    include_once($landingsMetaPath);

    $title = $landingsMeta['title'];
    $description = $landingsMeta['description'];
    $keywords = $landingsMeta['keywords'];
    $og_type = 'website';
    $og_image = $landingsMeta['og_image'];
}

if ($url_page == 'media') {
    $landingsMetaPath = $thisSitePath.'landings/a-meta.php';
    include_once($landingsMetaPath);

    $title = 'Закрытая медиатека от INY.SU';
    $description = 'Здесь вы найдете фильмы и сериалы на любой вкус в хорошем качестве';
    $keywords = '';
    $og_type = 'website';
    $og_image = 'media.png';
}
?>