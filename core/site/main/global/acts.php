<?php
if ($_GET['act']) {
    // redirect url
    $actUrl = '/main';

    switch((boolean) $_SESSION['user']['uid']) {
        case false:
            // if false
        break;
        case true:
            switch($_GET['act']) {
                case 'logout':
                    if ($_GET['hash'] == $hash['logout']) {
                        userApiLogout();
                    }
                    $redirect = $actUrl;
                break;
                case 'logout_all':
                    if ($_GET['hash'] == $hash['logout']) {
                        userApiLogoutAll();
                    }
                    $redirect = $actUrl;
                break;
                case 'activity_history':
                    if ($_GET['hash'] == getAppRootHash()) {
                        $ui = true;
                        $warp = "warp-page";
                        echo userApiActivityHistoryGet();
                    } else {
                        $redirect = $actUrl;
                    }
                break;
            }
        break;
    }

    // if nomatter
    switch($_GET['act']) {
        case 'mail_verfy':
            if ($_GET['hash'] == getMailHash(urldecode($_GET['mail']))) {
                $prepareUserUidQuery = "SELECT * FROM user WHERE mail = :mail and mail_hash = :mail_hash";
                $prepareUserUidVar = [
                    ':mail' => urldecode($_GET['mail']),
                    ':mail_hash' => getMailHash(urldecode($_GET['mail']))
                ];
                $prepareUser = dbGetOne($prepareUserUidQuery, $prepareUserUidVar);
                if ($prepareUser['uid']) {
                    $prepareNoticeMailQuery = "SELECT * FROM app_notice WHERE uid = :uid and type = :type";
                    $prepareNoticeMailVar = [
                        ':uid' => $prepareUser['uid'],
                        ':type' => 'mail_verfy'
                    ];
                    $prepareNoticeMail = dbGetOne($prepareNoticeMailQuery, $prepareNoticeMailVar);

                    if (!$prepareNoticeMail['id']) {
                        userApiNoticeAdd('mail_verfy', ['name' => $prepareUser['name']], $prepareUser['uid']);
                        userApiVerfyEmail(urldecode($_GET['mail']));
                    }

                    $redirect = $actUrl;
                }
            }
        break;
    }
}
?>