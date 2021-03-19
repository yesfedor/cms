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
if (!$_SESSION['user']['uid']) die('{"error":"401"}');
$sender = $_SESSION['user']['uid'];
$recipient = $_POST['recipient'];
$message = $_POST['message'];

if ($sender and $recipient and $message['type'] and $message['content']) {
  $dialog = getDialogsByPersonal($sender, $recipient);
  if ($dialog['cid']) {
    setChatByCid($dialog['cid'], $sender, $recipient, $message['type'], $message['content']);
  } else {
    setNewDialogs($sender, $recipient, 'personal');
    $dialog = getDialogsByPersonal($sender, $recipient);
    if ($dialog['cid']) {
      setChatByCid($dialog['cid'], $sender, $recipient, $message['type'], $message['content']);
    }
  }
} else {
  die('{"error":"401"}');
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>