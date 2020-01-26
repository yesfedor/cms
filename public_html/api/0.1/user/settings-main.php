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
$js_code = '';

function setStatus($el, $text) {
    global $html_use;
    global $html_id;
    global $html_code;
    $html_use = '1';
    $html_id = $el;
    $html_code = $text;
}
//code
$elStatus = '#settings-status';
$settingsNewPassword = htmlspecialchars($_POST['settingsNewPassword']);
$settingsNewPasswordRepeat = htmlspecialchars($_POST['settingsNewPasswordRepeat']);
$settingsPassword = htmlspecialchars($_POST['settingsPassword']);
$settingsMail = htmlspecialchars($_POST['settingsMail']);
$settingsUserUrl = htmlspecialchars($_POST['settingsUserUrl']);

//password check
if (!$_SESSION['user']['uid']) die('error');
if ($settingsNewPassword and $settingsNewPasswordRepeat and $settingsPassword == $_SESSION['user']['password']) {
    if ($settingsNewPassword == $settingsNewPasswordRepeat) {
        if (userApiChangePassword($settingsPassword, $settingsNewPassword)) setStatus('#settings-status', 'Пароль изменен');
        else setStatus('#settings-status', 'Неверный пароль от аккаунта');
    } else setStatus('#settings-status', 'Пароли не совпадают');
}

//mail check
if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {

}

//user url check
if (true) {

}


//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>