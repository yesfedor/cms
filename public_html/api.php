<?php
#$_GET['site'] = 'test';
$wait = $_GET['wait'];
switch($wait) {
    case "25":
        $api_w = '0.25';
    break;
    case "50":
        $api_w = '0.5';
    break;
    case "75":
        $api_w = '0.75';
    break;
    case "100":
        $api_w = '1';
    break;
    default:
        $api_w = '0.1';
    break;
}
sleep($api_w);

$public = $_SERVER['DOCUMENT_ROOT'];

$api_action = $_GET['_action'];
$api_version = (string) $_GET['v'];
if ($api_action) {
    if ($api_version) {
        $api_path = $public.'/api/'.$api_version.'/';
        if (file_exists($api_path)) {
            $api_file = $api_path.str_replace('.', '/', $api_action).'.php';
            if (file_exists($api_file)) {
                include_once($api_file);
            } else {
                echo json_encode(['error' => 'action_not_found', 'error_code' => '404 Not Found'], JSON_UNESCAPED_UNICODE);
            }
        } else {
            echo json_encode(['error' => 'version_not_found', 'error_code' => '404 Not Found'], JSON_UNESCAPED_UNICODE);
        }
    } else {
        echo json_encode(['error' => 'version_is_null', 'error_code' => '400 Bad Request'], JSON_UNESCAPED_UNICODE);
    }
    
} else {
    echo json_encode(['error' => 'action_is_null', 'error_code' => '400 Bad Request'], JSON_UNESCAPED_UNICODE);
}
?>