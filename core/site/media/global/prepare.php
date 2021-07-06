<?php
function mainLocation() {
    global $_SESSION;

    $url_auth_true = '/main';
    $url_auth_false = '/main';

    if ($_SESSION['user']['uid']) return '<script>nav.router(\''.$url_auth_true.'\', true);</script>';
    else return '<script>nav.router(\''.$url_auth_false.'\', true);</script>';
}

if (userApiIsBlock()) {
    $userApiBlocked = true;
    $warp = 'warp';
    echo userApiBlockPage();
} else {
    $userApiBlocked = false;
}

$siteUIFile = $private.'/core/site/'.currentAppName().'/global/ui.php';
$siteACTFile = $private.'/core/site/'.currentAppName().'/global/acts.php';
include_once($siteACTFile);

if ($_SESSION['user']['uid'] or true) {
    $status = true;
    $ui = false;
    $user_profile_href = '/'.($_SESSION['user']['url'] ? $_SESSION['user']['url'] : 'id'.$_SESSION['user']['uid']);

    if ($status and !$userApiBlocked) {
        include_once($p_module);
        if ($ui) include_once($siteUIFile);
    }
} else {
        if (!$userApiBlocked) include_once($p_module);
    }

if ($_GET['s'] or $_GET['source'] and !$userApiBlocked) {
    $sourceBoot = $private.'/core/site/'.currentAppName().'/global/sourceLoader.php';
    include_once($sourceBoot);
}
?>