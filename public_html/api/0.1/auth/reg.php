<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

//config
$bigData = [];
$html_use = '0';
$html_id = '0';
$html_code = '0';
$js_use = '1';
$js_code = '';

//code
$reg_status = true;

$name = $_POST['reg-name'];
    if (!preg_match('/^[a-zA-Zа-яёА-ЯЁ\s\-]+$/u', $name) and iconv_strlen($name) < 24) {
        $reg_status = false;
        $js_code .= "toastr.error('Name invalid: Enter your real name'); ";
    }
$surname = $_POST['reg-surname'];
    if (!preg_match('/^[a-zA-Zа-яёА-ЯЁ\s\-]+$/u', $surname) and iconv_strlen($surname) < 24) {
        $reg_status = false;
        $js_code .= "toastr.error('Surname invalid: Enter your real surname'); ";
    }
$mail = $_POST['reg-mail'];
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $reg_status = false;
        $js_code .= "toastr.error('Email invalid'); ";
    }
$password = $_POST['reg-password'];
    if (iconv_strlen($password) > 257 or iconv_strlen($password) < 6)  {
        $reg_status = false;
        $js_code .= "toastr.error('Password invalid: min 6 and max 256 signs'); ";
    }
$gender = $_POST['reg-gender'];
    if ($gender != 'male' and $gender != 'female') $gender = 'male';

if ($reg_status) {
    //reg
    //$js_code .= "toastr.success('Loading..'); ";
    $query_mail = "SELECT uid, mail_verfy FROM user WHERE mail = :mail";
    $var_mail = [
        ':mail' => $mail
    ];

    $user_mail = dbGetOne($query_mail, $var_mail);
        if (!$user_mail['uid']) {
            $user = userApiReg($name, $surname, $mail, $password, $gender);
            $_SESSION['user']['geo_password'] = getUserPassword($_SESSION['user']['password']);
            if ($user) {
                $js_code = "toastr.success('Loading..'); window.location.reload();";
            } else $js_code .= "toastr.error('Host error'); ";
        } else {
            if ($user_mail['mail_verfy'] == '0') {
                //it's my email
                $mail_status = userApiDeleteUserNonVerfyEmail($mail);
                    if ($mail_status) {
                        $user = userApiReg($name, $surname, $mail, $password, $gender);
                        $_SESSION['user']['geo_password'] = getUserPassword($_SESSION['user']['password']);
                        if ($user) {
                            userApiNoticeAdd('welcome', ['name' => $_SESSION['user']['name']]);
                            $js_code = "config.user.auth = true; toastr.success('Loading..'); init.header('user'); init.footer('none'); nav.router(window.location.pathname); $('#modalAuthReg').modal('hide');";
                        } else $js_code .= "toastr.error('Host error'); ";
                    } else $js_code .= "toastr.error('Email address is busy'); ";
            } else {
                $js_code .= "toastr.error('Email address is busy'); ";
            }
        }
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>