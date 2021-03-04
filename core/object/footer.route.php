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
    if ($mainWarpSize != 'noWarp' and $type != 'none') echo '<script>setTimeout(() => {style.mainWarpSize();}, 500);</script>';
} else die('<script>toastr.error("Init: Route Error, #83")</script>')
?>
