<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

//code
$get_uid = ($_GET['uid']);
$get_first_name = ($_GET['first_name']);
$get_last_name = ($_GET['last_name']);
$get_photo = ($_GET['photo']);
$get_photo_rec = ( $_GET['photo_rec']);
$get_hash = ($_GET['hash']);
$get_html = '';

if ($get_hash == md5($config['vkapp']['app_id'].$get_uid.$config['vkapp']['secret_key'])) {
    if ($_SESSION['user']['uid'] and !$_SESSION['user']['vk_uid']) {
        // Связываем VK
        $query_user_update = "UPDATE user SET vk_uid = :vk_uid WHERE uid = :uid";
        $var_user_update = [
            ':vk_uid' => $get_uid,
            ':uid' => $_SESSION['user']['uid']
        ];
        dbAddOne($query_user_update, $var_user_update);

        $_SESSION['user']['vk_uid'] = $get_uid;

        userApiNoticeAdd('social_vk_add', ['name' => $_SESSION['user']['name']], $_SESSION['user']['uid']);
        
        $get_html = '
        <meta http-equiv="refresh" content="1; url=/">
        <h4 align="center" style="color:green;">Аккаунт успешно привязан</h4><br>
        ';

    } else {
        // Авторизуем через VK
        $query_user_select = "SELECT * FROM user WHERE vk_uid = :vk_uid";
        $var_user_select = [
            ':vk_uid' => $get_uid
        ];
        $user_select = dbGetOne($query_user_select, $var_user_select);

        if ($user_select['uid']) {
            $_SESSION['user'] = userApiLogin($user_select);
            $_SESSION['user']['geo_password'] = getUserPassword($_SESSION['user']['password']);

            $get_html = '
            <meta http-equiv="refresh" content="0; url=/">
            <h4 align="center" style="color:green;">Загрузка..</h4><br>
            ';
        } else {
            $get_html = '
            <meta http-equiv="refresh" content="20; url=/">
            <h4 align="center" style="color:red;">Аккаунт не привязан</h4><br>
            ';
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login With VK</title>
        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
        <script type="text/javascript">
            VK.init({apiId: <?= $config['vkapp']['app_id'] ?>});
        </script>
        <link rel="stylesheet" href="<?= $config['ssl'].$config['domain'] ?>/web/css/with.vk.css">
    </head>
    <body>
        <div id="parent">
            <div id="block">
                <div id="with_vk"></div>
                <br><h5 align="center"><?= ($get_html ? $get_html:'<a href="/">На главную</a>')  ?></h5>
            </div>
        </div>
        <script type="text/javascript">
            VK.Widgets.Auth("with_vk", {"authUrl":"/api/0.1/auth/vk.php"});
        </script>
    </body>
</html>