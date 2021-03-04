<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

// func 
// https://oauth.vk.com/authorize?client_id=6665924&redirect_uri=https://iny.su/api/0.1/auth/vk_connect.php&display=page&scope=notify,friends,status,notifications
function redirect($url = 'https://iny.su/') {
    die('<script>document.location.href = "'.$url.'"</script>');
}

// code
$client_id = 6665924;
$client_secret = 'KgMwz5PZzF4f27nZGoUM';
$redirect_uri = 'https://iny.su/api/0.1/auth/vk_connect.php';
$code = $_GET['code'];
if (!$code) redirect();

$file = "https://oauth.vk.com/access_token?client_id=$client_id&client_secret=$client_secret&redirect_uri=$redirect_uri&code=$code";
$access_token_json = file_get_contents($file);

$access_token = json_decode($access_token_json, true);

debug($access_token);
echo PHP_EOL, 'ok';
?>