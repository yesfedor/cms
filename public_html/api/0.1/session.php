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
    }
}
?>
<h4>
Delete: <a href="?act=delete&object=all">{all}</a>, <a href="?act=delete&object=user.user">{user.user}</a>, <a href="?act=delete&object=user.users">{user.users}</a>
</h4>
<h4>
<?= debug($_SESSION) ?>
</h4>