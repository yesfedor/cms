<?php
function appDate() {
    $date = date( "d/m/y" );
    return $date;
}
function myscandir($dir, $sort=0) {
	$list = scandir($dir, $sort);
	
	// если директории не существует
	if (!$list) return false;
	
	// удаляем . и .. (я думаю редко кто использует)
	if ($sort == 0) unset($list[0],$list[1]);
	else unset($list[count($list)-1], $list[count($list)-1]);
	return array_values($list);
}

$addons = [
    '1.0' => $private.'/core/addons/1.0/',
];

$module = [
    '1.0' => $private.'/core/module/1.0/',
];

$apiFileList = myscandir($module['1.0']);

for ($apiFileListNum=0; $apiFileListNum < count($apiFileList);) {
    if (array_key_exists($apiFileListNum, $apiFileList)) {
        $apiFileListFilePath = $module['1.0'].$apiFileList[$apiFileListNum];
        include_once($module['1.0'].$apiFileList[$apiFileListNum]);
    }
    $apiFileListNum++;
}
?>