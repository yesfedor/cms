<?php
$domain = $_GET['domain'];
$type = $_GET['type'];

$typeList = [
    'default' => true,
    'main' => true,
    'none' => true,
    'user' => true
];

if ($domainBase[$domain] and $typeList[$type]) {
    $footerTpl = $objectPath.'footers/'.$domainBase[$domain].'/'.$type.'.php';
    include_once($footerTpl);
    echo '<script>style.mainWarpSize();</script>';
} else die('Route Error')
?>