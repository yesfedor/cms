<?php
#ini_set('error_reporting', E_ALL); 
#ini_set('display_errors', 1);
#ini_set('display_startup_errors', 1);
// init
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);


$db_file = $private.'/core/engine/db.php';
$routePath = $public.'/api/bot/';
$config_file = $routePath.'config.php';
$message_new = $routePath.'message_new.php';

// config
include_once($config_file);

// data
$data = json_decode(file_get_contents('php://input'));

// router
switch($data->type) {
    case 'confirmation':
        if ($data->group_id == $group_id) echo $confirmation_key;
    break;
    case 'message_new':
        $message = $data->object->message;
        $client_info = $data->object->client_info;
        if ($data->group_id == $group_id) include_once($message_new);
    break;
}
echo 'ok';
?>