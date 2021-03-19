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

//code getDialogToView($dialog, $currentUserUid)
if (!$_SESSION['user']['uid'] and !$_POST['dependence']) die('{"error":"401"}');

$objects = $_POST['objects'];

foreach ($objects as $index => $data) {
  switch($data['component']) {
    case 'AppMsgDialog':
      $dialogData = getDialogsByCid($data['cid']);
      $dialogView = getDialogToView($dialogData, $_SESSION['user']['uid']);
      $dialogView['component'] = $data['component'];

      $bigData[] = $dialogView;
      break;
    case 'AppMsgMessage':
      $msg = getMessageById($data['id']);
      $msgView = getChatMsgView($msg);
      $msgView['component'] = $data['component'];

      $bigData[] = $msgView;
      break;
    case 'AppMsgObservation':
      $observation = [];
      $msgContainer = [];
      $limit = 10;
      $msgContainerData = getChatByCid($data['cid'], $limit, $data['offset']);
      if ($msgContainerData[0]) {
        for ($i = 0; $i < count($msgContainerData); $i++) {
          $msgContainer[$i] = getChatMsgView($msgContainerData[$i]);
        }
      } else $msgContainer = [];

      $observation['data'] = $msgContainer;
      $observation['count'] = count($msgContainer);
      $observation['component'] = $data['component'];

      $bigData[] = $observation;
      break;
  }
}
 
//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>