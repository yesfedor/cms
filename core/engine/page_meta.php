<?php
// условия для показа meta-данных
if ($domainBase[appGetDomain()] == 'main') {
    // data/url params
    $title = $p['meta']['title_'.$_SESSION['lang']];
    $description = $p['meta']['description_'.$_SESSION['lang']];
    $keywords = $p['meta']['keywords_'.$_SESSION['lang']];
    $og_type = $p['meta']['og_type'];
    $og_image = $p['meta']['og_image'];

    if ($p['data']['uid']) {
        $title = textParse(['name' => $p['data']['name'], 'surname' => $p['data']['surname']], $p['meta']['title_'.$_SESSION['lang']]);
        $description = textParse(['name' => $p['data']['name']], $p['meta']['description_'.$_SESSION['lang']]);
    }
}

if ($domainBase[appGetDomain()] == 'dev' or $domainBase[appGetDomain()] == 'go' or $domainBase[appGetDomain()] == 'tester') {
    $title = $p['meta']['title_'.$_SESSION['lang']];
    $description = $p['meta']['description_'.$_SESSION['lang']];
    $keywords = $p['meta']['keywords_'.$_SESSION['lang']];
    $og_type = $p['meta']['og_type'];
    $og_image = $p['meta']['og_image'];
}
if ($domainBase[appGetDomain()] == 'main' and $url_page == 'landings') {
    $landingsMetaPath = $thisSitePath.'landings/a-meta.php';
    include_once($landingsMetaPath);
    $title = $landingsMeta['title'];
    $description = $landingsMeta['description'];
    $keywords = $landingsMeta['keywords'];
    $og_type = 'website';
    $og_image = $landingsMeta['og_image'];
}
if ($domainBase[appGetDomain()] == 'tester') {
    $title = $p['meta']['title_'.$_SESSION['lang']];
    $description = $p['meta']['description_'.$_SESSION['lang']];
    $keywords = $p['meta']['keywords_'.$_SESSION['lang']];
    $og_type = $p['meta']['og_type'];
    $og_image = $p['meta']['og_image'];

    if ($p['data']) {
        $title = textParse(['test_name' => $p['data']['title']], $p['meta']['title_'.$_SESSION['lang']]);
        $description = $p['meta']['description'];
    }
}
if ($domainBase[appGetDomain()] == 'go' and $url_page != 'main' and $url_p1 != 'info') {
    header('Location: '.$p['data']['url_to']);
    echo '<meta http-equiv="refresh" content="0; url='.$p['data']['url_to'].'">';
}

?>