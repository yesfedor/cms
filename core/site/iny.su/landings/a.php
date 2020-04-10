<?php
$warp ='warp';

$landingsPath = $thisSitePath.'landings/';
$landingsStatus = false;

switch($url_p1) {
    default:
        $landingsStatus = false;
        echo '<meta http-equiv="refresh" content="0; url=/">';
    break;
    case 'creators':
        $landingsStatus = false;
        echo '<meta http-equiv="refresh" content="0; url=/landings/yesfedor">';
    break;
    case 'yesfedor':
        $landingsStatus = true;
        $landingsFile = 'yesfedor';
    break;
    case 'tester-welcome':
        $landingsStatus = true;
        $landingsFile = 'tester-welcome';
    break;
    case 'for-all-mankind':
        $landingsStatus = true;
        $landingsFile = 'for-all-mankind';
    break;
    case 'fannalinur':
        $landingsStatus = true;
        $landingsFile = 'aliya';
    break;
    case 'vel0ur':
        $landingsStatus = true;
        $landingsFile = 'vel0ur';
    break;
    case 'fbb-paradise':
        $landingsStatus = true;
        $landingsFile = 'fbb-paradise';
    break;
}

if ($landingsStatus) {
    $landingsInclude = $landingsPath.$landingsFile.'.php';
    include_once($landingsInclude);
}
?>