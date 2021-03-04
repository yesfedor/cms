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
$var[1] = [
    'cid' => 1,
    'type' => 'personal',
    'uid' => 1,
    'name' => 'Фёдор',
    'surname' => 'Гаранин',
    'unreadCount' => 0,
    'dateCreate' => 1612635937,
    'dateLast' => 1612635937,
    'is_delited' => 0,
    'token' => 'qweewqqweewqqwe',
    'msgContainer' => [
        [
            'type' => 'text',
            'uid' => 1,
            'name' => 'Фёдор',
            'surname' => 'Гаранин',
            'is_read' => false,
            'is_favorite' => false,
            'is_spam' => false,
            'is_delited' => 0,
            'is_edited' => 0,
            'token' => 'qweewqqweewqqwe',
            'date' => 1612635937,
            'content' => 'Нужно запомнить - это бред!'
        ],
        [
            'type' => 'text',
            'uid' => 1,
            'name' => 'Фёдор',
            'surname' => 'Гаранин',
            'is_read' => false,
            'is_favorite' => false,
            'is_spam' => false,
            'is_delited' => 0,
            'is_edited' => 0,
            'token' => 'qweewqqweewqqwe',
            'date' => 1612635937,
            'content' => 'Россияне болеют за команды других стран .Обсерают все что производят и делают в России .Но живут сдесь не работают в большинстве не платят налоги .Во всем виноват президент забывают что бревно в своем глазу загораживает обзор .Но не мешает лицеприятствлаать .Всякому дерьму .Нет едино мышления'
        ]
    ]
];
$var[2] = [
    'cid' => 2,
    'type' => 'personal',
    'uid' => 2,
    'name' => 'Администрация',
    'surname' => 'Сайта',
    'unreadCount' => 0,
    'dateCreate' => 1612635937,
    'dateLast' => 1612635937,
    'is_delited' => 0,
    'token' => 'qweewqqweewqqwe',
    'msgContainer' => [
        [
            'type' => 'text',
            'uid' => 1,
            'name' => 'Фёдор',
            'surname' => 'Гаранин',
            'is_read' => false,
            'is_favorite' => false,
            'is_spam' => false,
            'is_delited' => 0,
            'is_edited' => 0,
            'token' => 'qweewqqweewqqwe',
            'date' => 1612635937,
            'content' => 'Привет!'
        ]
    ]
];

$sort = (string) $_POST['sort'];
$self = (int) $_POST['self'];

/*
    message.type = [text|emoji|sticker|voice]
*/
$bigData['chat'] = $var[$self];
/*
$bigData['chat'] = [
    'cid' => 1,
    'type' => 'personal',
    'uid' => 2,
    'name' => 'Администрация',
    'surname' => 'Сайта',
    'unreadCount' => 0,
    'dateCreate' => 1612635937,
    'dateLast' => 1612635937,
    'is_delited' => 0,
    'token' => 'qweewqqweewqqwe',
    'msgContainer' => [
        [
            'type' => 'text',
            'uid' => 1,
            'name' => 'Фёдор',
            'surname' => 'Гаранин',
            'is_read' => false,
            'is_favorite' => false,
            'is_spam' => false,
            'is_delited' => 0,
            'is_edited' => 0,
            'token' => 'qweewqqweewqqwe',
            'date' => 1612635937,
            'content' => 'Привет!'
        ]
    ]
];
*/

$bigData['count'] = count($bigData['chat']['msgContainer']); // All massage count

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>