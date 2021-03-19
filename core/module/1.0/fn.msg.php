<?php
/*
  Dialogs
*/
function getDialogsToken() {
  return md5('aaaaa-bbbbb-ccccc-ddddd-fffff');
}
function setNewDialogs($uid_first, $uid_second, $type='personal') {
  $query = "INSERT INTO `msg_dialogs` (`cid`, `token`, `uid_first`, `uid_second`, `type`, `dateCreate`, `dateLast`, `is_delited`, `is_attach`)
            VALUES (NULL, :token, :uid_first, :uid_second, :type, :dateCreate, :dateLast, :is_delited, :is_attach)";
  $var = [
    ':token' => getDialogsToken(),
    ':uid_first' => $uid_first,
    ':uid_second' => $uid_second,
    ':type' => $type,
    ':dateCreate' => time(),
    ':dateLast' => time(),
    ':is_delited' => 0,
    ':is_attach' => 0
  ];

  dbAddOne($query, $var);
}

// include UIDs info: key[uid] data[name, surname, gender, date_last, block_type]
$fnMsgDependence = [];
function setDependence($uid) {
  global $fnMsgDependence;

  if (!$fnMsgDependence[$uid]) {
    $query = "SELECT uid, name, surname, gender, date_last, block_type FROM user WHERE uid = :uid";
    $var = [
      ':uid' => $uid
    ];

    $data = dbGetOne($query, $var);
    if (!$data['uid']) {
      $data = [
        'uid' => $uid,
        'name' => 'Получатель',
        'surname' => 'Заблокирован',
        'gender' => 'male',
        'date_last' => time(),
        'block_type' => 'block'
      ];
    }
    $fnMsgDependence[$uid] = $data;
  }
}
function getDependence() {
  global $fnMsgDependence;
  return $fnMsgDependence;
}
function getDialogsByCid($cid) {
  $query = "SELECT * FROM msg_dialogs WHERE cid = :cid";
  $var = [
    ':cid' => $cid
  ];
    
  $data = dbGetOne($query, $var);

  if ($data['cid']) {
    setDependence($data['uid_first']);
    setDependence($data['uid_second']);
  }

  return $data;
}
function getDialogsByPersonal($uid_first, $uid_second) {
  $query = "SELECT * FROM msg_dialogs WHERE (uid_first = :uid_first and uid_second = :uid_second) or (uid_first = :uid_second and uid_second = :uid_first)";
  $var = [
    ':uid_first' => $uid_first,
    ':uid_second' => $uid_second
  ];

  $data = dbGetOne($query, $var);

  if ($data['cid']) {
    setDependence($data['uid_first']);
    setDependence($data['uid_second']);
  }

  return $data;
}
function getDialogsByUid($uid) {
  $query = "SELECT * FROM msg_dialogs WHERE (uid_first = :uid or uid_second = :uid) and is_delited = :is_delited ORDER BY dateLast DESC";
  $var = [
    ':uid' => $uid,
    ':is_delited' => 0
  ];
  
  $data = dbGetAll($query, $var);

  for ($i = 0; $i < count($data); $i++) {
    setDependence($data[$i]['uid_first']);
    setDependence($data[$i]['uid_second']);
  }

  return $data;
}
function getDialogPreviewContentToText($type, $content) {
  // UPDATE fn.getDialogPreviewContentToText($Content)
  return $content;
}
function getDialogToView($dialog, $currentUserUid) {
  $interlocutor = [];
  if ($dialog['uid_first'] == $currentUserUid) $interlocutor = getDependence()[$dialog['uid_second']];
  else $interlocutor = getDependence()[$dialog['uid_first']];

  $msgPreviewData = getChatMsgPreview($dialog['cid']);
  if ($msgPreviewData['id']) {
    $msgPreviewSender = getDependence()[$msgPreviewData['sender']];
    $msgPreview = [
      'msg_id' => $msgPreviewData['id'],
      'cid' => $dialog['cid'],
      'uid' => $msgPreviewData['sender'],
      'name' => $msgPreviewSender['name'],
      'surname' => $msgPreviewSender['surname'],
      'text' => getDialogPreviewContentToText($msgPreviewData['type'], $msgPreviewData['content']),
      'date' => $msgPreviewData['date']
    ];
  } else $msgPreview = false;
  
  $dialog_view = [
    'cid' => $dialog['cid'],
    'type' => $dialog['type'],
    'uid' => $interlocutor['uid'],
    'name' => $interlocutor['name'],
    'surname' => $interlocutor['surname'],
    'unreadCount' => getChatUnreadCountByCid($dialog['cid'], $currentUserUid),
    'dateCreate' => $dialog['dateCreate'],
    'dateLast' => $dialog['dateLast'],
    'is_delited' => $dialog['is_delited'],
    'is_attach' => $dialog['is_attach'],
    'token' => $dialog['token'],
    'msgPreview' => $msgPreview
  ];

  return $dialog_view;
}

