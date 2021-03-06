<?php
// Main User API
function userApiSave() {
    global $_SESSION;
    if (!$_SESSION['users']) $_SESSION['users'] = [];

    $users = $_SESSION['users'];
    $usersCount = count($users);
    //save
    $save = [
        'uid' => $_SESSION['user']['uid'],
        'mail' => $_SESSION['user']['mail'],
        'name' => $_SESSION['user']['name'],
        'surname' => $_SESSION['user']['surname'],
        'gender' => $_SESSION['user']['gender']
    ];

    $search = false;
    for($i=0;$i<$usersCount;) {
        if ($users[$i]['uid'] == $save['uid']) $search = true;
        $i++;
    }

    if (!$search and $usersCount < 9) $_SESSION['users'][] = $save;
}
function userApiSendMailtoVerfy($mail, $name, $surname) {
    global $_SESSION;
    $domain = appGetDomain();

    $link = 'https://'.$domain.'/?act=mail_verfy&mail='.urlencode($mail).'&hash='.getMailHash($mail);

    $parse = [
        'name' => $name,
        'surname' => $surname,
        'link' => $link
    ];

    $html = getMailHtml('mail-verfy');
    $html_send = textParse($parse, $html);
    
    $to = $mail; // кому отправляем
    $from_user = $name.', благодарим за регистрацию!'; // Пользователь, которому отправляем
    $from_email = 'reg@iny.su'; // mail c которого отправляем
    $subject = 'Регистрация на сайте INY.SU'; // Заголовок (тема)
    $message = $html_send; // сообщение

    mail_utf8( $to, $from_user, $from_email, $subject, $message );

    return true;
}
function userApiVerfyEmail($mail) {
    $query = "UPDATE user SET mail_verfy = :mail_verfy WHERE mail = :mail";
    $var = [
        ':mail_verfy' => 1,
        ':mail' => $mail
    ];
    dbAddOne($query, $var);
    return true;
}
function userApiDeleteUserNonVerfyEmail($mail) {
    $query_mail = "SELECT uid, mail_verfy FROM user WHERE mail = :mail";
    $var_mail = [
        ':mail' => $mail
    ];

    $user_mail = dbGetOne($query_mail, $var_mail);

    if (!$user_mail['uid']) {
        return true;
    } else {
        if ($user_mail['mail_verfy'] == '0') {
            $query_delete = "DELETE FROM user WHERE uid = :uid";
            $var_detele = [
                ':uid' => $user_mail['uid']
            ];
            dbAddOne($query_delete, $var_detele);
            return true;
        } else return false;
    }
}
function userApiReg($name, $surname, $mail, $password, $gender) {
    global $_SESSION;

    $mail_hash = getMailHash($mail);
    $date_create = appDateGetStr();

    $query_add = "INSERT INTO `user` (`uid`, `url`, `password`, `vk_uid`, `name`, `surname`, `gender`, `birthday`, `mail`, `mail_hash`, `mail_verfy`, `mail_olds`, `number`, `number_verfy`, `number_olds`, `date_create`, `date_last`, `access`, `block`, `block_type`, `block_date`) VALUES (:is_null, :is_null, :password, :is_null, :name, :surname, :gender, :is_null, :mail, :mail_hash, '0', :is_null, :is_null, '0', :is_null, :date_create, :date_create, :access, '0', :is_null, :is_null)";
    $var_add = [
        ':is_null' => NULL,
        ':name' => $name,
        ':password' => $password,
        ':surname' => $surname,
        ':gender' => $gender,
        ':mail' => $mail,
        ':mail_hash' => $mail_hash,
        ':date_create' => $date_create,
        ':access' => 'user-default',
    ];
    dbAddOne($query_add, $var_add);

    sleep(0.5);

    $query_user = "SELECT * FROM user WHERE mail =:mail and date_create = :date_create";
    $var_user = [
        ':mail' => $mail,
        ':date_create' => $date_create
    ];
    $user = dbGetOne($query_user, $var_user);
    $user_new = userApiLogin($user);
    if ($user_new['uid']) {
        userApiSendMailtoVerfy($mail, $name, $surname);
        sleep(0.5);

        userApiNoticeAdd('welcome', ['name' => $_SESSION['user']['name']]);
        
        return true;
    }
    else return false;
}
function userApiLogin($user) {
    global $_SESSION;

    $result = [];
    foreach($user as $key => $value) {
        $result[$key] = $value;
        $_SESSION['user'][$key] = $value;
    }

    userApiSave();
    userApiActivityHistoryLogin();

    return $result;
}
function userApiLogout() {
    global $_SESSION;
    if ($_SESSION['user']['uid']) userApiActivityHistoryLogout();
    $_SESSION['user'] = [];
    $_SESSION['data'] = [];
    $_SESSION['cahe'] = [];
}
function userApiChangePassword($settingsPassword, $settingsNewPassword) {
    global $_SESSION;
    global $redirect;
    $query_select = "SELECT * FROM user WHERE uid = :uid";
    $var_select = [
        ':uid' => $_SESSION['user']['uid']
    ];
    $user = dbGetOne($query_select, $var_select);
    if ($user['password'] == $settingsPassword) {
        $query_update = "UPDATE user SET password = :password WHERE uid = :uid";
        $var_update = [
            ':password' => $settingsNewPassword,
            ':uid' => $_SESSION['user']['uid']
        ];
        dbAddOne($query_update, $var_update);
        userApiLogout();
        return true;
    } else return false;
}

