<?php
$lastInsertId = 0;

if (!$_SESSION['db_all_request']) $_SESSION['db_all_request'] = 0;
if ($_SESSION['db_all_request'] > 1000) $_SESSION['db_all_request'] = 0;
function dbLogRequest($query, $var) {
    global $private;
    $logged = false;
    if ($logged) {
        $output = 'QUERY: '.$query.PHP_EOL.'DATA: '.json_encode($var).PHP_EOL.'---------'.PHP_EOL;
        $log = fopen($private.'/db_log.txt', 'a+');
        fwrite($log, $output);
        fclose($log);
    }
}

function dbFetchAll($result) { 	
   	return $result = $result->fetchAll(PDO::FETCH_ASSOC);
}
function dbFetchOne($result) {	
   	return $result = $result->fetch();
}
function dbGetAll($query, $var) {
    global $db;
    global $_SESSION;
    $_SESSION['db_all_request']++;
    dbLogRequest($query, $var);
    $stmt = $db->prepare($query);
    $stmt->execute($var);
    $result = dbFetchAll($stmt);
    return $result;
}
function dbGetOne($query, $var) {
    global $db;
    $result = dbGetAll($query, $var);
    $result = $result[0];
    return $result;
}
function dbAddOne($query, $var) {
    global $db;
    global $lastInsertId;
    global $_SESSION;
    $_SESSION['db_all_request']++;
    dbLogRequest($query, $var);
    $db->prepare($query)->execute($var);
    $db_lastInsertId = $db->lastInsertId();
    $lastInsertId = $db_lastInsertId;
    return $db_lastInsertId;
}

$db_connect = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'];
$db = new PDO( $db_connect, $config['db']['user'], $config['db']['password'] );
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("set names utf8");
?>