/*
  Chat
*/
function getChatToken() {
  return md5('11111-22222-33333-44444-55555');
}
function getChatUnreadCountByCid($cid, $sender) {
  $query = "SELECT id FROM msg_chat WHERE cid = :cid and is_read = :is_read and sender != :sender ORDER BY id DESC";
  $var = [
    ':cid' => $cid,
    ':is_read' => 0,
    ':sender' => $sender
  ];
  $data = dbGetAll($query, $var);

  return count($data);
}
function getChatByCid($cid, $limit=10, $offset=0) {
  $query = "SELECT * FROM msg_chat WHERE (cid = :cid) and (date > :offset) ORDER BY id DESC LIMIT $limit";
  $var = [
    ':offset' => (int) $offset,
    ':cid' => $cid
  ];

  $data = dbGetAll($query, $var);

  for ($i = 0; $i < count($data); $i++) {
    /* TODO: setDependence($uid) ATTACHED message */
    setDependence($data[$i]['sender']);
    setDependence($data[$i]['recipient']);
  }

  return $data;
}
function getChatMsgPreview($cid) {
  $query = "SELECT * FROM msg_chat WHERE cid = :cid ORDER BY id DESC LIMIT 1";
  $var = [
    ':cid' => $cid
  ];

  $data = dbGetOne($query, $var);
  if (!$data['cid']) $data = false;
  return $data;
}
function setChatByCid($cid, $sender, $recipient, $type='text', $content) {
  // is there a dialog with the user, if not - create
  $dialog = getDialogsByCid($cid);
  if (!$dialog['cid']) {
    setNewDialogs($sender, $recipient, $type='personal');
  } else {
    $dialog = getDialogsByPersonal($sender, $recipient);
  }

  $time = time();

  $query_chat = "INSERT INTO `msg_chat` (`id`, `cid`, `sender`, `recipient`, `date`, `type`, `is_read`, `is_favorite`, `is_spam`, `is_delited`, `is_edited`, `token`, `content`)
            VALUES (NULL, :cid, :sender, :recipient, :date, :type, :is_read, '0', '0', :is_delited, '0', :token, :content)";
  $var_chat = [
    ':cid' => $dialog['cid'],
    ':sender' => $sender,
    ':recipient' => $recipient,
    ':date' => $time,
    ':type' => $type,
    ':is_read' => 0,
    ':is_delited' => 0,
    ':token' => getChatToken(),
    ':content' => $content
  ];

  if ($content == '0a4f3fd1b2fde627447ed4db324e6065') {
    $var_chat[':is_read'] = 1;
    $var_chat[':is_delited'] = 1;
  }

  dbAddOne($query_chat, $var_chat);

  $query_update = "UPDATE msg_dialogs SET dateLast = :dateLast WHERE cid = :cid";
  $var_update = [
    ':cid' => $dialog['cid'],
    ':dateLast' => $time
  ];
  dbAddOne($query_update, $var_update);
}
function getChatMsgView($msg) {
  $sender = getDependence()[$msg['sender']];
  $data = [
    'id' => $msg['id'],
    'cid' => $msg['cid'],
    'type' => $msg['type'],
    'uid' => $msg['sender'],
    'name' => $sender['name'],
    'surname' => $sender['surname'],
    'is_read' => $msg['is_read'],
    'is_favorite' => $msg['is_favorite'],
    'is_spam' => $msg['is_spam'],
    'is_delited' => $msg['is_delited'],
    'is_edited' => $msg['is_edited'],
    'token' => $msg['token'],
    'date' => $msg['date'],
    'content' => $msg['content']
  ];

  return $data;
}
function getChatToView($dialog, $currentUserUid) {
  $interlocutor = [];
  if ($dialog['uid_first'] == $currentUserUid) $interlocutor = getDependence()[$dialog['uid_second']];
  else $interlocutor = getDependence()[$dialog['uid_first']];

  $msgContainerData = getChatByCid($dialog['cid']);
  $msgContainer = [];
  if ($msgContainerData[0]) {
    for ($i = 0; $i < count($msgContainerData); $i++) {
      $msgContainer[$i] = getChatMsgView($msgContainerData[$i]);
    }
  } else $msgContainer = false;

  $chat_view = [
    'cid' => $dialog['cid'],
    'type' => $dialog['type'],
    'uid' => $interlocutor['uid'],
    'name' => $interlocutor['name'],
    'surname' => $interlocutor['surname'],
    'unreadCount' => getChatUnreadCountByCid($dialog['cid'], $currentUserUid),
    'dateCreate' => $dialog['dateCreate'],
    'dateLast' => $dialog['dateLast'],
    'is_delited' => $dialog['is_delited'],
    'is_attach' => $dialog['is_attach'],
    'token' => $dialog['token'],
    'msgContainer' => $msgContainer
  ];

  return $chat_view;
}

/*
  Message
*/
function getMessageById($id) {
  $query = "SELECT * FROM msg_chat WHERE id = :id";
  $var = [
    ':id' => $id
  ];

  $data = dbGetOne($query, $var);

  setDependence($data['sender']);
  setDependence($data['recipient']);

  return $data;
}

?>