// Notice User API
function userApiNoticeAdd($type, $data, $uid=false) {
    global $_SESSION;

        if (!$uid) $uid = $_SESSION['user']['uid'];

    $type = $type;
    $data = json_encode($data, JSON_UNESCAPED_UNICODE);
    $date_create = appDateGetStr();
    $status = 'unread';

    $query = "INSERT INTO `app_notice` (`id`, `uid`, `type`, `data`, `date_create`, `status`) VALUES ('', :uid, :type, :data, :date_create, :status)";
    $var = [
        ':uid' => $uid,
        ':type' => $type,
        ':data' => $data,
        ':date_create' => $date_create,
        ':status' => $status,
    ];
    dbAddOne($query, $var);

    return true;
}
function userApiNoticeStatus($id, $status='') {
    // status ('read', 'unread', 'delete')
    global $_SESSION;

    $query_modify = '';

    $id_type = gettype($id);
        if ($id_type == 'integer' or $id_type == 'string') {
            $query_modify .= 'id = :id';
            $var[':id'] = $id;
        }
        if ($id_type == 'array' or $id_type == 'object') {
            $id_count = count($id);

            for($i=0; $i < $id_count;) {
                $query_modify .= 'id = :id'.$i.' or ';
                $var[':id'.$i] = $id[$i];

                $i++;
            }

            $query_modify .= 'id = :idq';
            $var[':idq'] = 0;
        }

    $uid = $_SESSION['user']['uid'];
        if (!$uid) return false;
    
    $query_select = "SELECT uid FROM app_notice WHERE $query_modify";
    $select = dbGetAll($query_select, $var);
    $select_count = count($select);
        for($ii=0; $ii < $select_count;) {
            if ($select[$ii]['uid'] != $uid) return false;
            $ii++;
        }

    switch($status) {
        case 'delete':
            $status = 'delete';
        break;
        case 'unread':
            $status = 'unread';
        break;
        default:
            $status = 'read';
        break;
    }
    $query = "UPDATE app_notice SET status = :status WHERE $query_modify";
    $var[':status'] = $status;

    dbAddOne($query, $var);

    return true;
}
function userApiNoticeGet($status='all') {
    // status ('read', 'unread', 'delete')
    global $_SESSION;

    $uid = $_SESSION['user']['uid'];
        if (!$uid) return false;

    $query_modify = "";

    switch($status) {
        case 'delete':
            $query_modify = " and status = :status";
            $var[':status'] = 'delete';
        break;
        case 'unread':
            $query_modify = " and status = :status";
            $var[':status'] = 'unread';
        break;
        case 'read':
            $query_modify = " and status = :status";
            $var[':status'] = 'read';
        break;
        default:
            $query_modify = " and status != :status";
            $var[':status'] = 'delete';
        break;
    }

    $query_modify = $query_modify.' LIMIT 50';

    $query = "SELECT * FROM app_notice WHERE uid = :uid".$query_modify;
    $var[':uid'] = $uid;

    $result = dbGetAll($query, $var);
    $result_count = count($result);
    $unread = [];

    for($i=0; $i < $result_count;) {
        if ($result[$i]['status'] == 'unread') $unread[] = $result[$i]['id'];
        $i++;
    }

    if (count($unread) >= 1) userApiNoticeStatus($unread, 'read');

    return $result;
}
function userApiNoticeCount() {
    global $_SESSION;

    $uid = $_SESSION['user']['uid'];
        if (!$uid) return false;
    
    $query = "SELECT COUNT(id) FROM app_notice WHERE uid = :uid and status = :status";
    $var[':uid'] = $uid;
    $var[':status'] = 'unread';

    $result = dbGetOne($query, $var);

    $count = $result['COUNT(id)'];

    return $count;
}
function getUserPassword($user_password) {
    global $client_id;
    $geo_password = md5($user_password.'/?client_id='.$client_id);
    
    return $geo_password;
}
function checkUserGeoPassword() {
    global $_SESSION;
    global $domainBase;
    global $domainInfo;

    $domain = '.'.$domainBase['main'];

    if ($_SESSION['user']['uid'] and getUserPassword($_SESSION['user']['password']) != $_SESSION['user']['geo_password']) {
        setcookie('client_id', '', -60*60*24*365*10, '/', $domain); 
        return false;
    } else return true;
}
checkUserGeoPassword();

