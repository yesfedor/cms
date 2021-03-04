<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

//config
$bigData = [];
$html_use = '1';
$html_id = '#yesfedor-contact-callback';
$html_code = '';
$js_use = '0';
$js_code = '0';

//code
function ordered_freelance_add($name, $number, $mail, $description, $task, $budget) {
    if (!is_numeric($number)) return 'Введите валидный номер телефона';
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) return 'Введите валидный email адресс';
    $query = "INSERT INTO `ordered_freelance`(`id`, `time`, `name`, `number`, `mail`, `description`, `task`, `budget`) VALUES (NULL, :time, :name, :number, :mail, :description, :task, :budget)";
    $var = [
        ':time' => appDateGetInt(appDateGetStr()),
        ':name' => $name,
        ':number' => $number,
        ':mail' => $mail,
        ':description' => $description,
        ':task' => $task,
        ':budget' => $budget
    ];
    dbAddOne($query, $var);
    return 'Ваш запрос добавлен в расписание, в скором времени ответ придет на почту, либо на номер телефона';
}

$contants_name = htmlspecialchars($_POST['contants_name']);
$contants_phone = htmlspecialchars($_POST['contants_phone']);
$contants_mail = htmlspecialchars($_POST['contants_mail']);
$contants_desk = htmlspecialchars($_POST['contants_desk']);
$contants_do = htmlspecialchars($_POST['contants_do']);
$contants_credit = htmlspecialchars($_POST['contants_credit']);

if (mb_strlen($contants_name) > 1 and mb_strlen($contants_phone) > 4 and mb_strlen($contants_mail) > 4 and mb_strlen($contants_desk) > 4 and mb_strlen($contants_do) > 4 and mb_strlen($contants_credit) > 1) {
    $html_code = ordered_freelance_add($contants_name, $contants_phone, $contants_mail, $contants_desk, $contants_do, $contants_credit);
} else $html_code = 'Заполните все поля развернутно, больше 5 сим. каждый.';

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>