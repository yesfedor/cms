<?php
$title = $p['meta']['title_'.$_SESSION['lang']];
$description = $p['meta']['description_'.$_SESSION['lang']];
$keywords = $p['meta']['keywords_'.$_SESSION['lang']];
$og_type = $p['meta']['og_type'];
$og_image = $p['meta']['og_image'];

if ($url_page != 'main' and $url_p1 != 'info') {
    header('Location: '.$p['data']['url_to']);
    echo '<meta http-equiv="refresh" content="0; url='.$p['data']['url_to'].'">';

    $query_go_cc_add_click = "UPDATE go_cc SET `click` = `click` + 1 WHERE `id` = :id";
    $var_go_cc_add_click = [
        ':id' =>  $p['data']['id']
    ];
    dbAddOne($query_go_cc_add_click, $var_go_cc_add_click);
}
?>