function userApiUserLocation($ip) {
    /* country_name, city */
    $location = geoip_record_by_name($ip);
    return $location;
}
function userApiActivityHistoryLogin() {
    global $_SESSION;
    global $client_id;
    $client_ip = getIP();
    $uid = $_SESSION['user']['uid'];

    $ah_select = userApiActivityHistoryCheck($uid, $client_id, $client_ip);
    if ($ah_select['id']) {
        $query_update = "UPDATE activity_history SET status = :status WHERE uid = :uid and client_id = :client_id";
        $var_update = [
            ':uid' => $uid,
            ':client_id' => $client_id,
            ':status' => 'allow'
        ];
        dbAddOne($query_update, $var_update);
    } else {
        $query_add = "INSERT INTO `activity_history`(`id`, `uid`, `client_id`, `client_ip`, `status`) VALUES (NULL, :uid, :client_id, :client_ip, :status)";
        $var_add = [
            ':uid' => $uid,
            ':client_id' => $client_id,
            ':client_ip' => $client_ip,
            ':status' => 'allow'
        ];
        dbAddOne($query_add, $var_add);
    }
}
function userApiActivityHistoryCheck($uid, $client_id, $client_ip) {
    $query_check = "SELECT * FROM activity_history WHERE uid = :uid and client_id = :client_id";
    $var_check = [
        ':uid' => $uid,
        ':client_id' => $client_id
    ];
    $result = dbGetOne($query_check, $var_check);
    return $result;
}
function userApiActivityHistoryAuth() {
    global $_SESSION;
    global $client_id;

    $client_ip = getIP();
    $uid = $_SESSION['user']['uid'];
    $ah_select = userApiActivityHistoryCheck($uid, $client_id, $client_ip);
    if ($ah_select['status'] != 'allow') {
        userApiLogout();
    }
}
function userApiActivityHistoryGet() {
    global $_SESSION;
    $uid = $_SESSION['user']['uid'];
    $query = "SELECT * FROM activity_history WHERE uid = :uid and status = :status";
    $var = [
        ':uid' => $uid,
        ':status' => 'allow'
    ];
    $ah = dbGetAll($query, $var);
    if ($ah) {
        // align-items-center justify-content-center
        $html = '<div class="row my-3" style="min-height: 50vh;"><div class="col-10 offset-1 col-lg-6 offset-lg-3 text-center"><h2 class="d-block theme-title">Activity History</h2>';
        for ($i=0;$i<count($ah);) {
            $location = userApiUserLocation($ah[$i]['client_ip']);
            $html .= '<h4 class="d-block text-left theme-text my-2 py-2"><span class="theme-link">#'.($i+1).'</span> '.$location['country_name'].', '.$location['city'].'<br><small class="d-block text-left theme-text my-1">IP: '.$ah[$i]['client_ip'].'</small></h4>';
            $i++;
        }
        $html .= '</div></div>';
    } else {
        $html = '<div class="col-10 offset-1 text-center"><h2 class="theme-title my-2">Activity History - Empty :)</h2></div>';
    }
    return $html;
}
function userApiActivityHistoryLogout() {
    global $_SESSION;
    global $client_id;
    $client_ip = getIP();
    $uid = $_SESSION['user']['uid'];

    $ah_select = userApiActivityHistoryCheck($uid, $client_id, $client_ip);
    if ($ah_select['id']) {
        $query_update = "UPDATE activity_history SET status = :status WHERE uid = :uid and client_id = :client_id and client_ip = :client_ip";
        $var_update = [
            ':uid' => $uid,
            ':client_id' => $client_id,
            ':status' => 'disallow',
            ':client_ip' => $client_ip
        ];
        dbAddOne($query_update, $var_update);
    }
}
function userApiLogoutAll() {
    global $_SESSION;
    global $client_id;
    $client_ip = getIP();
    $uid = $_SESSION['user']['uid'];
    $ah_select = userApiActivityHistoryCheck($uid, $client_id, $client_ip);
    if ($ah_select['id']) {
        $query_update = "UPDATE activity_history SET status = :status WHERE uid = :uid and client_id != :client_id";
        $var_update = [
            ':uid' => $uid,
            ':client_id' => $client_id,
            ':status' => 'disallow'
        ];
        dbAddOne($query_update, $var_update);
    }
}
function userApiUpdateOnline() {
    global $_SESSION;
    global $client_id;

    $date_last = appDateGetInt(appDateGetStr());
    $query = "UPDATE user SET date_last = :date_last WHERE uid = :uid";
    $var = [
        ':date_last' => $date_last,
        ':uid' => $_SESSION['user']['uid']
    ];
    dbAddOne($query, $var);
}
function userApiGetOnline($uid = false) {
    global $_SESSION;
    global $client_id;

    if (!$uid) $uid = $_SESSION['user']['uid'];
    $query = "SELECT date_last FROM user WHERE uid = :uid";
    $var = [
        ':uid' => $uid
    ];
    $result = dbGetOne($query, $var);
    return $result['date_last'];
}
function userApiGetOnlineStatus($uid = false) {
    global $_SESSION;
    global $client_id;

    if (!$uid) $uid = $_SESSION['user']['uid'];

    $date_now = appDateGetInt(appDateGetStr());
    $date_last = userApiGetOnline($uid);

    $status = [
        'status' => 'online/offline',
        'date' => 0
    ];

    if ($date_now - $date_last > 120) return ['status' => 'offline', 'date' => $date_last];
    else return ['status' => 'online', 'date' => $date_last];
}

