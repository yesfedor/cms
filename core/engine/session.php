<?php
function user_checker() {
    global $_SESSION;

    $q = "SELECT * FROM user WHERE uid = :uid";
    $v = [
        ':uid' => $_SESSION['user']['uid']
    ];

    $u = dbGetOne($q, $v);
    if ($_SESSION['user']['password'] == $u['password']) {
        foreach($u as $key => $value) {
            $_SESSION['user'][$key] = $value;
        }
    } else {
        $_SESSION['user'] = false;
    }
}
function getMailHash($mail) {
    $hash = md5($mail).'/?act=mail_verfy';
    $hash = md5($hash);
    return $hash;
}
function getAppRootHash() {
    global $_SESSION;
    
    $hash = md5($_SESSION['user']['uid'].$_SESSION['cahe']['random']).'/appRootHash';
    $hash = md5($hash);
    return $hash; 
}
// lang
if (!$_SESSION['lang']) $_SESSION['lang'] = 'ru';
if ($_GET['lang']) {
    switch($_GET['lang']) {
        case 'ru':
            $_SESSION['lang'] = 'ru';
        break;
        case 'en':
            $_SESSION['lang'] = 'en';
        break;
    }
}

// users
$_SESSION['users'] = array_values($_SESSION['users']);

// random hash
if (!$_SESSION['cahe']['random']) $_SESSION['cahe']['random'] = rand(1, 100000000);

// domain-redirect
if ($_GET['to']) $_SESSION['domain-redirect'] = $_GET['to'];

//user
//$_SESSION['user_previously']
if ($_SESSION['user']) {
    $hash['logout'] = md5($_SESSION['user']['uid'].$_SESSION['user']['password'].'/?act=logout');
}
else {
    /*
    * User Access:
    *   'author','developer-verfy','developer-pool','co-author',
    *   'administrator','tester-verfy','tester-default','moderator',
    *   'user-verfy','user-default','none'
    */
    $_SESSION['user']['access'] = 'none';
}

// user check
if ($_SESSION['check'] >= 120) {
    if ($_SESSION['user']) {
        user_checker();
    }

    $_SESSION['check'] = 0;
}

$_SESSION['check']++;
?>