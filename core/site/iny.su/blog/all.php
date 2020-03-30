<?php
$warp = 'warp';

$blogRoot = false;
if (getUserAccessScore() >= 64) $blogRoot = true;

switch($url_p1) {
    default:
        $blogFile = 'board';
    break;
    case 'post':
        $blogFile = 'post';
    break;
    case 'create':
        if ($blogRoot) $blogFile = 'create';
        else $blogFile = 'board';
    break;
}
$blogFn = $thisSitePath.'blog/fn.php';
include_once($blogFn);
$blogPage = $thisSitePath.'blog/'.$blogFile.'.php';
include_once($blogPage);
?>