<?php
function getMailHtml($type) {
    $domain = appGetDomain();
    // mail-verfy
    $file = 'https://'.$domain.'/api/0.1/mail-html/'.$type.'.html';
    $content = file_get_contents($file);
    return $content;
}
function mail_utf8($to, $from_user, $from_email, $subject = '(No subject)', $message = '') {
    $from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
    $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

    $headers =  "From: $from_user <$from_email>\r\n".
                "MIME-Version: 1.0" . "\r\n" .
                "Content-type: text/html; charset=UTF-8" . "\r\n";
    return mail($to, $subject, $message, $headers);
}
/*
$to = 'yesfedor.go@gmail.com'; // кому отправляем
$from_user = 'UserName'; // Пользователь, которому отправляем
$from_email = 'notify@yefe.ru'; // mail c которого отправляем
$subject = 'Subject'; // Заголовок (тема)
$message = '
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        content
    </body>
</html>
'; // сообщение
mail_utf8( $to, $from_user, $from_email, $subject, $message );
*/
?>