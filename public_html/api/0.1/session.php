<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

if ($_GET['act'] == 'delete' and $_GET['object']) {
    switch($_GET['object']) {
        case 'all':
            $_SESSION = [];
        break;
        case 'user.user':
            $_SESSION['user'] = [];
        break;
        case 'user.users':
            $_SESSION['users'] = [];
        break;
        case 'db.all_request':
            $_SESSION['db_all_request'] = 0;
        break;
    }
    echo '<meta http-equiv="refresh" content="0; url=/api.php?_action=session&v=0.1">';
}
?>
<link rel="stylesheet" href="style.css">
<h4>
Delete: <a href="/api.php?_action=session&v=0.1&act=delete&object=all">{all}</a>, <a href="/api.php?_action=session&v=0.1&act=delete&object=user.user">{user.user}</a>, <a href="/api.php?_action=session&v=0.1&act=delete&object=user.users">{user.users}</a>, <a href="/api.php?_action=session&v=0.1&act=delete&object=db.all_request">{db.all_request}</a>
</h4>
<?= debug($_SESSION) ?>