<?php
// $message
// $client_info
function get_random_id() {
    $query = "INSERT INTO `bot_random_id` (`id`) VALUES (:id)";
    $var = [':id'=>NULL];
    dbAddOne($query, $var);

    $query = "SELECT COUNT(id) FROM bot_random_id WHERE :id";
    $var = [':id'=>TRUE];
    return dbGetOne($query, $var)['COUNT(id)'];
}
function send($peer_id, $text) {
    global $access_key;
    global $vk_version;
    global $vk_path;

    $build = [
        'peer_id' => $peer_id,
        'message' => $text,
        'random_id' => get_random_id(),
		'access_token' => $access_key,
		'v' => $vk_version
    ];
    $params = http_build_query($build);
    $res = file_get_contents('https://api.vk.com/method/messages.send?'.$params);
    #print_r($res);
}

// command list
$peer_id = $message->peer_id;
$text = $message->text;
$attachments = $message->attachments;

switch($text) {
    case '!сервер':
        send($peer_id, 'Сервер работает');
    break;
}

?>