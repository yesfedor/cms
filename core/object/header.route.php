<?php
$domain = $_GET['domain'];
$type = $_GET['type'];

$typeList = [
    'default' => true,
    'main' => true,
    'none' => true,
    'user' => true
];

$logo = '';
    if (filter_var($domainInfo[$domain]['logo'], FILTER_VALIDATE_URL)) {
        $logo = '<img width="35px" height="35px" src="'.$domainInfo[$domain]['logo'].'" alt="logo" />';
    } else {
        $logo = $domainInfo[$domain]['logo'];
    }

if ($domainBase[$domain] and $typeList[$type]) {
    $headerTpl = $objectPath.'headers/'.$domainBase[$domain].'/'.$type.'.php';
    include_once($headerTpl);
    echo '<script>style.mainWarpSize();</script>';
} else die('Route Error')
?>
