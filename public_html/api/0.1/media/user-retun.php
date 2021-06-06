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
$js_use = '0';
$js_code = '0';

//code
function inyMediaMailReturned($mail) {
  $html = getMailHtml('iny-media-return');
  $html_send = $html;
  
  $to = $mail; // кому отправляем
  $from_user = 'Онлайн - кинотеатр ждет вашего возвращения на сайт!'; // Пользователь, которому отправляем
  $from_email = 'no-reply-media-1@vh130.timeweb.ru'; // mail c которого отправляем
  $subject = 'INY Media - Лучшее кино у вас дома'; // Заголовок (тема)
  $message = $html_send; // сообщение

  mail_utf8( $to, $from_user, $from_email, $subject, $message );

  return true;
}

$query = "SELECT mail FROM user WHERE uid != :uid";
$var = [
  ':uid' => 0
];
$emails = dbGetAll($query, $var);

for($i=0; $i < count($emails); $i++) {
  $reply = $emails[$i]['mail'];

  //inyMediaMailReturned($reply);

  sleep(0.1);
}

// inyMediaMailReturned('maxvanyar@gmail.com');

echo 'Status:ok, Total send:', count($emails), PHP_EOL, time();

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>