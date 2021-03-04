<?php
function is_ssl() {
	if ( isset( $_SERVER['HTTPS'] ) ) {
		if ( 'on' == strtolower( $_SERVER['HTTPS'] ) ) {
			return true;
		}

		if ( '1' == $_SERVER['HTTPS'] ) {
			return true;
		}
	} elseif ( isset($_SERVER['SERVER_PORT'] ) && ( '443' == $_SERVER['SERVER_PORT'] ) ) {
		return true;
	}
	return false;
}
function appGetSsl() {
    if( is_ssl() ){
        $ssl = 'https://';
    }
    else {
        $ssl = 'http://';
    }
    return $ssl;
}
function appGetDomain() {
    return $_SERVER['HTTP_HOST'];
}
function appGetUrl() {
    $result = '';
    $default_port = 80;
    if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on')) {
    
        $result .= 'https://';
        $default_port = 443;
    } 
    else {
    $result .= 'https://';
    }
    $result .= $_SERVER['SERVER_NAME'];
    if ($_SERVER['SERVER_PORT'] != $default_port) {
        $result .= ':'.$_SERVER['SERVER_PORT'];
    }
    $result .= $_SERVER['REQUEST_URI'];

    return $result;
}
function is_dev_server() {
    $dev_zone = 'loc';
    $dev_zone_len = - iconv_strlen($dev_zone);

    $db_setting_public = [
        'host' => 'localhost',
        'dbname' => 'cc38255_root',
        'user' => 'cc38255_root',
        'password' => 'asd486982asd',
    ];
    $db_setting_dev = [
        'host' => 'localhost',
        'dbname' => 'cc38255_root',
        'user' => 'root',
        'password' => '',
    ];

    $domain = appGetDomain();
    $is_dev = iconv_substr($domain, $dev_zone_len);

    if ($is_dev == $dev_zone) {
        return $db_setting_dev;
    } else return $db_setting_public;
}

$config['db'] = is_dev_server();
$config['ssl'] = appGetSsl();
$config['domain'] = appGetDomain();
$config['vkapp'] = [
    'app_id' => '6665924',
    'secret_key' => 'KgMwz5PZzF4f27nZGoUM',
];
?>