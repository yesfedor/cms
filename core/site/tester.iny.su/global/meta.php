<?php
$title = $p['meta']['title_'.$_SESSION['lang']];
$description = $p['meta']['description_'.$_SESSION['lang']];
$keywords = $p['meta']['keywords_'.$_SESSION['lang']];
$og_type = $p['meta']['og_type'];
$og_image = $p['meta']['og_image'];

if ($p['data']) {
    $title = textParse(['test_name' => $p['data']['title']], $p['meta']['title_'.$_SESSION['lang']]);
    $description = $p['meta']['description'];
}
?>