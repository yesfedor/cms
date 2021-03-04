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
$login = urldecode($_GET['login']);
$password = urldecode($_GET['password']);

if ($login and $password) {
    $query = "SELECT * FROM user WHERE (url = :username or mail = :username or number = :username)";
    $var = [
        ':username' => $login
    ];

    $user = dbGetOne($query, $var);

    if ($user['uid'] and $user['password'] == $password) {
        $bigData['auth'] = true;
        $jwt_user_data = [
            'uid' => $user['uid'],
            'name' => $user['name'],
            'surname' => $user['surname'],
            'mail' => $user['mail']
        ];
        $bigData['jwt'] = jwt_encode($user['uid'], $jwt_user_data);
    } else {
        $bigData['auth'] = false;
    }
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>