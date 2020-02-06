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
function setJs($code) {
    global $js_use;
    global $js_code;
    $js_use = '1';
    $js_code = $code;
}
//code
$elStatus = '#settings-status';
$settingsNewPassword = htmlspecialchars($_POST['settingsNewPassword']);
$settingsNewPasswordRepeat = htmlspecialchars($_POST['settingsNewPasswordRepeat']);
$settingsPassword = htmlspecialchars($_POST['settingsPassword']);
$settingsMail = htmlspecialchars($_POST['settingsMail']);
$settingsUserUrl = htmlspecialchars($_POST['settingsUserUrl']);

if (!$_SESSION['user']['uid']) die('error');
//password check
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
if ($settingsUserUrl) {
    $settingsUserUrl_changed = false;

    //parse
    $domain_profile = 'https://'.appGetDomain().'/';
    $domain_profile_len = mb_strlen($domain_profile);

    if (mb_substr($settingsUserUrl, 0, $domain_profile_len) == $domain_profile) {
        $settingsUserUrl = mb_substr($settingsUserUrl, $domain_profile_len);
    }

    // url != url
    if ($settingsUserUrl == $_SESSION['user']['uid']) $settingsUserUrl_changed = true;

    // default view - id12345
    if ($settingsUserUrl == 'id'.$_SESSION['user']['uid'] and !$settingsUserUrl_changed) {
        $query = "UPDATE user SET url = :newurl WHERE uid = :uid";
        $var = [
            ':newurl' => NULL,
            ':uid' => $_SESSION['user']['uid']
        ];
        dbAddOne($query,  $var);
        $_SESSION['user']['url'] = false;
        setStatus('#settings-status', 'Вы успешно удалили короткий адрес, для корректной работы сайта, пожалуйста, обновите страницу');
        setJs('config.user.url = \'\'; $(\'#app-main-menu_profile\').attr(\'href\', \'/id'.$_SESSION['user']['uid'].'\');');
        $settingsUserUrl_changed = true;
    }

    // allow?
    if (!$settingsUserUrl_changed) {
        $settingsUserUrl_status = checkDomain($settingsUserUrl);
        switch($settingsUserUrl_status) {
            case 'allow':
                $query = "UPDATE user SET url = :newurl WHERE uid = :uid";
                $var = [
                    ':newurl' => $settingsUserUrl,
                    ':uid' => $_SESSION['user']['uid']
                ];
                dbAddOne($query,  $var);
                $_SESSION['user']['url'] = $settingsUserUrl;

                setStatus('#settings-status', 'Вы успешно заняли короткий адрес, для корректной работы сайта, пожалуйста, обновите страницу');
                setJs('config.user.url = \''.$settingsUserUrl.'\'; $(\'#app-main-menu_profile\').attr(\'href\', \'/id'.$settingsUserUrl.'\');');
            break;
            case 'deny':
                setStatus('#settings-status', 'Адрес уже занят');
            break;
            case 'invalid':
                setStatus('#settings-status', 'Недопустимый формат');
            break;
        }
        $settingsUserUrl_changed = true;
    }
}


//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>