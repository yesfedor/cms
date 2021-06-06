<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

//config
$bigData = [];
$html_use = '0';
$html_id = '0';
$html_code = '0';
$js_use = '0';
$js_code = '0';

//code
function shuffle_assoc($array) { 
   $keys = array_keys($array); 
   shuffle($keys); 
   return array_merge(array_flip($keys), $array); 
}

function get_similars($kpid) {
  $ch = curl_init();
  $headers = array('accept: application/json', 'x-api-key: 91d00358-6586-40e6-9d4e-9d9070547812');
  
  curl_setopt($ch, CURLOPT_URL, 'https://kinopoiskapiunofficial.tech/api/v2.2/films/'.$kpid.'/similars'); # URL to post to
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); # return into a variable
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); # custom headers, see above
  $data = curl_exec($ch); # run!
  curl_close($ch);
  $content = json_decode($data, true);
  if (count($content['items']) > 12) return array_slice($content['items'], 0, 12);
  else return $content['items'];
  return $content;
}

function get_sequels_and_prequels($kpid) {
  $ch = curl_init();
  $headers = array('accept: application/json', 'x-api-key: 91d00358-6586-40e6-9d4e-9d9070547812');
  
  curl_setopt($ch, CURLOPT_URL, 'https://kinopoiskapiunofficial.tech/api/v2.1/films/'.$kpid.'/sequels_and_prequels'); # URL to post to
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); # return into a variable
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); # custom headers, see above
  $data = curl_exec($ch); # run!
  curl_close($ch);
  $content = json_decode($data, true);
  if (count($content) > 12) return array_slice($content, 0, 12);
  else return $content;
  return $content;
}

$kpid = (int) $_GET['kpid'];
if (!$kpid) die('KPID not defined');

$similars_content = get_similars($kpid);
$sequels_and_prequels_content = get_sequels_and_prequels($kpid);
$default_content = json_decode(file_get_contents('https://iny.su/api/0.1/media/mediaWatchRecoms.json'), true);

if (count($similars_content) < 1) {
  $bigData = array_merge($sequels_and_prequels_content, $default_content);
} else {
  $bigData = array_merge($sequels_and_prequels_content, $similars_content);
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>