<?php
$title = $p['meta']['title_'.$_SESSION['lang']];
$description = $p['meta']['description_'.$_SESSION['lang']];
$keywords = $p['meta']['keywords_'.$_SESSION['lang']];
$og_type = $p['meta']['og_type'];
$og_image = $p['meta']['og_image'];

if ($url_page == 'watch') {
    $kpid = $_GET['kpid'];
    $ch = curl_init();
    $headers = array('accept: application/json', 'x-api-key: 91d00358-6586-40e6-9d4e-9d9070547812');
    curl_setopt($ch, CURLOPT_URL, 'https://kinopoiskapiunofficial.tech/api/v2.1/films/'.$kpid); # URL to post to
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); # return into a variable
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); # custom headers, see above
    $data = curl_exec($ch); # run!
    curl_close($ch);
    $content = json_decode($data, true);
    $content = $content['data'];
    
    $title = $content['nameRu'].', '.$content['year'].' | INY Media';
    $description = $content['description'];
}
?>