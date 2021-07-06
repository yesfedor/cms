<?php
function mainLocation() {
    global $_SESSION;

    $url_auth_true = '/feed';
    $url_auth_false = '/main';

    if ($_SESSION['user']['uid']) return '<script>nav.router(\''.$url_auth_true.'\', true);</script>';
    else return '<script>nav.router(\''.$url_auth_false.'\', true);</script>';
}

/* Print account block page */
if (userApiIsBlock()) {
    $userApiBlocked = true;
    $warp = 'warp';
    echo userApiBlockPage();
} else $userApiBlocked = false;

/* Main prepare */
$user_profile_href = '/'.($_SESSION['user']['url'] ? $_SESSION['user']['url'] : 'id'.$_SESSION['user']['uid']);

$siteUIFile = $private.'/core/site/'.currentAppName().'/global/ui.php';
$siteACTFile = $private.'/core/site/'.currentAppName().'/global/acts.php';
include_once($siteACTFile);

if ($userApiBlocked == false) {
    include_once($p_module);
    include_once($siteUIFile);
}

/* Inject source block */
if ($_GET['s'] or $_GET['source'] and !$userApiBlocked) {
    $sourceBoot = $private.'/core/site/'.currentAppName().'/global/sourceLoader.php';
    include_once($sourceBoot);
}
?>