// JWT user api

// jwt_encode ($unique, $jwt)
function jwt_encode($unique=0, $user, $access='default') {
    $server_token = md5('lFg486982lFg');
    $user_token = md5($unique.'_key');

    $header = [
        'alg' => 'sha256',
        'typ' => 'JWT',
        'unique' => $unique
    ];

    $data = $user;
    $data['auth'] = true;

    $str1 = base64_encode(json_encode($header));
    $str2 = base64_encode(json_encode($data));
    $str3 = hash_hmac('sha256', md5($unique.json_encode($data).$user_token), $server_token);

    return $str1.'.'.$str2.'.'.$str3;
}

// jwt_decode ($jwt) : return user [$header, $data, $signature, $hash_hmac]
function jwt_decode($jwt='0.0.0') {
    $server_token = md5('lFg486982lFg');
    
    $jwt = explode('.', $jwt);
    $header = json_decode(base64_decode($jwt[0]), true);
    $data = json_decode(base64_decode($jwt[1]), true);
    $signature = $jwt[2];

    $unique = $header['unique'];
    $user_token = md5($header['unique'].'_key');
    $hash_hmac = hash_hmac('sha256', md5($unique.json_encode($data).$user_token), $server_token);

    return ['header' => $header, 'data' => $data, 'signature' => $signature, 'hash_hmac' => $hash_hmac];
}

// jwt_is_valid ($jwt)
function jwt_is_valid($jwt) {
    $jwt_content = jwt_decode($jwt);
    // time
        // check todo
    // signature
    if ($jwt_content['signature'] == $jwt_content['hash_hmac']) return true;
    else return false;
} 
?>