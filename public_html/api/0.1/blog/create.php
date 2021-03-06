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
$url = $_POST['url'];
$urlDefault = 'https://'.$domainBase['main'].'/blog/post/';
$urlDefaultLen = mb_strlen($urlDefault);
if (mb_substr($url, 0, $urlDefaultLen) == $urlDefault) $url = mb_substr($url, $urlDefaultLen);
else die('Error URL');

$category = $_POST['category'] || 1;
$title = $_POST['title'];
$content = $_POST['content'];
$content = json_encode($content, JSON_UNESCAPED_UNICODE);
$poster_url = $_POST['poster_url'];
$preview = $_POST['preview'];
$date_create = appDate();

if (getUserAccessScore($_SESSION['user']['access']) >= 64) {
    // maybe change?
    $query_get = "SELECT * FROM blogpost WHERE url = :url";
    $var_get = [
        ':url' => $url
    ];
    $result_get = dbGetOne($query_get, $var_get);
    echo '-123-'.PHP_EOL;
    if ($result_get['id']) {
        echo '-456-'.PHP_EOL;
        if ($result_get['uid'] == $_SESSION['user']['uid']) {
            $query_update = "UPDATE blogpost SET category = :category, date_create = :date_create, title = :title, content = :content, poster_url = :poster_url, preview = :preview  WHERE id = :id and url = :url and uid = :uid";
            $var_update = [
                ':id' => $result_get['id'],
                ':url' => $url,
                ':uid' => $_SESSION['user']['uid'],
                ':category' => $category,
                ':date_create' => $date_create,
                ':title' => $title,
                ':content' => $content,
                ':poster_url' => $poster_url,
                ':preview' => $preview,
            ];
            dbAddOne($query_update, $var_update);
        } else $bigData['text'] = 'no';
    } else {
        echo '-789-'.PHP_EOL;
        $query_add = "INSERT INTO blogpost (id, url, uid, category, date_create, title, content, poster_url, preview) VALUES (NULL, :url, :uid, :category, :date_create, :title, :content, :poster_url, :preview)";
        $var_add = [
            ':url' => $url,
            ':uid' => $_SESSION['user']['uid'],
            ':category' => $category,
            ':date_create' => $date_create,
            ':title' => $title,
            ':content' => $content,
            ':poster_url' => $poster_url,
            ':preview' => $preview,
        ];
        dbAddOne($query_add, $var_add);
    }
}

$bigData['text'] = 'ok';
//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>