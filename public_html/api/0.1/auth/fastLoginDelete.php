<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

if ($_POST['uid'] or $_GET['uid']) {
    $search_uid = ($_POST['uid'] ? $_POST['uid'] : $_GET['uid']);

    $users = $_SESSION['users'];
    $usersCount = count($users);

    foreach($users as $key => $value) {
        if ($value['uid'] == $search_uid) {
            $_SESSION['users'][$key] = [];
            unset($_SESSION['users'][$key]);

            echo 'true';
        }
    }
} else die('false');
?>