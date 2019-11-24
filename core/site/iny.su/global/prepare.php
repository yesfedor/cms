<?php
function mainLocation() {
    global $_SESSION;

    $url_auth_true = '/feed';
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

$siteUIFile = $private.'/core/site/'.appGetDomain().'/global/ui.php';
if ($_SESSION['user']['uid']) {
    $status = true;
    $ui = false;
    $user_profile_href = '/'.($_SESSION['user']['url'] ? $_SESSION['user']['url'] : 'id'.$_SESSION['user']['uid']);
    if ($_GET['act']) {
        $actUrl = '/';
        switch($_GET['act']) {
            case 'logout': 
                if ($_GET['hash'] == $hash['logout']) {
                    userApiLogout();
                    $redirect = $actUrl;
                }
            break;
            case 'mail_verfy':
                if ($_GET['hash'] == getMailHash(urldecode($_GET['mail']))) {
                    $prepareNoticeMailQuery = "SELECT id FROM app_notice WHERE uid = :uid type = :type";
                    $prepareNoticeMailVar = [
                        ':uid' => $_SESSION['user']['uid'],
                        ':type' => 'mail_verfy'
                    ];
                    $prepareNoticeMail = dbGetOne($prepareNoticeMailQuery, $prepareNoticeMailVar);
                    if (!$prepareNoticeMail['id']) {
                        userApiNoticeAdd('mail_verfy', ['name' => $_SESSION['user']['name']]);
                        userApiVerfyEmail(urldecode($_GET['mail']));
                    } 
                    $redirect = $actUrl;
                }
            break;
        }
    }

    if ($status and !$userApiBlocked) {
        include_once($p_module);
        if ($ui) include_once($siteUIFile);
    }
} else {
        if (!$userApiBlocked) include_once($p_module);
    }

if ($_GET['s'] or $_GET['source'] and !$userApiBlocked) {
    $sourceBoot = $private.'/core/site/'.appGetDomain().'/global/sourceLoader.php';
    include_once($sourceBoot);
}
?>