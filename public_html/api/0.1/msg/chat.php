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

$self = (int) $_POST['self'];

$dialog = getDialogsByPersonal($_SESSION['user']['uid'], $self);
if (!$dialog['cid']) {
  setNewDialogs($_SESSION['user']['uid'], $self, 'personal');
  $dialog = getDialogsByPersonal($_SESSION['user']['uid'], $self);
  if ($dialog['cid']) {
    setChatByCid($dialog['cid'], $_SESSION['user']['uid'], $self, 'text', '0a4f3fd1b2fde627447ed4db324e6065');
  }
}

$dialogs_generated = getChatToView($dialog, $_SESSION['user']['uid']);

$bigData['chat'] = $dialogs_generated;
$bigData['count'] = count($bigData['chat']['msgContainer']); // All massage count

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>