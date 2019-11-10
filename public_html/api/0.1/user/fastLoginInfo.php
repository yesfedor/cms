<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);
//code
$accs = $_SESSION['users'];
$accCount = count($accs);

for($i=0; $i<$accCount;) {
    $acc = $accs[$i];
    if ($_GET['uid'] == $acc['uid']) {
        $data = $acc;
    }

    $i++;
}

if (!$data['uid']) $data = ['error'=> '404', 'length'=>$accCount];
else $data['error'] = 200;

//return
header('Content-Type: application/json');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>