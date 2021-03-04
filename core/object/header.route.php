<?php
$domain = $_GET['domain'];
$type = $_GET['type'];

$typeList = [
    'default' => [
        'access' => 0
    ],
    'main' => [
        'access' => 0
    ],
    'none' => [
        'access' => 0
    ],
    'user' => [
        'access' => 2
    ]
];

$logo = '';
    if (filter_var($domainInfo[$domain]['logo'], FILTER_VALIDATE_URL)) {
        $logo = '<img width="35px" height="35px" src="'.$domainInfo[$domain]['logo'].'" alt="logo" />';
    } else {
        $logo = $domainInfo[$domain]['logo'];
    }

if ($domainBase[$domain] and $typeList[$type]) {
    if (!(getUserAccessScore($_SESSION['user']['access']) >= $typeList[$type]['access'])) $type = 'default';
    $headerTpl = $objectPath.'headers/'.$domainBase[$domain].'/'.$type.'.php';
    include_once($headerTpl);
    if ($mainWarpSize != 'noWarp' and $type != 'none') echo '<script>setTimeout(() => {style.mainWarpSize();}, 500);</script>';
} else die('<script>toastr.error("Init: Route Error, #83")</script>')
?>
