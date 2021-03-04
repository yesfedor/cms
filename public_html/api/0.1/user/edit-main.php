<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

//config
$bigData = [];
$html_use = '';
$html_id = '';
$html_code = '';
$js_use = '';
$js_code = '';

//func
function user_ns_data($name, $surname) {
    global $_SESSION;

    $status = 'none';

    $query_name = "SELECT * FROM user_ns_data WHERE name = :name";
    $var_name = [
        ':name' => $name,
    ];
    $data_name = dbGetOne($query_name, $var_name);

    $query_surname = "SELECT * FROM user_ns_data WHERE surname = :surname";
    $var_surname = [
        ':surname' => $surname,
    ];
    $data_surname = dbGetOne($query_surname, $var_surname);

    if ($data_name['status'] == 'approved' and $data_surname['status'] == 'approved') $status = 'approved';
    if ($data_name['status'] == 'disapprove' or $data_surname['status'] == 'disapprove') $status = 'disapprove';

    return $status;
}
function user_ns_check_add($name, $surname) {
    global $_SESSION;
    $into = true;
    $status = '';

    if ($name == $_SESSION['user']['name'] and $surname == $_SESSION['user']['surname']) {
        $into = false;
        $status = 'error';
    }

    if ($_SESSION['user']['id_ns_check_last']) {
            // проверяем appDateGetStr
        $query_select = "SELECT * FROM user_ns_check WHERE id =  :id and uid = :uid";
        $var_select = [
            ':id' => $_SESSION['user']['id_ns_check_last'],
            ':uid' => $_SESSION['user']['uid'],
        ];
        $data = dbGetOne($query_select, $var_select);
        if ($data['name'] != $name and $data['surname'] != $surname) {
            $app_date = appDateGetInt(appDateGetArr());
            $last_date = appDateGetInt(appDateParseToArr($data['date']));
            $over_date = 1209500; // 14 days

            if ($app_date > ($last_date + $over_date)) {
                $into = true;
            } else {
                $status = 'time';
                $into = false;
            }
        } else {
            $status = 'time';
            $into = false;
        }

    }

    if ($into) {
        $user_ns_data_status = user_ns_data($name, $surname);
        switch($user_ns_data_status) {
            case 'approved':
                $into = false;

                $query_update = "UPDATE user SET name = :name, surname = :surname WHERE uid = :uid";
                $var_update = [
                    ':name' => $name,
                    ':surname' => $surname,
                    ':uid' => $_SESSION['user']['uid'],
                ];
                dbAddOne($query_update, $var_update);

                $_SESSION['user']['name'] = $name;
                $_SESSION['user']['surname'] = $surname;

                $js_use = '1';
                $js_code .= 'config.user.name = "'.$_SESSION['user']['name'].'"; config.user.surname = "'.$_SESSION['user']['surname'].'";';

                $status = 'success';
            break;
            case 'none':
                $into = true;
            break;
            case 'disapprove':
                $into = false;
                $status = 'error';
            break;
        }
    }

    if ($into) {
        $query = "INSERT INTO `user_ns_check` (`id`, `uid`, `name`, `surname`, `date`, `status`) VALUES (NULL, :uid, :name, :surname, :date, 'wait')";
        $var = [
            ':uid' => $_SESSION['user']['uid'],
            ':name' => $name,
            ':surname' => $surname,
            ':date' => appDateGetStr(),
        ];
        $id_ns_check_last = dbAddOne($query, $var);
    
        $query_update = "UPDATE user SET id_ns_check_last = :id_ns_check_last WHERE uid = :uid";
        $var_update = [
            ':id_ns_check_last' => $id_ns_check_last,
            ':uid' => $_SESSION['user']['uid'],
        ];
        dbAddOne($query_update, $var_update);
    
        $_SESSION['user']['id_ns_check_last'] = $id_ns_check_last;

        $status = 'success';
    }
    
    switch($status) {
        case 'success':
            return 'success';
        break;
        case 'time':
            return 'time';
        break;
        case 'error':
            return 'error';
        break;
    }
}

//code
$user_name = $_POST['edit-user-name'];
$user_surname = $_POST['edit-user-surname'];
    $msg_user_name = [
        'success' => 'Заявка на смену имени и фамилии принята',
        'time' => 'Вы пытаетесь сменить имя слишком часто. Пожалуйста, подождите несколько дней',
        'error' => 'К сожалению, Ваша заявка на смену имени была отклонена.'
    ];
$user_birthday = $_POST['edit-user-birthday'];
    $msg_user_birthday = [
        'error' => 'Произошла ошибка при изменении даты рождения'
    ];
