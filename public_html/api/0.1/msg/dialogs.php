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
$sort = (string) $_POST['sort'];

/*
    dialog => personal
        uid: dialog.uid,
        name: dialog.name,
        surname: dialog.surname,
        unreadCount: dialog.unreadCount,
        dateCreate: dialog.dateCreate,
        dateLast: dialog.dateLast,
        msgPreview: dialog.msgPreview

    dialog => conversation
        cid: dialog.cid,
        title: dialog.title,
        unreadCount: dialog.unreadCount,
        dateCreate: dialog.dateCreate,
        dateLast: dialog.dateLast,
        msgPreview: dialog.msgPreview   

    dialog => channel

*/

$bigData['dialogs'] = [
    0 => [
        'type' => 'personal',
        'uid' => 2,
        'name' => 'Администрация',
        'surname' => 'Сайта',
        'unreadCount' => 0,
        'dateCreate' => 1612635937,
        'dateLast' => 1612635937,
        'is_delited' => 0,
        'token' => 'qweewqqweewqqwe',
        'msgPreview' => [
            'msg_id' => 1,
            'uid' => 2,
            'name' => 'Администрация',
            'surname' => 'Сайта',
            'text' => 'Что',
            'date' => 1612635937
        ]
    ]
];

$bigData['count'] = count($bigData['dialogs']);
 
//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>