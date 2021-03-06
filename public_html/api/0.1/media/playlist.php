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
function create_playlist($url='', $owner_uid=2, $type='collection', $title='', $description='', $content='') {
    $query = "INSERT INTO media_playlist (`id`, `url`, `owner_uid`, `type`, `title`, `description`, `content`) VALUES (NULL, :url, :owner_uid, :type, :title, :description, :content);";
    $var = [
        ':url' => $url,
        ':owner_uid' => $owner_uid,
        ':type' => $title,
        ':description' => $description,
        ':content' => $content
    ];
    return dbAddOne($query, $var);
}

function get_playlist($alias) {
    $query = "SELECT * FROM media_playlist WHERE id = :alias OR url = :alias";
    $var = [
        ':alias' => $alias
    ];

    $playlist = dbGetOne($query, $var);

    $query = "SELECT * FROM media_content WHERE kpid IN ({$playlist['content']}) and kpid != :kpid LIMIT 100";
    $var = [
        ':kpid' => 0
    ];
    $media_content = dbGetAll($query, $var);
    $content = [];
    for($i = 0; $i < count($media_content); $i++) {
        $content[$i] = json_decode($media_content[$i]['json'], true);
    }
    
    $playlist['content'] = $content;

    return $playlist;
}

$act = $_GET['act'];
switch($act) {
    case 'create':
        $jwt = $_GET['jwt'];
        if (jwt_is_valid($jwt)) {
            $jwt = jwt_decode($jwt);
            $user_uid = $jwt['data']['uid'];
        } else die('{"error":"404"}');

        $url = $_GET['url'];
        $owner_uid = $user_uid;
        $type = 'type'; // 'main','search','collection','actor','studio','genre'
        $title = $_GET['title'];
        $description = $_GET['description'];
        $content = $_GET['content'];

        create_playlist($url, $owner_uid, $type, $title, $description, $content);
        break;
    case 'get':
        $alias = $_GET['alias'];
        $bigData['playlist'] = get_playlist($alias);
        break;
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>