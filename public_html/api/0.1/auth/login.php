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
$js_use = '1';
$js_code = '';

//code
if (!$_SESSION['user']['uid'] and $_POST['login-username'] and $_POST['login-password']) {
    $login_username = $_POST['login-username'];
    $login_password = $_POST['login-password'];

    $query = "SELECT * FROM user WHERE (url = :username or mail = :username or number = :username)";
    $var = [
        ':username' => $login_username
    ];

    $user = dbGetOne($query, $var);

    if ($user['uid']) {
        if ($user['password'] == $login_password) {
            $html_use = '1';
            $html_id = '#app-login-callback';
            $html_code = '<b class="mb-2 text-success">loading..</b>';
            $js_code = "window.location.reload();";
            $_SESSION['user'] = userApiLogin($user);
            $_SESSION['user']['geo_password'] = getUserPassword($_SESSION['user']['password']);
        }
        else {
            $html_use = '1';
            $html_id = '#app-login-callback';
            $html_code = '<b class="mb-2 text-warning">Password is correct</b>';
            $js_code = "$('#app-login-password').attr('type', 'txt');";
        }
    } else {
        $html_use = '1';
        $html_id = '#app-login-callback';
        $html_code = '<b class="mb-2 text-danger">Account will not find</b>';
    }

$js_code .= " setTimeout(()=>{ $('#app-login-callback').html(''); }, 2000);";
} else {
    $html_use = '1';
    $html_id = '#app-login-callback';
    $html_code = '<b class="mb-2 text-warning">Fill in all fields</b>';
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>