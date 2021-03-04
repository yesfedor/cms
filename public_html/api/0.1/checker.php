<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

//config
$notice = userApiNoticeCount();

function js_code_notice($uid, $msg_n, $msg_text) {
    return 'if (config.user.uid == "'.$uid.'" && localStorage.getItem("msg'.$uid.'_'.$msg_n.'") == null) {document.exitFullscreen(); toastr.info("'.$msg_text.'"); localStorage.setItem("msg'.$uid.'_'.$msg_n.'", "1");}';
}

// js_code_notice('12', '4', '#3 Проверка онлайн оповещений, если пришло отпишитесь <a class=\"blue-text\" href=\"//vk.com/yesfedor\">VK: @yesfedor</a>')

$bigData = [
    'auth' => ($_SESSION['user']['uid'] ? true:false),
    'notice' => ($notice ? $notice : false),
    'msg' => false,
    'js_code' => ''
];
sleep($serverTimeout);
//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>