$user_gender = $_POST['edit-user-gender'];
$user_relationship = $_POST['edit-user-relationship'];
$user_relationship_partner = $_POST['edit-user-relationship_partner'];
    $msg_relationship = [
        'error' => 'Укажите семейное положение',
        'error_partner_link' => 'Ссылка на партнера не действительна'
    ];
$user_hometown = $_POST['edit-user-hometown'];
    $msg_hometown  = [
        'error' => 'Проверьте правильность написания родного города'
    ];
$user_languages = $_POST['edit-user-languages'];
    $msg_languages = [
        'error' => 'Указанного языка нет в базе'
    ];

$msg_output = [];

            // выполняем $user_name $user_surname
if ($user_name != $_SESSION['user']['name'] or $user_surname != $_SESSION['user']['surname']) {
            // выполняем $user_name
    $user_name = ($user_name ? $user_name : $_SESSION['user']['name']);
    $user_surname = ($user_surname ? $user_surname : $_SESSION['user']['surname']);

    $msg_us_add = user_ns_check_add($user_name, $user_surname);
    $js_use = '1';
    $js_code .= 'toastr.info("'.$msg_user_name[$msg_us_add].'"); nav.go(\'<a href="\'+ window.location.href +\'"></a>\');';
}
if ($user_birthday) {
    if ($user_birthday != $_SESSION['user']['birthday']) {
        $ub_date = explode('/', $user_birthday);
        $ub_day = $ub_date[0];
        $ub_month = $ub_date[1];
        $ub_year = $ub_date[2];
        if (checkdate($ub_month, $ub_day, $ub_year)) {
            $ub = appDateParseToStr(['day'=> $ub_day, 'month' => $ub_month, 'year' => $ub_year]);
            $query_update_ub = "UPDATE user SET birthday = :birthday WHERE uid = :uid";
            $var_update_ub = [
                ':birthday' => $ub,
                ':uid' => $_SESSION['user']['uid']
            ];
            dbAddOne($query_update_ub, $var_update_ub);
            $_SESSION['user']['birthday'] = $ub;
        } else {
            $js_code .= 'toastr.info("'.$msg_user_birthday['error'].'");';
        }
    }
}

if ($user_gender != $_SESSION['user']['gender']) {
    $ug_status= false;

    switch($user_gender) {
        case 'male':
            $ug_status = true;
            $ug = 'male';
        break;
        case 'female':
            $ug_status = true;
            $ug = 'female';
        break;
    }

    if ($ug_status) {
        $query_update_ug = "UPDATE user SET gender = :gender WHERE uid = :uid";
        $var_update_ug = [
            ':gender' => $ug,
            ':uid' => $_SESSION['user']['uid']
        ];
        dbAddOne($query_update_ug, $var_update_ug);
        $_SESSION['user']['gender'] = $ug;
    }
}

if ($user_relationship) {
    $ur = '';
    $urp = NULL;
    $ur_status = false;

    $ur_all = [
        'type-0' => 'type-0',
        'type-1' => 'type-1',
        'type-2' => 'type-2',
        'type-3' => 'type-3',
        'type-4' => 'type-4',
        'type-5' => 'type-5',
        'type-6' => 'type-6',
        'type-7' => 'type-7',
        'type-8' => 'type-8',
    ];

    if ($ur_all[$user_relationship]) {
        $ur = $ur_all[$user_relationship];
        $ur_status = true;
    }

    if ($user_relationship_partner) {
        // code..
        $urp = NULL;
        if (iconv_strlen($user_relationship_partner) <= 25 and iconv_substr($user_relationship_partner, 0, 1) == '@') {
            if (iconv_substr($user_relationship_partner, 0, 3) == '@id' and is_numeric(iconv_substr($user_relationship_partner, 3))) {
                $urp_url = iconv_substr(htmlspecialchars($user_relationship_partner), 3);
            } else {
                $urp_url = iconv_substr(htmlspecialchars($user_relationship_partner), 1);
            }

            $query_urp = "SELECT uid, url FROM user WHERE uid = :url or url = :url";
            $var_urp = [
                ':url' => $urp_url
            ];
            $urp_is = dbGetOne($query_urp, $var_urp);

            if ($urp_is['uid'] and $urp_is['url']) {
                $urp = $urp_url;
            }
        }
    }

    if ($ur_status) {
        $query_update_ur = "UPDATE user SET relationship = :relationship, relationship_partner = :relationship_partner WHERE uid = :uid";
        $var_update_ur = [
            ':relationship' => $ur,
            ':relationship_partner' => $urp,
            ':uid' => $_SESSION['user']['uid']
        ];
        dbAddOne($query_update_ur, $var_update_ur);

        $_SESSION['user']['relationship'] = $ur;
        $_SESSION['user']['relationship_partner'] = $urp;
    }
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>